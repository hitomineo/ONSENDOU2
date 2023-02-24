@extends('layouts.post')

@section('content')
  <div class="create-items">
    <div class="form">
      <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-form">
          <label for="onsen_name">温泉の名前</label>
          <input name="onsen_name" value="{{$post->name}}">
        </div>
        <div class="input-form">
          <label for="address">住所</label>
          <textarea name="address">{{$post->address}}</textarea>
        </div>
        <div class="input-form">
          <label for="skin_product">Price</label>
          <input name="skin_product" value="{{$post->skin_product}}">
        </div>
        <div class="input-form">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>
@endsection