@extends('layouts.layout')

@section('content')
<div  id="card_container">
  @foreach ($posts as $post)
      <div class="postcard">
        <img src="{{ $post->img_path }}" alt="{{ $post->title }}">
        <h3 class="text-center">{{ $post->title }}</h3>
        <h5 class="text-center">{{ $post->subtitle}} </h5>
        @foreach ($post->tags as $tag)
        <h4>{{ $tag->tag_name }}</h4>
      @endforeach
      </div>
  @endforeach
</div>
@endsection