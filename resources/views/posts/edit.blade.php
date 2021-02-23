@extends('layouts.layout')

@section('header')
  <h1>Modifica il Post</h1>  
@endsection


@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route("posts.update", $post->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" name= "title" id="title" placeholder="Titolo" value="{{$post->title}}">
    </div> 
    <div class="form-group">
      <label for="subtitle">Sottotitolo</label>
      <input type="text" class="form-control" name= "subtitle" id="subtitle" placeholder="Sottotitolo" value="{{$post->subtitle}}">
    </div> 
    <div class="form-group">
      <label for="text">Testo</label>
      <textarea name="text" class="form-control" id="text" rows="6" placeholder="Corpo del post">{{$post->text}}</textarea>
    </div>
    <div class="form-group">
      <label for="author">Autore</label>
      <input type="text" class="form-control" name= "author" id="author" placeholder="Autore" value="{{$post->author}}">
    </div>
    <div class="form-group">
      <label for="img_path">Immagine</label>
      <input type="text" class="form-control" name= "img_path" id="img_path" placeholder="immagine" value="{{$post->imp_path}}">
    </div>
    <div class="form-group">
      <label for="publication_date">Data di pubblicazione</label>
      <input type="date" class="form-control" name= "publication_date" id="publication_date" placeholder="data di pubblicazione" value="{{$post->publication_date}}">
    </div>

    <div class="from-group">
      <label for="post_status">Stato del Post</label>
      <select class="custom-select" name="post_status" id="post_status">
        <option value="draft" {{($post->infoPost->post_status) == 'draft' ? 'selected' : ''}}>Draft</option>
        <option value="private" {{($post->infoPost->post_status) == 'private' ? 'selected' : ''}}>Private</option>
        <option value="public" {{($post->infoPost->post_status) == 'public' ? 'selected' : ''}}>Public</option>
      </select>
    </div>
    <div class="from-group">
      <label for="comment_status">Stato del Post</label>
      <select class="custom-select" name="comment_status" id="comment_status">
        <option value="open" {{($post->infoPost->comment_status) == 'open' ? 'selected' : ''}}>Open</option>
        <option value="closed" {{($post->infoPost->comment_status) == 'closed' ? 'selected' : ''}}>Closed</option>
        <option value="private" {{($post->infoPost->comment_status) == 'private' ? 'selected' : ''}}>Private</option>
      </select>
    </div>
    <h3 class="mt-3">Tags</h3>
    @foreach ($tags as $tag)
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{ $tag->id }}" value="{{ $tag->id }}">
        <label class="form-check-label" for="tag-{{ $tag->id }}">{{ $tag->tag_name }}</label>
      </div>
    @endforeach

    <h3 class="mt-3">img</h3>
    @foreach ($images as $image)
      <div class="form-check form-check-inline m-2 text-center">
        <input class="form-check-input" type="checkbox" name="images[]" id="image-{{ $image->id }}" value="{{ $image->id }}">
        <label class="form-check-label" for="image-{{ $image->id }}">
          <img style="width: 50px" src="{{ $image->url }}" alt="{{ $image->alt }}">
          <p>{{ $image->alt }}</p>
        </label>
      </div>
    @endforeach

    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{route("posts.index")}}" class="btn btn-secondary">Indietro</a>
  </form>  
@endsection