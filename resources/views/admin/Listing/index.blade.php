@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('les produits') }}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('Tous les produits') }}</h4>
            <div class="card-header-action">
                <a href="{{ route('admin.listings.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> {{ __('Create new') }}
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Image') }}</th>
                           
                            <th>{{ __('Price') }}</th>
                            <th>{{ __('Published') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listings as $index => $listing)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $listing->title }}</td>
                                <td>
                                    @if (!empty($listing->images) && $listing->images !== '/' && $listing->images !== 'NULL')
                                        <img src="{{ asset($listing->images) }}" alt="Listing Image" style="width:100px; height:100px;">
                                    @else
                                        No Image Available
                                    @endif
                                </td>
                                
                                
                                <td>${{ number_format($listing->price, 2) }}</td>
                                <td>
                                    @if ($listing->published)
                                        <span class="badge badge-success">{{ __('Yes') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ __('No') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.listings.edit', $listing->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.listings.destroy', $listing->id) }}" class="btn btn-danger delete-item">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a href="{{ route('admin.listings-copy', $listing->id) }}"
                                        class="btn btn-primary"><i class="fas fa-copy"></i></i></a>
                                        <a href="{{ route('admin.listing-image-gallery.index', ['id' => $listing->id]) }}" 
                                            class="btn btn-primary">
                                             <i class="fas fa-cog"></i>
                                         </a>
                                         
                                        
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $("#table-1").dataTable({
        "columnDefs": [{
            "sortable": false,
            "targets": [2, 3]
        }]
    });
</script>
@endpush
