<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/30
 * Time: 22:20
 */

namespace Admin\Model;


use Think\Model;
use Think\Upload;

class ViewModel extends Model
{
     public function handleData($post, $file) {

         $post['view_discount'] = 18;
         if($file['size'] > 0) {

             $config = ['rootPath' =>  TRAVEL_WORKING_PATH.
                 TRAVEL_UPLOAD_PATH.'view/'];
             $upload = new Upload($config);
             $info = $upload -> uploadOne($file);
             if($info) {

                 $post['images_path'] = $info['savepath'].$info['savename'];
             }
         }
         $result = $this -> add($post);

         //增加门票数据
         $ticket = array();
         for ($i = 0; $i < count($post['ticket_cost']); $i++) {

             $ticket[$i]['ticket_title'] = $post['ticket_title'][$i];
             $ticket[$i]['ticket_cost'] = $post['ticket_cost'][$i];
             $ticket[$i]['ticket_price'] = $post['ticket_price'][$i];
             $ticket[$i]['ticket_owner'] = '同程旅游';
             $ticket[$i]['ticket_type'] = '成人票';
             $ticket[$i]['ticket_discount'] = $post['ticket_cost'][$i]
                 - $post['ticket_price'][$i];
             $ticket[$i]['view_id'] = $result;
         }

         M('view_ticket') -> addAll($ticket);
         return $result;
     }
}