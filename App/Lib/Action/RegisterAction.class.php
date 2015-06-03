<?php
// 本类由系统自动生成，仅供测试用途
class RegisterAction extends Action {
    public function index(){
    		if(isset($_POST['username'])&&isset($_POST['password'])){
		
				$username=$_POST['username'];
				$password=md5($_POST['password']);
				header("Content-Type:text/html; charset=utf-8");
				$Dao = M("User");	// 实例化模型类
				$condition['username']= $username;
				$res= $Dao->where($condition)->select();
				if(empty($res)){ //无重名
					// 数据对象赋值
					$Dao->username = $username;
					$Dao->password =$password;
					$Dao->regdate =date('y-m-d h:i:s',time());

					// 写入数据
					if($lastInsId = $Dao->add()){
						echo "<script>alert('注册成功');location.href='../login';</script>";
					} else {
						//$this->error('数据写入错误！');
							echo "<script>alert('数据写入错误');location.href='index';</script>";
					}
				}else{
					
					echo "<script>alert('此邮箱已存在');location.href='index';</script>";
				
				}
		}else{
		
			$this->display();
		
		}
    }
    public function add()
    {
	
	}
}
?>