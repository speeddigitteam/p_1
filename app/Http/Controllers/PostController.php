<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = new Posts();
        $agent = new Agent();
        $agent->is('Windows');  // working
        // $result = $agent->isTablet(); // working
        $result = $agent->isAndroidOS();; // working
        $agent->isNexus();
        $agent->isSafari();

        // if($result){
        //     echo "HI";
        // }else{
        //     echo "HO";
        // }
        // $languages = $agent->languages();
        // return $languages;

        // Get the device name, if mobile. (iPhone, Nexus, AsusTablet, ...)
        // echo $device = $agent->device(); // not working
        // Get the operating system. (Ubuntu, Windows, OS X, ...)
        // echo $platform = $agent->platform(); //working
        // echo $agent->isDesktop(); // working
        // Check if the user is a robot. This uses jaybizzle/crawler-detect to do the actual robot detection.
        // return $request->ip();

        // work done

        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];

        // work done
        // echo $_SERVER['REMOTE_ADDR'];
        // $agent->setUserAgent('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.13+ (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2');
        // echo $agent->setHttpHeaders($headers);
        // echo $post->email = $request->email;
    }
}
