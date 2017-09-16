@extends('layouts.app')

@include('post._styling')

@section('content')
<div class="container" id="content">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <h3>Edit Blog Post</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      @include('post._post_form', ['post' => $post])
    </div>
  </div>
</div>
@endsection