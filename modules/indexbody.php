<?php  
//require static file IMPORTANT
require_once(ROOT."/static/static.php");

/**
 * This calss exposes the INDEXBODY module to any require
 */
class indexbody{
    function indexBodyMod(){
        $body = new staticHelper();
        return $body->getindexBody();
    }
}


?>