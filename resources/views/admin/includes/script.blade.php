<!-- JQUERY JS -->
<script src="{{ asset('/') }}admin/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="{{ asset('/') }}admin/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('/') }}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="{{ asset('/') }}admin/assets/js/sticky.js"></script>


<!-- APEXCHART JS -->
<script src="{{ asset('/') }}admin/assets/js/apexcharts.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('/') }}admin/assets/plugins/select2/select2.full.min.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('/') }}admin/assets/plugins/circle-progress/circle-progress.min.js"></script>

<!-- INTERNAL DATA-TABLES JS-->
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INDEX JS -->
<script src="{{ asset('/') }}admin/assets/js/index1.js"></script>
<script src="{{ asset('/') }}admin/assets/js/index.js"></script>

<!-- Reply JS-->
<script src="{{ asset('/') }}admin/assets/js/reply.js"></script>

<!-- DATA TABLE JS-->
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jszip.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('/') }}admin/assets/js/table-data.js"></script>


<!-- COLOR THEME JS -->
<script src="{{ asset('/') }}admin/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('/') }}admin/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('/') }}admin/assets/switcher/js/switcher.js"></script>





<!-- Add Module and Content -->

<script>
    $(document).ready(function() {
        $('#addModule').on('click', function() {
            const moduleHTML = `
            <div class="card p-3 mb-4 border module-block">
                <div class="d-flex justify-content-between mb-2">
                    <h5>Module</h5>
                    <button type="button" class="btn btn-danger btn-sm removeModule">X</button>
                </div>
                <input type="hidden" class="module-id" name="" value="">
                <div class="mb-3">
                    <label>Module Title</label>
                    <input type="text" class="form-control module-title" placeholder="Module Title">
                </div>
                <div class="contentsWrapper row"></div>
                <button type="button" class="btn btn-success btn-sm addContent">+ Add Content</button>
            </div>`;
            $('#modulesWrapper').append(moduleHTML);
            updateIndexes();
        });

        $(document).on('click', '.removeModule', function(e) {
            e.preventDefault();
            const $module = $(this).closest('.module-block');
            const $moduleId = $module.find('input[name*="[id]"]');
            const moduleId = $moduleId.val();

            if (!moduleId || moduleId.trim() === '') {
                $module.remove();
            } else {
                if ($module.find('input[name*="[_destroy]"]').length === 0) {
                    const destroyName = $moduleId.attr('name').replace('[id]', '[_destroy]');
                    $module.append(`<input type="hidden" name="${destroyName}" value="1">`);
                }
                $module.hide().addClass('marked-for-deletion');
            }
            updateIndexes();
        });

        $(document).on('click', '.addContent', function(e) {
            e.preventDefault();
            const $button = $(this);
            const $moduleBlock = $button.closest('.module-block');
            const $contentsWrapper = $moduleBlock.find('.contentsWrapper');

            const contentHTML = `
            <div class="card p-3 mb-3 content-block border">
                <div class="d-flex justify-content-between mb-2">
                    <strong>Content</strong>
                    <button type="button" class="btn btn-danger btn-sm removeContent">X</button>
                </div>
                <input type="hidden" class="content-id" name="" value="">
                <div class="mb-2">
                    <label>Content Title</label>
                    <input type="text" class="form-control content-title" placeholder="Content Title">
                </div>
                <div class="mb-2">
                    <label>Description</label>
                    <textarea class="form-control content-description" placeholder="Description"></textarea>
                </div>
                <div class="mb-2">
                    <label>Remarks</label>
                    <input type="text" class="form-control content-remarks" placeholder="Remarks">
                </div>
            </div>`;

            $contentsWrapper.append(contentHTML);
            updateIndexes();
        });

        // Remove content
        $(document).on('click', '.removeContent', function(e) {
            e.preventDefault();
            const $button = $(this);
            const $contentBlock = $button.closest('.content-block');
            const $contentId = $contentBlock.find('input[name*="[id]"]');
            const contentId = $contentId.val();

            if (!contentId || contentId.trim() === '') {
                $contentBlock.remove();
            } else {
                if ($contentBlock.find('input[name*="[_destroy]"]').length === 0) {
                    const destroyName = $contentId.attr('name').replace('[id]', '[_destroy]');
                    $contentBlock.append(`<input type="hidden" name="${destroyName}" value="1">`);
                }
                $contentBlock.hide().addClass('marked-for-deletion');
            }
            updateIndexes();
        });

        
        function updateIndexes() {
            let moduleIndex = 0;

            $('#modulesWrapper .module-block').each(function() {
                const $module = $(this);

                if ($module.hasClass('marked-for-deletion') || $module.is(':hidden')) {
                    return true;
                }

                $module.find('h5').text(`Module ${moduleIndex + 1}`);

                const $moduleTitle = $module.find(
                    '.module-title, input[name*="[title]"]:not([name*="contents"])');
                const $moduleId = $module.find(
                    '.module-id, input[name*="[id]"]:not([name*="contents"])');

                $moduleTitle.attr('name', `modules[${moduleIndex}][title]`);
                $moduleId.attr('name', `modules[${moduleIndex}][id]`);

                const $moduleDestroy = $module.find(
                'input[name*="[_destroy]"]:not([name*="contents"])');
                if ($moduleDestroy.length) {
                    $moduleDestroy.attr('name', `modules[${moduleIndex}][_destroy]`);
                }

                let contentIndex = 0;
                $module.find('.content-block').each(function() {
                    const $contentBlock = $(this);

                    if ($contentBlock.hasClass('marked-for-deletion') || $contentBlock.is(
                            ':hidden')) {
                        return true;
                    }

                    $contentBlock.find('strong').text(`Content ${contentIndex + 1}`);

                    const $contentTitle = $contentBlock.find(
                        '.content-title, input[name*="[title]"]');
                    const $contentDescription = $contentBlock.find(
                        '.content-description, textarea[name*="[description]"]');
                    const $contentRemarks = $contentBlock.find(
                        '.content-remarks, input[name*="[remarks]"]');
                    const $contentId = $contentBlock.find(
                        '.content-id, input[name*="contents"][name*="[id]"]');

                    $contentTitle.attr('name',
                        `modules[${moduleIndex}][contents][${contentIndex}][title]`);
                    $contentDescription.attr('name',
                        `modules[${moduleIndex}][contents][${contentIndex}][description]`);
                    $contentRemarks.attr('name',
                        `modules[${moduleIndex}][contents][${contentIndex}][remarks]`);
                    $contentId.attr('name',
                        `modules[${moduleIndex}][contents][${contentIndex}][id]`);

                    const $contentDestroy = $contentBlock.find(
                        'input[name*="contents"][name*="[_destroy]"]');
                    if ($contentDestroy.length) {
                        $contentDestroy.attr('name',
                            `modules[${moduleIndex}][contents][${contentIndex}][_destroy]`);
                    }

                    contentIndex++;
                });

                moduleIndex++;
            });

            console.log('Indexes updated. Active modules:', moduleIndex);
        }

        function initializeExistingContent() {
            $('#modulesWrapper .module-block').each(function() {
                const $module = $(this);

                $module.find('input[name*="[title]"]:not([name*="contents"])').addClass('module-title');
                $module.find('input[name*="[id]"]:not([name*="contents"])').addClass('module-id');

                $module.find('.content-block').each(function() {
                    const $content = $(this);
                    $content.find('input[name*="[title]"]').addClass('content-title');
                    $content.find('textarea[name*="[description]"]').addClass(
                        'content-description');
                    $content.find('input[name*="[remarks]"]').addClass('content-remarks');
                    $content.find('input[name*="contents"][name*="[id]"]').addClass(
                        'content-id');
                });
            });

            updateIndexes();
        }

        initializeExistingContent();

        window.debugModules = function() {
            console.log('=== MODULE DEBUG ===');
            $('#modulesWrapper .module-block').each(function(i) {
                const $module = $(this);
                console.log(`Module ${i}:`, {
                    hidden: $module.is(':hidden'),
                    marked: $module.hasClass('marked-for-deletion'),
                    title: $module.find(
                            '.module-title, input[name*="[title]"]:not([name*="contents"])')
                        .attr('name'),
                    id: $module.find(
                        '.module-id, input[name*="[id]"]:not([name*="contents"])').attr(
                        'name')
                });

                $module.find('.content-block').each(function(j) {
                    const $content = $(this);
                    console.log(`  Content ${j}:`, {
                        hidden: $content.is(':hidden'),
                        marked: $content.hasClass('marked-for-deletion'),
                        title: $content.find(
                            '.content-title, input[name*="[title]"]').attr(
                            'name')
                    });
                });
            });
        };
    });
</script>


<!-- Add Module and Content -->
