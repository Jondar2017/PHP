<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/19
 * Time: 20:57
 */

namespace Home\Controller;
use Think\Controller;

class HotelOrderController extends Controller
{
    public function index()
    {
        if(IS_POST) {

            $post = I('post.');
            $update = $post['update'];
            //重新计算订房总价
            $post['roomcharge'] = $post['roomcharge'] * $post['roomcount'];
            //格式化日期
            $post['startdate'] =  (new \DateTime($post['startdate'])) -> format('Y-m-d');
            $post['enddate'] = (new \DateTime($post['enddate'])) -> format('Y-m-d');

            $result = null;
            if(isset($update)) {
                //修改数据
                unset($post['update']);
                $result = M('order') -> save($post);
            }else {
                //添加数据
                $result = M('order') -> add($post);
            }
            if($result) {
                $hotelId = I('post.hotelid');
                $this -> redirect('HotelDesc/index', ['id' => $hotelId]);
            }

        }else {

            $room_id = intval(I('get.room_id'));
            $hotel_id = intval(I('get.hotel_id'));
            $order_id = intval(I('get.order_id'));
            //查询指定的酒店和城市
            $hotelInfo = M()
                         -> field('hotel.hotel_id, hotel.hotel_name, 
                         hotel.hotel_addr, city.name, intro.hotel_image')
                         -> table('travel_hotel hotel, travel_city city, travel_hotel_intro intro')
                         -> where('hotel.hotel_city_id 
                         = city.id and hotel.hotel_id = '.$hotel_id.' 
                         and hotel.hotel_id = intro.hotel_id')
                         -> find();
            //查询指定的房间
            $room = M('room') -> find($room_id);
            //查询订单
            if(isset($order_id)) {

                $order = M('order') -> find($order_id);
                $this -> assign('order', $order);
            }
            //变量分配
            $this -> assign('hotelInfo', $hotelInfo);
            $this -> assign('room', $room);
            $this -> display();
        }

    }
}