@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Footer Help Links</h1>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Help Links</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.footer-help-links.create') }}" class="btn btn-success">Create New
                                    <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>URL</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($footerHelpLinks as $link)
                                            <tr>
                                                <td>{{ $link->id }}</td>
                                                <td>{{ $link->name }}</td>
                                                <td>{{ $link->url }}</td>
                                                <td>
                                                    <a href="{{ route('admin.footer-help-links.edit', $link->id) }}"
                                                        class="btn btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.footer-help-links.destroy', $link->id) }}"
                                                        class="btn btn-danger delete-item">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </div>
                        </div>

                    </div>
                </div>
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