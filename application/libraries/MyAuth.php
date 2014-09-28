<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once '/amember/library/Am/Lite.php';
/**
 * Description of auth
 *
 * @author nitish
 */
class MyAuth {

    public function isLogin() {
        return Am_Lite::getInstance()->isLoggedIn();
    }
    
    public function getUserId() {
        $user = Am_Lite::getInstance()->getUser();
        
        return $user['user_id'];
    }
    
    public function onlyLogin() {
         Am_Lite::getInstance()->checkAccess(Am_Lite::ONLY_LOGIN);
    }

    public function userName(){
        return Am_Lite::getInstance()->getName();   
    }

}

?>
