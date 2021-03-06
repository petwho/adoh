@extends('layouts.admin')
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <h3>Edit post</h3>
      {{ Form::open(array(
            'url' => '/posts/'.$post->id,
            'method' => 'put',
            'role' => 'form')) }}

        @if (count($errors))
          <div class='alert alert-warning alert-dismissible'>
            <button type="button" class="close" data-dismiss="alert">
              <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span></button>
            @foreach($errors->all('<p>:message</p>') as $message)
              {{ $message }}
            @endforeach
          </div>
        @endif

        @if (Session::get('message'))
          <div class='alert alert-success alert-dismissible'>
            <button type="button" class="close" data-dismiss="alert">
              <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span></button>
            {{ Session::get('message') }}
          </div>
        @endif

        <!-- Left side -->
        <div class="row">
          <div class="col-xs-12">
            <div class='form-group'>
              {{ Form::label('title', 'Title:') }}
              {{ Form::text('title', $post->title, array(
                    'class' => 'form-control',
                    'id' => 'title',
                    'required' => true,
                    'placeholder' => 'Sample post'))}}
            </div>
            <div class='form-group'>
              {{ Form::label('summary', 'Summary:') }}
              {{ Form::textarea('summary', $post->summary, array(
                    'class' => 'form-control',
                    'id' => 'summary',
                    'rows' => 5,
                    'required' => true,
                    'placeholder' => 'Sample summary'))}}
            </div>
            <div class='form-group'>
              {{ Form::label('image', 'Image:') }}
              {{ Form::text('image', $post->image, array(
                    'class' => 'form-control',
                    'id' => 'image',
                    'required' => true,
                    'placeholder' => 'https://www.google.com/images/srpr/logo11w.png'))}}
            </div>
            <div class="form-group">
              {{ Form::label('gallery_id', 'Gallery:') }}
              {{ Form::select('gallery_id', $options, $post->gallery_id, array(
              'class' => 'form-control',
              'id' => 'type',
              'required' => true,
              'placeholder' => ''))}}
            </div>
            <!-- Content -->
            <div class='form-group'>
              {{ Form::label('content', 'Content:') }}
              {{ Form::textarea('content', $post->content, array(
                    'class' => 'form-control',
                    'id' => 'content',
                    'rows' => 20,
                    'placeholder' => 'Sample content'))}}
            </div>
          </div>
          <!-- End of Content -->
        </div>
        <button class='btn btn-primary' type="submit">Update</button>&nbsp;
        <a class='btn btn-warning' href='/posts'>Back</a>
      {{ Form::close() }}

    </div>
  </div>
  <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
  <script>tinymce.init({selector:'textarea'});</script>
@stop