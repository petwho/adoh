@include('share.header')
<div class="container-fluid posts">
  @include('share.navbar_static')

  <div class="row gallery-post">
    <div class="col-xs-12 col-md-8 right-sidebar" style="min-height: 700px;">
      <div class="row">
        <div class="col-xs-12 no-padding">
          <img src="{{$post->image}}" class="img-responsive">
        </div>
      </div>
      <div class="row content">
        <div class="col-xs-12 no-padding">
          <h3>{{$post->title}}</h3>
          <p class="author">admin</p>
          <p>{{$post->content}}</p>
        </div>
      </div>
    </div>

    @include('share.left_sidebar')
  </div>
</div>

  </body>
</html>