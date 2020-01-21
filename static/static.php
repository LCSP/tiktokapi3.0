<?php

/**
 * Author: LCSP -> https://github.com/LCSP
 * Version: -.-.-
 * Date: 01/09/2020
 * 
 * This class contains the getters and setters for each html module
 * Modules:
 *      HEADER -> regular static header
 *      INDEXBODY -> landing index
 *      FOOTER -> regular static footer
 *      USERSEARCHBODY -> regular user search body
 * Getters:
 *      getHeader($t) -> @t text that will replace editable field -> returns header module
 *      getindexBody() -> returns indexbody module
 *      getFooter() -> returns footer module
 *      getUserSearchBody() -> returns the userSearchBody module
 * Setters:
 *      aboutText($s) -> @s text that will change "$aboutText" var;
 *      footerText($s) -> @s text that will change "$footerText" var;
 * Comments Guide:
 *      text vars -> Section that contains default text vars and their setters
 *      html code -> Section that contains html code for each module (refer to name)
 *      getters -> Section that contains getters for each module
 */

class staticHelper{

    //text vars
    /**
     * These vars are only text vars that are used in their respective sections (refer to var name).
     * Each one has a setter function after (@s is the text that should replace the default one) 
     */
    
    public $aboutText = "TikTokApi lets you search users to see their videos/likes, their followers and even who are they following!<br /> It also lets you search hashtags and sound where you can see the videos that were created with them!";
    function aboutText($s){
        $this->aboutText = $s;
        return true;
    }

    public $footerText = "TikTokApi.ga cc";
    function footerText($s){
        $this->footerText = $s;
        return true;
    }
    //text vars

    //links vars
    //{CURSOR} - {KEYWORD} - {RND_DID}
    public $userSearchUrl = "USER SEARCH URL"; //Contact me if you need this
    //{CURSOR} - {USER_ID} - {RND_DID}
    public $userVideosUrl = "USER VIDEOS URL"; //Contact me if you need this
    //{USER_ID} - {RND_DID}
    public $userInfoUrl = "USER INFO URL"; //Contact me if you need this
    //links vars
    
