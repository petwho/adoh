    @include('share.header')
    <div class="container-fluid">
      @include('share.navbar_static')
      
      <div class="row">
        <div class="col-xs-12 no-padding text-center">
          <img class="img-responsive" src="{{$article->image}}" alt="" width="100%">
        </div>
      </div>

      <div class="row-gap-medium"></div>
      <!-- Intro text -->
      <div class="row-gap-small"></div>
      <div class="row">
        <div class="col-xs-2 col-xs-offset-1">
          <div class="h3">{{$article->title}}</div>
          <div>{{$article->subtitle}}</div>
        </div>
        <div class="col-xs-8 col-xs-offset-1">
          <div class="summary">{{$article->summary}}</div>
          <div class="content hidden">{{$article->content}}</div>
          <div class="row-gap-small"></div>
          <a href="#" class="readmore">read more</a>
        </div>
      </div>
      <div class="row-gap-small"></div>

      <div class="row-gap-medium"></div>

      @include('share.carousel', array('article' => $article))

    </div>
  </body>
</html>