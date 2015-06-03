<?php
// 本类由系统自动生成，仅供测试用途
class InputAction extends Action {
    public function index(){
    	$this->display();
	}
	public function warehousing(){
	$this->display("warehousing");
	}
	public function warehousing_add(){
		$year= $_POST['time'];
		$quarter=$_POST['quarter'];
		$place=$_POST['place'];		
		$time= date("Y-m-d h:i:s");
		$damage_w= $_POST['damage_w'];
		$total_w= $_POST['total_w'];
		$space = $_POST['space'];
		$volume = $_POST['volume'];
		$power = $_POST['power'];
		
		if(isset($space)&&isset($volume)&&isset($power)&&isset($total_w)&&isset($damage_w)&&isset($time)&&isset($place)&&isset($quarter)){
			$Dao= M('warehousing');
			$Dao->year=$year;
			$Dao->place= $place;
			$Dao->quarter= $quarter;
			$Dao->time= $time;			
			$Dao->damage_w= $damage_w;
			$Dao->total_w= $total_w;
			$Dao->space= $space;
			$Dao->volume=$volume;
			$Dao->power = $power;			
			
			$data['year']=$year;
			$data['quarter']=$quarter;
			$data['place']=$place;
			$data['time']=$time;
			$data['volume']=$volume;
			$data['space']=$space;
			$data['power']=$power;
			$data['damage_w']=$damage_w;
			$data['total_w']=$total_w;
			
			$condition['year']=$year;
			$condition['quarter']=$quarter;
			$condition['place'] =$place;
			$res= $Dao->where($condition)->select();
			
			$Dao2= M('com_warehousing');
			$Dao2->year=$year;
			$Dao2->place= $place;
			$Dao2->quarter= $quarter;
			$Dao2->time= $time;
			$Dao2->damage_w= $damage_w/$total_w;
			$Dao2->use= $space/$volume;
			$Dao2->electric_w=$power/$total_w;
			
			$data2['year']=$year;
			$data2['quarter']=$quarter;
			$data2['place']=$place;
			$data2['time']=$time;
			$data2['damage_w']=$damage_w/$total_w;
			$data2['space']=$space;
			$data2['use']=$space/$volume;
			$data2['electric_w']=$power/$total_w;
						
			if(empty($res)){ 						
				if($lastInsId = $Dao->add()){
					$Dao2->add();
					//echo $Dao2->getLastsql();die();
					echo "<script>alert('数据录入成功');location.href='warehousing';</script>";
				} else {
								//$this->error('数据写入错误！');
					echo "<script>alert('数据写入错误');location.href='warehousing';</script>";
				}
			}
			else{
			$result= $Dao->where($condition)->save($data);
			$Dao2->where($condition)->save($data2);
				if($result){
					echo "<script>alert('数据录入成功');location.href='warehousing';</script>";
				} else{
					echo "<script>alert('数据写入错误1');location.href='warehousing';</script>";
				}
			}
				
		}else{
				echo "<script>alert('请输入数据');location.href='warehousing';</script>";
			
		}
	}
	
	
	public function sorting(){
	$this->display("sorting");
	}
	public function sorting_add(){
		$year= $_POST['time'];
		$quarter=$_POST['quarter'];
		$place=$_POST['place'];		
		$time= date("Y-m-d h:i:s");
		$damage_s = $_POST['damage_s'];
		$total_s=$_POST['total_s'];
		$mistake_s=$_POST['mistake_s'];
		$hours=$_POST['hours'];
		$people=$_POST['people'];
		$efficiency=$_POST['efficiency'];
		$pass=$_POST['pass'];
		$PE_re=$_POST['PE_re'];
		$PE_use=$_POST['PE_use'];
		$box_re=$_POST['box_re'];
		$plan=$_POST['plan'];
		$power_s=$_POST['power_s'];
		if(isset($damage_s)&&isset($total_s)&&isset($mistake_s)&&isset($hours)&&isset($people)&&isset($efficiency)&&isset($pass)&&isset($PE_re)&&
		isset($PE_use)&&isset($box_re)&&isset($plan)&&isset($power_s)){
			$Dao= M('sorting');
			$Dao->time=$time;
			$Dao->place= $place;
			$Dao->quarter= $quarter;
			$Dao->year= $year;
			$Dao->damage_s= $damage_s;
			$Dao->total_s= $total_s;
			$Dao->mistake_s= $mistake_s;
			$Dao->hours= $hours;
			$Dao->people= $people;
			$Dao->efficiency= $efficiency;
			$Dao->pass= $pass;
			$Dao->PE_re= $PE_re;
			$Dao->box_re= $box_re;
			$Dao->plan= $plan;
			$Dao->power_s= $power_s;
		
			$data['year']=$year;
			$data['quarter']=$quarter;
			$data['place']=$place;
			$data['time']=$time;
			
			$data['damage_s']=$damage_s;
			$data['total_s']=$total_s;
			$data['mistake_s']=$mistake_s;
			$data['hours']=$hours;
			$data['people']=$people;
			$data['efficiency']=$efficiency;
			$data['pass']=$pass;
			$data['PE_re']=$PE_re;
			$data['PE_use']=$PE_use;
			$data['box_re']=$box_re;
			$data['plan']=$plan;
			$data['power_s']=$power_s;
			
			$condition['year']=$year;
			$condition['quarter']=$quarter;
			$condition['place'] =$place;
			$res= $Dao->where($condition)->select();
			
			$Dao2= M('com_sorting');
			$Dao2->year=$year;
			$Dao2->place= $place;
			$Dao2->quarter= $quarter;
			$Dao2->time= $time;
			$Dao2->damage_s= $damage_s/$total_s;
			$Dao2->electric_s= $power_s/$total_s;
			$Dao2->mistake=$mistake_s/$total_s;
			$Dao2->operation= $total_s/$hours;
			$Dao2->average_sort=$Dao2->operation/$people;
			$Dao2->effective_op= $Dao2->operation/$efficiency;
			$Dao2->box_qualified=$pass/$box_re;
			$Dao2->dm= 70;
			$Dao2->PE_re=$PE_re/$PE_use;
			$Dao2->box_re= $box_re/$plan;
						
			
			$data2['year']=$year;
			$data2['quarter']=$quarter;
			$data2['place']=$place;
			$data2['time']=$time;
			$data2['damage_s']=$damage_s/$total_s;
			$data2['electric_s']= $power_s/$total_s;
			$data2['mistake']=$mistake_s/$total_s;
			$data2['operation']=$total_s/$hours;
			$data2['average_sort']=$Dao2->operation/$people;
			$data2['effective_op']=$Dao2->operation/$efficiency;
			$data2['box_qualified']=$pass/$box_re;
			$data2['dm']=70;
			$data2['PE_re']=$PE_re/$PE_use;
			$data2['box_re']=$box_re/$plan;
									
			if(empty($res)){ 
				if($lastInsId = $Dao->add()){
				$Dao2->add();
					echo "<script>alert('数据录入成功');location.href='sorting';</script>";
				} else {
								//$this->error('数据写入错误！');
					echo "<script>alert('数据写入错误');location.href='sorting';</script>";
				}
			}else {
			$result = $Dao->where($condition)->save($data);
			$Dao2->where($condition)->save($data2);
				if($result){
					echo "<script>alert('数据录入成功');location.href='sorting';</script>";
				} else{
					echo "<script>alert('数据写入错误');location.href='sorting';</script>";
				}
			
			}
		}else{
				echo "<script>alert('请输入数据');location.href='sorting';</script>";
			
		}
	
	}
	
