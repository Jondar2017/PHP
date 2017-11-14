<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/23
 * Time: 21:57
 */

namespace Home\Controller;


use Think\Controller;

class OrderInfoController extends Controller
{
      public function query() {

           $data = M()
                   -> field('o.*, hotel.hotel_name, room.room_name')
                   -> table(['travel_order' => 'o',
                       'travel_hotel' => 'hotel',
                       'travel_room' => 'room'])
                   -> where('o.roomid = room.room_id
                             and o.hotelid = hotel.hotel_id 
                             and o.userid = '.session('id'))
                   -> select();
           $this -> assign('data', $data);
           $this -> display();
      }

      public function ticket() {


          $data = D('ViewOrderView') -> field('*', 'name') -> where(['user_id'
          => session('id')]) -> select();
          $this -> assign('data', $data) -> display();
      }

      public function sign() {

          $model = D('LineOrderView');
          $data = $model -> field('*, name') -> where(['user_id' => session('id')])
              -> select();

          $this -> assign('data', $data) -> display();
      }
}