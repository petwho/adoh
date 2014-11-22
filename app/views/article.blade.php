    @include('share.header')
    <div class="container-fluid">
      @include('share.navbar_static')
      
      <div class="row">
        <div class="col-xs-12 no-padding">
          <img class="img-responsive" src="http://vinz.artlessthemes.com/horizontal-menu/wp-content/uploads/2014/09/big-image-01.jpg" alt="">
        </div>
      </div>

      <div class="row-gap-medium"></div>
      <!-- Intro text -->
      <div class="row-gap-small"></div>
      <div class="row">
        <div class="col-xs-2 col-xs-offset-1">
          <div class="h3">{{$article->title}}</div>
          <p>{{$article->subtitle}}</p>
        </div>
        <div class="col-xs-8 col-xs-offset-1">
          <p class="summary">{{$article->summary}}...</p>
          <div class="content hidden">{{$article->content}}</div>
          <div class="row-gap-small"></div>
          <a href="#" class="readmore">read more</a>
        </div>
      </div>
      <div class="row-gap-small"></div>

      <div class="row-gap-medium"></div>

      @include('share.carousel')

    </div>
  </body>
</html>