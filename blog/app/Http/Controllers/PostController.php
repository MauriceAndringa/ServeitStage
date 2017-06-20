<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    //

    public function send(Request $request)
    {

        $this->validate($request, [
            "title" => "required",
            "body" => "required"
        ]);

        $title = $request->input("title");
        $body = $request->input("body");
        $blnAndroid = $request->has("select_android");
        $blnIOS = $request->has("select_ios");
        $blnWindows = $request->has("select_windows");
        $optVibrate = $request->has("opt_vibrate");
        $optSound = $request->has("opt_sound");
        $optLED = $request->has("opt_led");


        //dd(request()->all());

        //creating a new hub
        $hub = new NotificationHub("Endpoint=sb://invallersonline.servicebus.windows.net/;SharedAccessKeyName=DefaultFullSharedAccessSignature;SharedAccessKey=/e+HVuDzuVejH8XgL+EVr11Od95j408CLmu7vFDML+Q=", "InvallersOnline");

        //Sending to IOS
        if($blnIOS) {
            $alert = '{"aps":{"alert":"Hello from PHP!"}}';
            $notification = new Notification("apple", $alert);
            $hub->sendNotification($notification, null);
        }

        //Sending to Android
        if($blnAndroid) {

            //$message = '{"data":{"message":"Hello from PHP!"}}';

            $message = [
                'data' => [
                        'title'=>$title,
                        'message'=>$body,
                        'vibrate'=>$optVibrate,
                        'sound'=>$optSound
                ],

            ];
            $notification = new Notification("gcm", json_encode($message));
            $hub->sendNotification($notification, null);
        }

        //Sending to Windows
        if($blnWindows) {
            $toast = '<toast><visual><binding template="ToastText01"><text id="1">Hello from PHP!</text></binding></visual></toast>';
            $notification = new Notification("windows", $toast);
            $notification->headers[] = 'X-WNS-Type: wns/toast';
            $hub->sendNotification($notification, null);
        }

        return redirect('send');
    }
}
