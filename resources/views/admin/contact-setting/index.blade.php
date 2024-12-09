@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>all Contact</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Contact</h4>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th>subject</th>
                                <th>Message</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactTitle as $index => $service)
                                <tr>
                              
                                   
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->email }}</td>
                                    <td>{{ $service->number }}</td>
                                    <td>{{ $service->subject }}</td>
                                    <td>{{ $service->message }}</td>
                                    
                                    
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
