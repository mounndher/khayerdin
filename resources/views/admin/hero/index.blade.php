@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ __('Hero') }}</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('All Hero') }}</h4>
            <div class="card-header-action">
                <a href="{{ route('admin.hero.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> {{ __('Create new') }}
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Title</th>
                            <th>SubTitle</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hero as $index => $hero)
                            <tr>
                          
                               
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>
                                    @if ($hero->image)
                                        <img src="{{ asset($hero->image) }}" alt="hero Image"
                                            class="img-thumbnail" style="width: 100px; height: auto;">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>
                                <td>{{ $hero->title }}</td>
                                <td>{{ $hero->description }}</td>
                                <td>
                                    <a href="{{ route('admin.hero.edit', $hero->id) }}"
                                        class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('admin.hero.destroy', $hero->id) }}"
                                        class="btn btn-danger delete-item"><i class="fas fa-trash-alt"></i></a>
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
