<?php
//require static file IMPORTANT
require_once(ROOT."/static/static.php");

/**
 * This calss exposes the postlisthead module to any require
 */
class postlisthead{
    function postListHeadMod($img, $nick, $desc){
        $head = new staticHelper();
        return $head->getPostHead($img, $nick, $desc);
    }
}


?>