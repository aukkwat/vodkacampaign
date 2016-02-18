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
	<!-- copy these lines to your document: -->
  <div class="centerparent vodkaTv col-md-12 col-xs-12" style="height: 400px;">
    <div class="centerchildren col-xs-12 col-md-12" id="vodka_hype_container" style="margin:auto;position:relative;height:568px;overflow:hidden;" aria-live="polite" style="text-align:center">
  		<script type="text/javascript" charset="utf-8" src="Vodka.hyperesources/vodka_hype_generated_script.js?4006"></script>
  	</div>
  </div>
  <div class="vodkaTvMobile col-md-12 col-xs-12" style="height: 350px;">
    <div class="centerchildren col-xs-12 col-md-12" id="vodka_hype_container" style="top:-250px;margin:auto;position:relative;height:568px;overflow:hidden;" aria-live="polite" style="text-align:center">
  		<script type="text/javascript" charset="utf-8" src="Vodkamobile.hyperesources/vodka_hype_generated_script.js?4006"></script>
  	</div>
  </div>
  <div class="col-md-12" style="text-align:center">
    <h1>กรุณาติดตามอย่างน้อย 3 รายการ</h1>
  </div>

  <div class="col-md-12 marginbottom-md" style="text-align:center">
    <h2>เกาะติดรายการตอนใหม่ๆ อย่างรวดเร็วได้ที่ VodKA TV</h2>
    <h2>App ที่รวบรวมรายการ TV ย้อนหลังเยอะที่สุดในประเทศ</h2>
  </div>
  <div class="col-md-12 marginbottom-md" style="text-align:center">
    <h5><a href="{{ URL::to('/') }}">กลับหน้าแรก</a></h5>
  </div>

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
