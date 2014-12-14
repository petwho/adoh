@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3>Edit About us</h3>
            {{ Form::open(array(
                  'url' => '/aboutus/',
                  'method' => 'post',
                  'role' => 'form')) }}
                  {{ Form::label('title', 'Title:') }}
                  <div class='form-group'>
                      {{ Form::text('title', $aboutus->title, array(
                                      'class' => 'form-control',
                                      'required' => true))}}
                  </div>
                  {{ Form::label('subtitle', 'Subtitle:') }}
                  <div class='form-group'>
                      {{ Form::text('subtitle', $aboutus->subtitle, array(
                                      'class' => 'form-control',
                                      'required' => true))}}
                  </div>
                  {{ Form::label('content', 'Content:') }}
                  <div class='form-group'>
                      {{ Form::textarea('content', $aboutus->content, array(
                                      'class' => 'form-control',
                                      'required' => true))}}
                  </div>
                  <button class='btn btn-primary' type="submit">Update</button>&nbsp;
                  <a class='btn btn-warning' href='/dashboard'>Back</a>
            {{ Form::close() }}
        </div>
    </div>
@stop