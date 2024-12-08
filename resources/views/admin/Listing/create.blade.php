@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Listings</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Create New Listings</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.listings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  

                <div class="form-group">
                    <label for="">Ttile</label>
                    <input name="title" type="text" class="form-control" id="name" >
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">short description</label>
                    <input name="shortdescription" type="text" class="form-control" id="name" >
                    @error('shortdescription')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Sku</label>
                    <input name="sku" type="text" class="form-control" id="name" >
                    @error('sku')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="summernote-simple" ></textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
               
                
               
             
                
              


                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">{{ __('Price') }}</label>
                            <input name="price" type="number" class="form-control" id="price" value="{{ old('price', 0) }}" step="0.01">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                
                </div>
          

             
                
                 

                <div class="row">
                   
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state">Category <span class="text-danger">*</span></label>
                           
                            
                                <select name="category_id" class="form-control select2">
                                    <option value="">None</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        
                                        @foreach ($category->children as $subCategory)
                                            <option value="{{ $subCategory->id }}"  class="red-option">-- {{ $subCategory->name }}</option>
                        
                                            @foreach ($subCategory->children as $subSubCategory)
                                                <option value="{{ $subSubCategory->id }}">---- {{ $subSubCategory->name }}</option>
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
                    <label for="">{{ __('admin.Image') }}</label>
                    <div id="image-preview" class="image-preview">
                        <label for="images" id="image-label">{{ __('admin.Choose File') }}</label>
                        <input type="file" name="images" id="image-upload">
                    </div>
                    @error('images')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

               

                

              

             

                

                
                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                            <div class="control-label">rate</div>
                            <label class="custom-switch mt-2">
                                <input value="1" type="checkbox" name="rate"
                                    class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <div class="control-label">best</div>
                            <label class="custom-switch mt-2">
                                <input value="1" type="checkbox" name="best"
                                    class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </div>

                    </div>
                   

                 

                    

                    <div class="col-md-3">

                        <div class="form-group">
                            <div class="control-label">Published</div>
                            <label class="custom-switch mt-2">
                                <input value="1" type="checkbox" name="published"
                                    class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </div>

                    </div>
                   

                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#state').change(function () {
    let stateId = $(this).val(); // Get selected state ID

    if (stateId) {
        $.ajax({
            url: "{{ route('admin.cities.getCitiesByState') }}",
            type: "GET",
            data: { state_id: stateId },
            success: function (cities) {
                $('#city').empty();
                $('#city').append('<option value="">--Select City--</option>');

                $.each(cities, function (index, city) {
                    $('#city').append('<option value="' + city.id + '">' + city.name + '</option>');
                });
            },
            error: function (xhr) {
                console.error("Error fetching cities: ", xhr.status, xhr.statusText);
            }
        });
    } else {
        $('#city').empty();
        $('#city').append('<option value="">--Select City--</option>');
    }
});

    });
</script>
@endpush
