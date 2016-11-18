<?php
namespace Home\Controller;
use Think\Controller;
class JeanController extends Controller {
    public function index(){
        // $this->login="Home/Login/login";
        // $jeanClassifyInfo=D('Jean');
        // var_dump($jeanClassifyInfo->getJeanClassify());
        $getNewJeanInfo=D('Jean');
        $newJeanInfo=$getNewJeanInfo->getNewJeanInfo();
        $allJeanInfo=$getNewJeanInfo->getAllJeanInfo();
        $this->assign('newJeanInfo',$newJeanInfo);
        $this->assign('allJeanInfo',$allJeanInfo);
        $this->display();
        // echo "d";
        // echo C('__ROOT__');
    }

    public function getstorage(){
        if (isset($_GET)) {
            $jean=D('Jean');
            $num=$jean->getFashionStorage($_GET);
            echo json_encode($num);
        }
    }

    public function detail(){
        // $getNewJeanInfo=D('Jean');
        // $newJeanInfo=$getNewJeanInfo->getNewJeanInfo();
        // $allJeanInfo=$getNewJeanInfo->getAllJeanInfo();
        // $this->assign('newJeanInfo',$newJeanInfo);
        // $this->assign('allJeanInfo',$allJeanInfo);
        if (isset($_GET['id'])) {
            $detailInfo=D('Jean');
            $jeanFashionInfo=$detailInfo->getDetailInfo($_GET['id']);
            $jeanInfo=array_shift($jeanFashionInfo);
            $this->assign('wear_effect',explode('@@@', $jeanInfo['wear_effect'])); //wear effect pictures
            $this->assign('detail_work',explode('@@@', $jeanInfo['detail_work'])); //detail work pictures


            $param=[
                '元素'=>'element',
                '风格'=>'style',
                '图案'=>'pattern',
                '厚薄'=>'thickness',
                '材质'=>'material',
                '裤长'=>'outseam',
                '腰型'=>'waistform',
                '裤型'=>'panttype',
                '季节'=>'season',
                '闭合方式'=>'closed',
                '版型'=>'stereotype',
            ];
            foreach ($param as $key => $value) {
                if ($jeanInfo[$value]) {
                    $param[$key]=$jeanInfo[$value];
                } else {
                    unset($param[$key]);
                }
            }
            $this->assign('param',$param);  //jean parameter

            $priceRange=[];     //record from min price to max price
            $allFashion=[];     //record all different fashions
            $allSize=[];        //record all different sizes
            $totalStorage=0;   //record total quantity jeans

            foreach ($jeanFashionInfo as $key => $value) {
                if ($jeanFashionInfo[$key]["fashion_img"]) {    //all fashions including name and pictures
                    $allFashion[ $jeanFashionInfo[$key]["fashion_name"]]=$jeanFashionInfo[$key]["fashion_img"];
                }
                if (!in_array($jeanFashionInfo[$key]["size"], $allSize)) {  //all different sizes
                    array_push($allSize, $jeanFashionInfo[$key]["size"]);
                }
                if (!in_array($jeanFashionInfo[$key]["price"], $priceRange)) {  //all different price
                    array_push($priceRange, (float)$jeanFashionInfo[$key]["price"]);
                }

                $totalStorage+=(int)$jeanFashionInfo[$key]["quantity"];     //total quantity
            }
            sort($priceRange);
            sort($allSize);
            if ($priceRange[0]==$priceRange[count($priceRange)-1]) {
                $priceStr=round($priceRange[0],2);
            }else{
                $priceStr=round($priceRange[0],2).'~'.round($priceRange[count($priceRange)-1],2);
            }

            $this->jeanName=$jeanInfo['name'];
            $this->jeanId=$jeanInfo['id'];
            $this->image=explode('@@@', $jeanInfo['wear_effect'])[0];
            // $this->assign('jeanName',$jeanInfo['name']);
            $this->assign('priceStr',$priceStr);
            $this->assign('allFashion',$allFashion);
            $this->assign('allSize',$allSize);
            $this->assign('totalStorage',$totalStorage);

            // var_dump($jeanInfo);
            // echo "<br><br><br>";
            // var_dump($jeanFashionInfo);

            $this->display();
        }
        // $this->display();
        // echo "d";
        // echo C('__ROOT__');
    }

