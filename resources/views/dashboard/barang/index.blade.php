@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0">Items</h1>
            </div><!-- /.col -->
        </div><!-- /.container-fluid -->
        <!-- /.card-header -->
        <div class="card-body">
          @if (session()->has('sukses'))
            <div class="alert alert-success" role="alert">
              {{ session('sukses') }}
            </div>
          @endif
          <a href="/dashboard/barang/create" class="btn btn-primary mb-3">Add Items</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Items</th>
              <th>Categories</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($barang as $barang)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->article }}</td>
                <td>{{ $barang->category->nama }}</td>
                <td>
                  <a href="/dashboard/barang/{{ $barang->slug }}" class="btn btn-info"><i class="far fa-eye nav-icon"></i></a>
                  <a href="/dashboard/barang/{{ $barang->slug }}/edit" class="btn btn-warning"><i class="far fa-edit nav-icon"></i></a>
                  <form action="/dashboard/barang/{{ $barang->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="nav-icon fas fa-trash-alt"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div><!-- /.content-header -->
@endsection
