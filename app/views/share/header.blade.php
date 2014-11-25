<!DOCTYPE html>
<html>
  <head>
    <title>ADOH</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="/css/styles.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript">
      $(function () {
        $('.readmore').click(function (e) {
          e.preventDefault();
          $('.summary').addClass('hidden');
          $('.content').removeClass('hidden');
          $(this).hide();
        });
      })
    </script>
  </head>
  <body>