    //html code
    /**
     * These vars have the html code for each module (refer to var name to know for what modules are for)
     * If it has a comment "editable" it means that this variable has a editable filed (the editable/s field
     * should be after "editable")
     * These variables CAN'T be changed from code
     */

    
    //editable "{ABOUT_TEXT}"
    public $header = <<<'EOD'
        <header>
        <div class="bg-dark collapse" id="navbarHeader" style="">
            <div class="container">
            <div class="row">
                <div class="col-sm-8 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">
                    {ABOUT_TEXT}
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
            <a
                href="https://tik-tok.ga"
                class="navbar-brand d-flex align-items-center"
            >
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-2"
                >
                <path
                    d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"
                ></path>
                <circle cx="12" cy="13" r="4"></circle>
                </svg>
                <strong>TikTokApi</strong>
            </a>
            <div style="position: relative; left: 400px">
            <a target="_blank" href="YOUR DISCORD URL"><img height="40" width="120" src="https://i.ya-webdesign.com/images/join-discord-png-13.png"></a>
            </div>
            <div style="position: relative; left: 200px">
            <!--YOUR KOFI WIDGET -->
            </div>
            <button
                class="navbar-toggler collapsed"
                type="button"
                data-toggle="collapse"
                data-target="#navbarHeader"
                aria-controls="navbarHeader"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >           
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </div>
        </header>
    EOD;
    //not editable
    public $indexBody = <<<'EOD'
        <section class="jumbotron text-center bg-dark">
            <div class="container">
            <h1
                class="jumbotron-heading"
                style="border-radius: 25px; background: rgb(73, 73, 73); padding: 10px; width: 50%; height: 100%; margin-left: 25%;"
            >
                TikTokApi
            </h1>
            <p>By <a href="https://github.com/LCSP" target="_blank">LCSP</a></p>
            <form action="estelar.php" method="post">
                <p class="lead text-muted">
                    <input
                    type="search"
                    class="form-control"
                    id="tb_search"
                    aria-describedby="searchHelp"
                    placeholder="Search Username, Hashtag or Music"
                    name="keyword"
                    />
                </p>
                <p>
                    <input class="btn btn-primary my-2" type="submit" value="User Search" name="submit_one">
                    <input disabled class="btn btn-primary my-2" type="submit" value="Hashtag Search" name="submit_one">
                    <input disabled class="btn btn-primary my-2" type="submit" value="Sound Search" name="submit_one">                   
                </p>
            </form>
            </div>
        </section>
    EOD;
    //editable "{FOOTER_TEXT}"
    public $footer = <<<'EOD'
        <div class="container">
            <p class="float-right">
            <a href="#">See this on Github</a>
            </p>
            <p>
            {FOOTER_TEXT}
            </p>
        </div>
        <hr style="border-color: black; margin-top: 25px;">
    EOD;
    //editable "{KEYWORD}"
    public $searchBody = <<<'EOD'
        <section class="jumbotron text-center bg-dark">
            <div class="container">
            <div class="alert alert-dismissible alert-primary">
                <h4 class="alert-heading" style="margin-left: 25px; margin-top: 5px; margin-bottom: 5px;" >Search Results for: {KEYWORD}</h4>
            </div>
            </div>
        </section>
    EOD;
    //editable "{ROW_ITEM} - {NEXT_CURSOR} - {LAST_CURSOR}"
    public $searchContainer = <<<'EOD'
        <div class="album py-5 bg-dark">
            <div class="container">
                <div class="row">
                {ROW_ITEM}               
            </div>
            <div style="text-align: center;">
            <div style="display: inline-block;">
                <ul class="pagination">
                    <li class="page-item">
                    <form method="post">
                        <input type="submit" value="&laquo;" name="pagination" class="page-link">
                        <input hidden name="cursor" value="{LAST_CURSOR}">
                        <input hidden name="submit_one" value="{SEARCH_TYPE}">
                        <input hidden name="keyword" value="{KEYWORD}">
                    </form>
                    </li>
                    <li class="page-item">
                    <form method="post">
                        <input type="submit" value="&raquo;" name="pagination" class="page-link">
                        <input hidden name="cursor" value="{NEXT_CURSOR}">
                        <input hidden name="submit_one" value="{SEARCH_TYPE}">
                        <input hidden name="keyword" value="{KEYWORD}">
                    </form>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        
        
    EOD;
    //editable {IMAGE_SRC} - {USER_AT} - {USER_UNIQUE_ID} - {USER_DESC} - {FOTTER_TEXT} - {USER_ID} -{JS}
    public $rowItem = <<<'EOD'
    
        <div class="col-md-4">
        <form action="../estelar.php">
            <div type="submit" onclick="{JS}" class="card mb-4 box-shadow">
                <img
                class="card-img-top"
                src="{IMAGE_SRC}"
                />
                <input hidden value="{USER_ID}" name="uid">
                <div class="card-body">
                    <p class="card-text">
                        <span style="font-weight: bold;">{USER_AT}</span>
                        <span style="font-style: italic;">@{USER_UNIQUE_ID}</span>
                        <p style="font-size: 12px;">{USER_DESC}</p>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">{FOTTER_TEXT}</small>
                    </div>
                </div>
            </div>
            </form>
        </div>
        
    EOD;
    //editable {IMAGE_SRC} - {USER_DESC} - {FOTTER_TEXT} - {USER_ID} -{JS}
    public $rowItemPost = <<<'EOD'
    
        <div class="col-md-4">
            <div type="submit" onclick="{JS}" class="card mb-4 box-shadow">
                <img
                class="card-img-top"
                src="{IMAGE_SRC}"
                />
                <input hidden value="{USER_ID}" name="uid">
                <div class="card-body">
                    <p class="card-text">
                        <p style="font-size: 12px;">{USER_DESC}</p>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">{FOTTER_TEXT}</small>
                    </div>
                </div>
            </div>
        </div>
        
    EOD;
    //editable {IMAGE_SRC} - {USER_DESC} - {FOTTER_TEXT} - {USER_ID} -{JS}
    public $rowItemAd = <<<'EOD'
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
            <!-- YOUR BANNER SCRIPT -->
                    <p class="card-text">
                        <p style="font-size: 12px;">This ad helps to pay the hosting.</p>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Advertising</small>
                    </div>
                </div>
            </div>
        </div>
        
