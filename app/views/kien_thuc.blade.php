@include('static_blocks.header')
<body id="Top">
<div id="Container">
  @include('static_blocks.navbar')
  <!-- / #Header -->
  
  <div id="Content" class="pb-30">
    @include('static_blocks.kien_thuc.slider')
    <!-- / #Container-wrap -->
    
    <div class="grid-850">
      @include('static_blocks.kien_thuc.menu')
      <div class="ac-contents info-01">
        <div class="article schedule">
          <ul class="cf">
            @foreach ($categories as $category)
              @if ($category['name'] == 'Lập kế hoạch xây nhà')
                <?php $posts = $category->posts; ?>
                @foreach ($posts as $post)
                  <li class="cf">
                    <div class="left fl-left"> <img src="{{$post->image}}" alt="" /> </div>
                    <!-- / .left -->
                    <div class="right fl-right cf">
                      <p class="title-post"><a href="#">{{$post->title}}</a></p>
                      <p class="date-post">[{{date('Y-m-d', strtotime($post->updated_at))}}]</p>
                      <p class="detail-post">{{$post->summary}}</p>
                      <a href="#" class="btn-continue">Xem chi tiết</a>
                    </div>
                    <!-- .right --> 
                  </li>
                @endforeach
              @endif
            @endforeach
          </ul>
        </div>
        <!-- / .schedule--> 
      </div>
      <!-- / .ac-contents -->
      
      <div class="ac-contents hidden info-02">
        <div class="article schedule">
          <ul class="cf">
            @foreach ($categories as $category)
              @if ($category['name'] == 'Làm việc với chuyên gia')
                <?php $posts = $category->posts; ?>
                @foreach ($posts as $post)
                  <li class="cf">
                    <div class="left fl-left"> <img src="{{$post->image}}" alt="" /> </div>
                    <!-- / .left -->
                    <div class="right fl-right cf">
                      <p class="title-post"><a href="#">{{$post->title}}</a></p>
                      <p class="date-post">[{{date('Y-m-d', strtotime($post->updated_at))}}]</p>
                      <p class="detail-post">{{$post->summary}}</p>
                      <a href="#" class="btn-continue">Xem chi tiết</a>
                    </div>
                    <!-- .right --> 
                  </li>
                @endforeach
              @endif
            @endforeach
          </ul>
        </div>
        <!-- / .schedule--> 
      </div>
      <!-- / .ac-contents -->
      <div class="ac-contents info-03 hidden">
        <div class="article schedule">
          <ul class="cf">
            @foreach ($categories as $category)
              @if ($category['name'] == 'Chọn vật liệu xây dựng')
                <?php $posts = $category->posts; ?>
                @foreach ($posts as $post)
                  <li class="cf">
                    <div class="left fl-left"> <img src="{{$post->image}}" alt="" /> </div>
                    <!-- / .left -->
                    <div class="right fl-right cf">
                      <p class="title-post"><a href="#">{{$post->title}}</a></p>
                      <p class="date-post">[{{date('Y-m-d', strtotime($post->updated_at))}}]</p>
                      <p class="detail-post">{{$post->summary}}</p>
                      <a href="#" class="btn-continue">Xem chi tiết</a>
                    </div>
                    <!-- .right --> 
                  </li>
                @endforeach
              @endif
            @endforeach
          </ul>
        </div>
        <!-- / .schedule--> 
      </div>
      <!-- / .ac-contents -->
      <div class="ac-contents info-04 hidden">
        <div class="article schedule">
          <ul class="cf">
            @foreach ($categories as $category)
              @if ($category['name'] == 'Xây dựng phần thô')
                <?php $posts = $category->posts; ?>
                @foreach ($posts as $post)
                  <li class="cf">
                    <div class="left fl-left"> <img src="{{$post->image}}" alt="" /> </div>
                    <!-- / .left -->
                    <div class="right fl-right cf">
                      <p class="title-post"><a href="#">{{$post->title}}</a></p>
                      <p class="date-post">[{{date('Y-m-d', strtotime($post->updated_at))}}]</p>
                      <p class="detail-post">{{$post->summary}}</p>
                      <a href="#" class="btn-continue">Xem chi tiết</a>
                    </div>
                    <!-- .right --> 
                  </li>
                @endforeach
              @endif
            @endforeach
          </ul>
        </div>
        <!-- / .schedule--> 
      </div>
      <!-- / .ac-contents -->
      
      <div class="ac-contents info-05 hidden">
        <div class="article schedule">
          <ul class="cf">
            @foreach ($categories as $category)
              @if ($category['name'] == 'Cẩm nang xây nhà')
                <?php $posts = $category->posts; ?>
                @foreach ($posts as $post)
                  <li class="cf">
                    <div class="left fl-left"> <img src="{{$post->image}}" alt="" /> </div>
                    <!-- / .left -->
                    <div class="right fl-right cf">
                      <p class="title-post"><a href="#">{{$post->title}}</a></p>
                      <p class="date-post">[{{date('Y-m-d', strtotime($post->updated_at))}}]</p>
                      <p class="detail-post">{{$post->summary}}</p>
                      <a href="#" class="btn-continue">Xem chi tiết</a>
                    </div>
                    <!-- .right --> 
                  </li>
                @endforeach
              @endif
            @endforeach
          </ul>
        </div>
        <!-- / .schedule--> 
      </div>
      <!-- / .ac-contents -->
      
      <div class="ac-contents info-06 hidden">
        <div class="article schedule">
          <ul class="cf">
            @foreach ($categories as $category)
              @if ($category['name'] == 'Kiểm tra nghiệm thu')
                <?php $posts = $category->posts; ?>
                @foreach ($posts as $post)
                  <li class="cf">
                    <div class="left fl-left"> <img src="{{$post->image}}" alt="" /> </div>
                    <!-- / .left -->
                    <div class="right fl-right cf">
                      <p class="title-post"><a href="#">{{$post->title}}</a></p>
                      <p class="date-post">[{{date('Y-m-d', strtotime($post->updated_at))}}]</p>
                      <p class="detail-post">{{$post->summary}}</p>
                      <a href="#" class="btn-continue">Xem chi tiết</a>
                    </div>
                    <!-- .right --> 
                  </li>
                @endforeach
              @endif
            @endforeach
          </ul>
        </div>
        <!-- / .schedule--> 
      </div>
      <!-- / .ac-contents -->
      <div class="ac-contents info-07 hidden">
        <div class="article schedule">
          <ul class="cf">
            @foreach ($categories as $category)
              @if ($category['name'] == 'Cẩm nang xây nhà')
                <?php $posts = $category->posts; ?>
                @foreach ($posts as $post)
                  <li class="cf">
                    <div class="left fl-left"> <img src="{{$post->image}}" alt="" /> </div>
                    <!-- / .left -->
                    <div class="right fl-right cf">
                      <p class="title-post"><a href="#">{{$post->title}}</a></p>
                      <p class="date-post">[{{date('Y-m-d', strtotime($post->updated_at))}}]</p>
                      <p class="detail-post">{{$post->summary}}</p>
                      <a href="#" class="btn-continue">Xem chi tiết</a>
                    </div>
                    <!-- .right --> 
                  </li>
                @endforeach
              @endif
            @endforeach
          </ul>
        </div>
        <!-- / .schedule--> 
      </div>
      <!-- / .ac-contents --> 
      
    </div>
    <!-- / .grid-960 --> 
    
  </div>
  <!--Content-->
  @include('static_blocks.footer')
  <!-- / #Pagetop --> 
</div>
<!--Container--> 
<link rel="stylesheet" type="text/css" href="css/kienthuc.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/slider.css" media="all" />
<!--javascript--> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript" src="js/opacity-rollover2.1.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/tab.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script language="javascript" type="text/javascript" src="js/script.js"></script> 
<script type="text/javascript">
 $(document).ready( function(){ 
    // buttons for next and previous item            
    var buttons = { previous:$('#Jslidernews1 .button-previous') ,
            next:$('#Jslidernews1 .button-next') };     
     $('#Jslidernews1').lofJSidernews( { interval : 4000,
                      direction   : 'opacitys', 
                      easing      : 'easeInOutExpo',
                      duration    : 1200,
                      auto      : true,
                      maxItemDisplay  : 5,
                      navPosition     : 'horizontal', // horizontal
                      navigatorHeight : 122,
                      navigatorWidth  : 186,
                      mainWidth   : 1000,
                      buttons     : buttons } );  
  });
</script>
</body>
</html>
