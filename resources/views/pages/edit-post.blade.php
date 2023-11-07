@extends('layout.app')
@section('content')


@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form method="POST" action="{{route('post.update',$post->id)}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Yazı başlığı</label>
      <input type="text" class="form-control" name="post_header" value={{$post->header}}  rows="1"></textarea>

      <label for="exampleInputEmail1">Yazı içeriği</label>
      <textarea class="form-control" name="post_text"  rows="5">{{$post->text}}</textarea>

      <label for="exampleInputEmail1">Kategorisi: <strong>{{$post->category->name}}</strong></label>
      <select name="category_id" class="form-control form-control-sm my-5">
        @foreach ($categories as $category)
            
        <option  value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

      </select>
      <button type="submit" class="btn btn-success m-4">Güncelle</button>
    </div>
</form>

@endsection