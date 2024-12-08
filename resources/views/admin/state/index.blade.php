@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('State') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('All State') }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.state.create') }}" class="btn btn-primary">
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
                                
                                <th>Name</th>
                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($states as $index => $state)
                                <tr>
                              
                                   
                                    <td class="text-center">{{ $index + 1 }}</td>
                                   
                                         
                                    <td>{{ $state->name }}</td>
                                    
                                    <td>
                                        <a href="{{ route('admin.state.edit', $state->id) }}"
                                            class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin.state.destroy', $state->id) }}"
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
                "targets": [1,2]
            }]
        });
    </script>
    
@endpush
