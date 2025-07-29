@extends('admin.master')

@section('body')
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Course</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Create</a></li>
            <li class="breadcrumb-item active" aria-current="page">Course</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Create Course</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label mb-1">Course Title</label>
                                <input class="form-control" name="name" placeholder="Course Name" required type="text">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label mb-1">Description</label>
                                <input class="form-control" name="description" placeholder="description" type="text">
                                
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label mb-1" for="category_id">Category</label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">--Select Category--</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label mb-1">Course Price</label>
                                <input class="form-control" name="course_price" type="number">
                                
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label mb-1">Attachment</label>
                                <input class="form-control" name="image" type="file">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="button" id="addModule" class="btn btn-primary mb-3">+ Add Module</button>
                            </div>

                            <div id="modulesWrapper">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
