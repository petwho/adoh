@include('share.header')
<div class="container-fluid">
@include('share.navbar_static')

  <!-- Header images -->
  <div class="row image-wrapper" id="banners">
    <div class="col-xs-4">
      <div class="thumbnail hidden-overflow">
        <a href="/graphic"><img class="img-responsive img-scalable" src="images/header-image-1.png"/></a>
      </div>
      <div class="caption-text caption-text-1">GRAPHIC DESIGN</div>
    </div>
    <div class="col-xs-4">
      <div class="thumbnail hidden-overflow">
        <a href="/interior"><img class="img-responsive img-scalable" src="images/header-image-2.png"/></a>
      </div>
      <div class="caption-text caption-text-2">INTERIOR DESIGN</div>
    </div>
    <div class="col-xs-4">
      <div class="thumbnail hidden-overflow">
        <a href="/pallet"><img class="img-responsive img-scalable" src="images/header-image-3.png"/></a>
      </div>
      <div class="caption-text caption-text-3">PALLET WOOD DESIGN</div>
    </div>
  </div>

  <!-- Inntro text -->
  @include('share.intro')

  <div class="row">
    <div class="col-xs-12 no-padding">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/big-image.png" alt="...">
          </div>
          <div class="item">
            <img src="images/big-image.png" alt="...">
          </div>
          <div class="item">
            <img src="images/big-image.png" alt="...">
          </div>
        </div>

        <!-- Controls -->
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
  <div class="row" id="slogan">
    <div class="col-xs-12 text-center">LET'S MAKE SOMETHING GREAT TOGETHER</div>
  </div>

  <div class="row" id="info">
    <a id="contact"></a>
    <div class="xol-xs-12 col-md-8 map">
      <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item"
      src="https://www.google.com/maps/embed/v1/place?q=21+Tôn+Đản,+Ho+Chi+Minh+City,+Ho+Chi+Minh,+Vietnam&key=AIzaSyCse-n9u6VOq7zZWFrgVl9PEFjZWXC4ao4"></iframe>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 contact">
      <div class="row-gap-small"></div>
      <h3>CONTACT</h3>
      <h4>Location</h4>
      <div>
        <p>
          601 CT3, Apartment Ha Do
        </p>
        <p>
          02 Nguyen Van Cong St.
        </p>
        <p>
          Go Vap District , HCMC
        </p>
      </div>
      <div>
        <h4>E-mail</h4>
        <div>
          <p>
            conghoan@adoh.vn
          </p>
          <p>
            datnguyen.arch@adoh.vn
          </p>
        </div>
      </div>
      <div>
        <h4>Phone numbers</h4>
        <div>
          <p>
            (+84) 905 929 913
          </p>
          <p>
            (+84) 903 549 539
          </p>
        </div>
      </div>
      <div class="row-gap-medium"></div>
    </div>
  </div>
@include('share.footer')
