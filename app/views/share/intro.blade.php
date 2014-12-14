<div class="row">
  <div class="col-xs-3 text-right">
    <div class="h3">{{$aboutus->title}}</div>
    <p>{{$aboutus->subtitle}}</p>
  </div>
  <div class="col-xs-8 col-xs-offset-1">
    <p class="summary">{{str_limit($aboutus->content, 200, '...')}}</p>
    <p class="content hidden">{{$aboutus->content}}</p>
    <div class="row-gap-small"></div>
    <a href="#" class="readmore">read more</a>
  </div>
</div>
<div class="row-gap-small"></div>
