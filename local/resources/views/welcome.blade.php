<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vodka TV</title>
    <!-- Bootstrap -->
    <link href="{{ URL::to('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/own_styles.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/font.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/font.css') }}" rel="stylesheet">
    <meta property="og:url"   content="http://devtab.com/services/vodkaTV/" />
    <meta property="og:title" content="ลุ้นตั๋วหนังฟรี กับ VODkaTV" />
    <meta property="og:description" content="ลุ้นตัวหนังง่ายๆ แค่แชร์รายการทีวีที่ท่านติดตาม 3 รายการ" />
    <meta property="og:image" content="{{ URL::to('assets/img/vodka/vodka.png') }}" />
  </head>
  <body>
      <div class="col-md-12 vodka-part1">
        <div class="vodka-part1-child">
          <div class="col-md-2 col-md-offset-4 col-xs-6">
            <a href="http://goo.gl/GWiC0e">
              <img src="{{ URL::to('assets/img/vodka/applogo.png') }}" style="width:100%">
            </a>
          </div>
          <div class="col-md-2 col-xs-6">
            <a href="http://goo.gl/KzrmRT">
              <img src="{{ URL::to('assets/img/vodka/playlogo.png') }}" style="width:100%">
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-12 vodka-part2">
      </div>
      <div class="col-md-12 vodka-part3">
        <div class="col-md-3 col-md-offset-6 col-xs-6 col-xs-offset-5 vodka-part3-child">
          <div class="row">
            <form action="storeinfo" method="post" autocomplete="off">
              <div class="form-group">
                <input style="color:#fff" name="name" type="text" class="form-control" placeholder="ชื่อ-นามสกุล" autocomplete="off" required="" minlength="5" >
              </div>
              <div class="form-group">
                <textarea style="color:#fff" name="address" class="form-control" rows="3" autocomplete="off" placeholder="ที่อยู่สำหรับส่งของรางวัล" required="" minlength="10"></textarea>
              </div>
              <div class="form-group">
                <input style="color:#fff" name="phone" type="text" class="form-control" placeholder="เบอร์ติดต่อ" autocomplete="off" required=""  minlength="9" maxlength="10" >
              </div>
              <div class="form-group">
                <button type="submit" style="color:#8CC449" class="col-md-offset-3 col-md-6 col-xs-offset-1 col-xs-10 btn btn-default">ลุ้นรับของรางวัล</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,600&subset=thai' rel='stylesheet' type='text/css'>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
    <script>
      $(document).ready(function(){

        //  $.ajaxSetup({ cache: true });
        //   $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
        //     FB.init({
        //       appId      : '1650817661831039',
        //       version: 'v2.5' // or v2.0, v2.1, v2.2, v2.3
        //     });
        //     FB.ui(
        //      {
        //       method: 'share',
        //       message:'Test',
        //       href: 'http://devtab.com/services/vodkaTV/',
        //     }, function(response){});
        //   });

          var height = $(window).height();
          var width = $(window).width();
          $('.vodka-part1').height(height);
          $('.vodka-part2').height(height);
          $('.vodka-part3').height(height);

      });
    </script>
  </body>
</html>
