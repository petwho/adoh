@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3>Edit carousel images</h3>
            {{ Form::open(array(
                  'url' => '/carousel_images/',
                  'method' => 'post',
                  'role' => 'form')) }}
                  {{ Form::label('carousel_image', 'Image:') }}
                  @foreach ($carouselImages as $image)
                    <div class='form-group'>
                        {{ Form::text('carousel_image[]', $image->url, array(
                                        'class' => 'form-control',
                                        'required' => true))}}
                    </div>
                  @endforeach
                  <button class='btn btn-primary' type="submit">Update</button>&nbsp;
                  <a class='btn btn-warning' href='/dashboard'>Back</a>
            {{ Form::close() }}
        </div>
    </div>
@stop