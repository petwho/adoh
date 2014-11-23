@extends('layouts.admin')
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <h3>Manage Articles</h3>
      <h3><a href='/articles/new' class="btn btn-primary" role="button">Add Article</a></h3>
      <table class="table table-striped table-bordered" style="margin-top: 5px;">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Category</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Manage</th>
          <tr>
        </thead>
        <tbody>
          @if (count($articles))
            <?php $i = 0; ?>
            @foreach ($articles as $article)
              <?php $i++; ?>
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $gallery_list[$article->gallery_id] }}</td>
                <td>{{ date('d/m/Y', strtotime($article->created_at)) }}</td>
                <td>{{ date('d/m/Y', strtotime($article->updated_at)) }}</td>
                <td colspan="2">
                  <a class='link text-primary edit' href="/articles/{{ $article->id }}/edit" title='edit'><i class="fa fa-edit"></i> edit</a>
                  |
                  <a class='link text-danger delete' data-article-id="{{ $article->id }}" href='#' title='delete'><i class="fa fa-times-circle"></i> delete</a>
                </td>
              </tr>
            @endforeach
          @else
            <tr>
              <td colspan="5">No articles found!</td>
            </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
  <script type="text/javascript">
  $(function () {
    $('body').on('click', '.delete', function (e) {
      var id = $(this).data('article-id');
      var confirmed = confirm('Are you sure to delete this?');
      if (confirmed) {
        $.ajax({
          method: 'delete',
          url: '/articles/' + id,
          success: function () {
            location.reload();
          }
        });
        e.preventDefault();
      }
    });
  });
  </script>
@stop