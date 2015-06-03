<?php
class AuthAction extends Action {
    public function _initialize(){	
    	if(!isset($_COOKIE['userid'])&&!isset($_COOKIE['username'])){
			$this->redirect('/Login/index');
		}
    }
}
?>