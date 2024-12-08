@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Footer Social Link</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Social Links</h4>
              <div class="card-header-action">
                <a href="{{route('admin.footer-social.create')}}" class="btn btn-success">Create New <i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Footersociallink as $index => $link)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                
                                <td><i class="{{ $link->icon }}" style="font-size:20px"></i></td>
                                <td>{{ $link->url }}</td>
                               
                                <td>
                                    <a href="{{ route('admin.listings.edit', $link->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.listings.destroy', $link->id) }}" class="btn btn-danger delete-item">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
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

