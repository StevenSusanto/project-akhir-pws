@extends('dashboard.layouts.main')
@section('container')
    <div class="card-body">
        <div class="card card-primary">    
            <div class="card-header">
                <h3 class="card-title">Add Items</h3>
            </div>
            <form method="POST" action="/dashboard/barang">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="article">Article</label>
                    <input type="text" class="form-control @error ('article') is-invalid @enderror" id="article" name="article" placeholder="Article">
                    @error('article')
                        <div class="invalid-feedback">
                            {{ message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for='slug'>Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug Items">
                </div>
                <div class="form-group">
                    <label for='category'>Category</label>
                    <select class="custom-select rounded-0" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama }}</option> 
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="varians">Varians</label>
                    @error('varians')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <textarea id="summernote" name="varians"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>   
            </form>
        </div>
    </div>
    <script>
        const article = document.querySelector('#article')
        const slug = document.querySelector('#slug')
        article.addEventListener('change', function(){
            fetch('/dashboard/barang/checkSlug?article='+article.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        })
    </script>
@endsection