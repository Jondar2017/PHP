<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/25
 * Time: 1:14
 */

namespace Admin\Model;


use Think\Model;
use Think\Upload;

class FoodModel extends Model
{
       public function handleData($post, $file) {

           if($file['size'] > 0) {

               $config = [
                   'rootPath' => TRAVEL_WORKING_PATH.TRAVEL_UPLOAD_PATH."food/"
               ];
               $upload = new Upload($config);
               $info = $upload -> uploadOne($file);
               $post['image_path'] = $info['savepath'].$info['savename'];
           }
           $result = $this -> add($post);

           return $result;
       }
}