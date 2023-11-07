
@extends('layout.app')
@section('content')

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form method="POST" action="{{route('category.store')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Kategori İsmi</label>
      <input type="text" class="form-control" name="category_name" aria-describedby="emailHelp" placeholder="Kategori adı giriniz">
      <button class="btn btn-success my-2" type="submit">Oluştur</button>
    </div>
</form>
@endsection