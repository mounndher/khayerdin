@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Act type') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('All Act type') }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.acttype.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> {{ __('Create new') }}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    #
                                </th>
                                <th>{{ __(' Name') }}</th>

                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Acttype as $index => $item)
                                <tr>

                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $item->name }}</td>





                                    <td>
                                        <a href="{{ route('admin.acttype.edit', $item->id) }}" class="btn btn-primary"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin.acttype.destroy', $item->id) }}"
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
                "targets": [1, 2]
            }]
        });

        
    </script>
    



@endpush
