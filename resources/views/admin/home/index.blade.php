@extends('admin.master')
@section('body')
  <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div>
                                    <h1 class="page-title">Dashboard</h1>
                                </div>
                                <div class="ms-auto pageheader-btn">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            
                            <!-- ROW-2 -->
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xl-4 col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12 col-md-6 col-sm-12">
                                            <div class="card">
                                                <div class="card-body pb-2">
                                                    <div class="title-head mb-3">
                                                        <h3 class="mb-5 card-title">Revenue By channel</h3>
                                                        <div class="storage-percent">
                                                            <div class="progress fileprogress h-auto ps-0 shadow1">
                                                                <span class="progress-bar progress-bar-xs wd-15p received" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                                                                <span class="progress-bar progress-bar-xs wd-15p download" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                                                                <span class="progress-bar progress-bar-xs wd-15p shared" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                                                                <span class="progress-bar progress-bar-xs wd-15p my-images" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
                                                            </div>
                                                            <div class="remaining-storage">
                                                                <div class="text-muted fs-13 mb-1 mt-3">Total Revenue Earned</div>
                                                                <div class="fw-semibold fs-14 mb-1 mt-3">$345,3467.72</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-main mt-5">
                                                        <ul class="task-list1 row mx-auto">
                                                            <li class="col-xl-6">
                                                                <span class="mb-0 fs-13 me-1"><i class="task-icon1 bg-primary me-3"></i>Direct</span>
                                                                <span class="text-success fw-semibold fs-12">
                                                                    <span class="mx-1"><i class="fa fa-caret-up"></i></span>
                                                                    <span class="">(42.34%)</span>
                                                                </span>
                                                            </li>
                                                            <li class="col-xl-6">
                                                                <span class="mb-0 fs-13 me-1"><i class="task-icon1 bg-secondary"></i>Referral</span>
                                                                <span class="text-danger fw-semibold fs-12">
                                                                    <span class="mx-1"><i class="fa fa-caret-down"></i></span>
                                                                    <span class="">(13%)</span>
                                                                </span>
                                                            </li>
                                                            <li class="col-xl-6">
                                                                <span class="mb-0 fs-13 me-1"><i class="task-icon1 bg-custom-yellow"></i>Social</span>
                                                                <span class="text-success fw-semibold fs-12">
                                                                    <span class="mx-1"><i class="fa fa-caret-up"></i></span>
                                                                    <span class="">(62%)</span>
                                                                </span>
                                                            </li>
                                                            <li class="col-xl-6 mb-xl-0">
                                                                <span class="mb-0 fs-13 me-1"><i class="task-icon1 bg-teritary"></i>Organic Search</span>
                                                                <span class="text-success fw-semibold fs-12">
                                                                    <span class="mx-1"><i class="fa fa-caret-up"></i></span>
                                                                    <span class="">(22.46%)</span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                            <div class="card overflow-hidden">
                                                <div class="card-header border-bottom">
                                                    <h4 class="card-title fw-semibold">Latest Transactions</h4>
                                                    <a href="#" class="ms-auto">View All</a>
                                                </div>
                                                <div class="card-body p-0 customers mt-1">
                                                    <div class="list-group py-1">
                                                        <a href="javascript:void(0);" class="border-0">
                                                            <div class="list-group-item border-0">
                                                                <div class="media mt-0 align-items-center">
                                                                    <div class="transaction-icon"><i class="fe fe-chevrons-right"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="mt-0">
                                                                                <h5 class="mb-1 fs-13 fw-normal text-dark">To Bel Bcron Bank<span class="fs-13 fw-semibold ms-1">Savings Section</span></h5>
                                                                                <p class="mb-0 fs-12 text-muted">Transfer 4.53pm</p>
                                                                            </div>
                                                                            <span class="ms-auto fs-13">
                                                                                <span class="float-end text-dark">-$2,543</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);" class="border-0">
                                                            <div class="list-group-item border-0">
                                                                <div class="media mt-0 align-items-center">
                                                                    <div class="transaction-icon">
                                                                        <i class="fe fe-briefcase"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="mt-0">
                                                                                <h5 class="mb-1 fs-13 fw-normal text-dark">Payment For <span class="fs-13 fw-semibold ms-1">Day Job</span></h5>
                                                                                <p class="mb-0 fs-12 text-muted">Received 2.45pm</p>
                                                                            </div>
                                                                            <span class="ms-auto fs-13">
                                                                                <span class="float-end text-dark">+$32,543</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);" class="border-0">
                                                            <div class="list-group-item border-0">
                                                                <div class="media mt-0 align-items-center">
                                                                    <div class="transaction-icon"><i class="fe fe-dollar-sign"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="mt-0">
                                                                                <h5 class="mb-1 fs-13 fw-normal text-dark">Bought items from<span class="fs-13 fw-semibold ms-1">Ecommerce site</span></h5>
                                                                                <p class="mb-0 fs-12 text-muted">Payment 8.00am</p>
                                                                            </div>
                                                                            <span class="ms-auto fs-13">
                                                                                <span class="float-end text-dark">-$256</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0);" class="border-0">
                                                            <div class="list-group-item border-0">
                                                                <div class="media mt-0 align-items-center">
                                                                    <div class="transaction-icon"><i class="fe fe-file-text"></i>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="mt-0">
                                                                                <h5 class="mb-1 fs-13 fw-normal text-dark">Paid Monthly Expenses<span class="fs-13 fw-semibold ms-1">Bills & Loans</span></h5>
                                                                                <p class="mb-0 fs-12 text-muted">Payment 6.43am</p>
                                                                            </div>
                                                                            <span class="ms-auto fs-13">
                                                                                <span class="float-end text-dark">-$1,298</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                                    <div class="card">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Sales</h3>
                                            <div class="ms-auto">
                                                <div class="btn-group p-0 ms-auto">
                                                    <button class="btn btn-primary-light btn-sm disabled" type="button">2021</button>
                                                    <button class="btn btn-primary-light btn-sm" type="button">2022</button>
                                                    <button class="btn btn-primary-light btn-sm disabled" type="button">2023</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="sales-stats d-flex">
                                                <div>
                                                    <div class="text-muted fs-13">Total Sales
                                                        <span class="p-2 br-5 text-success"><i class="fe fe-arrow-up-right"></i></span>
                                                    </div>
                                                    <h3 class="fw-semibold">$582,857.97</h3>
                                                    <div><span class="text-success fs-13 me-1">32%</span>Increase Since last Year</div>
                                                </div>
                                            </div>
                                            <div id="chartD"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-2 END -->

                            <!-- ROW-3 -->
                            <div class="row">
                                <div class="col-xl-4 col-md-12">
                                    <div class="card">
                                        <div class="card-header border-bottom">
                                            <h4 class="card-title fw-semibold">Daily Activity</h4>
                                        </div>
                                        <div class="card-body pb-0">
                                            <ul class="task-list">
                                                <li>
                                                    <i class="task-icon bg-primary"></i>
                                                    <p class="fw-semibold mb-1 fs-13">New Products Introduced<span class="text-muted fs-12 ms-2 ms-auto float-end">1:43 pm</span></p>
                                                    <p class="text-muted fs-12">Lorem ipsum dolor sit.<a href="#"
                                                            class="fw-semibold ms-1">Product Light Launched</a></p>
                                                </li>
                                                <li>
                                                    <i class="task-icon bg-secondary"></i>
                                                    <p class="fw-semibold mb-1 fs-13">Hermoine Replied<span class="text-muted fs-12 ms-2 float-end">6:12 am</span></p>
                                                    <p class="text-muted fs-12">Hermoine replied to your post on<a href="#"
                                                            class="fw-semibold ms-1"> Detailed Blog</a></p>
                                                </li>
                                                <li>
                                                    <i class="task-icon bg-info"></i>
                                                    <p class="fw-semibold mb-1 fs-13">New Request<span class="text-muted fs-12 ms-2 float-end">11:22 am</span></p>
                                                    <p class="text-muted fs-12">Corner sent you a request<a href="#"
                                                            class="fw-semibold ms-1"> Facebook</a></p>
                                                </li>
                                                <li>
                                                    <i class="task-icon bg-warning"></i>
                                                    <p class="fw-semibold mb-1 fs-13">Task Due<span class="text-muted fs-12 ms-2 float-end">4:32 pm</span></p>
                                                    <p class="text-muted mb-0 fs-12">Task has to be completed <a href="#"
                                                            class="fw-semibold ms-1"> New Project</a></p>
                                                </li>
                                                <li class="mb-2">
                                                    <i class="task-icon bg-primary"></i>
                                                    <p class="fw-semibold mb-1 fs-13">Maggice Liked<span class="text-muted fs-12 ms-2 float-end">5 mins ago</span></p>
                                                    <p class="text-muted mb-0 fs-12">Maggice bruce liked your article <a href="#"
                                                            class="fw-semibold ms-1"> Article on Projects</a></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-header border-bottom">
                                            <div>
                                                <h3 class="card-title">Timeline</h3>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="tl-container">
                                                <div class="tl-blog primary">
                                                    <div class="tl-img rounded-circle bg-primary-transparent">
                                                        <i class="fe fe-user-plus text-primary text-17"></i>
                                                    </div>
                                                    <div class="tl-details d-flex">
                                                        <p>
                                                            <span class="tl-title-main"> Mr White </span>  Started following you
                                                            <span class="d-flex text-muted fs-12">10 Jan 2022</span>
                                                        </p>
                                                        <p class="ms-auto text-13">
                                                            <span class="badge bg-primary text-white">1m</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tl-blog secondary">
                                                    <div class="tl-img rounded-circle bg-secondary-transparent">
                                                        <i class="fe fe-message-circle text-secondary text-17"></i>
                                                    </div>
                                                    <div class="tl-details d-flex">
                                                        <p>
                                                            <span class="tl-title-main"> Caroline </span>  1 Commented applied
                                                            <span class="d-flex text-muted fs-12">09 Jan 2022</span>
                                                        </p>
                                                        <p class="ms-auto text-13">
                                                            <span class="badge bg-secondary text-white">2m</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tl-blog teritary">
                                                    <div class="tl-img rounded-circle bg-info-transparent">
                                                        <i class="fe fe-clipboard text-info text-17"></i>
                                                    </div>
                                                    <div class="tl-details d-flex">
                                                        <p>
                                                            <span class="tl-title-main"> Juliette </span>  posted a new article
                                                            <span class="d-flex text-muted fs-12">07 Jan 2022</span>
                                                        </p>
                                                        <p class="ms-auto text-13">
                                                            <span class="badge bg-info text-white">3m</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tl-blog custom-yellow">
                                                    <div class="tl-img rounded-circle bg-warning-transparent">
                                                        <i class="fe fe-thumbs-up text-warning text-17"></i>
                                                    </div>
                                                    <div class="tl-details d-flex">
                                                        <p>
                                                            <span class="tl-title-main"> Akimov </span>  liked your site
                                                            <span class="d-flex text-muted fs-12">07 Dec 2022</span>
                                                        </p>
                                                        <p class="ms-auto text-13">
                                                            <span class="badge bg-warning text-white">4m</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tl-blog primary">
                                                    <div class="tl-img rounded-circle bg-primary-transparent">
                                                        <i class="fe fe-book text-primary text-17"></i>
                                                    </div>
                                                    <div class="tl-details d-flex">
                                                        <p class="mb-0">
                                                            <span class="tl-title-main"> Emilie </span>sent you a feedback
                                                            <span class="d-flex text-muted fs-12">06 Jan 2022</span>
                                                        </p>
                                                        <p class="ms-auto text-13 mb-0">
                                                            <span class="badge bg-orange text-white">5m</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-header title-submenu border-bottom">
                                            <h3 class="card-title">To-Do List</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="todo-container">
                                                <div class="todo-blog primary">
                                                    <label class="todo-img">
                                                        <input type="checkbox" class="todo-checkbox" name="todo-checkbox" checked="checked">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="todo-details d-flex">
                                                        <p class="mb-0">Design a UI Dashboard for client
                                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                                        </p>
                                                        <div class="ms-auto text-13 fw-semibold">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-blog secondary">
                                                    <label class="todo-img">
                                                        <input type="checkbox" class="todo-checkbox" name="todo-checkbox" checked="checked">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="todo-details d-flex">
                                                        <p class="mb-0">Design a UI Dashboard for client
                                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                                        </p>
                                                        <div class="ms-auto text-13 fw-semibold">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-blog teritary">
                                                    <label class="todo-img">
                                                        <input type="checkbox" class="todo-checkbox" name="todo-checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="todo-details d-flex">
                                                        <p class="mb-0">Design a UI Dashboard for client
                                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                                        </p>
                                                        <div class="ms-auto text-13 fw-semibold">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-blog custom-yellow">
                                                    <label class="todo-img">
                                                        <input type="checkbox" class="todo-checkbox" name="todo-checkbox" checked="checked">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="todo-details d-flex">
                                                        <p class="mb-0">Design a UI Dashboard for client
                                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                                        </p>
                                                        <div class="ms-auto text-13 fw-semibold">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="todo-blog primary">
                                                    <label class="todo-img">
                                                        <input type="checkbox" class="todo-checkbox" name="todo-checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="todo-details d-flex">
                                                        <p class="mb-0">Design a UI Dashboard for client
                                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                                        </p>
                                                        <div class="ms-auto text-13 fw-semibold">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-3 END -->
@endsection