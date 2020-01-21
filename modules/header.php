<?php  
require_once(ROOT."/static/static.php");

class headerTag{

    function headerMod($t){
        $header = new staticHelper();
        return $header->getHeader($t);
    }

}


?>