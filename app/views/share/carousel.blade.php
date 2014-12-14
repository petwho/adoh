<div class="row">
  <div class="col-xs-12 no-padding">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="row image-wrapper">
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="{{$article->carousel_img1}}">
            </div>
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="{{$article->carousel_img2}}">
            </div>
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="{{$article->carousel_img3}}">
            </div>
          </div>
          <div class="carousel-caption">
            Lorem ipsum Dolor velit cillum Duis.
          </div>
        </div>
        <div class="item">
          <div class="row image-wrapper">
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="{{$article->carousel_img4}}">
            </div>
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="{{$article->carousel_img5}}">
            </div>
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="{{$article->carousel_img6}}">
            </div>
          </div>
          <div class="carousel-caption">
            Lorem ipsum Dolor velit cillum Duis.
          </div>
        </div>
        <!-- <div class="item">
          <div class="row">
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="/images/smaller-image-02.jpg">
            </div>
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="/images/smaller-image-02.jpg">
            </div>
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="/images/smaller-image-03.jpg">
            </div>
          </div>
          <div class="carousel-caption">
            Lorem ipsum Cillum sunt in ea culpa minim.
          </div>
        </div>
        <div class="item">
          <div class="row">
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="/images/smaller-image-02.jpg">
            </div>
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="/images/smaller-image-02.jpg">
            </div>
            <div class="col-xs-4 no-padding hidden-overflow">
              <img class="img-scalable img-responsive" src="/images/smaller-image-03.jpg">
            </div>
          </div>
          <div class="carousel-caption">
            Lorem ipsum Cillum sunt in ea culpa minim.
          </div>
        </div> -->
      </div>

      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>