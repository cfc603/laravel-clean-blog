@extends('layouts.app')

@section('header_image', '/img/home-bg.jpg')

@section('header')
<div class="site-heading">
  <h1>Clean Blog</h1>
  <span class="subheading">A Blog Theme by Start Bootstrap</span>
</div>
@endsection

@section('content')
<div class="container" id="posts">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      @foreach( $posts as $post )
        <div class="post-preview">
          <a href="{{ route('posts.show', ['post' => $post]) }}">
            <h2 class="post-title">
              {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
              {{ $post->subtitle }}
            </h3>
          </a>
          <p class="post-meta">Posted on {{ date('F d, Y', strtotime($post->created_at)) }}</p>
        </div>
        <hr>
      @endforeach
      <!-- Pager -->
      <div class="clearfix">
        @if ($posts->previousPageUrl())
          <a class="btn btn-secondary float-left" href="{{ $posts->previousPageUrl() }}#posts">Newer Posts &larr;</a>
        @endif
        @if ($posts->nextPageUrl())
          <a class="btn btn-secondary float-right" href="{{ $posts->nextPageUrl() }}#posts">Older Posts &rarr;</a>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection