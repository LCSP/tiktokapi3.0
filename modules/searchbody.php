<?php  
//require static file IMPORTANT
require_once(ROOT."/static/static.php");

/**
 * This calss exposes the USERSEARCHBODY module to any require
 */
class searchbody{
    function searchBodyMod($t){
        $body = new staticHelper();
        return $body->getSearchBody($t);
    }
}


?>