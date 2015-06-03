<?php
// 本类由系统自动生成，仅供测试用途
class CommentAction extends AuthAction {
    public function index(){
    	$this->display();
	}
	public function result(){
	 $year= $_POST['time'];
	$place= $_POST['place'];
	$quarter=$_POST['quarter'];
	$Dao= M('com_warehousing');
	$Dao2= M('com_sorting');
	$Dao3= M('com_transportation');
	$Dao4= M('com_comprehensive');
	//进入数据库取数据$in[11],........如果存在则继续，不存在则报数据没有录入
	$condition['year']=$year;
	$condition['quarter']=$quarter;
	$condition['place'] =$place;
	$res= $Dao->where($condition)->select();
	$res2= $Dao2->where($condition)->select();
	$res3= $Dao3->where($condition)->select();
	$res4= $Dao4->where($condition)->select();
	if(!empty($res)&&!empty($res2)&&!empty($res2)&&!empty($res2)){         //判断数据库中是否存在数据
		setcookie('year',$year);
		setcookie('place',$place);
		setcookie('quarter',$quarter);
			if($_POST['space1']==""&&$_POST['space']==""&&$_POST['spa']==""&&$_POST['sp']==""){       //判断权重系数等是否录入
			//默认权重
			$U[0]= 0.11;
			$U[1]= 0.32;
			$U[2]= 0.37;
			$U[3]= 0.20;
			
			$u[11]= 0.10;  $min[11]=0.05;   $max[11]=0.01;        $in[11]=$res[0]['damage_w'];
			$u[12]=0.324; $min[12]=55;      $max[12]=88;      $in[12]=$res[0]['use'];
			$u[13]=0.576; $min[13]=0.35;   $max[13]=0.25;   $in[13]=$res[0]['electric_w'];	
			
			$u[21]= 0.03;$min[21]=0.05;    $max[21]=0.01;         $in[21]=$res2[0]['damage_s'];
			$u[22]= 0.15;$min[22]=0.6;      $max[22]=0.5;      $in[22]=$res2[0]['electric_s'];
			$u[23]= 0.09;$min[23]=0.01;    $max[23]=0.005;         $in[23]=$res2[0]['mistake'];
			$u[24]= 0.09;$min[24]=72;       $max[24]=96;       $in[24]=$res2[0]['operation'];
			$u[25]= 0.09;$min[25]=2.7692;$max[25]=3.692;  $in[25]=$res2[0]['average_sort'];
			$u[26]= 0.09;$min[26]=94.62;  $max[26]=95.81;  $in[26]=$res2[0]['effective_op'];
			$u[27]= 0.15;$min[27]=70;       $max[27]=90;       $in[27]=$res2[0]['box_qualified'];
			$u[28]= 0.10;$min[28]=65;       $max[28]=45;       $in[28]=$res2[0]['dm'];
			$u[29]= 0.11;$min[29]=0;         $max[29]=50;       $in[29]=$res2[0]['PE_re'];
			$u[30]= 0.10;$min[30]=60;       $max[30]=85;       $in[30]=$res2[0]['box_re'];
			
			$u[31]= 0.25;$min[31]=0.6;        $max[31]=0.50;    $in[31]=$res3[0]['oil'];
			$u[32]= 0.10;$min[32]=0.05;      $max[32]=0.01;         $in[32]=$res3[0]['damage'];
			$u[33]= 0.10;$min[33]=0;           $max[33]=100;     $in[33]=$res3[0]['accurate'];
			$u[34]= 0.25;$min[34]=65;         $max[34]=90;       $in[34]=$res3[0]['load'];
			$u[35]= 0.05;$min[35]=0;           $max[35]=100;     $in[35]=$res3[0]['GPS_use'];
			$u[36]= 0.25;$min[36]=18;         $max[36]=14.4;    $in[36]=$res3[0]['oil_hundred'];
			
			$u[41]= 0.15;$min[41]=0;      $max[41]=1;          $in[41]=$res4[0]['auth'];
			$u[42]= 0.35;$min[42]=1.06; $max[42]=0.78;     $in[42]=$res4[0]['money']; 
			$u[43]= 0.25;$min[43]=0;      $max[43]=1;          $in[43]=$res4[0]['talent'];
			$u[44]= 0.25;$min[44]=20;    $max[44]=90;        $in[44]=$res4[0]['identification'];
		
			}else{
			//自定义权重
			$U[0]= $_POST['space1'];
			$U[1]= $_POST['space'];
			$U[2]= $_POST['spa'];
			$U[3]= $_POST['sp'];
			
			
			$u[11]=$_POST['a1'];     $min[11]=$_POST['a3'];     $max[11]=$_POST['a2'];   $in[11]=$res[0]['damage_w'];
			$u[12]=$_POST['a4'];     $min[12]=$_POST['a6'];     $max[12]=$_POST['a5'];   $in[12]=$res[0]['use'];
			$u[13]=$_POST['a7'];     $min[13]=$_POST['a9'];     $max[13]=$_POST['a8'];   $in[13]=$res[0]['electric_w'];	
			
			$u[21]=$_POST['b51'];     $min[21]=$_POST['b53'];     $max[21]=$_POST['b52'];       $in[21]=$res2[0]['damage_s'];
			$u[22]=$_POST['b54'];     $min[22]=$_POST['b56'];     $max[22]=$_POST['b55'];       $in[22]=$res2[0]['electric_s'];
			$u[23]=$_POST['b1'];       $min[23]=$_POST['b3'];       $max[23]=$_POST['b2'];         $in[23]=$res2[0]['mistake'];
			$u[24]=$_POST['b4'];       $min[24]=$_POST['b6'];       $max[24]=$_POST['b5'];         $in[24]=$res2[0]['operation'];
			$u[25]=$_POST['b7'];       $min[25]=$_POST['b9'];       $max[25]=$_POST['b8'];         $in[25]=$res2[0]['average_sort'];
			$u[26]=$_POST['b10'];     $min[26]=$_POST['b12'];     $max[26]=$_POST['b11'];       $in[26]=$res2[0]['effective_op'];
			$u[27]=$_POST['b57'];     $min[27]=$_POST['b59'];     $max[27]=$_POST['b58'];       $in[27]=$res2[0]['box_qualified'];
			$u[28]=$_POST['b13'];     $min[28]=$_POST['b15'];      $max[28]=$_POST['b14'];       $in[28]=$res2[0]['dm'];
			$u[29]= $_POST['b16'];    $min[29]=$_POST['b18'];     $max[29]=$_POST['b17'];       $in[29]=$res2[0]['PE_re'];
			$u[30]= $_POST['b19'];    $min[30]=$_POST['b21'];     $max[30]=$_POST['b20'];       $in[30]=$res2[0]['box_re'];
			
			$u[31]= $_POST['c1'];      $min[31]= $_POST['c3'];        $max[31]= $_POST['c2'];       $in[31]=$res3[0]['oil'];
			$u[32]= $_POST['c51'];    $min[32]= $_POST['c53'];      $max[32]= $_POST['c52'];     $in[32]=$res3[0]['damage'];
			$u[33]= $_POST['c4'];      $min[33]= $_POST['c6'];        $max[33]= $_POST['c5'];       $in[33]=$res3[0]['accurate'];
			$u[34]= $_POST['c7'];      $min[34]= $_POST['c9'];        $max[34]= $_POST['c8'];       $in[34]=$res3[0]['load'];
			$u[35]= $_POST['c10'];    $min[35]= $_POST['c12'];      $max[35]= $_POST['c11'];     $in[35]=$res3[0]['GPS_use'];
			$u[36]= $_POST['c13'];    $min[36]= $_POST['c15'];      $max[36]= $_POST['c14'];     $in[36]=$res3[0]['oil_hundred'];
			
			$u[41]= $_POST['d1'];      $min[41]=0;                           $max[41]=1;                          $in[41]=$res4[0]['auth'];
			$u[42]= $_POST['d7'];      $min[42]= $_POST['d9'];        $max[42]= $_POST['d8'];       $in[42]=$res4[0]['money'];
			$u[43]= $_POST['d13'];    $min[43]=0;                           $max[43]=1;                          $in[43]=$res4[0]['talent'];
			$u[44]= $_POST['d16'];    $min[44]=$_POST['d18'];       $max[44]=$_POST['d17'];      $in[44]=$res4[0]['identification'];

			}
		for($i=0;$i<4;$i++){setcookie("U".$i,$U[$i]);}
		for($i=11;$i<14;$i++){
				setcookie("u".$i,$u[$i]);
				setcookie("min".$i,$min[$i]);
				setcookie("max".$i,$max[$i]);
				setcookie("in".$i,$in[$i]);
				}
		for($i=21;$i<31;$i++){
				setcookie("u".$i,$u[$i]);
				setcookie("min".$i,$min[$i]);
				setcookie("max".$i,$max[$i]);
				setcookie("in".$i,$in[$i]);
				}
		for($i=31;$i<37;$i++){
				setcookie("u".$i,$u[$i]);
				setcookie("min".$i,$min[$i]);
				setcookie("max".$i,$max[$i]);
				setcookie("in".$i,$in[$i]);
				}
		for($i=41;$i<45;$i++){
				setcookie("u".$i,$u[$i]);
				setcookie("min".$i,$min[$i]);
				setcookie("max".$i,$max[$i]);
				setcookie("in".$i,$in[$i]);
				}		
		$this->tri_model($max,$min,$in,$u,$U);
		
		
		echo "<script>alert('权重系数设置成功！');location.href='index';</script>";
		
		
		}else{
		echo "<script>alert('评价的数据不存在，请重新选择条件！');location.href='default';</script>";
		}
	}	

public function result_main(){
	$year= $_COOKIE['year'];//=2014;
	$place= $_COOKIE['place'];//"娄底市";
	$quarter=$_COOKIE['quarter'];//1
	for($i=0;$i<4;$i++){ $U[$i]=$_COOKIE["U".$i]; }
	for($i=11;$i<14;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=21;$i<31;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=31;$i<37;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=41;$i<45;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	$Dao= M('com_warehousing');
	$Dao2= M('com_sorting');
	$Dao3= M('com_transportation');
	$Dao4= M('com_comprehensive');
	//进入数据库取数据$in[11],........如果存在则继续，不存在则报数据没有录入
	$condition['year']=$year;
	$condition['quarter']=$quarter;
	$condition['place'] =$place;
	$res= $Dao->where($condition)->select();
	$res2= $Dao2->where($condition)->select();
	$res3= $Dao3->where($condition)->select();
	$res4= $Dao4->where($condition)->select();
	if(!empty($res)&&!empty($res2)&&!empty($res2)&&!empty($res2)){         //判断数据库中是否存在数据
		//$v,$b,$n,$m隶属度 为一个标号从0开始的二维数组	
		$v=$this->parameter2(11,14,$max,$min,$in);//var_dump($v);
		$b=$this->parameter2(21,31,$max,$min,$in);//var_dump($b);
		$m=$this->parameter2(31,37,$max,$min,$in);//var_dump($m);
		$n=$this->parameter2(41,45,$max,$min,$in);//var_dump($n);
		
		for($i=11;$i<14;$i++){$w1[0][$i-11]=$u[$i];};//var_dump($w1);
		for($i=21;$i<31;$i++){$w2[0][$i-21]=$u[$i];};//var_dump($w2);
		for($i=31;$i<37;$i++){$w3[0][$i-31]=$u[$i];};//var_dump($w3);
		for($i=41;$i<45;$i++){$w4[0][$i-41]=$u[$i];};//var_dump($w4);	
		//评价角度在各评语下的隶属度
		$a1=$this->belong($w1,$v);//var_dump($a1);
		$a2=$this->belong($w2,$b);//var_dump($a2);
		$a3=$this->belong($w3,$m);//var_dump($a3);
		$a4=$this->belong($w4,$n);//var_dump($a4);
		//绿色物流评价
		for($i=0;$i<4;$i++){$W[0][$i]=$U[$i]; };// var_dump($W);
		$V1=$this->change1($a1,$a2,$a3,$a4);//var_dump($V1);
		$V2=$this->change2($a1,$a2,$a3,$a4);//var_dump($V2);
		$V3=$this->change3($a1,$a2,$a3,$a4);//var_dump($V3);
		$V4=$this->change4($a1,$a2,$a3,$a4);//var_dump($V4);
		$V5=$this->change5($a1,$a2,$a3,$a4);//var_dump($V5);
		
		$sum1=$this->belong2($W,$V1);//var_dump($sum1);
		$sum2=$this->belong2($W,$V2);//var_dump($sum2);
		$sum3=$this->belong2($W,$V3);//var_dump($sum3);
		$sum4=$this->belong2($W,$V4);//var_dump($sum4);
		$sum5=$this->belong2($W,$V5);//var_dump($sum5);
		//整体得分
		$S=$sum1[0][0]*100+$sum2[0][0]*80+$sum3[0][0]*60+$sum4[0][0]*40+$sum5[0][0]*20;
		//echo $S;
		//四个评价角度分别得分_
		$first=$a1[0][1]*100+$a1[0][2]*80+$a1[0][3]*60+$a1[0][4]*40+$a1[0][5]*20;
		$second  = $a2[0][1]*100+$a2[0][2]*80+$a2[0][3]*60+$a2[0][4]*40+$a2[0][5]*20;
		$thrid = $a3[0][1]*100+$a3[0][2]*80+$a3[0][3]*60+$a3[0][4]*40+$a3[0][5]*20;
		$fourth = $a4[0][1]*100+$a4[0][2]*80+$a4[0][3]*60+$a4[0][4]*40+$a4[0][5]*20;
		//echo $first."<br/>".$second."<br/>".$thrid."<br/>".$fourth;
		//具体指标得分
		for($i=0;$i<3;$i++){
		$ju[1][$i+1] =$v[$i][1]*100+$v[$i][2]*80+$v[$i][3]*60+$v[$i][4]*40+$v[$i][5]*20;
		}//echo $ju[1][1];echo $ju[1][3];
		for($i=0;$i<10;$i++){
		$ju[2][$i+1] =$b[$i][1]*100+$b[$i][2]*80+$b[$i][3]*60+$b[$i][4]*40+$b[$i][5]*20;
		}//echo $ju[2][1];echo $ju[2][6];
		for($i=0;$i<6;$i++){
		$ju[3][$i+1] =$m[$i][1]*100+$m[$i][2]*80+$m[$i][3]*60+$m[$i][4]*40+$m[$i][5]*20;
		}//echo $ju[3][1];echo $ju[3][6];
		for($i=0;$i<4;$i++){
		$ju[4][$i+1] =$n[$i][1]*100+$n[$i][2]*80+$n[$i][3]*60+$n[$i][4]*40+$n[$i][5]*20;
		}//echo $ju[4][1];echo $ju[4][4]."<br/>";
		//echo $S;
		$this->assign('S',$S);
		$this->assign('sum1',$sum1[0][0]);
		$this->assign('sum2',$sum2[0][0]);
		$this->assign('sum3',$sum3[0][0]);
		$this->assign('sum4',$sum4[0][0]);
		$this->assign('sum5',$sum5[0][0]);
		$this->display("main");
		
		}else{
		echo "<script>alert('评价的数据不存在，请重新选择条件！');location.href='default';</script>";
		}
	}	
	
	
	public function result_angle(){
	$year= $_COOKIE['year'];//=2014;
	$place= $_COOKIE['place'];//"娄底市";
	$quarter=$_COOKIE['quarter'];//1
	for($i=0;$i<4;$i++){ $U[$i]=$_COOKIE["U".$i]; }
	for($i=11;$i<14;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=21;$i<31;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=31;$i<37;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=41;$i<45;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	$Dao= M('com_warehousing');
	$Dao2= M('com_sorting');
	$Dao3= M('com_transportation');
	$Dao4= M('com_comprehensive');
	//进入数据库取数据$in[11],........如果存在则继续，不存在则报数据没有录入
	$condition['year']=$year;
	$condition['quarter']=$quarter;
	$condition['place'] =$place;
	$res= $Dao->where($condition)->select();
	$res2= $Dao2->where($condition)->select();
	$res3= $Dao3->where($condition)->select();
	$res4= $Dao4->where($condition)->select();
	if(!empty($res)&&!empty($res2)&&!empty($res2)&&!empty($res2)){         //判断数据库中是否存在数据
		
		//$v,$b,$n,$m隶属度 为一个标号从0开始的二维数组	
		$v=$this->parameter2(11,14,$max,$min,$in);//var_dump($v);
		$b=$this->parameter2(21,31,$max,$min,$in);//var_dump($b);
		$m=$this->parameter2(31,37,$max,$min,$in);//var_dump($m);
		$n=$this->parameter2(41,45,$max,$min,$in);//var_dump($n);
		
		for($i=11;$i<14;$i++){$w1[0][$i-11]=$u[$i];};//var_dump($w1);
		for($i=21;$i<31;$i++){$w2[0][$i-21]=$u[$i];};//var_dump($w2);
		for($i=31;$i<37;$i++){$w3[0][$i-31]=$u[$i];};//var_dump($w3);
		for($i=41;$i<45;$i++){$w4[0][$i-41]=$u[$i];};//var_dump($w4);	
		//评价角度在各评语下的隶属度
		$a1=$this->belong($w1,$v);//var_dump($a1);
		$a2=$this->belong($w2,$b);//var_dump($a2);
		$a3=$this->belong($w3,$m);//var_dump($a3);
		$a4=$this->belong($w4,$n);//var_dump($a4);
		//绿色物流评价
		for($i=0;$i<4;$i++){$W[0][$i]=$U[$i]; }; //var_dump($W);
		$V1=$this->change1($a1,$a2,$a3,$a4);//var_dump($V1);
		$V2=$this->change2($a1,$a2,$a3,$a4);//var_dump($V2);
		$V3=$this->change3($a1,$a2,$a3,$a4);//var_dump($V3);
		$V4=$this->change4($a1,$a2,$a3,$a4);//var_dump($V4);
		$V5=$this->change5($a1,$a2,$a3,$a4);//var_dump($V5);
		
		$sum1=$this->belong2($W,$V1);//var_dump($sum1);
		$sum2=$this->belong2($W,$V2);//var_dump($sum2);
		$sum3=$this->belong2($W,$V3);//var_dump($sum3);
		$sum4=$this->belong2($W,$V4);//var_dump($sum4);
		$sum5=$this->belong2($W,$V5);//var_dump($sum5);
		//整体得分
		$S=$sum1[0][0]*100+$sum2[0][0]*80+$sum3[0][0]*60+$sum4[0][0]*40+$sum5[0][0]*20;
		//echo $S;
		//四个评价角度分别得分_
		$first=$a1[0][1]*100+$a1[0][2]*80+$a1[0][3]*60+$a1[0][4]*40+$a1[0][5]*20;
		$second  = $a2[0][1]*100+$a2[0][2]*80+$a2[0][3]*60+$a2[0][4]*40+$a2[0][5]*20;
		$thrid = $a3[0][1]*100+$a3[0][2]*80+$a3[0][3]*60+$a3[0][4]*40+$a3[0][5]*20;
		$fourth = $a4[0][1]*100+$a4[0][2]*80+$a4[0][3]*60+$a4[0][4]*40+$a4[0][5]*20;
		//echo $first."<br/>".$second."<br/>".$thrid."<br/>".$fourth;
		//具体指标得分
		for($i=0;$i<3;$i++){
		$ju[1][$i+1] =$v[$i][1]*100+$v[$i][2]*80+$v[$i][3]*60+$v[$i][4]*40+$v[$i][5]*20;
		}//echo $ju[1][1];echo $ju[1][3];
		for($i=0;$i<10;$i++){
		$ju[2][$i+1] =$b[$i][1]*100+$b[$i][2]*80+$b[$i][3]*60+$b[$i][4]*40+$b[$i][5]*20;
		}//echo $ju[2][1];echo $ju[2][6];
		for($i=0;$i<6;$i++){
		$ju[3][$i+1] =$m[$i][1]*100+$m[$i][2]*80+$m[$i][3]*60+$m[$i][4]*40+$m[$i][5]*20;
		}//echo $ju[3][1];echo $ju[3][6];
		for($i=0;$i<4;$i++){
		$ju[4][$i+1] =$n[$i][1]*100+$n[$i][2]*80+$n[$i][3]*60+$n[$i][4]*40+$n[$i][5]*20;
		}//echo $ju[4][1];echo $ju[4][4]."<br/>";
		//echo $S;
		$this->assign('S',$S);
		$this->assign('first',$first);
		$this->assign('second',$second);
		$this->assign('third',$thrid);
		$this->assign('fourth',$fourth);
		$this->display("angle");
		
		}else{
		echo "<script>alert('评价的数据不存在，请重新选择条件！');location.href='default';</script>";
		}
	}	
	
	public function result_point(){
		$year= $_COOKIE['year'];//=2014;
	$place= $_COOKIE['place'];//"娄底市";
	$quarter=$_COOKIE['quarter'];//1
	for($i=0;$i<4;$i++){ $U[$i]=$_COOKIE["U".$i]; }
	for($i=11;$i<14;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=21;$i<31;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=31;$i<37;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=41;$i<45;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	$Dao= M('com_warehousing');
	$Dao2= M('com_sorting');
	$Dao3= M('com_transportation');
	$Dao4= M('com_comprehensive');
	//进入数据库取数据$in[11],........如果存在则继续，不存在则报数据没有录入
	$condition['year']=$year;
	$condition['quarter']=$quarter;
	$condition['place'] =$place;
	$res= $Dao->where($condition)->select();
	$res2= $Dao2->where($condition)->select();
	$res3= $Dao3->where($condition)->select();
	$res4= $Dao4->where($condition)->select();
	if(!empty($res)&&!empty($res2)&&!empty($res2)&&!empty($res2)){         //判断数据库中是否存在数据
		//$v,$b,$n,$m隶属度 为一个标号从0开始的二维数组	
		$v=$this->parameter2(11,14,$max,$min,$in);//var_dump($v);
		$b=$this->parameter2(21,31,$max,$min,$in);//var_dump($b);
		$m=$this->parameter2(31,37,$max,$min,$in);//var_dump($m);
		$n=$this->parameter2(41,45,$max,$min,$in);//var_dump($n);
		
		for($i=11;$i<14;$i++){$w1[0][$i-11]=$u[$i];};//var_dump($w1);
		for($i=21;$i<31;$i++){$w2[0][$i-21]=$u[$i];};//var_dump($w2);
		for($i=31;$i<37;$i++){$w3[0][$i-31]=$u[$i];};//var_dump($w3);
		for($i=41;$i<45;$i++){$w4[0][$i-41]=$u[$i];};//var_dump($w4);	
		//评价角度在各评语下的隶属度
		$a1=$this->belong($w1,$v);//var_dump($a1);
		$a2=$this->belong($w2,$b);//var_dump($a2);
		$a3=$this->belong($w3,$m);//var_dump($a3);
		$a4=$this->belong($w4,$n);//var_dump($a4);
		//绿色物流评价
		for($i=0;$i<4;$i++){$W[0][$i]=$U[$i]; }; //var_dump($W);
		$V1=$this->change1($a1,$a2,$a3,$a4);//var_dump($V1);
		$V2=$this->change2($a1,$a2,$a3,$a4);//var_dump($V2);
		$V3=$this->change3($a1,$a2,$a3,$a4);//var_dump($V3);
		$V4=$this->change4($a1,$a2,$a3,$a4);//var_dump($V4);
		$V5=$this->change5($a1,$a2,$a3,$a4);//var_dump($V5);
		
		$sum1=$this->belong2($W,$V1);//var_dump($sum1);
		$sum2=$this->belong2($W,$V2);//var_dump($sum2);
		$sum3=$this->belong2($W,$V3);//var_dump($sum3);
		$sum4=$this->belong2($W,$V4);//var_dump($sum4);
		$sum5=$this->belong2($W,$V5);//var_dump($sum5);
		//整体得分
		$S=$sum1[0][0]*100+$sum2[0][0]*80+$sum3[0][0]*60+$sum4[0][0]*40+$sum5[0][0]*20;
		//echo $S;
		//四个评价角度分别得分_
		$first=$a1[0][1]*100+$a1[0][2]*80+$a1[0][3]*60+$a1[0][4]*40+$a1[0][5]*20;
		$second  = $a2[0][1]*100+$a2[0][2]*80+$a2[0][3]*60+$a2[0][4]*40+$a2[0][5]*20;
		$thrid = $a3[0][1]*100+$a3[0][2]*80+$a3[0][3]*60+$a3[0][4]*40+$a3[0][5]*20;
		$fourth = $a4[0][1]*100+$a4[0][2]*80+$a4[0][3]*60+$a4[0][4]*40+$a4[0][5]*20;
		//echo $first."<br/>".$second."<br/>".$thrid."<br/>".$fourth;
		//具体指标得分
		for($i=0;$i<3;$i++){
		$ju[1][$i+1] =$v[$i][1]*100+$v[$i][2]*80+$v[$i][3]*60+$v[$i][4]*40+$v[$i][5]*20;
		}//echo $ju[1][1];echo $ju[1][3];
		for($i=0;$i<10;$i++){
		$ju[2][$i+1] =$b[$i][1]*100+$b[$i][2]*80+$b[$i][3]*60+$b[$i][4]*40+$b[$i][5]*20;
		}//echo $ju[2][1];echo $ju[2][6];
		for($i=0;$i<6;$i++){
		$ju[3][$i+1] =$m[$i][1]*100+$m[$i][2]*80+$m[$i][3]*60+$m[$i][4]*40+$m[$i][5]*20;
		}//echo $ju[3][1];echo $ju[3][6];
		for($i=0;$i<4;$i++){
		$ju[4][$i+1] =$n[$i][1]*100+$n[$i][2]*80+$n[$i][3]*60+$n[$i][4]*40+$n[$i][5]*20;
		}//echo $ju[4][1];echo $ju[4][4]."<br/>";
		//echo $S;
		$this->assign('S',$S);
		$this->assign('first',$first);
		$this->assign('second',$second);
		$this->assign('third',$thrid);
		$this->assign('fourth',$fourth);
		
		$this->assign("u11",$ju[1][1]);
		$this->assign("u12",$ju[1][2]);
		$this->assign("u13",$ju[1][3]);
		
		$this->assign("u21",$ju[2][1]);
		$this->assign("u22",$ju[2][2]);
		$this->assign("u23",$ju[2][3]);
		$this->assign("u24",$ju[2][4]);
		$this->assign("u25",$ju[2][5]);
		$this->assign("u26",$ju[2][6]);
		$this->assign("u27",$ju[2][7]);
		$this->assign("u28",$ju[2][8]);
		$this->assign("u29",$ju[2][9]);
		$this->assign("u30",$ju[2][10]);
		
		$this->assign("u31",$ju[3][1]);
		$this->assign("u32",$ju[3][2]);
		$this->assign("u33",$ju[3][3]);
		$this->assign("u34",$ju[3][4]);
		$this->assign("u35",$ju[3][5]);
		$this->assign("u36",$ju[3][6]);
		
		$this->assign("u41",$ju[4][1]);
		$this->assign("u42",$ju[4][2]);
		$this->assign("u43",$ju[4][3]);
		$this->assign("u44",$ju[4][4]);
		
		$this->display("point");
		
		}else{
		echo "<script>alert('评价的数据不存在，请重新选择条件！');location.href='default';</script>";
		}
	}	
	
		
	public function analysis_main(){
	$year= $_COOKIE['year'];//=2014;
	$place= $_COOKIE['place'];//"娄底市";
	$quarter=$_COOKIE['quarter'];//1
	for($i=0;$i<4;$i++){ $U[$i]=$_COOKIE["U".$i]; }
	for($i=11;$i<14;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=21;$i<31;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=31;$i<37;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=41;$i<45;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	$Dao= M('com_warehousing');
	$Dao2= M('com_sorting');
	$Dao3= M('com_transportation');
	$Dao4= M('com_comprehensive');
	//进入数据库取数据$in[11],........如果存在则继续，不存在则报数据没有录入
	$condition['year']=$year;
	$condition['quarter']=$quarter;
	$condition['place'] =$place;
	$res= $Dao->where($condition)->select();
	$res2= $Dao2->where($condition)->select();
	$res3= $Dao3->where($condition)->select();
	$res4= $Dao4->where($condition)->select();
	if(!empty($res)&&!empty($res2)&&!empty($res2)&&!empty($res2)){         //判断数据库中是否存在数据
				//$v,$b,$n,$m隶属度 为一个标号从0开始的二维数组	
		$v=$this->parameter2(11,14,$max,$min,$in);//var_dump($v);
		$b=$this->parameter2(21,31,$max,$min,$in);//var_dump($b);
		$m=$this->parameter2(31,37,$max,$min,$in);//var_dump($m);
		$n=$this->parameter2(41,45,$max,$min,$in);//var_dump($n);
		
		for($i=11;$i<14;$i++){$w1[0][$i-11]=$u[$i];};//var_dump($w1);
		for($i=21;$i<31;$i++){$w2[0][$i-21]=$u[$i];};//var_dump($w2);
		for($i=31;$i<37;$i++){$w3[0][$i-31]=$u[$i];};//var_dump($w3);
		for($i=41;$i<45;$i++){$w4[0][$i-41]=$u[$i];};//var_dump($w4);	
		//评价角度在各评语下的隶属度
		$a1=$this->belong($w1,$v);//var_dump($a1);
		$a2=$this->belong($w2,$b);//var_dump($a2);
		$a3=$this->belong($w3,$m);//var_dump($a3);
		$a4=$this->belong($w4,$n);//var_dump($a4);
		//绿色物流评价
		for($i=0;$i<4;$i++){$W[0][$i]=$U[$i]; }; //var_dump($W);
		$V1=$this->change1($a1,$a2,$a3,$a4);//var_dump($V1);
		$V2=$this->change2($a1,$a2,$a3,$a4);//var_dump($V2);
		$V3=$this->change3($a1,$a2,$a3,$a4);//var_dump($V3);
		$V4=$this->change4($a1,$a2,$a3,$a4);//var_dump($V4);
		$V5=$this->change5($a1,$a2,$a3,$a4);//var_dump($V5);
		
		$sum1=$this->belong2($W,$V1);//var_dump($sum1);
		$sum2=$this->belong2($W,$V2);//var_dump($sum2);
		$sum3=$this->belong2($W,$V3);//var_dump($sum3);
		$sum4=$this->belong2($W,$V4);//var_dump($sum4);
		$sum5=$this->belong2($W,$V5);//var_dump($sum5);
		//整体得分
		$S=$sum1[0][0]*100+$sum2[0][0]*80+$sum3[0][0]*60+$sum4[0][0]*40+$sum5[0][0]*20;
		//echo $S;
		//四个评价角度分别得分_
		$first=$a1[0][1]*100+$a1[0][2]*80+$a1[0][3]*60+$a1[0][4]*40+$a1[0][5]*20;
		$second  = $a2[0][1]*100+$a2[0][2]*80+$a2[0][3]*60+$a2[0][4]*40+$a2[0][5]*20;
		$thrid = $a3[0][1]*100+$a3[0][2]*80+$a3[0][3]*60+$a3[0][4]*40+$a3[0][5]*20;
		$fourth = $a4[0][1]*100+$a4[0][2]*80+$a4[0][3]*60+$a4[0][4]*40+$a4[0][5]*20;
		//echo $first."<br/>".$second."<br/>".$thrid."<br/>".$fourth;
		//具体指标得分
		for($i=0;$i<3;$i++){
		$ju[1][$i+1] =$v[$i][1]*100+$v[$i][2]*80+$v[$i][3]*60+$v[$i][4]*40+$v[$i][5]*20;
		}//echo $ju[1][1];echo $ju[1][3];
		for($i=0;$i<10;$i++){
		$ju[2][$i+1] =$b[$i][1]*100+$b[$i][2]*80+$b[$i][3]*60+$b[$i][4]*40+$b[$i][5]*20;
		}//echo $ju[2][1];echo $ju[2][6];
		for($i=0;$i<6;$i++){
		$ju[3][$i+1] =$m[$i][1]*100+$m[$i][2]*80+$m[$i][3]*60+$m[$i][4]*40+$m[$i][5]*20;
		}//echo $ju[3][1];echo $ju[3][6];
		for($i=0;$i<4;$i++){
		$ju[4][$i+1] =$n[$i][1]*100+$n[$i][2]*80+$n[$i][3]*60+$n[$i][4]*40+$n[$i][5]*20;
		}//echo $ju[4][1];echo $ju[4][4]."<br/>";
		//echo $S;
		$this->assign('S',$S);
		$this->assign('sum1',$sum1[0][0]);
		$this->assign('sum2',$sum2[0][0]);
		$this->assign('sum3',$sum3[0][0]);
		$this->assign('sum4',$sum4[0][0]);
		$this->assign('sum5',$sum5[0][0]);
		$this->display("analysis_main");
		
		}else{
		echo "<script>alert('评价的数据不存在，请重新选择条件！');location.href='default';</script>";
		}
	}	
	
		public function analysis_angle(){
	$year= $_COOKIE['year'];//=2014;
	$place= $_COOKIE['place'];//"娄底市";
	$quarter=$_COOKIE['quarter'];//1
	for($i=0;$i<4;$i++){ $U[$i]=$_COOKIE["U".$i]; }
	for($i=11;$i<14;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=21;$i<31;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=31;$i<37;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=41;$i<45;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	$Dao= M('com_warehousing');
	$Dao2= M('com_sorting');
	$Dao3= M('com_transportation');
	$Dao4= M('com_comprehensive');
	//进入数据库取数据$in[11],........如果存在则继续，不存在则报数据没有录入
	$condition['year']=$year;
	$condition['quarter']=$quarter;
	$condition['place'] =$place;
	$res= $Dao->where($condition)->select();
	$res2= $Dao2->where($condition)->select();
	$res3= $Dao3->where($condition)->select();
	$res4= $Dao4->where($condition)->select();
	if(!empty($res)&&!empty($res2)&&!empty($res2)&&!empty($res2)){         //判断数据库中是否存在数据
			//$v,$b,$n,$m隶属度 为一个标号从0开始的二维数组	
		$v=$this->parameter2(11,14,$max,$min,$in);//var_dump($v);
		$b=$this->parameter2(21,31,$max,$min,$in);//var_dump($b);
		$m=$this->parameter2(31,37,$max,$min,$in);//var_dump($m);
		$n=$this->parameter2(41,45,$max,$min,$in);//var_dump($n);
		
		for($i=11;$i<14;$i++){$w1[0][$i-11]=$u[$i];};//var_dump($w1);
		for($i=21;$i<31;$i++){$w2[0][$i-21]=$u[$i];};//var_dump($w2);
		for($i=31;$i<37;$i++){$w3[0][$i-31]=$u[$i];};//var_dump($w3);
		for($i=41;$i<45;$i++){$w4[0][$i-41]=$u[$i];};//var_dump($w4);	
		//评价角度在各评语下的隶属度
		$a1=$this->belong($w1,$v);//var_dump($a1);
		$a2=$this->belong($w2,$b);//var_dump($a2);
		$a3=$this->belong($w3,$m);//var_dump($a3);
		$a4=$this->belong($w4,$n);//var_dump($a4);
		//绿色物流评价
		for($i=0;$i<4;$i++){$W[0][$i]=$U[$i]; }; //var_dump($W);
		$V1=$this->change1($a1,$a2,$a3,$a4);//var_dump($V1);
		$V2=$this->change2($a1,$a2,$a3,$a4);//var_dump($V2);
		$V3=$this->change3($a1,$a2,$a3,$a4);//var_dump($V3);
		$V4=$this->change4($a1,$a2,$a3,$a4);//var_dump($V4);
		$V5=$this->change5($a1,$a2,$a3,$a4);//var_dump($V5);
		
		$sum1=$this->belong2($W,$V1);//var_dump($sum1);
		$sum2=$this->belong2($W,$V2);//var_dump($sum2);
		$sum3=$this->belong2($W,$V3);//var_dump($sum3);
		$sum4=$this->belong2($W,$V4);//var_dump($sum4);
		$sum5=$this->belong2($W,$V5);//var_dump($sum5);
		//整体得分
		$S=$sum1[0][0]*100+$sum2[0][0]*80+$sum3[0][0]*60+$sum4[0][0]*40+$sum5[0][0]*20;
		//echo $S;
		//四个评价角度分别得分_
		$first=$a1[0][1]*100+$a1[0][2]*80+$a1[0][3]*60+$a1[0][4]*40+$a1[0][5]*20;
		$second  = $a2[0][1]*100+$a2[0][2]*80+$a2[0][3]*60+$a2[0][4]*40+$a2[0][5]*20;
		$thrid = $a3[0][1]*100+$a3[0][2]*80+$a3[0][3]*60+$a3[0][4]*40+$a3[0][5]*20;
		$fourth = $a4[0][1]*100+$a4[0][2]*80+$a4[0][3]*60+$a4[0][4]*40+$a4[0][5]*20;
		//echo $first."<br/>".$second."<br/>".$thrid."<br/>".$fourth;
		//具体指标得分
		for($i=0;$i<3;$i++){
		$ju[1][$i+1] =$v[$i][1]*100+$v[$i][2]*80+$v[$i][3]*60+$v[$i][4]*40+$v[$i][5]*20;
		}//echo $ju[1][1];echo $ju[1][3];
		for($i=0;$i<10;$i++){
		$ju[2][$i+1] =$b[$i][1]*100+$b[$i][2]*80+$b[$i][3]*60+$b[$i][4]*40+$b[$i][5]*20;
		}//echo $ju[2][1];echo $ju[2][6];
		for($i=0;$i<6;$i++){
		$ju[3][$i+1] =$m[$i][1]*100+$m[$i][2]*80+$m[$i][3]*60+$m[$i][4]*40+$m[$i][5]*20;
		}//echo $ju[3][1];echo $ju[3][6];
		for($i=0;$i<4;$i++){
		$ju[4][$i+1] =$n[$i][1]*100+$n[$i][2]*80+$n[$i][3]*60+$n[$i][4]*40+$n[$i][5]*20;
		}//echo $ju[4][1];echo $ju[4][4]."<br/>";
		//echo $S;
		$this->assign('S',$S);
		$this->assign('a1',$a1[0]);
		$this->assign('a2',$a2[0]);
		$this->assign('a3',$a3[0]);
		$this->assign('a4',$a4[0]);
		$this->assign('S1',$first);
		$this->assign('S2',$second);
		$this->assign('S3',$thrid);
		$this->assign('S4',$fourth);
		$this->display("analysis_angle");
		
		}else{
		echo "<script>alert('评价的数据不存在，请重新选择条件！');location.href='default';</script>";
		}
	}	
	
		public function analysis_point(){
	$year= $_COOKIE['year'];//=2014;
	$place= $_COOKIE['place'];//"娄底市";
	$quarter=$_COOKIE['quarter'];//1
	for($i=0;$i<4;$i++){ $U[$i]=$_COOKIE["U".$i]; }
	for($i=11;$i<14;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=21;$i<31;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=31;$i<37;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	for($i=41;$i<45;$i++){ $u[$i]=$_COOKIE["u".$i]; $min[$i]=$_COOKIE["min".$i];$max[$i]=$_COOKIE["max".$i];$in[$i]=$_COOKIE["in".$i];}
	$Dao= M('com_warehousing');
	$Dao2= M('com_sorting');
	$Dao3= M('com_transportation');
	$Dao4= M('com_comprehensive');
	//进入数据库取数据$in[11],........如果存在则继续，不存在则报数据没有录入
	$condition['year']=$year;
	$condition['quarter']=$quarter;
	$condition['place'] =$place;
	$res= $Dao->where($condition)->select();
	$res2= $Dao2->where($condition)->select();
	$res3= $Dao3->where($condition)->select();
	$res4= $Dao4->where($condition)->select();
	if(!empty($res)&&!empty($res2)&&!empty($res2)&&!empty($res2)){         //判断数据库中是否存在数据
			//$v,$b,$n,$m隶属度 为一个标号从0开始的二维数组	
		$v=$this->parameter2(11,14,$max,$min,$in);//var_dump($v);
		$b=$this->parameter2(21,31,$max,$min,$in);//var_dump($b);
		$m=$this->parameter2(31,37,$max,$min,$in);//var_dump($m);
		$n=$this->parameter2(41,45,$max,$min,$in);//var_dump($n);
		
		for($i=11;$i<14;$i++){$w1[0][$i-11]=$u[$i];};//var_dump($w1);
		for($i=21;$i<31;$i++){$w2[0][$i-21]=$u[$i];};//var_dump($w2);
		for($i=31;$i<37;$i++){$w3[0][$i-31]=$u[$i];};//var_dump($w3);
		for($i=41;$i<45;$i++){$w4[0][$i-41]=$u[$i];};//var_dump($w4);	
		//评价角度在各评语下的隶属度
		$a1=$this->belong($w1,$v);//var_dump($a1);
		$a2=$this->belong($w2,$b);//var_dump($a2);
		$a3=$this->belong($w3,$m);//var_dump($a3);
		$a4=$this->belong($w4,$n);//var_dump($a4);
		//绿色物流评价
		for($i=0;$i<4;$i++){$W[0][$i]=$U[$i]; }; //var_dump($W);
		$V1=$this->change1($a1,$a2,$a3,$a4);//var_dump($V1);
		$V2=$this->change2($a1,$a2,$a3,$a4);//var_dump($V2);
		$V3=$this->change3($a1,$a2,$a3,$a4);//var_dump($V3);
		$V4=$this->change4($a1,$a2,$a3,$a4);//var_dump($V4);
		$V5=$this->change5($a1,$a2,$a3,$a4);//var_dump($V5);
		
		$sum1=$this->belong2($W,$V1);//var_dump($sum1);
		$sum2=$this->belong2($W,$V2);//var_dump($sum2);
		$sum3=$this->belong2($W,$V3);//var_dump($sum3);
		$sum4=$this->belong2($W,$V4);//var_dump($sum4);
		$sum5=$this->belong2($W,$V5);//var_dump($sum5);
		//整体得分
		$S=$sum1[0][0]*100+$sum2[0][0]*80+$sum3[0][0]*60+$sum4[0][0]*40+$sum5[0][0]*20;
		//echo $S;
		//四个评价角度分别得分_
		$first=$a1[0][1]*100+$a1[0][2]*80+$a1[0][3]*60+$a1[0][4]*40+$a1[0][5]*20;
		$second  = $a2[0][1]*100+$a2[0][2]*80+$a2[0][3]*60+$a2[0][4]*40+$a2[0][5]*20;
		$thrid = $a3[0][1]*100+$a3[0][2]*80+$a3[0][3]*60+$a3[0][4]*40+$a3[0][5]*20;
		$fourth = $a4[0][1]*100+$a4[0][2]*80+$a4[0][3]*60+$a4[0][4]*40+$a4[0][5]*20;
		//echo $first."<br/>".$second."<br/>".$thrid."<br/>".$fourth;
		//具体指标得分
		for($i=0;$i<3;$i++){
		$ju[1][$i+1] =$v[$i][1]*100+$v[$i][2]*80+$v[$i][3]*60+$v[$i][4]*40+$v[$i][5]*20;
		}//echo $ju[1][1];echo $ju[1][3];
		for($i=0;$i<10;$i++){
		$ju[2][$i+1] =$b[$i][1]*100+$b[$i][2]*80+$b[$i][3]*60+$b[$i][4]*40+$b[$i][5]*20;
		}//echo $ju[2][1];echo $ju[2][6];
		for($i=0;$i<6;$i++){
		$ju[3][$i+1] =$m[$i][1]*100+$m[$i][2]*80+$m[$i][3]*60+$m[$i][4]*40+$m[$i][5]*20;
		}//echo $ju[3][1];echo $ju[3][6];
		for($i=0;$i<4;$i++){
		$ju[4][$i+1] =$n[$i][1]*100+$n[$i][2]*80+$n[$i][3]*60+$n[$i][4]*40+$n[$i][5]*20;
		}//echo $ju[4][1];echo $ju[4][4]."<br/>";
		//echo $S;
	
		$this->assign('ju1',$ju[1]);
		$this->assign('ju2',$ju[2]);
		$this->assign('ju3',$ju[3]);
		$this->assign('ju4',$ju[4]);
		$this->assign('v1',$v[0]);
		$this->assign('v2',$v[1]);
		$this->assign('v3',$v[2]);
		
		$this->assign('b1',$b[0]);
		$this->assign('b2',$b[1]);
		$this->assign('b3',$b[2]);
		$this->assign('b4',$b[3]);
		$this->assign('b5',$b[3]);
		$this->assign('b6',$b[5]);
		$this->assign('b7',$b[6]);
		$this->assign('b8',$b[7]);
		$this->assign('b9',$b[8]);
		$this->assign('b10',$b[9]);
		
		$this->assign('m1',$m[0]);
		$this->assign('m2',$m[1]);
		$this->assign('m3',$m[2]);
		$this->assign('m4',$m[3]);
		$this->assign('m5',$m[4]);
		$this->assign('m6',$m[5]);
		
		$this->assign('n1',$n[0]);
		$this->assign('n2',$n[1]);
		$this->assign('n3',$n[2]);
		$this->assign('n4',$n[3]);
		
		$this->display("analysis_point");
		
		}else{
		echo "<script>alert('评价的数据不存在，请重新选择条件！');location.href='default';</script>";
		}
	}	
	
		
	public function tri_model($max,$min,$in,$u,$U){	
		//$v,$b,$n,$m隶属度 为一个标号从0开始的二维数组	
		$v=$this->parameter2(11,14,$max,$min,$in);//var_dump($v);
		$b=$this->parameter2(21,31,$max,$min,$in);//var_dump($b);
		$m=$this->parameter2(31,37,$max,$min,$in);//var_dump($m);
		$n=$this->parameter2(41,45,$max,$min,$in);//var_dump($n);
		
		for($i=11;$i<14;$i++){$w1[0][$i-11]=$u[$i];};//var_dump($w1);
		for($i=21;$i<31;$i++){$w2[0][$i-21]=$u[$i];};//var_dump($w2);
		for($i=31;$i<37;$i++){$w3[0][$i-31]=$u[$i];};//var_dump($w3);
		for($i=41;$i<45;$i++){$w4[0][$i-41]=$u[$i];};//var_dump($w4);	
		//评价角度在各评语下的隶属度
		$a1=$this->belong($w1,$v);//var_dump($a1);
		$a2=$this->belong($w2,$b);//var_dump($a2);
		$a3=$this->belong($w3,$m);//var_dump($a3);
		$a4=$this->belong($w4,$n);//var_dump($a4);
		//绿色物流评价
		for($i=0;$i<4;$i++){$W[0][$i]=$U[$i]; }; //var_dump($W);
		$V1=$this->change1($a1,$a2,$a3,$a4);//var_dump($V1);
		$V2=$this->change2($a1,$a2,$a3,$a4);//var_dump($V2);
		$V3=$this->change3($a1,$a2,$a3,$a4);//var_dump($V3);
		$V4=$this->change4($a1,$a2,$a3,$a4);//var_dump($V4);
		$V5=$this->change5($a1,$a2,$a3,$a4);//var_dump($V5);
		
		$sum1=$this->belong2($W,$V1);//var_dump($sum1);
		$sum2=$this->belong2($W,$V2);//var_dump($sum2);
		$sum3=$this->belong2($W,$V3);//var_dump($sum3);
		$sum4=$this->belong2($W,$V4);//var_dump($sum4);
		$sum5=$this->belong2($W,$V5);//var_dump($sum5);
		//整体得分
		$S=$sum1[0][0]*100+$sum2[0][0]*80+$sum3[0][0]*60+$sum4[0][0]*40+$sum5[0][0]*20;
		//echo $S;
		//四个评价角度分别得分_
		$first=$a1[0][1]*100+$a1[0][2]*80+$a1[0][3]*60+$a1[0][4]*40+$a1[0][5]*20;
		$second  = $a2[0][1]*100+$a2[0][2]*80+$a2[0][3]*60+$a2[0][4]*40+$a2[0][5]*20;
		$thrid = $a3[0][1]*100+$a3[0][2]*80+$a3[0][3]*60+$a3[0][4]*40+$a3[0][5]*20;
		$fourth = $a4[0][1]*100+$a4[0][2]*80+$a4[0][3]*60+$a4[0][4]*40+$a4[0][5]*20;
		//echo $first."<br/>".$second."<br/>".$thrid."<br/>".$fourth;
		//具体指标得分
		for($i=0;$i<3;$i++){
		$ju[1][$i+1] =$v[$i][1]*100+$v[$i][2]*80+$v[$i][3]*60+$v[$i][4]*40+$v[$i][5]*20;
		}//echo $ju[1][1];echo $ju[1][3];
		for($i=0;$i<10;$i++){
		$ju[2][$i+1] =$b[$i][1]*100+$b[$i][2]*80+$b[$i][3]*60+$b[$i][4]*40+$b[$i][5]*20;
		}//echo $ju[2][1];echo $ju[2][6];
		for($i=0;$i<6;$i++){
		$ju[3][$i+1] =$m[$i][1]*100+$m[$i][2]*80+$m[$i][3]*60+$m[$i][4]*40+$m[$i][5]*20;
		}//echo $ju[3][1];echo $ju[3][6];
		for($i=0;$i<4;$i++){
		$ju[4][$i+1] =$n[$i][1]*100+$n[$i][2]*80+$n[$i][3]*60+$n[$i][4]*40+$n[$i][5]*20;
		}//echo $ju[4][1];echo $ju[4][4]."<br/>";
		//echo $S;
		//return $v,$b,$m,$n,$a1,$a2,$a3,$a4,$V1,$V2,$V3,$V4,$sum1,$sum2,$sum3,$sum4,$S,$first,$second,$thrid,$fourth,$ju;
	}	
	
	//计算v1.v2.v3.v4.v5 的值
	 public  function parameter2($start,$end,$max,$min,$in){
	 for($i=$start;$i<$end;$i++){
		 if($max[$i]-$min[$i]>0){
			$plus=($max[$i]-$min[$i])/4;
			$d[5]=$min[$i];
			$d[4]=$min[$i]+$plus;
			$d[3]= $d[4]+$plus;
			$d[2]= $d[3]+$plus;
			$d[1]= $max[$i];	
		}
		else{
			$plus=($min[$i]-$max[$i])/4;
			$d[5]=$min[$i];
			$d[4]=($min[$i]-$plus);
			$d[3]=($d[4]-$plus);
			$d[2]=($d[3]-$plus);
			$d[1]= $max[$i];	
			
			$d[5]=1/$d[5];
			$d[4]=1/$d[4];
			$d[3]=1/$d[3];
			$d[2]=1/$d[2];
			$d[1]=1/$d[1];
			$in[$i]=1/$in[$i];
		}
			if($in[$i]>=$d[1]){
			$v1= 1;
			}
			elseif ($in[$i]>=$d[2]&&$in[$i]<=$d[1]){
			$v1=($in[$i]-$d[2])/($d[1]-$d[2]);
			}
			else  $v1=0;
		
			
			if($in[$i]>=$d[3]&&$in[$i]<=$d[2]){
			$v2=($in[$i]-$d[3])/($d[2]-$d[3]);
			}
			elseif ($in[$i]>=$d[2]&&$in[$i]<=$d[1]){
			$v2= ($d[1]-$in[$i])/($d[1]-$d[2]);
			}
			else $v2 =0;
			
			
			if($in[$i]>=$d[4]&&$in[$i]<=$d[3]){
			$v3=($in[$i]-$d[4])/($d[3]-$d[4]);
			}
			elseif($in[$i]>=$d[3]&&$in[$i]<=$d[2]){
			$v3=($d[2]-$in[$i])/($d[2]-$d[3]);
			}
			else $v3 =0;
			
			if($in[$i]>=$d[5]&&$in[$i]<=$d[4]){
			$v4=($in[$i]-$d[5])/($d[4]-$d[5]);
			}
			elseif($in[$i]>=$d[4]&&$in[$i]<=$d[3]){
			$v4=($d[3]-$in[$i])/($d[3]-$d[4]);
			}
			else $v4 =0;
			
			if($in[$i]>=$d[5]&&$in[$i]<=$d[4]){
			$v5=($d[4]-$in[$i])/($d[4]-$d[5]);
			}
			elseif($in[$i]<=$d[5]){
			$v5=1;
			}
			else $v5 =0;
			$v[$i-$start][1]=$v1;
			$v[$i-$start][2]=$v2;
			$v[$i-$start][3]=$v3;
			$v[$i-$start][4]=$v4;
			$v[$i-$start][5]=$v5; 
			/* $v[$i-$start][0]=$v1;
			$v[$i-$start][1]=$v2;
			$v[$i-$start][2]=$v3;
			$v[$i-$start][3]=$v4;
			$v[$i-$start][4]=$v5; */
					
	 }
	 		return $v;	
	 	
	}	
//实现矩阵相乘
	public  function belong($a,$b){
		for($i = 0; $i <count($a); $i++){  
			for($j = 1; $j <count($b[0])+1; $j++){  
				$temp = 0;  
				for($k = 0; $k <count($b); $k++){  
					$temp += $a[$i][$k] * $b[$k][$j];  
				}  
				$c[$i][$j] = $temp;  
			}  
		}	
		return $c;
	}
	//实现矩阵相乘
	public  function belong2($a,$b){
		for($i = 0; $i <count($a); $i++){  
			for($j = 0 ;$j <count($b[0]); $j++){  
				$temp = 0;  
				for($k = 0; $k <count($b); $k++){  
					$temp += $a[$i][$k] * $b[$k][$j];  
				}  
				$c[$i][$j] = $temp;  
			}  
		}
		return $c;
	}
	
// 实现数组变换
public  function change1($a1,$a2,$a3,$a4){
		$V1[0][0]=$a1[0][1]; 
		$V1[1][0]=$a2[0][1];
		$V1[2][0]=$a3[0][1];
		$V1[3][0]=$a4[0][1];
		return $V1;	
		}
public  function change2($a1,$a2,$a3,$a4){		
		$V2[0][0]=$a1[0][2];
		$V2[1][0]=$a2[0][2];
		$V2[2][0]=$a3[0][2];
		$V2[3][0]=$a4[0][2];
		return $V2;	
}
public  function change3($a1,$a2,$a3,$a4){		
		$V3[0][0]=$a1[0][3];
		$V3[1][0]=$a2[0][3];
		$V3[2][0]=$a3[0][3];
		$V3[3][0]=$a4[0][3];
		return $V3;	
	}
public  function change4($a1,$a2,$a3,$a4){
		$V4[0][0]=$a1[0][4];
		$V4[1][0]=$a2[0][4];
		$V4[2][0]=$a3[0][4];
		$V4[3][0]=$a4[0][4];
		return $V4;	
		
}
public  function change5($a1,$a2,$a3,$a4){
		$V5[0][0]=$a1[0][5];
		$V5[1][0]=$a2[0][5];
		$V5[2][0]=$a3[0][5];
		$V5[3][0]=$a4[0][5];
		return $V5;	
		
}

 public function parameter1($start,$end,$max,$min,$in){
	 for($i=$start;$i<$end;$i++){
			if($max[$i]-$min[$i]>0){
			 $plus=($max[$i]-$min[$i])/4;
			$d[5]=$min[$i];
			$d[4]=$min[$i]+$plus;
			$d[3]= $d[4]+$plus;
			$d[2]= $d[3]+$plus;
			$d[1]= $max[$i];
			if($in[$i]>=$d[1]){
			$v1= 1;
			}
			elseif ($in[$i]>=$d[2]&&$in[$i]<=$d[1]){
			$v1=($in[$i]-$d[2])/($d[1]-$d[2]);
			}
			else  $v1=0;
		
			
			if($in[$i]>=$d[3]&&$in[$i]<=$d[2]){
			$v2=($in[$i]-$d[3])/($d[2]-$d[3]);
			}
			elseif ($in[$i]>=$d[2]&&$in[$i]<=$d[1]){
			$v2= ($d[1]-$in[$i])/($d[1]-$d[2]);
			}
			else $v2 =0;
			
			
			if($in[$i]>=$d[4]&&$in[$i]<=$d[3]){
			$v3=($in[$i]-$d[4])/($d[3]-$d[4]);
			}
			elseif($in[$i]>=$d[3]&&$in[$i]<=$d[2]){
			$v3=($d[2]-$in[$i])/($d[2]-$d[3]);
			}
			else $v3 =0;
			
			if($in[$i]>=$d[5]&&$in[$i]<=$d[4]){
			$v4=($in[$i]-$d[5])/($d[4]-$d[5]);
			}
			elseif($in[$i]>=$d[4]&&$in[$i]<=$d[3]){
			$v4=($d[3]-$in[$i])/($d[3]-$d[4]);
			}
			else $v4 =0;
			
			if($in[$i]>=$d[5]&&$in[$i]<=$d[4]){
			$v5=($d[4]-$in[$i])/($d[4]-$d[5]);
			}
			elseif($in[$i]<=$d[5]){
			$v5=1;
			}
			else $v5 =0;
			$v[$i-10][1]=$v1;
			$v[$i-10][2]=$v2;
			$v[$i-10][3]=$v3;
			$v[$i-10][4]=$v4;
			$v[$i-10][5]=$v5;
			//print_r($v[$i-10]);	
			
			}else {
			
			$plus=($min[$i]-$max[$i])/4;  //echo $min[$i]."........".$max[$i].">>>>>>>>";
			
			$d[5]=$min[$i];
			$d[4]=($min[$i]-$plus);
			$d[3]=($d[4]-$plus);
			$d[2]=($d[3]-$plus);
			$d[1]= $max[$i];	
			//for($m=5;$m>0;$m--){ //echo $d[$m]."mmmmmmmmmm";}
			
			$d[5]=1/$d[5];
			$d[4]=1/$d[4];
			$d[3]=1/$d[3];
			$d[2]=1/$d[2];
			$d[1]=1/$d[1];
			$in[$i]=1/$in[$i];
			
			if($in[$i]>=$d[1]){
			$v1= 1;
			}
			elseif ($in[$i]>=$d[2]&&$in[$i]<=$d[1]){
			$v1=($in[$i]-$d[2])/($d[1]-$d[2]);
			}
			else  $v1=0;
		
			
			if($in[$i]>=$d[3]&&$in[$i]<=$d[2]){
			$v2=($in[$i]-$d[3])/($d[2]-$d[3]);
			}
			elseif ($in[$i]>=$d[2]&&$in[$i]<=$d[1]){
			$v2= ($d[1]-$in[$i])/($d[1]-$d[2]);
			}
			else $v2 =0;
			
			
			if($in[$i]>=$d[4]&&$in[$i]<=$d[3]){
			$v3=($in[$i]-$d[4])/($d[3]-$d[4]);
			}
			elseif($in[$i]>=$d[3]&&$in[$i]<=$d[2]){
			$v3=($d[2]-$in[$i])/($d[2]-$d[3]);
			}
			else $v3 =0;
			
			if($in[$i]>=$d[5]&&$in[$i]<=$d[4]){
			$v4=($in[$i]-$d[5])/($d[4]-$d[5]);
			}
			elseif($in[$i]>=$d[4]&&$in[$i]<=$d[3]){
			$v4=($d[3]-$in[$i])/($d[3]-$d[4]);
			}
			else $v4 =0;
			
			if($in[$i]>=$d[5]&&$in[$i]<=$d[4]){
			$v5=($d[4]-$in[$i])/($d[4]-$d[5]);
			}
			elseif($in[$i]<=$d[5]){
			$v5=1;
			}
			else $v5 =0;
			
			$v[$i-10][1]=$v1;
			$v[$i-10][2]=$v2;
			$v[$i-10][3]=$v3;
			$v[$i-10][4]=$v4;
			$v[$i-10][5]=$v5;
			
			}
			
		 }	
	}
}