	public function transportation(){
	$this->display("transportation");
	}
	public function transportation_add(){
		$year= $_POST['time'];
		$quarter=$_POST['quarter'];
		$place=$_POST['place'];		
		$time= date("Y-m-d h:i:s");
		$oil = $_POST['oil'];
		$send=$_POST['send'];
		$mistake_t=$_POST['mistake_t'];
		$total_t=$_POST['total_t'];
		$accurate=$_POST['accurate'];
		$volume=$_POST['volume'];
		$mile=$_POST['mile'];
		$sum_volume=$_POST['sum_volume'];
		
		
		if(isset($oil )&&isset($send)&&isset($mistake_t)&&isset($total_t)&&isset($accurate)&&
		isset($volume)&&isset($mile)&&isset($sum_volume)){
			$Dao= M('transportation');
			$Dao->time=$time;
			$Dao->place= $place;
			$Dao->quarter= $quarter;
			$Dao->year= $year;
			$Dao->oil = $oil ;
			$Dao->send= $send;
			$Dao->mistake_t= $mistake_t;
			$Dao->total_t= $total_t;
			$Dao->accurate= $accurate;
			$Dao->mile= $mile;
			$Dao->sum_volume= $sum_volume;
			$Dao->volume= $volume;
						
			$data['year']=$year;
			$data['quarter']=$quarter;
			$data['place']=$place;
			$data['time']=$time;
			$data['oil']=$oil;
			$data['send']=$send;
			$data['mistake_t']=$mistake_t ;
			$data['total_t']=$total_t;
			$data['accurate']=$accurate;
			$data['mile']=$mile;
			$data['volume']=$volume;
			$data['sum_volume']=$sum_volume;
			
		
			
			$condition['year']=$year;
			$condition['place'] =$place;
			$condition['quarter']=$quarter;
			$res= $Dao->where($condition)->select();
			
			$Dao2= M('com_transportation');
			$Dao2->year=$year;
			$Dao2->place= $place;
			$Dao2->quarter= $quarter;
			$Dao2->time= $time;
			$Dao2->oil= $oil/$send;
			$Dao2->damage= $mistake_t/$total_t;
			$Dao2->accurate= $accurate/$total_t;
			$Dao2->load=$sum_volume/$volume;
			$Dao2->GPS_use= 100;
			$Dao2->oil_hundred=($oil/$mile)*100;
		
						
			
			$data2['year']=$year;
			$data2['quarter']=$quarter;
			$data2['place']=$place;
			$data2['time']=$time;
			$data2['oil']= $oil/$send;
			$data2['damage']= $mistake_t/$total_t;
			$data2['accurate']= $accurate/$total_t;
			$data2['load']=$sum_volume/$volume;
			$data2['GPS_use']=100;
			$data2['oil_hundred']=($oil/$mile)*100;
			
			if(empty($res)){ 			
			
				if($lastInsId = $Dao->add()){
					$Dao2->add();
					echo "<script>alert('数据录入成功');location.href='transportation';</script>";
				} else {
								//$this->error('数据写入错误！');
					echo "<script>alert('数据写入错误');location.href='transportation';</script>";
				}
			}
			else{
			$result= $Dao->where($condition)->save($data);
			$Dao2->where($condition)->save($data2);
				if($result){
					echo "<script>alert('数据录入成功');location.href='transportation';</script>";
				} else{
					echo "<script>alert('数据写入错误1');location.href='transportation';</script>";
				}
			}
				
		}else{
				echo "<script>alert('请输入数据');location.href='transportation';</script>";
			
		}
	}
	
	
	
