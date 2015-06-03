<?php
class UserModel extends Model{
  // 自动验证设置
    protected $_validate = array(
        array('username','require','用户名必须填写！',1),
        array('username','email','邮箱格式错误！',2),
        array('username','','用户名已经存在！',0,'unique',1),
    );
    //自动填充设置
    protected $_auto = array(
        array('regdate','time',self::MODEL_INSERT,'function'),
        array('password','md5',self::MODEL_INSERT,'function'),
    );
public function register($username,$password){
$sql="insert into log_user(username,password,regdate) values ('".$username."','".$password."',".time().")";

}


}
?>