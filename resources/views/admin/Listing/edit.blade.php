@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Listings</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Listing</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.listings.update', $listing->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{ old('title', $listing->title) }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Sku</label>
                        <input name="sku" type="text" class="form-control" id="title"
                            value="{{ old('sku', $listing->sku) }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">short description</label>
                        <input name="shortdescription" type="text" class="form-control" id="title"
                            value="{{ old('shortdescription', $listing->shortdescription) }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="summernote-simple">{{ old('description', $listing->description) }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                   

                

                 

                    

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">{{ __('Price') }}</label>
                                <input name="price" type="number" class="form-control"
                                    value="{{ old('price', $listing->price) }}" step="0.01">
                                @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                       
                    </div>

                  

                    
                    <div class="row">
                       


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category_id" class="form-control select2">
                                    <option value="">None</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $listing->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                        @foreach ($category->children as $subCategory)
                                            <option value="{{ $subCategory->id }}" class="red-option"
                                                {{ $subCategory->id == $listing->category_id ? 'selected' : '' }}>
                                                -- {{ $subCategory->name }}
                                            </option>
                                            @foreach ($subCategory->children as $subSubCategory)
                                                <option value="{{ $subSubCategory->id }}"
                                                    {{ $subSubCategory->id == $listing->category_id ? 'selected' : '' }}>
                                                    ---- {{ $subSubCategory->name }}
                                                </option>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image">{{ __('admin.Image') }}</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">{{ __('admin.Choose File') }}</label>
                            <input type="file" name="images" id="image-upload">
                        </div>
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                 

                    <div class="row">
                        

                       
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="control-label">Best</div>
                                <label class="custom-switch mt-2">
                                    <input value="1" type="checkbox" name="best" class="custom-switch-input"
                                        {{ old('best', $listing->best) ? 'checked' : '' }}>
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="control-label">Rate</div>
                                <label class="custom-switch mt-2">
                                    <input value="1" type="checkbox" name="rate" class="custom-switch-input"
                                        {{ old('rate', $listing->rate) ? 'checked' : '' }}>
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="control-label">Published</div>
                                <label class="custom-switch mt-2">
                                    <input value="1" type="checkbox" name="published" class="custom-switch-input"
                                        {{ old('published', $listing->published) ? 'checked' : '' }}>
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Update Listing</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $('#state').change(function() {
    let stateId = $(this).val();

    if (stateId) {
        $.ajax({
            url: "{{ route('admin.cities.getCitiesByState') }}", // Define this route in web.php
            type: "GET",
            data: { state_id: stateId },
            success: function(cities) {
                $('#city').empty().append('<option value="">--Select City--</option>');
                $.each(cities, function(index, city) {
                    $('#city').append('<option value="' + city.id + '">' + city.name + '</option>');
                });
            },
            error: function(xhr) {
                console.error("Error fetching cities: ", xhr.statusText);
            }
        });
    } else {
        $('#city').empty().append('<option value="">--Select City--</option>');
    }
});
    </script>
    

<script>
    $(document).ready(function() {
        // Apply background image to the preview box if an image exists
        @if ($category->image)
            $('#image-preview').css({
                'background-image': 'url("{{ asset($listing->images) }}")',
                'background-size': 'cover',
                'background-position': 'center center'
            });
        @endif
    });
</script>


@endpush
