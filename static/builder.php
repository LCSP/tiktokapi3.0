<?php

require_once(ROOT.'/static/static.php');
require_once(ROOT.'/static/request.php');

class builderHelper{

    function buildSearch($key, $cursor){
        $req = new request();
        $req = $req->getUserSearch($key, $cursor);
        $req = json_decode($req, true);
        if(!is_null($req)){
            $item = new staticHelper();
            $items = "";
            $adrnd = rand(0,count($req['user_list']));
            for ($i=0; $i < count($req['user_list']); $i++) {
                if($i == $adrnd){
                    $items = $items.$item->getRowItemAd();
                }
                $img = $req['user_list'][$i]['user_info']['avatar_medium']['url_list'][0];
                $text = [$req['user_list'][$i]['user_info']['nickname'] ,$req['user_list'][$i]['user_info']['unique_id'] , $req['user_list'][$i]['user_info']['signature']];
                $foot = "Followers: " . $req['user_list'][$i]['user_info']['follower_count'] . " - Following: " . $req['user_list'][$i]['user_info']['following_count'];
                $uid = $req['user_list'][$i]['user_info']['uid'];
                $items = $items . $item->getRowItem($img, $text, $foot, $uid, "this.parentNode.submit();");    
                
            }
            $container = $item->getSearchContainer($items, $cursor, $req['cursor'], "User Search", $key);
            $body = $item->getSearchBody($key);
            return $body . $container;
        }else{
            $error = new staticHelper();
            return $error->getErrorAlert();
        }
    }

    function buildInfo($key){
        $req = new request();
        $req = $req->getInfo($key, "user");
        $req = json_decode($req, true);
        if(!is_null($req)){
            $img = $req['user']['avatar_medium']['url_list'][0];
            $nick = $req['user']['nickname'];
            $desc = [
                $req['user']['unique_id'],
                $req['user']['signature'],
                $req['user']['follower_count'],
                $req['user']['following_count']
            ];
            $head = new staticHelper();
            $header = $head->getPostHead($img, $nick, $desc)[0];
            $doc = [$img, $nick, $head->getPostHead($img, $nick, $desc)[1]];
            return [$header, $doc];
        }else{
            $error = new staticHelper();
            return $error->getErrorAlert();
        }
    }

    function buildPostList($key, $cursor, $usr){
        $req = new request();
        $req = $req->getUserVideos($key, $cursor);
        $req = json_decode($req, true);
        if(!is_null($req)){
            $item = new staticHelper();
            $items = "";
            $adrnd = rand(0,count($req['aweme_list']));
            for ($i=0; $i < count($req['aweme_list']); $i++) {
                if($i == $adrnd){
                    $items = $items.$item->getRowItemAd();
                }
                $img = $req['aweme_list'][$i]['video']['cover']['url_list'][0];
                $desc = $req['aweme_list'][$i]['desc'];
                $vidUrl = $req['aweme_list'][$i]['video']['play_addr']['url_list'][0];
                $stats = [
                    $req['aweme_list'][$i]['statistics']['digg_count'],
                    $req['aweme_list'][$i]['statistics']['comment_count'],
                    $req['aweme_list'][$i]['statistics']['share_count'],
                    $req['aweme_list'][$i]['statistics']['play_count'],
                    $req['aweme_list'][$i]['statistics']['download_count']];
                $items = $items . $item->getRowPostItem($img, $desc, "", $vidUrl, "window.open('" . $vidUrl . "');");
            }
            $container = $item->getPostsContainer($items, $usr[0], $usr[1], $usr[2], $key, $cursor, $req['max_cursor']);
            return $container;
        }else{
            $error = new staticHelper();
            return $error->getErrorAlert();
        }
    }

}


?>