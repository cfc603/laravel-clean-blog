@extends('layouts.app')

@include('layouts._no_header_img_styling')

@section('content')
<div class="container" id="content">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <h3>Create Blog Post</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      @include('post._post_form')
    </div>
  </div>
</div>
@endsection