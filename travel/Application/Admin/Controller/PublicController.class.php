<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/23
 * Time: 14:57
 */

namespace Admin\Controller;


use Think\Controller;
use Think\Verify;

class PublicController extends Controller
{
      public function index() {

          if(IS_POST) {

              $post = I('post.');
             //校验验证码
             $verify = new Verify();
             $result = $verify -> check(I('post.code'));
             if($result) {

                 unset($post['code']);
                 $post['password'] = md5($post['password']);
                 //校验用户名和密码
                 $data = M('user') -> where($post) -> find();

                 if($data) {
                     //判断其角色是管理员还是用户
                     session('username', $data['username']);
                     session('id', $data['id']);
                     $this -> redirect('Home/Food/index');
                 }
             }
          }else {

              $this -> display();
          }

      }


      public function validate() {

          $config = [
              'useImgBg'  =>  false,           // 使用背景图片
              'fontSize'  =>  15,              // 验证码字体大小(px)
              'useCurve'  =>  false,           // 是否画混淆曲线
              'useNoise'  =>  false,           // 是否添加杂点
              'imageH'    =>  0,               // 验证码图片高度
              'imageW'    =>  0,               // 验证码图片宽度
              'length'    =>  4,               // 验证码位数
          ];
          $verify = new Verify($config);
          $verify ->entry();
      }

      public function register() {

          if(IS_POST) {

              //对密码进行md5加密
              $post = I('post.');
              $post['password'] = md5($post['password']);
              $result = M('user') -> add($post);
              if($result)
                  $this -> redirect('index');
          }else {

              $this -> display();
          }

      }

      public function loginOut() {

          session('roleName', null);
          session('username', null);
          session('id', null);
          $this -> redirect('index');
      }

      public function adminLogin() {

          if(IS_POST) {

              $post = I('post.');
              //校验验证码
              $verify = new Verify();
              $result = $verify -> check(I('post.code'));
              if($result) {

                  unset($post['code']);
                  $post['password'] = md5($post['password']);
                  //校验用户名和密码
                  $data = M('user')->where($post)->find();

                  if ($data) {
                      //判断其角色是管理员还是用户
                      session('username', $data['username']);
                      session('id', $data['id']);
                      $this->redirect('Manage/index');
                  }

              }
          }else {

              $this -> display();
          }

      }

      public function adminLoginOut() {

          session('username', null);
          session('id', null);
          $this -> redirect('adminLogin');
      }

}