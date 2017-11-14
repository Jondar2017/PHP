<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/25
 * Time: 23:17
 */

namespace Admin\Model;


use Think\Model;
use Think\Upload;

class HotelFacilitiesModel extends Model
{
     public function handle_data($post, $file) {

         $hotel_city_id = M('city')
             -> field('id')
             -> where(['name' => $post['city_name']])
             -> find();

         $hotel = ['hotel_name' => $post['hotel_name'],
                   'hotel_type' => $post['hotel_type'],
                   'hotel_addr' => $post['hotel_addr'],
                   'hotel_price' => $post['hotel_price'],
                   'hotel_city_id' => intval($hotel_city_id['id'])];

         $hotel_id = M('hotel') -> add($hotel);

         if($hotel_id) {

             $hotel_intro = ['hotel_desc' => $post['hotel_desc'],
                             'hotel_id' => $hotel_id];
             if($file['hotel_image']['size'] > 0) {

                 $config = [
                     'rootPath' => TRAVEL_WORKING_PATH.TRAVEL_UPLOAD_PATH."hotel/"
                 ];
                 $upload = new Upload($config);
                 $info = $upload -> uploadOne($file['hotel_image']);
                 if($info)
                  $hotel_intro['hotel_image'] = $info['savepath'].$info['savename'];

             }
             M('hotel_intro') -> add($hotel_intro);

             $hotel_facilities = [
                 'hotel_phone' => $post['hotel_phone'],
                 'hotel_open' => $post['hotel_open'],
                 'hotel_net' => $post['hotel_net'],
                 'hotel_service' => implode(' ', $post['hotel_service']),
                 'hotel_restaurant' => $post['hotel_restaurant'],
                 'hotel_sports' => $post['hotel_sports'],
                 'hotel_rooms' => $post['hotel_rooms'],
                 'hotel_card' => implode('、', $post['hotel_card']),
                 'hotel_id' => $hotel_id
             ];
            $this -> add($hotel_facilities);

            //添加房型
            $room_name = I('post.room_name');
            $room_size = I('post.room_size');
            $room_people = I('post.room_people');
            $room_floor = I('post.room_floor');
            $room_bed = I('post.room_bed');
            $room_wifi = I('post.room_wifi');
            $room_price = I('post.room_price');

            //处理图片
             $config = [
                 'rootPath' => TRAVEL_WORKING_PATH.TRAVEL_UPLOAD_PATH."room/"
             ];
             $upload = new Upload($config);
             $info = $upload -> upload(array($file['file']));

            for($i = 0; $i < count($room_name); $i++) {

                $room[$i]['room_name'] = $room_name[$i];
                $room[$i]['room_size'] = $room_size[$i];
                $room[$i]['room_people'] = $room_people[$i];
                $room[$i]['room_floor'] = $room_floor[$i];
                $room[$i]['room_bed'] = $room_bed[$i];
                $room[$i]['room_wifi'] = $room_wifi[$i];
                $room[$i]['room_price'] = $room_price[$i];
                $room[$i]['hotel_id'] = $hotel_id;
                if($info) {

                    $room[$i]['room_image'] = $info[$i]['savepath'].$info[$i]['savename'];
                }
            }
            M('room') -> addAll($room);
            return $hotel_id;
         }

     }
}