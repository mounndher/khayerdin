@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1> SubCategory</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All SubCategory</h4>
              <div class="card-header-action">
                <a href="{{route('admin.subcategory.create')}}" class="btn btn-success">Create New <i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                      <tr>
                          <th class="text-center">#</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($subcategories as $subcategory)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subcategory->name }}</td>
                        <td>{{ $subcategory->category->name }}</td>
                        <td>{{ $subcategory->status ? 'Active' : 'Inactive' }}</td>
                        <td>
                            
                            <a href="{{ route('admin.subcategory.edit', $subcategory->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                            <a href="{{ route('admin.subcategory.destroy', $subcategory->id) }}" class="btn btn-danger delete-item"><i class="fas fa-trash-alt"></i></a>
                            
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