    EOD;
    //editable {IMG_URL} - {USER_NICK} - {USER_DESC}
    public $postListHead = <<<'EOD'
        <section class="jumbotron text-center bg-dark">
            <div class="container">
                <div class="alert alert-dismissible alert-primary">
                <div class="container">
                    <div class="row" style="text-align: left;">
                        <div class="col-sm">
                        <img width="220" height="220" src="{IMG_URL}" class="rounded-circle"> 
                        </div>
                        <div class="col-sm">
                        <h1>{USER_NICK}</h1>
                        <p>{USER_DESC}</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    EOD;
    //editable "{ROW_ITEM} - {NEXT_CURSOR} - {LAST_CURSOR} - {KEYWORD} - {USR_IMG} - {USR_DESC} - {USR_NICK}"
    public $postsContainer = <<<'EOD'
        <div class="album py-5 bg-dark">
            <div class="container">
                <div class="row">
                {ROW_ITEM}               
            </div>
            <div style="text-align: center;">
            <div style="display: inline-block;">
                <ul class="pagination">
                    <li class="page-item">
                    <form method="post" action="../estelar.php">
                        <input type="submit" value="&laquo;" name="pagination" class="page-link">
                        <input hidden name="cursor" value="{LAST_CURSOR}">
                        <input hidden name="keyword" value="{KEYWORD}">
                        <input hidden name="usr_img" value="{USR_IMG}">
                        <input hidden name="usr_desc" value="{USR_DESC}">
                        <input hidden name="usr_nick" value="{USR_NICK}">
                    </form>
                    </li>
                    <li class="page-item">
                    <form method="post" action="../estelar.php">
                        <input type="submit" value="&raquo;" name="pagination" class="page-link">
                        <input hidden name="cursor" value="{NEXT_CURSOR}">
                        <input hidden name="keyword" value="{KEYWORD}">
                        <input hidden name="usr_img" value="{USR_IMG}">
                        <input hidden name="usr_desc" value="{USR_DESC}">
                        <input hidden name="usr_nick" value="{USR_NICK}">
                    </form>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <hr style="border-color: black; margin-top: 25px;">
        
    EOD;
    //
    public $errorAlert = <<<'EOD'
        <div class="album py-5 bg-dark">
                <div class="container">
                    <div class="alert alert-dismissible alert-danger">
                        <strong>Oh snap!</strong> Looks like something went wrong. T_T Try reloading the page.
                    </div>               
                </div>
        </div>
            <hr style="border-color: black; margin-top: 25px;">
        
    EOD;
    
    //html code

    //getters
    /**
     * These functions expose the getters to get from any other file the html vars.
     * If a function has an argument called "t" it means that it accepts a text to replace the default
     * one of the respective module.
     */
    public function getHeader($t){
        if($t != ''){ //Checks if the default text wants to be changed
            $this->aboutText($t);
        }
        return str_replace("{ABOUT_TEXT}",$this->aboutText, $this->header); //replace editable field
    }

    public function getindexBody(){
        return($this->indexBody); //Returns html code (since is not editable it doesn't do a replace)
    }

    public function getFooter($t){
        if($t != ''){ //Checks if the default text wants to be changed
            $this->footerText($t);
        }
        return str_replace("{FOOTER_TEXT}",$this->footerText, $this->footer); //replace editable field
    }

    public function getSearchBody($t = ''){
        return str_replace("{KEYWORD}",$t, $this->searchBody); //replace editable field
    }

    public function getSearchContainer($t = '', $lastCursor = "0", $nextCursor = "0", $searchType = "", $keyword = ""){
        $cont = str_replace("{ROW_ITEM}",$t, $this->searchContainer); //replace editable field
        $cont = str_replace("{LAST_CURSOR}", $lastCursor, $cont); //replace editable field
        $cont = str_replace("{NEXT_CURSOR}", $nextCursor, $cont); //replace editable field
        $cont = str_replace("{SEARCH_TYPE}", $searchType, $cont); //replace editable field
        $cont = str_replace("{KEYWORD}", $keyword, $cont); //replace editable field
        return $cont;
    }

