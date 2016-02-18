<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vodka TV</title>
    <!-- Bootstrap -->
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/own_styles.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/font.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/font.css') }}" rel="stylesheet">
  	<style>
      .HYPE_scene{
        background-color: transparent !important;
      }
      #vodka_hype_container{
        top:-200px;
      }
      body{
        color:#fff;
      }
      .centerparent{
        position: relative !important;
      }
      .centerchildren{
        position: absolute !important;
        left:50% !important;
        transform: translateX(-50%) !important;
      }
  	</style>

  </head>
  <body>
    {{$name}}

	<!-- end copy -->



	<!-- text content for search engines: -->


	<!-- end text content: -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Kanit:400,600&subset=thai' rel='stylesheet' type='text/css'>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
  </body>
</html>
