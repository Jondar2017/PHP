<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/30
 * Time: 21:01
 */

namespace Admin\Model;


use Think\Model;
use Think\Upload;

class IndexRecomendModel extends Model
{
     public function handleData($post, $file) {

         $post['recomend_discount'] = $post['recomend_all']
             - $post['recomend_price'];
         if($file['size'] > 0) {

             $config = ['rootPath' =>  TRAVEL_WORKING_PATH.
                 TRAVEL_UPLOAD_PATH.'recommend/'];
             $upload = new Upload($config);
             $info = $upload -> uploadOne($file);
             if($info) {

                 $post['image_path'] = $info['savepath'].$info['savename'];
             }
         }
         $result = $this -> add($post);
         return $result;
     }
}