@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
@if (isset($post))
  {!! Form::model($post, ['route' => ['posts.update', $post->id], 'files' => true, 'method' => 'put']) !!}
@else
  {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
@endif
  <div class="form-group floating-label-form-group controls">
    {!! Form::label('Title') !!}
    {!!
      Form::text(
        'title',
        null,
        ['required', 'class'=>'form-control', 'placeholder'=>'Title']
      )
    !!}
  </div>
  <div class="form-group floating-label-form-group controls">
    {!! Form::label('Subtitle') !!}
    {!!
      Form::text(
        'subtitle',
        null,
        ['required', 'class'=>'form-control', 'placeholder'=>'Subtitle']
      )
    !!}
  </div>
  <div class="form-group floating-label-form-group controls">
    {!! Form::label('Body') !!}
    {!!
      Form::textarea(
        'body',
        null,
        ['required', 'class'=>'form-control', 'placeholder'=>'Body']
      )
    !!}
  </div>
  @if (!isset($post))
    <div class="form-group static-label-form-group controls">
      {!! Form::label('Image') !!}
      {!!
        Form::file(
          'image',
          ['required']
        )
      !!}
    </div>
  @endif
  <div class="form-group static-label-form-group controls">
    {!! Form::label('Live') !!}
    {!!
      Form::select(
        'live',
        [true => 'Yes', false => 'No'],
        true,
        ['class'=>'form-control']
      )
    !!}
  </div>
  <br>
  <div class="form-group">
    @if (isset($post))
      {!!
        Form::submit(
          'Edit', ['class'=>'btn btn-secondary']
        )
      !!}
    @else
      {!!
        Form::submit(
          'Create', ['class'=>'btn btn-secondary']
        )
      !!}
    @endif
  </div>
{!! Form::close() !!}