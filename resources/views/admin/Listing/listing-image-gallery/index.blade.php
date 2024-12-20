@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('admin.category.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Image</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add  Images for {{ $listingTitle->title }} </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.listing-image-gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Image <code>(Multi image supported)</code></label>
                                <input type="file" class="form-control" name="images[]" multiple>
                                <input type="hidden" value="{{ request()->id }}" name="listing_id">
                                @error('images')
                                <p class="text-danger">{{ $message }}</p>
                                 @enderror
                                 @error('listing_id')
                                <p class="text-danger">{{ $message }}</p>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>All Images for {{ $listingTitle->title }} </h4>

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $image)
                                <tr>
                                  <th scope="row">{{ ++$loop->index }}</th>
                                  <td>
                                    <img width="100px" src="{{ asset($image->image) }}" alt="">
                                  </td>
                                  <td>
                                    <a href="{{ route('admin.listing-image-gallery.destroy', $image->id) }}" class="btn btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                  </td>
                                </tr>
                                @endforeach

                            </tbody>
                          </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
