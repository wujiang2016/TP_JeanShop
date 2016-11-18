<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class CartController extends Controller {
	public function deleteFromCart(){	//从购物车删除商品
		$user=$_GET['user'];
		$pId=$_GET['pId'];
		$cart=D('Cart');
		$flag=$cart->deleteProduct($user,$pId);
		return $flag;
    }

    public function addToCart(){	//加商品进入购物车

		// $user=$_GET['user'];
		// $pId=$_GET['pId'];
		// $pNum=$_GET['pNum'];
		$cart=D('Cart');
		$flag=$cart->addProduct($_GET);
    }

    public function settleAccounts(){	//结算购物车
		$user=$_GET['user'];
		$pId=$_GET['pId'];
		$pNum=$_GET['pNum'];
		$pPrice=$_GET['pPrice'];

		$cart=D('Cart');
		// $flag1=$cart->deleteProduct($user,$pId);
		$flag2=$cart->settleAnAccount($user,$pId,$pNum,$pPrice);
		echo $flag1.'+'.$flag2;
    }

    public function showProductInCart(){	//显示购物车购物车中的商品
		$user=$_COOKIE['user'];
		if ($user) {
			$cart=D('Cart');
			$productInCart=$cart->showProduct($user);
			$this->assign("productInCart",$productInCart);
			// echo "$productInCart";
		}
		
        // $this->user=$_COOKIE['user'];
        $this->display();
    }
}