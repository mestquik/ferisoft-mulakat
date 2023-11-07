@extends('layout.app')
@section('content')


@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Yazı başlık</th>
        <th scope="col">Kategorisi</th>
        <th scope="col">İşlemler</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($posts as $post)
         
    
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->header}}</td>
        <td>{{$post->category->name}}</td>
        <td class="d-flex gap-2"><a class="btn btn-warning" href="{{route('post.show',$post->id)}}">Düzenle</a>
            <form method="post" action="{{route('post.destroy',$post->id)}}">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Sil</button>
            </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection