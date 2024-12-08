@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('admin.category.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>{{ __('Edit Category') }}</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Edit Category') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Name Field -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Name') }}</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="name" class="form-control" value="{{ $category->name }}" placeholder="Enter category name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Image Upload -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Image') }}</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                                            <input type="file" name="image" id="image-upload" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Parent Category Dropdown -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Parent Category') }}</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="parent_id" class="form-control select2">
                                            <option value="">{{ __('None') }}</option>
                                            @foreach ($categories as $parent)
                                                <option value="{{ $parent->id }}" {{ $category->parent_id == $parent->id ? 'selected' : '' }}>
                                                    {{ $parent->name }}
                                                </option>
                                                @foreach ($parent->children as $subCategory)
                                                    <option value="{{ $subCategory->id }}" {{ $category->parent_id == $subCategory->id ? 'selected' : '' }}>
                                                        — {{ $subCategory->name }}
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                        @error('parent_id')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Status Field -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Status') }}</label>
                                    <div class="col-sm-12 col-md-7">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="status" class="custom-switch-input" {{ $category->status ? 'checked' : '' }} value="1">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">{{ __('Active') }}</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Show in Home Field -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ __('Show in Home') }}</label>
                                    <div class="col-sm-12 col-md-7">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="home" class="custom-switch-input" {{ $category->home ? 'checked' : '' }} value="1">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">{{ __('Display on Home Page') }}</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7 offset-md-3">
                                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Pre-fill image preview if image exists
            @if ($category->image)
                $('#image-preview').css({
                    'background-image': 'url("{{ asset($category->image) }}")',
                    'background-size': 'cover',
                    'background-position': 'center center'
                });
            @endif
        });
    </script>
@endpush
