<?php 
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
	public function LoginCheck($username,$password){
		$row=$this->where("username='$username' and password='$password'")->select();
		if ($row) {
			return true;
		} else {
			return false;
		}
	}
	public function getUserAddress($data){
		$condition['user_id']=$this->table('shop_user')->field('user_id')->where($data)->getField();
		return $this->table('shop_useraddress')->where($condition)->select();
	}

	public function updateUserAddress($data){
			$shop_useraddress=M('useraddress');
		$condition['username']=$data['user_id'];
		// var_dump($data['user_id']);
		$data['user_id']=$this->table('shop_user')->field('user_id')->where($condition)->getField();

		$condition3['user_id']=$data['user_id'];

		if ($data['default_address']) {
			$shop_useraddress->where($condition3)->setField('default_address','0');
		}
		if ($data['id']) {		//有id时，是更新数据
			$condition2['id']=$data['id'];
			$this->table('shop_useraddress')->where($condition2)->save($data);
		} else {		//没有id时，是添加数据
			unset($data['id']);
			$count=$shop_useraddress->where($condition3)->count();
			// var_dump($count);
			if ($count>19) {
				echo "您保存的地址数量已达上限，无法再继续添加！";
			} else {
				$shop_useraddress->add($data);
			}
		}
	}

	public function updateOrder($data){
		$condition["jean_id"]=$data["jean_id"];
		$condition["fashion_name"]=$data["fashion_name"];
		$condition["size"]=$data["size"];
		unset($data["jean_id"]);
		unset($data["fashion_name"]);
		unset($data["size"]);
		$data["fashion_id"]=$this->table('shop_jeanfashion')->field('id')->where($condition)->getField();

		$condition1["username"]=$data["user_id"];
		$data["user_id"]=$this->table('shop_user')->field('user_id')->where($condition1)->getField();

		$order=M('order');
		$order->add($data);

	}


	public function RegisterCheck($username,$password,$email,$phone){
		// $row=$this->where("username='$username' and password='$password'")->select();
		$row=$this->where("username='$username'")->count();
		if ($row) {
			return false;
		} else {
			// $user=M("user");
			$this->username=$username;
			$this->password=$password;
			$this->email=$email;
			$this->mobile=$phone;
			$this->add();
			return true;
		}
	}
	protected $_validate=array(
		array('username','require','请输入用户名'),
		array('username','','用户名已存在',0,'unique',1),
		array('email','email','请输入正确格式的邮箱'),
		array('mobile','/^1\d{10}$/','请输入正确格式的手机号码')
	);
	
}