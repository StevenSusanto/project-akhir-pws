@extends('dashboard.layouts.main')
@section('container')
    <div class="content-header">
        <div class="card-body">
            <article>
                <h4 class="mb-3">{{ $barang->article }}</h4><hr style="background-color:white">
                <p>{!! $barang->varians !!}</p>
                <a href="/dashboard/barang" class="btn btn-success">Back to Dashboard</a>
                <a href="/dashboard/barang/{{ $barang->slug }}/edit" class="btn btn-warning">Edit</a>
                <form action="/dashboard/barang/{{ $barang->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                </form>
            </article>
        </div>
    </div>
@endsection