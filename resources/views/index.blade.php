@extends('layout.app')
@section('content')

@foreach ($posts as $post)
    
<div class="card flex" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$post->header}}</h5>
      <p class="card-text">{{$post->text}}</p>
      <p class="card-text">Kategori: {{$post->category->name}}</p>
      <p class="card-text">{{$post->created_ate}}</p>
    </div>

  </div>
@endforeach

@endsection