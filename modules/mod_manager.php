<?php
require_once(ROOT. "/modules/header.php");
require_once(ROOT. "/modules/footer.php");

require_once(ROOT. "/modules/indexbody.php");
require_once(ROOT. "/modules/searchbody.php");
require_once(ROOT. "/modules/searchcontainer.php");
require_once(ROOT. "/modules/postlisthead.php");



function staticMods(){
    $modules = [];
    array_push($modules, getHeader(""));

    array_push($modules, getFooter(" © 2020 TikTokApi.ga - Online TikTok Web Viewer <br> This service uses the TikTok API but is not endorsed or certified by TikTok."));
    return $modules;
}

function getHeader($t){
    $header = new headerTag();
    $header = $header->headerMod($t);
    return $header;
}

function getIndexBody(){
    $body = new indexbody();
    $body = $body->indexBodyMod();
    return $body;
}

function getFooter($t){
    $footer =  new footerCode();
    $footer = $footer->footerMod($t);
    return $footer;
}

function getSearchBody($username){
    $body = new searchbody();
    $body = $body->searchBodyMod($username);
    $container = new searchcontainer(); 
    $container = $container->searchContainerMod("");
    return $body . $container;
}

function getPostListHead($img, $nick, $desc){
    $head = new postlisthead();
    $head = $head->postListHeadMod($img, $nick, $desc);
    return $head;
}

?>