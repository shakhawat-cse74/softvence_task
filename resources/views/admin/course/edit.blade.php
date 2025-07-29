@extends('admin.master')

@section('body')
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Course</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Edit</a></li>
            <li class="breadcrumb-item active" aria-current="page">Course</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Edit Course</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('course.update', ['id' => $course->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Course Title</label>
                                <input class="form-control" name="name" value="{{ $course->name }}" required type="text">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" value="{{ $course->description }}" type="text">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label>Category</label>
                            <select class="form-control" name="category_id">
                                <option value="">--Select Category--</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $course->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Course Price</label>
                                <input class="form-control" name="course_price" value="{{ $course->course_price }}" type="number">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Attachment</label>
                                <input class="form-control" name="image" type="file" accept="image/*">
                                @if($course->image)
                                    <div class="mt-2">
                                        <img src="{{ asset($course->image) }}" width="100" alt="Current Image">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="button" id="addModule" class="btn btn-primary mb-3">+ Add Module</button>
                            </div>

                            <div id="modulesWrapper">
                                @foreach($course->modules as $moduleIndex => $module)
                                    <div class="card p-3 mb-4 border module-block">
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5>Module {{ $moduleIndex + 1 }}</h5>
                                            <button type="button" class="btn btn-danger btn-sm removeModule">X</button>
                                        </div>

                                        <input type="hidden" name="modules[{{ $moduleIndex + 1 }}][id]" value="{{ $module->id }}">

                                        <div class="mb-3">
                                            <label>Module Title</label>
                                            <input type="text" name="modules[{{ $moduleIndex + 1 }}][title]" value="{{ $module->title }}" class="form-control">
                                        </div>

                                        <div class="contentsWrapper row">
                                            @foreach($module->contents as $contentIndex => $content)
                                                <div class="card p-3 mb-3 content-block border">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <strong>Content {{ $contentIndex + 1 }}</strong>
                                                        <button type="button" class="btn btn-danger btn-sm removeContent">X</button>
                                                    </div>

                                                    <input type="hidden" name="modules[{{ $moduleIndex + 1 }}][contents][{{ $contentIndex }}][id]" value="{{ $content->id }}">

                                                    <div class="mb-2">
                                                        <label>Content Title</label>
                                                        <input type="text" name="modules[{{ $moduleIndex + 1 }}][contents][{{ $contentIndex }}][title]" value="{{ $content->title }}" class="form-control">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label>Description</label>
                                                        <textarea name="modules[{{ $moduleIndex + 1 }}][contents][{{ $contentIndex }}][description]" class="form-control">{{ $content->description }}</textarea>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label>Remarks</label>
                                                        <input type="text" name="modules[{{ $moduleIndex + 1 }}][contents][{{ $contentIndex }}][remarks]" value="{{ $content->remarks }}" class="form-control">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <button type="button" class="btn btn-success btn-sm addContent">+ Add Content</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Update Course</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


