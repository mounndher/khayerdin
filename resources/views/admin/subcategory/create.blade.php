@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>SubCategory</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create SubCategory</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.subcategory.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
            
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Subcategory</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" name="name" class="form-control">
                </div>
              </div>

            

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                <div class="col-sm-12 col-md-7">
                <select name="category_id" class="form-control selectric" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                <div class="col-sm-12 col-md-7">
                    <label class="custom-switch mt-2">
                        <input value="1" type="checkbox" name="status" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Subcategory</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
