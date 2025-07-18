@extends('backend.layout')

@section('content')
  <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Categories List</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                             <div class="card shadow mb-4">
    
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
        <a href="{{ route('categories.create')}}" class="btn btn-primary">Add Category</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        
                        <td>
                            <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                         
                            <form action="{{ route('categories.destroy',$category->id)}}" method="POST" class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    
                    </tr>
                   
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection