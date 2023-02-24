@extends('layouts.post')

@section('content')
  <table>
    <tr>
      <th>Post Id</th>
      <th>onsen_name</th>
      <th>address</th>
      <th>skin_product</th>
    </tr>
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->onsen_name}}</td>
        <td>{{$post->address}}</td>
        <td>{{$post->skin_product}}</td>
      </tr>
  </table>
  <a href="/posts/{{$post->id}}/edit">Edit</a>
  
  <form action="/posts/{{$post->id}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="Delete">
  </form>
  
  <a href="/posts">Back to index</a>
@endsection