<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/7/3
 * Time: 15:45
 */

namespace Home\Widget;


use Think\Controller;

class CommonController extends Controller
{

     public function base() {

         $this -> display('Common:base');
     }


}