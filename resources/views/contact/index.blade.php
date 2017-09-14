@extends('layouts.app')

@section('title', 'Contact - ')

@section('header_image', 'img/contact-bg.jpg')

@section('header')
<div class="page-heading">
  <h1>Contact Me</h1>
  <span class="subheading">Have questions? I have answers (maybe).</span>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      {!! Form::open(['route' => 'submit_contact']) !!}
        <div class="form-group floating-label-form-group controls">
          {!! Form::label('Name') !!}
          {!!
            Form::text(
              'name',
              null,
              ['required', 'class'=>'form-control', 'placeholder'=>'Name']
            )
          !!}
        </div>
        <div class="form-group floating-label-form-group controls">
          {!! Form::label('Email Address') !!}
          {!!
            Form::email(
              'email',
              null,
              ['required', 'class'=>'form-control', 'placeholder'=>'Email']
            )
          !!}
        </div>
        <div class="form-group floating-label-form-group controls">
          {!! Form::label('Message') !!}
          {!!
            Form::textarea(
              'message',
              null,
              [
                'required',
                'class'=>'form-control',
                'placeholder'=>'Message',
                'rows'=>'5'
              ]
            )
          !!}
        </div>
        <br>
        <div class="form-group">
          {!!
            Form::submit(
              'Send',
              ['id'=>'sendMessageButton', 'class'=>'btn btn-secondary']
            )
          !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection