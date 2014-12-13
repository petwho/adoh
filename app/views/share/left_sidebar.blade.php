<div class="col-xs-12 col-md-4 sidebar-left no-padding">
      <ul class="nav">
          <!-- <li>
            <h4>Lorem ipsum Fugiat cillum anim voluptate dolore.</h4>
            <div>
              You'll be alright. No one can hurt you now. Come morning light. You and I'll be safe and sound...
            </div>
          </li> -->
          <?php $i = 1; ?>
          @foreach ($posts as $post)
            @if ($i/6 < 1)
              <li data-post-id="{{$post->id}}" class="page-{{floor($i/6)}}">
                <h4>{{str_limit($post->title, 35, '...')}}</h4>
                <div>{{str_limit($post->summary, 100, '...')}}</div>
              </li>
            @else
              <li class="hidden page-{{floor($i/6)}}" data-post-id="{{$post->id}}">
                <h4>{{str_limit($post->title, 35, '...')}}</h4>
                <div>{{str_limit($post->summary, 100, '...')}}</div>
              </li>
            @endif
            <?php $i++; ?>
          @endforeach
      </ul>
      <div class="row-gap-small"></div>
      <div class="row">
        <div class="col-xs-12 text-center">
          <a href="#"><i class="fa fa-lg fa-chevron-circle-left gray"></i></a>
          <a href="#"><i class="fa fa-lg fa-chevron-circle-right"></i></a>
        </div>
      </div>

      <div class="row-gap-tiny"></div>

      <div class="row facebook text-center">
        <div class="col-xs-12">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
      <div class="row-gap-small"></div>
      <div class="row text-center">
        <div class="col-xs-12">
          <p>Adoh &copy; 2014</p>
        </div>
      </div>
</div>
<script type="text/javascript">
  $(function () {
    var maxPage = "{{floor($i/6)}}";
    $('.sidebar-left ul li').click(function () {
      location.href = '/posts/' + ($(this).data('post-id'));
    });

    var pageNum = 0;
    $('.fa-chevron-circle-right').click(function (e) {
      e.preventDefault();
      if ($(this).hasClass('gray')) {
        return;
      }
      $('.page-' + pageNum).addClass('hidden');
      $('.page-' + (pageNum + 1)).removeClass('hidden');
      pageNum++;
      if (pageNum == maxPage) {
        $(this).addClass('gray');
      }
      $('.fa-chevron-circle-left').removeClass('gray');
    });

    $('.fa-chevron-circle-left').click(function (e) {
      e.preventDefault();
      if ($(this).hasClass('gray')) {
        return;
      }
      $('.page-' + pageNum).addClass('hidden');
      $('.page-' + (pageNum - 1)).removeClass('hidden');
      pageNum--;
      if (pageNum == 0) {
        $(this).addClass('gray');
      }
      $('.fa-chevron-circle-right').removeClass('gray');

    });
  })
</script>