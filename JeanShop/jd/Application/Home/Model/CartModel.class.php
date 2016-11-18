<?php 
namespace Home\Model;
use Think\Model;

class CartModel extends Model{

	public function addProduct($data){	//加商品进入购物车

		// $condition['cart_user_id']=$cart->getUserId($data['user']);
		// $condition['cart_product_id']

		$shop_user=M("user");
		$user=$data['username'];
		$condition['cart_user_id']=$shop_user->where("username='$user'")->getField("user_id");//查出用户名的ID放到购物车中

		$fashion['fashion_name']=$data['fashion_name'];
		$fashion['size']=$data['size'];
		$condition['cart_product_id']=$shop_user->table('shop_jeanfashion')->where($fashion)->getField("id");//查出款式的ID放到购物车中

		$row=$this->where($condition)->select();//此时得出的$row是二维数组

		if ($row) {
		// 更新的数据
			// $data['cart_product_number']=$row[0]["cart_product_number"]+$pNum;
		// 更新的条件
		    // $condition['cart_user_id'] = $userId;
		    // $condition['cart_product_id'] = $pId;
		    $result = $this->where($condition)->setInc('cart_product_number',$data['cart_product_number']);
		} else {
			$cart=M("cart");
			// $cart->cart_user_id=$userId;
			// $cart->cart_product_id=$pId;
			// $cart->cart_product_number=$pNum;
			$condition['cart_product_number']=$data['cart_product_number'];

			$result=$cart->add($condition);
		}
	}

	public function deleteProduct($user,$pId){	//从购物车删除商品
		$condition['username'] = $user;
		$userId=$this->table("shop_user")->where($condition)->getField("user_id");
	// 删除的条件
	    $condition['cart_user_id'] = $userId;
	    $condition['cart_product_id'] = $pId;
	    $result = $this->where($condition)->delete();
		return $result;
	}

	public function settleAnAccount($user,$pId,$pNum,$pPrice){	//删除购物车数据，添加订单
		// echo "$user";
		// exit;
		$this->deleteProduct($user,$pId);	//调用同级Model里的方法。
		$condition['username'] = $user;
		$userId=$this->table("shop_user")->where($condition)->getField("user_id");
	// 添加订单数据
		$order=D("order");
		$order->order_user_id=$userId;
		$order->order_product_id=$pId;
		$order->order_product_number=$pNum;
		$order->order_product_price=$pPrice;
		$result=$order->add();
		return $result;
	}

	public function showProduct($user){	//在购物车展示商品信息
		$condition['username'] = $user;
		$userId=$this->table("shop_user")->where($condition)->getField("user_id");
		// $userId=$this->table("shop_user")->select();
		
		$sql="select product_name,product_price,cart_product_id,cart_product_number from shop_product left join (select cart_product_id, cart_product_number from shop_cart where cart_user_id='$userId')tmp on product_id=cart_product_id where product_id in (select cart_product_id from shop_cart where cart_user_id='$userId')";
		$row=$this->query($sql);
		return $row;
	}
	
}