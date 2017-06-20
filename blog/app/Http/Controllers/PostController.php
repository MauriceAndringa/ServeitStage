<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    //

    public function send()
    {

//        $post = new Post;
//
//        $post->title = request('title');
//        $post->body = request('body');

        //dd(request()->all());
        $hub = new NotificationHub("Endpoint=sb://invallersonline.servicebus.windows.net/;SharedAccessKeyName=DefaultFullSharedAccessSignature;SharedAccessKey=/e+HVuDzuVejH8XgL+EVr11Od95j408CLmu7vFDML+Q=", "InvallersOnline");
        $alert = '{"aps":{"alert":"Hello from PHP!"}}';
        $notification = new Notification("apple", $alert);
        $hub->sendNotification($notification, null);

        return redirect('send');
    }
}
