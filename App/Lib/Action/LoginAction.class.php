<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function index(){	
    	$this->display();
    }
	public function checkLogin(){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$user = D("user");
	//$User->where('id=8')->find();这里的where 语句要注意一下，如果是其他字段的话后面一定要有单引号
	$userinfo = $user->where("username ='$username'")->find();
	if(!empty($userinfo)){
		if($userinfo['password'] == $password){
					cookie('userid',$userinfo['id'],time()+3600*24);
					cookie('username',$username,time()+3600*24);
					cookie('lastlogintime',time(),time()+3600*24);
					$this->redirect("Index/index");
		}else{
			//echo "<script>alert('密码错误，请重新输入');location.href='index';</script>";
			//$this->error('密码出错，请重新输入！');
			$this->assign("errorMsg","密码错误，请重新输入！");
			$this->display("index");
		}
	}else{
	//echo "<script>alert('邮箱不存在！');location.href='index';</script>";
	//$this->error('邮箱不存在！');
		$this->assign("errorMsg","邮箱不存在！");
		$this->display("index");
		}
	}

	public function Logout(){
	//注销cookie
		cookie('userid',null);
		cookie('username',null);
		cookie('lastlogintime',null);
		echo "<script>  
			if (confirm('确认要退出系统？')) {
				location.href='index';   
			}else {
				window.history.back(-1);
			}
			</script>";
	}
}
?>