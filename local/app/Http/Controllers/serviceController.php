<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use DB;
use App\Http\Models\channel as channel;
use App\Http\Models\register as register;
class serviceController extends Controller {

  public function channel() {
    $register = DB::table('vodkatv_campaign')->get();
    var_dump($register);
  }
  public function redirect() {
        return Socialite::driver('facebook')->redirect();
  }

  public function callback() {
  }

  public function fbpost() {
    return view('welcome');
  }
  public function fbcallback() {
    if (!session_id()) {
      session_start();
    }
    $fb = new \Facebook\Facebook([
      'app_id' => '1650817661831039',
      'app_secret' => '19458f07416d42c8dea76d03d5f80a46',
      'default_graph_version' => 'v2.3',
    ]);
    $helper = $fb->getRedirectLoginHelper();
    try {
    $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
    }

    if (isset($accessToken)) {
      // Logged in!
      $_SESSION['facebook_access_token'] = (string) $accessToken;
      // Now you can redirect to another page and use the
      // access token from $_SESSION['facebook_access_token']
      try {
        // Returns a `Facebook\FacebookResponse` object
        // $response = $fb->post('/me/photos', $data, $_SESSION['facebook_access_token']);
        $response = $fb->get('/me?fields=id,name', $_SESSION['facebook_access_token']);
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }
      $user = $response->getGraphUser();
      $follow = DB::table('device_follow')
                ->join('tvp_program', 'device_follow.program_id', '=', 'tvp_program.program_id')
                ->select('tvp_program.pro_title')
                ->where('device_follow.facebook_id',$user['id'])->get();
      if(empty($follow))
      {
          return redirect('error');
      }
      if(count($follow) < 3)
      {
        return redirect('error2');
      }
      $channel = array();
      foreach ($follow as $key => $value) {
        // $search = array('(',')');
        // $replace = array('','');
        // $channel_fb = unserialize(str_replace($search,$replace,$value->pro_title));
        $channel[$key]  = '#'.preg_replace('/\s+/', '',$value->pro_title);
      }
      $post_channel = implode(' ', $channel);
      $data = [

        'message' => '#แจกตั๋วหนังฟรี แค่ร่วมติดตามรายการทีวีที่คุณชื่นชอบที่ http://goo.gl/SJRK8b @ฉันกำลังติดตาม '.$post_channel
                      .' เกาะติดรายการตอนใหม่ ๆ อย่างรวดเร็วได้ที่ VodKA TV
                      App ที่รวบรวมรายการ TV ย้อนหลังเยอะที่สุดในประเทศไทย
                      iOS : goo.gl/tfvqWE
                      Android : goo.gl/RzNXBg', //Message Post To Facebook
        'source' => $fb->fileToUpload('./assets/img/vodka/vodka.png'),
      ];

      try {
        // Returns a `Facebook\FacebookResponse` object
        $response = $fb->post('/me/photos', $data, $_SESSION['facebook_access_token']);
        // $response = $fb->get('/me?fields=id,name', $_SESSION['facebook_access_token']);
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }

    }
    return redirect('thankyou');

  }

  public function storeinfo(Request $request) {
    if (!session_id()) {
      session_start();
    }
    $register = new register;
    $register->name_lastname = $request->input('name');
    $register->address = $request->input('address');
    $register->phone = $request->input('phone');
    $register->save();
    $fb = new \Facebook\Facebook([
      'app_id' => '1650817661831039',
      'app_secret' => '19458f07416d42c8dea76d03d5f80a46',
      'default_graph_version' => 'v2.3',
    ]);
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email','publish_actions']; // optional
    $loginUrl = $helper->getLoginUrl('http://devtab.com/services/vodkaTV/fbcallback', $permissions);
    return redirect($loginUrl);
  }


}
