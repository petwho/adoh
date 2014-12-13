@extends('layouts.admin')
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <h3>Edit article</h3>
      {{ Form::open(array(
            'url' => '/articles/'.$article->id,
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
          <div class="col-xs-6">
            <div class='form-group'>
              {{ Form::label('title', 'Title:') }}
              {{ Form::text('title', $article->title, array(
                    'class' => 'form-control',
                    'id' => 'title',
                    'required' => true,
                    'placeholder' => 'Sample article'))}}
            </div>
            <div class='form-group'>
              {{ Form::label('subtitle', 'Sub title:') }}
              {{ Form::text('subtitle', $article->subtitle, array(
                    'class' => 'form-control',
                    'id' => 'subtitle',
                    'required' => true,
                    'placeholder' => 'Sample article'))}}
            </div>
            <div class='form-group'>
              {{ Form::label('summary', 'Summary:') }}
              {{ Form::textarea('summary', $article->summary, array(
                    'class' => 'form-control',
                    'id' => 'summary',
                    'rows' => 5,
                    'required' => true,
                    'placeholder' => 'Sample summary'))}}
            </div>
            <div class='form-group'>
              {{ Form::label('thumb', 'Thumb:') }}
              {{ Form::text('thumb', $article->thumb, array(
                    'class' => 'form-control',
                    'id' => 'thumb',
                    'required' => true,
                    'placeholder' => 'https://www.google.com/images/srpr/logo11w.png'))}}
            </div>
            <div class='form-group'>
              {{ Form::label('image', 'Image:') }}
              {{ Form::text('image', $article->image, array(
                    'class' => 'form-control',
                    'id' => 'image',
                    'required' => true,
                    'placeholder' => 'https://www.google.com/images/srpr/logo11w.png'))}}
            </div>
            <div class='form-group'>
              {{ Form::label('image', 'Carousel 1:') }}
              {{ Form::text('carousel_img1', $article->carousel_img1, array(
                    'class' => 'form-control',
                    'id' => 'image',
                    'required' => true,
                    'placeholder' => 'https://www.google.com/images/srpr/logo11w.png'))}}
            </div>
            <div class='form-group'>
              {{ Form::label('image', 'Carousel 2:') }}
              {{ Form::text('carousel_img2', $article->carousel_img2, array(
                    'class' => 'form-control',
                    'id' => 'image',
                    'required' => true,
                    'placeholder' => 'https://www.google.com/images/srpr/logo11w.png'))}}
            </div>
            <div class='form-group'>
              {{ Form::label('image', 'Carousel 3:') }}
              {{ Form::text('carousel_img3', $article->carousel_img3, array(
                    'class' => 'form-control',
                    'id' => 'image',
                    'required' => true,
                    'placeholder' => 'https://www.google.com/images/srpr/logo11w.png'))}}
            </div>
            <div class="form-group">
              {{ Form::label('gallery_id', 'Gallery:') }}
              {{ Form::select('gallery_id', $options, $article->gallery_id, array(
              'class' => 'form-control',
              'id' => 'type',
              'required' => true,
              'placeholder' => ''))}}
            </div>
          </div>
          <!-- Content -->
          <div class="col-xs-6">
            <div class='form-group'>
              {{ Form::label('content', 'Content:') }}
              {{ Form::textarea('content', $article->content, array(
                    'class' => 'form-control',
                    'id' => 'content',
                    'rows' => 20,
                    'placeholder' => 'Sample content'))}}
            </div>
          </div>
          <!-- End of Content -->
        </div>
        <button class='btn btn-primary' type="submit">Update</button>&nbsp;
        <a class='btn btn-warning' href='/articles'>Back</a>
      {{ Form::close() }}

    </div>
  </div>
@stop