    public function getRowItem($img = "", $iText = "", $fText = "", $uid = "", $js = ""){
        $item = $this->rowItem;
        $item = str_replace("{IMAGE_SRC}",$img, $item);
        $item = str_replace("{USER_AT}",$iText[0], $item);
        $item = str_replace("{USER_UNIQUE_ID}",$iText[1], $item);
        $item = str_replace("{USER_DESC}",$iText[2], $item);
        $item = str_replace("{FOTTER_TEXT}",$fText, $item);
        $item = str_replace("{USER_ID}",$uid, $item);
        $item = str_replace("{JS}",$js, $item);
        return  $item; 
    }

    public function getRowPostItem($img = "", $iText = "", $fText = "", $uid = "", $js = ""){
        $item = $this->rowItemPost;
        $item = str_replace("{IMAGE_SRC}",$img, $item);
        $item = str_replace("{USER_DESC}",$iText, $item);
        $item = str_replace("{FOTTER_TEXT}",$fText, $item);
        $item = str_replace("{USER_ID}",$uid, $item);
        $item = str_replace("{JS}",$js, $item);
        return  $item; 
    }

    public function getRowItemAd(){
        return $this->rowItemAd;
    }

    public function getPostHead($img = "", $nick = "", $desc = "", $mode=""){
        $head = $this->postListHead;
        $head = str_replace("{IMG_URL}", $img, $head);
        $head = str_replace("{USER_NICK}", $nick, $head);
        if($mode == ''){
            $desc = "@" . $desc[0] . 
            "<br>Bio: " . $desc[1] . 
            "<br>Followers: " . $desc[2] . 
            "<br>Following: " . $desc[3]; 
        }
        $head = str_replace("{USER_DESC}", $desc, $head);
        return [$head, $desc];
    }

    public function getPostsContainer($t = "", $img = "", $nick = "", $desc = "", $uid = "", $lastCursor = "0", $nextCursor = "0"){
        $cont = str_replace("{ROW_ITEM}",$t, $this->postsContainer); //replace editable field
        $cont = str_replace("{LAST_CURSOR}", $lastCursor, $cont); //replace editable field
        $cont = str_replace("{NEXT_CURSOR}", $nextCursor, $cont); //replace editable field
        $cont = str_replace("{KEYWORD}", $uid, $cont); //replace editable field
        $cont = str_replace("{USR_IMG}", $img, $cont); //replace editable field
        $cont = str_replace("{USR_DESC}", $desc, $cont); //replace editable field
        $cont = str_replace("{USR_NICK}", $nick, $cont); //replace editable field
        return $cont;
    }
    
    public function getErrorAlert(){
        return $this->errorAlert;
    }

    public function getUserSearchUrl(){
        $url = str_replace("{RND_DID}", getName(), $this->userSearchUrl);
        return $url;
    }

    public function getUserVideosUrl(){
        $url = str_replace("{RND_DID}", getName(), $this->userVideosUrl);
        return $url;
    }

    public function getUserInfoUrl(){
        $url = str_replace("{RND_DID}", getName(), $this->userInfoUrl);
        return $url;
    }

    public function getUserIp(){
        return get_client_ip_server();
    }

    //getters


}

//Function that generates a random string of 19 integers
function getName($n = 19) { 
    $characters = '0123456789'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
//Function that returns the user ip
function get_client_ip_server() {
	$ipaddress = '';
	if (getenv('HTTP_CLIENT_IP'))
		$ipaddress = getenv('HTTP_CLIENT_IP');
	else if(getenv('HTTP_X_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	else if(getenv('HTTP_X_FORWARDED'))
		$ipaddress = getenv('HTTP_X_FORWARDED');
	else if(getenv('HTTP_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_FORWARDED_FOR');
	else if(getenv('HTTP_FORWARDED'))
		$ipaddress = getenv('HTTP_FORWARDED');
	else if(getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
	else
		$ipaddress = 'UNKNOWN';
 
	return $ipaddress;
}




?>