<?php  
//require static file IMPORTANT
require_once(ROOT."/static/static.php");

/**
 * This calss exposes the USERSEARCHCONTAINER module to any require
 */
class searchcontainer{
    function searchContainerMod($t){
        $body = new staticHelper();
        return $body->getSearchContainer($t);
    }
}


?>