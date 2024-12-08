@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('Categories') }}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('All Categories') }}</h4>
            <div class="card-header-action">
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> {{ __('Create New') }}
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Parent Category') }}</th>
                            <th>{{ __('Show on Home') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $index => $category)
                            <!-- Display the Parent Category -->
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>
                                    @if ($category->image)
                                        <img src="{{ asset($category->image) }}" alt="Category Image" class="img-thumbnail" style="width: 100px; height: 120px;">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->parent ? $category->parent->name : 'None' }}</td>
                                <td>
                                    <label class="custom-switch mt-2">
                                        <input {{ $category->home === 1 ? 'checked' : '' }}
                                            data-id="{{ $category->id }}" data-name="home"
                                            value="1" type="checkbox" class="custom-switch-input toggle-status">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </td>
                                <td>
                                    @if ($category->status == 1)
                                        <span class="badge badge-success">{{ __('Active') }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ __('Inactive') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" data-id="{{ $category->id }}" class="btn btn-danger delete-item">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                    
                            <!-- Display Subcategories -->
                            @foreach ($category->children as $childIndex => $child)
                                <tr>
                                    <td class="text-center">—</td>
                                    <td>
                                        @if ($child->image)
                                            <img src="{{ asset($child->image) }}" alt="Subcategory Image" class="img-thumbnail" style="width: 100px; height: 120px;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </td>
                                    <td>— {{ $child->name }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <label class="custom-switch mt-2">
                                            <input {{ $child->home === 1 ? 'checked' : '' }}
                                                data-id="{{ $child->id }}" data-name="home"
                                                value="1" type="checkbox" class="custom-switch-input toggle-status">
                                            <span class="custom-switch-indicator"></span>
                                        </label>
                                    </td>
                                    <td>
                                        @if ($child->status == 1)
                                            <span class="badge badge-success">{{ __('Active') }}</span>
                                        @else
                                            <span class="badge badge-danger">{{ __('Inactive') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.category.edit', $child->id) }}" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-id="{{ $child->id }}" class="btn btn-danger delete-item">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
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
            "targets": [1, 4, 5, 6]
        }]
    });

    $('.toggle-status').change(function () {
        let id = $(this).data('id');
        let name = $(this).data('name');
        let value = $(this).is(':checked') ? 1 : 0;

        // AJAX request for toggling status
        $.ajax({
            url: '{{ route('admin.category.toggleStatus') }}',
            method: 'POST',
            data: {
                id: id,
                name: name,
                value: value,
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.status === 'success') {
                    Toast.fire({
                        icon: 'success',
                        title: response.message
                    });
                }
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

    // Delete category or subcategory
    $('.delete-item').click(function () {
        let id = $(this).data('id');
        if (confirm('{{ __("Are you sure you want to delete this category?") }}')) {
            $.ajax({
                url: '{{ route('admin.category.destroy', '') }}/' + id,
                method: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    if (response.status === 'success') {
                        location.reload();
                    } else {
                        alert(response.message);
                    }
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }
    });
</script>
@endpush
