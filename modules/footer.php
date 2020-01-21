<?php  
require_once(ROOT. "/static/static.php");

class footerCode{
    function footerMod($t){
        $footer = new staticHelper();
        return $footer->getFooter($t);
    }
}


?>