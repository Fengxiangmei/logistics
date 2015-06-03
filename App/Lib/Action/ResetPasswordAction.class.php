<?php
// 本类由系统自动生成，仅供测试用途
class ResetPasswordAction extends Action {
    public function index(){

		$this->display();
		
	}
	public function repass(){
		require_once('class.phpmailer.php');
		$username=$_POST['username'];
		if(!empty($username)){ 	
			$token_exptime =base64_encode( time()+60*60*24);//过期时间为24小时后
			$token =base64_encode($username);
			$server='http://'.$_SERVER['SERVER_NAME']; 
			$site=$server."/logistics/index.php/ResetPassword/active?verify=".$token."&time=".$token_exptime;
			$content="亲爱的用户，请点击链接来重置密码<br/><a href='".$site."' target='_blank'>
							".$site."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。<br/>
							如果此次重置密码请求非本人所发，请忽略本邮件。<br/>
							<p style='text-align:right'>-------- 卷烟绿色物流评价分析决策支持系统.com 敬上</p>";
								
							
			$mail = new PHPMailer(); //实例化
			$mail->IsSMTP(); // 启用SMTP
			$mail->Host = "smtp.163.com"; //SMTP服务器 以163邮箱为例子
			$mail->Port = 25;  //邮件发送端口
			$mail->SMTPAuth   = true;  //启用SMTP认证

			$mail->CharSet  = "UTF-8"; //字符集
			$mail->Encoding = "base64"; //编码方式

			$mail->Username = "readdo@163.com";  //你的邮箱
			$mail->Password = "readdo2013";  //你的密码
			$mail->Subject = "卷烟绿色物流评价分析决策支持系统----用户密码重置"; //邮件标题

			$mail->From = "readdo@163.com";  //发件人地址（也就是你的邮箱）
			$mail->FromName = "卷烟绿色物流";  //发件人姓名

			$address = $username;//收件人email
			$mail->AddAddress($address, "亲");//添加收件人（地址，昵称）

								
			$mail->IsHTML(true); //支持html格式内容
								
			$mail->Body =$content; //邮件主体内容

									//发送
			if(!$mail->Send()) {
									
				echo "发送邮件失败: ". $mail->ErrorInfo;
			} else {
				
				echo "<script>alert('邮件发送成功,请登入邮箱点击重置密码链接！');window.history.back(-1);</script>";
			}						
				//$this->redirect("login");
		}else{
		echo "请输入邮箱！";
		}
		
	}
	
	public function active(){ 
	session_start();
	if(isset($_POST['password'])&&isset($_POST['repass'])){  	
		$password=md5($_POST['password']);
		$User = M("user");
		 // 需要更新的数据
		$data['password'] =$password;
		// 更新的条件
		$condition['username'] =  $_SESSION['repass'];
		$result = $User->where($condition)->save($data);
	
		if($result){
			echo "<script>alert('重置密码成功！即将为您跳转到登录页面。');location.href='../login';</script>";
		} else{
			echo "<script>alert('重置密码失败！请稍后在重置。');location.href='active';</script>";
		}
		 
	}else {	
		$verify_username=base64_decode($_GET['verify']);
		$time=base64_decode($_GET['time']);	
		 $_SESSION['repass']=$verify_username;
		 //echo  $_SESSION['repass'];
		$now= time();
		$flag=$time- $now;
		if($flag>(60*60*24)){
			echo "<script>alert('重置密码有效期已过！即将为您跳转到登录页面。');location.href='../login';</script>";
		 }else{
		 $this->display("active");
		}
	}
	}
	public function update(){
		
	}
}
?>