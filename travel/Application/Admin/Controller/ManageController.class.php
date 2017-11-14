<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/24
 * Time: 17:28
 */

namespace Admin\Controller;


use Think\Controller;

class ManageController extends Controller
{

     public function index() {

         if(IS_POST) {

             $food = D('food');
             $result = $food -> handleData(I('post.'), $_FILES['file']);
             if($result)
                 $this -> redirect('index');
         }else {

             $this -> display();
         }
     }

     public function shop() {

         if (IS_POST) {

             $shop = D('food_shop');
             $result = $shop -> handleData(I('post.'), $_FILES['file']);
             if($result)
                 $this -> redirect('shop');
         }else {

             $this -> display();
         }

     }

     public function hotel() {

         if (IS_POST) {

            $hotel = D('hotel_facilities');
            $result = $hotel -> handle_data(I('post.'),$_FILES);
            if($result) {

                $this -> redirect('hotel');
            }
         }else {
             $this -> display();
         }
     }

     public function recommend() {

         if (IS_POST) {

             $post = I('post.');
             $file = $_FILES['file'];
             $result = D('IndexRecomend') -> handleData($post, $file);
             if ($result) {

                 $this -> redirect('recommend');
             }
         }else {

             $this -> display();
         }

     }

     public function view() {

         if (IS_POST) {

             $post = I('post.');
             $file = $_FILES['file'];
             $result = D('view') -> handleData($post, $file);
             if($result)
                 $this -> redirect('view');
         }else {

             $view_type = M('view_type') -> select();
             $this -> assign('view_type', $view_type) -> display();
         }

     }

     public function show_ticket() {

           $data = D('ViewOrderView') -> field('*', 'name') -> select();
           $this -> assign('data', $data) -> display();
     }

     public function show_hotel() {

         $data = M()
             -> field('o.*, hotel.hotel_name, room.room_name')
             -> table(['travel_order' => 'o',
                 'travel_hotel' => 'hotel',
                 'travel_room' => 'room'])
             -> where('o.roomid = room.room_id
                             and o.hotelid = hotel.hotel_id')
             -> select();
         $this -> assign('data', $data);
         $this -> display();

     }

     public function show_view() {

         $model = D('LineOrderView');
         $data = $model -> field('*, name') -> select();

         $this -> assign('data', $data) -> display();
     }




}