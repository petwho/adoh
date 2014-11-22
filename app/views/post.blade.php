@include('share.header')
<div class="container-fluid posts">
  @include('share.navbar_static')

  @include('share.intro')

  <div class="row gallery-post">

    @include('share.left_sidebar')

    <div class="col-xs-12 col-md-8 right-sidebar">
        <div class="row">
          <div class="col-xs-12 no-padding">
            <img src="http://vinz.artlessthemes.com/horizontal-menu/wp-content/uploads/2014/10/about-section-headline.jpg" class="img-responsive">
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

  </div>
</div>

  </body>
</html>