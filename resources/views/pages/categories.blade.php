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
        <th scope="col">Kategori ismi</th>
        <th scope="col">İşlemler</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($categories as $category)
         
    
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td class="d-flex gap-2"><a class="btn btn-warning" href="{{route('category.show',$category->id)}}">Düzenle</a>
            <form method="post" action="{{route('category.destroy',$category->id)}}">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Sil</button>
            </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection