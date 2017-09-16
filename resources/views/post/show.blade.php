@extends('layouts.app')

@section('header_image')
/storage/{{ $post->image }}
@endsection

@section('header')
<div class="post-heading">
  <h1>{{ $post->title }}</h1>
  <h2 class="subheading">{{ $post->subtitle }}</h2>
  <span class="meta">Posted on {{ date('F d, Y', strtotime($post->created_at)) }}</span>
</div>
@endsection

@section('content')
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        {{ $post->body }}
      </div>
    </div>
  </div>
</article>
@endsection