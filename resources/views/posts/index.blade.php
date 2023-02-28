@extends('layouts.post')

@section('content')
  <table>
    <tr>
      <th>onsen_name</th>
      <th>address</th>
      <th>skin_product</th>
      <td></td>
    </tr>
    <a href="{{ route('login') }}" class="ml-4 font-semibold">
    
    @foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->onsen_name}}</td>
        <td>{{$post->address}}</td>
        <td>{{$post->parking}}</td>
        <td>{{$post->payment}}</td>
        <td>{{$post->toiletry}}</td>
        <td>{{$post->towel_stock}}</td>
        <td>{{$post->skin_product}}</td>
        <td>{{$post->hairdryer}}</td>
        <td>{{$post->luggage}}</td>
        <td>{{$post->detail}}</td>
        <td>{{$post->image}}</td>
        <td><a href="/posts/{{$$post->id}}">Details</a></td> // showページへのリンク
      </tr>
    @endforeach
  </table>
@endsection



