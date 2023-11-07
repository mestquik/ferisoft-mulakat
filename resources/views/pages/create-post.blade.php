@extends('layout.app')
@section('content')



@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form method="POST" action="{{route('post.store')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Yazı başlığı</label>
      <textarea class="form-control" name="post_header"  rows="1"></textarea>

      <label for="exampleInputEmail1">Yazı içeriği</label>
      <textarea class="form-control" name="post_text"  rows="5"></textarea>
      <button class="btn btn-success my-2" type="submit">Oluştur</button>

      <label for="exampleInputEmail1">Kategorisi</label>
      <select name="category_id" class="form-control form-control-sm">
        @foreach ($categories as $category)
            
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

      </select>
    </div>
</form>
@endsection