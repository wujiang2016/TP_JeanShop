<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class UserController extends Controller {
    public function login(){
        if ($_POST) {
            if (isset($_POST["username"])&&isset($_POST["password"])&&isset($_POST["authCode"])) {
                $username=I("post.username");
                $password=I("post.password");
                $authCode=I("post.authCode");
                $result=$this->acheck($authCode);
                if (!$result) {
                    echo "验证码输入错误！";
                    $this->display("login");
                }
                $User=D("User");
                $flag=$User->LoginCheck($username,$password);
                if ($flag) {
                    if ('on'==$_POST["agree"]) {
                        setcookie('user',$username,time()+(3600*24*14),'/');
                    } else {
                        setcookie('user',$username,time()+36000,'/');
                    }
                    
                    $_COOKIE['user']=$username;
                    $url=$_POST["url"];
                    echo "$url";
                    if ('http://localhost/jd/index.php/Home/User/register.html'==$url) {
                        $this->redirect('Index/index');
                    } else {
                        header("location:$url");//跳转到登录前页面
                    }
                    
                    
                } else {
                    $this->assign('error',"账号或密码错误。");
                    $this->display();
                }
            } else {
                
                $this->display();
            }
        } else {
            $this->display();
        }
    }
    public function acheck($code){  //验证输入的验证码
        $Verify = new \Think\Verify();
        return $Verify->check($code);
    }
    public function verifyCode(){ //生成验证码
        $Verify = new \Think\Verify();
        $Verify->entry();
    }
    public function register(){
        if (IS_POST) {
            $username=I("post.username");
            $password=I("post.password");
            $password1=I("post.password1");
            $email=I("post.email");
            $phone=I("post.phone");
            $authCode=I("post.authCode");
            $result=$this->acheck($authCode);   //验证验证码
            if (!$result) {
                echo "验证码输入错误！";
                $this->display();
                exit;
            }
            if ($password==$password1) {
                $User=D("User");
                // $flag=$User->RegisterCheck($username,$password,$email,$phone);
                if ($User->create()) {
                    $User->add();
                    setcookie('user',$username,time()+36000,'/');
                    $_COOKIE['user']=$username;
                    // $this->success("注册成功！",U('Index/index'));
                    $this->redirect('Index/index');
                    // $this->display("Index/index");
                } else {
                    // $this->assign('error',"用户名已存在。");
                    echo $User->getError();
                    $this->display();
                }
            }
        } else {
            $this->display();
        }
    }
    public function address(){
        if (IS_POST) {
            if (!$_COOKIE['user']) {
                echo "请先登录！";
                $this->display();
                return;
            }
            $data['id']=$_POST["id"];
            $data['user_id']=$_COOKIE['user'];
            $data['receiver']=$_POST["receiver"];
            if ("中国大陆"==$_POST["country"]) {
                $data['area']=$_POST["location"];
            } else {
                $data['area']=$_POST["country"].' '.$_POST["location"];
            }
            $data['detailed_address']=$_POST["detailed_address"];
            $data['postcode']=$_POST["postcode"];
            if ($_POST["mobile"] || ($_POST["areacode"] && $_POST["telphone"])) {
                if ($_POST["mobile"]) {
                    $data['tel_mobile']=substr($_POST['mobileCountry'], strpos($_POST['mobileCountry'], '+')+1).'-'.$_POST["mobile"];
                }
                if ($_POST["areacode"] && $_POST["telphone"]) {
                    if ($data['tel_mobile']) {
                        $data['tel_mobile'].='<br>';
                    }
                    $data['tel_mobile'].=substr($_POST['telCountry'], strpos($_POST['telCountry'], '+')+1).'-'.$_POST["areacode"].'-'.$_POST["telphone"];
                    if ($_POST["extension"]) {
                        $data['tel_mobile'].='-'.$_POST["extension"];
                    }
                }
            } else {
                // $url=$_SERVER['HTTP_REFERER'];
                // header("location:$url");
                echo "请输入联系电话！";
                $this->display();
                return;
            }
            if (isset($_POST["default_address"])) {
                $data['default_address']=1;
            }
            // var_dump($data);
            // exit;
            $User=D('User');
            $User->updateUserAddress($data);

            $this->display();
        } else {
            $this->display();
        }
        
    }
    
    public function order(){
        $this->display();
    }

    public function buynow(){
        // var_dump($_GET);
        if (!$_COOKIE['user']) {
            $url=$_SERVER['HTTP_REFERER'];
            header('location:$url');
            echo "请先登录！";
            exit;
        }
        
        $this->jeanName=$_GET["jeanName"];
        $this->jean_id=$_GET["jean_id"];
        $this->fashion_img=$_GET["fashion_img"];
        $this->price=$_GET["price"];
        $this->fashion_name=$_GET["fashion_name"];
        $this->size=$_GET["size"];
        $this->number=$_GET["number"];
        $this->totalStorage=$_GET["totalStorage"];

        $user=D('User');
        $data['username']=$_COOKIE['user'];
        $address=$user->getUserAddress($data);
        // var_dump($address);
        // exit;
        $this->assign('address',$address);
        $this->display();
    }

    public function pay(){
        // var_dump($_GET);
        //     exit;
        if (!$_COOKIE['user']) {
            $url=$_SERVER['HTTP_REFERER'];
            header('location:$url');
            echo "请先登录！";
            exit;
        }
        
        

        $user=D('User');
        $result=$user->updateOrder($_GET);
        
        $this->display();
    }

    public function logoff(){
        setcookie('user','',time()-3600000,'/');
        $_COOKIE['user']='';
        // $this->success("11",U('User/register'),0);
        $url=$_SERVER["HTTP_REFERER"];
        header("location:$url");
        // $this->display("{U('User/register')}");
        // $this->display("Index/index");
    }
}