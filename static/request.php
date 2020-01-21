<?php

require_once(ROOT. "/static/static.php");


class request{
    
    function getInfo($uid, $type){
        $rUrl = new staticHelper();
        $ip = $rUrl->getUserIp();
        //$ip = "181.117.124.114"; //TODO
        if($type == "user"){
            $rUrl = $rUrl->getUserInfoUrl();
            $rUrl = str_replace("{USER_ID}", $uid, $rUrl);
        }
        $response = get_curl($rUrl, $ip);
        return $response;
    }

    function getUserVideos($uid, $cursor){
        $rUrl = new staticHelper();
        $ip = $rUrl->getUserIp();
        //$ip = "181.117.124.114"; //TODO
        $rUrl = $rUrl->getUserVideosUrl();
        $rUrl = str_replace("{USER_ID}", $uid, $rUrl);
        $rUrl = str_replace("{CURSOR}", $cursor, $rUrl);
        $response = get_curl($rUrl, $ip);
        return $response;
    }

    function getUserSearch($keyword, $cursor){
        $url = new staticHelper();
        $ip = $url->getUserIp();
        //$ip = "181.117.124.114"; //TODO
        $url = $url->getUserSearchUrl();
        $url = str_replace("{KEYWORD}", $keyword, $url);
        $url = str_replace("{CURSOR}", $cursor, $url);
        $response = get_curl($url, $ip);
        return $response;
    }

}

function get_curl($url, $ip){

    $cURLConnection = curl_init();

    curl_setopt($cURLConnection, CURLOPT_URL, $url);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
        'user-agent: okhttp/3.10.0.1',
        "REMOTE_ADDR: " . $ip,
        "HTTP_X_FORWARDED_FOR: ". $ip,
        "X_FORWARDED_FOR: " . $ip        
    ));

    
    $phoneList = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    return $phoneList;
}



?>