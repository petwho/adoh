@include('share.header')
<div class="container-fluid">
  @include('share.navbar_static')

  <div class="row-gap-medium"></div>
  <div class="row">
    <div class="col-xs-3 text-right">
      <div class="h3">{{$gallery->title}}</div>
      <p>{{$gallery->subtitle}}</p>
    </div>
    <div class="col-xs-8 col-xs-offset-1">
      <div class="summary">{{$gallery->summary}}...</div>
      <div class="content hidden">{{$gallery->content}}</div>
      <div class="row-gap-small"></div>
      <a href="#" class="readmore">read more</a>
    </div>
  </div>
  <div class="row-gap-medium"></div>


  <div class="row gallery">

    <div class="col-xs-12 col-md-8 image-wrapper right-sidebar">
      <div class="row">
        <div class="col-xs-8 no-padding hidden-overflow">
          <a href="/articles/{{$articles[0]->id}}"><img class="img-responsive img-scalable" src="{{$articles[0]->thumb}}"></a>
        </div>
        <div class="col-xs-4 no-padding hidden-overflow">
          <a href="/articles/{{$articles[1]->id}}"><img class="img-responsive img-scalable" src="{{$articles[1]->thumb}}"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 no-padding hidden-overflow">
          <a href="/articles/{{$articles[2]->id}}"><img class="img-responsive img-scalable" src="{{$articles[2]->thumb}}"></a>
        </div>
        <div class="col-xs-4 no-padding hidden-overflow">
          <a href="/articles/{{$articles[3]->id}}"><img class="img-responsive img-scalable" src="{{$articles[3]->thumb}}"></a>
        </div>
        <div class="col-xs-4 no-padding hidden-overflow">
          <a href="/articles/{{$articles[4]->id}}"><img class="img-responsive img-scalable" src="{{$articles[4]->thumb}}"></a>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-4 no-padding hidden-overflow">
          <a href="/articles/{{$articles[5]->id}}"><img class="img-responsive img-scalable" src="{{$articles[5]->thumb}}"></a>
        </div>
        <div class="col-xs-8 no-padding hidden-overflow">
          <a href="/articles/{{$articles[6]->id}}"><img class="img-responsive img-scalable" src="{{$articles[6]->thumb}}"></a>
        </div>
      </div>
    </div>

    @include('share.left_sidebar', array('posts' => $posts))
    
  </div>

</div>

  </body>
</html>