    public function updatejeaninfo(){
        $tmp="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";//给图片加随机字符

        if ($_POST) {
            $JEAN=D('Jean');
            if (isset($_POST['name']) && $_POST['name']!='') {  //更新牛仔裤信息
                $wear_effect='';
                $detail_work='';
                foreach($_FILES['wear_effect']['tmp_name'] as $k=>$v){
                    if(is_uploaded_file($_FILES['wear_effect']['tmp_name'][$k])){
                        // echo $_FILES['wear_effect']['name'][$k];
                        $str='';
                        $str=str_replace('.', '', microtime('get_as_float'));
                        for ($i=0; $i <10 ; $i++) { 
                            // $j=rand(0,51);
                            $str.=$tmp[rand(0,51)];
                        }
                        $str.='.jpg';
                        $wear_effect.='@@@'.$str;
                        $save='../jd/Public/images/'.$str;
                        if(!move_uploaded_file($_FILES['wear_effect']['tmp_name'][$k],$save)){
                            echo $_FILES['wear_effect']['error'][$k];
                        }
                    }else{
                        echo "文件不存在！";
                    }
                }
                foreach($_FILES['detail_work']['tmp_name'] as $k=>$v){
                    if(is_uploaded_file($_FILES['detail_work']['tmp_name'][$k])){
                        $str='';
                        $str=str_replace('.', '', microtime('get_as_float'));
                        for ($i=0; $i <10 ; $i++) { 
                            // $j=rand(0,51);
                            $str.=$tmp[rand(0,51)];
                        }
                        $str.='.jpg';
                        $detail_work.='@@@'.$str;
                        $save='../jd/Public/images/'.$str;
                        if(!move_uploaded_file($_FILES['detail_work']['tmp_name'][$k],$save)){
                            echo $_FILES['detail_work']['error'][$k];
                        }
                    }else{
                        echo "文件不存在！";
                    }
                }
                $_POST['wear_effect']=substr($wear_effect, 3);
                $_POST['detail_work']=substr($detail_work, 3);
                echo $JEAN->updateJean($_POST);
            }elseif (isset($_POST['jean_id']) && $_POST['jean_id']!='') {   //更新款式信息
                if ($_POST['fashion_name']=='') {
                    echo "请输入款式名称！";
                    exit;
                }
                // $fashionheader=[
                //     'jean_id'=>'',
                //     'fashion_name'=>''
                // ];
                
                $fashionheader['jean_id']=$_POST['jean_id'];
                $fashionheader['fashion_name']=$_POST['fashion_name'];
                array_splice($_POST, 0,2);
                for ($i=0; $i <count($_POST['size']) ; $i++) { 
                    echo "$i".count($_POST['size']);
                    $fashionfooter=[
                        'size'=>'',
                        'quantity'=>'',
                        'price'=>'',
                        'promotion_price'=>''
                    ];
                    foreach ($fashionfooter as $key => $value) {
                        $fashionfooter[$key]=$_POST[$key][$i];
                    }
                    if ($i==0) {        //图片信息只在第一个尺寸数据中加
                        if(is_uploaded_file($_FILES['fashion_img']['tmp_name'])){
                            $fashion_img='';
                            $fashion_img=str_replace('.', '', microtime('get_as_float'));
                            for ($k=0; $k <10 ; $k++) { 
                                $j=rand(0,51);
                                $fashion_img.=$tmp[$j];
                            }
                            $fashion_img.='.jpg';
                            // $detail_work.='@@@'.$fashion_img;
                            $save='../jd/Public/images/'.$fashion_img;
                            if(!move_uploaded_file($_FILES['fashion_img']['tmp_name'],$save)){
                                echo $_FILES['fashion_img']['error'];
                            }
                            $fashion_img_tmp['fashion_img']=$fashion_img;
                            $fashion=array_merge($fashionheader,$fashionfooter,$fashion_img_tmp);
                            $JEAN->updateJeanfashion($fashion);
                        }else{
                            echo "文件不存在！";
                        }
                    }else{
                        $fashion=array_merge($fashionheader,$fashionfooter);
                        $JEAN->updateJeanfashion($fashion);
                    }
                    
                }
                echo "$i";
            } else{
                echo "请输入牛仔裤名！";
                exit;
            }
            exit;
        }
        $jeanClassifyInfo=D('Jean');
        $Details=$jeanClassifyInfo->getJeanClassify();
    	
        $classify=[
        	'元素'=>'element',
        	'风格'=>'style',
        	'图案'=>'pattern',
        	'厚薄'=>'thickness',
        	'材质'=>'material',
        	'裤长'=>'outseam',
        	'腰型'=>'waistform',
        	'裤型'=>'panttype',
        	'季节'=>'season',
        	'闭合方式'=>'closed',
        	// '版型'=>'stereotype'
        	'版型'=>'stereotype',
        	'尺码'=>'size'
        ];
        foreach ($classify as $key => $value) {
        	$$value=array();
        	foreach ($Details as $key1 => $value1) {
        		if ($value1[$value]!='0') {
        			array_push($$value, $value1[$value]);
        		}
        	}
        	$this->assign($value,$$value);
        	// var_dump($$value);
        	// echo "<br>";
        }
       	$keyword=array();
        foreach ($classify as $key => $value) {
        	array_push($keyword, array('chn'=>$key,'eng'=>$value));
        }
        // var_dump($keyword);
        // exit;
        $this->assign('keyword',$keyword);

        $this->display();
    }
}