	public function recycling(){
	$this->display("recycling");
	}
	public function recycling_add(){
		$year= $_POST['time'];
		$quarter=$_POST['quarter'];
		$place=$_POST['place'];		
		$time= date("Y-m-d h:i:s");
		$cost= $_POST['cost'];
		$income=$_POST['income'];
		$support=$_POST['support'];
		$sum=$_POST['sum'];		
		
		if(isset($cost)&&isset($income)&&isset($support)&&isset($sum)){
			$Dao= M('comprehensive');
			$Dao->time=$time;
			$Dao->place= $place;
			$Dao->quarter= $quarter;
			$Dao->year= $year;
			$Dao->cost = $cost ;
			$Dao->income= $income;
			$Dao->support= $support;
			$Dao->sum= $sum;
								
			$data['year']=$year;
			$data['quarter']=$quarter;
			$data['place']=$place;
			$data['time']=$time;
			$data['cost']=$cost ;
			$data['income']=$income;
			$data['support']=$support;
			$data['sum']=$sum;	
			
			$condition['year']=$year;
			$condition['place'] =$place;
			$condition['quarter']=$quarter;
			$res= $Dao->where($condition)->select();
			
			$Dao2= M('com_comprehensive');
			$Dao2->year=$year;
			$Dao2->place= $place;
			$Dao2->quarter= $quarter;
			$Dao2->time= $time;
			$Dao2->auth=1;
			$Dao2->money= $cost/$income;
			$Dao2->talent= 1;
			$Dao2->identification=$support/$sum;

			$data2['year']=$year;
			$data2['quarter']=$quarter;
			$data2['place']=$place;
			$data2['time']=$time;
			$data2['auth']= 1;
			$data2['money']= $cost/$income;
			$data2['talent']= 1;
			$data2['identification']=$support/$sum;
			if(empty($res)){ 			
			
				if($lastInsId = $Dao->add($data)){
					$Dao2->add();
					echo "<script>alert('数据录入成功');location.href='recycling';</script>";
				} else {
								//$this->error('数据写入错误！');
					echo "<script>alert('数据写入错误');location.href='recycling';</script>";
				}
			}
			else{
			$result= $Dao->where($condition)->save($data);
			$Dao2->where($condition)->save($data2);
				if($result){
					echo "<script>alert('数据录入成功');location.href='recycling';</script>";
				} else{
					echo "<script>alert('数据写入错误1');location.href='recycling';</script>";
				}
			}
				
		}else{
				echo "<script>alert('请输入数据');location.href='recycling';</script>";
			
		}
	}
	
	
	public function wanting(){
	$this->display("wanting");
	}
	public function wanting_add(){
		$data['time']= $_POST['time'];
		$data['place']=$_POST['place'];
		$data['in_sum']=$_POST['in_sum'];
		$data['sum']=$_POST['sum'];
		$data['out']=$_POST['out'];
		$data['in']=$_POST['in'];
		$data['support_num']=$_POST['support_num'];
		$data['agent_num']=$_POST['agent_num'];
		
		
		
		
		if(isset($data['time'])&&isset($data['place'])&&isset($data['in_sum'])&&isset($data['sum'])&&isset($data['out'])&&isset($data['in'])&&isset($data['support_num'])&&isset($data['agent_num'])){
			$Dao= M('wanting');			
			
			$condition['time']=$data['time'];
			$condition['place'] =$data['place'];
			$res= $Dao->where($condition)->select();
			if(empty($res)){ 			
			
				if($lastInsId = $Dao->add($data)){
					echo "<script>alert('数据录入成功');location.href='wanting';</script>";
				} else {
								//$this->error('数据写入错误！');
					echo "<script>alert('数据写入错误');location.href='wanting';</script>";
				}
			}
			else{
			$result= $Dao->where($condition)->save($data);
				if($result){
					echo "<script>alert('数据录入成功');location.href='wanting';</script>";
				} else{
					echo "<script>alert('数据写入错误1');location.href='wanting';</script>";
				}
			}
				
		}else{
				echo "<script>alert('请输入数据');location.href='wanting';</script>";
			
		}
	}
}