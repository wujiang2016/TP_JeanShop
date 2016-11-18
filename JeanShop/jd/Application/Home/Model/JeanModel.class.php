<?php 
namespace Home\Model;
use Think\Model;

class JeanModel extends Model{

	//获取牛仔裤分类信息
	public function getJeanClassify(){
        $info=M('jeanclassify');
        return $info->select();
    }

    public function getFashionStorage($data){

        $info=M('jean');
        $keyword='';
        

        $flag=array_pop($data);
        foreach ($data as $key => $value) {
           if (!$value) {
            // var_dump($value);
               unset($data[$key]);      //删除数据为空的值
               $keyword=$key;
               $specials=$info->table('shop_jeanfashion')->field($flag)->where($data)->select();
           }
        }
        $num=$info->table('shop_jeanfashion')->where($data)->sum('quantity');
        // var_dump($data);

        foreach ($data as $key => $value) {
           if (('jean_id'!=$key) && ($flag==$key)) {
               unset($data[$key]);
               $keyword=$key;
               $specials=$info->table('shop_jeanfashion')->field($key)->where($data)->select();
               // var_dump($key);
               // var_dump($specials);
               break;
           }
        }
        // var_dump($keyword);
        
        // exit;
        // $condition['jean_id']=$data['jean_id'];
        // $condition[$flag['flag']]=$data[$flag['flag']];

        if ('size'==$flag) {                        //把specials二维数组变成一维数组
            foreach ($specials as $key => $value) {
                $specials[$key]=$specials[$key]['size'];
            }
        } else if ('fashion_name'==$flag) {
            foreach ($specials as $key => $value) {
                $specials[$key]=$specials[$key]['fashion_name'];
            }
        }else{
            return array($num);
        }
        // echo "$key";
        // var_dump(array_merge($specials,array($num)));
        
        
// var_dump($specials);

        return array_merge($specials,array($num));

        // return array($num);
    }

    public function getNewJeanInfo(){   //aquire latest jean infomation of top 5
        $info=M('jean');
        return $info->field('shop_jean.id,shop_jean.name,shop_jeanfashion.fashion_img,shop_jeanfashion.price')->join('left join shop_jeanfashion on shop_jean.id=shop_jeanfashion.jean_id')->group('shop_jeanfashion.jean_id')->order('shop_jean.id desc')->limit(5)->select();
    }
    public function getAllJeanInfo(){
        $info=M('jean');
        return $info->field('shop_jean.id,shop_jean.name,shop_jeanfashion.fashion_img,shop_jeanfashion.price')->join('left join shop_jeanfashion on shop_jean.id=shop_jeanfashion.jean_id')->group('shop_jeanfashion.jean_id')->order('shop_jean.id desc')->select();
    }

    public function getDetailInfo($id){
		$info=M('jean');
        $condition['id']=$id;
        $jeaninfo=$info->where($condition)->select();
        $condition2['jean_id']=$id;
        $jeanFashioninfo=$info->table('shop_jeanfashion')->where($condition2)->select();
        // return $jeaninfo.$jeanFashioninfo;
        return array_merge($jeaninfo,$jeanFashioninfo);
	}

	// 获取产品列表
	public function updateJean($data) {
        $tmp['is_promotion']=$data["is_promotion"];     //要判断数据是否有重复，不能含有促销这个下单，因为它是可变的。
        $tmp['wear_effect']=$data["wear_effect"];       //要判断数据是否有重复，不能含有穿着效果图片。
        $tmp['detail_work']=$data["detail_work"];	//要判断数据是否有重复，不能含有细节做工图片。
        array_splice($data,count($data)-3);
               
    	// var_dump($data);
        // $Jean=M('Jean');
        // var_dump($tmp);

        if (!$this->where($data)->select()) {
        	$this->add($data);
        }
        $this->where($data)->save($tmp);
        return $this->where($data)->getField('id');
	}

    // 更新款式信息
	public function updateJeanfashion($data) {
		$lookfor=array_slice($data, 0,3);	//查找部分
		$updating=array_slice($data, 3);	//查找部分
        $Jeanfashion=M('Jeanfashion');
        // return var_dump($tmp);
        if ($Jeanfashion->where($lookfor)->select()) {
        	$Jeanfashion->where($lookfor)->save($updating);
        }else{
        	$Jeanfashion->add($data);
        }
        return $Jeanfashion->where($data)->getField('id');
	}
}