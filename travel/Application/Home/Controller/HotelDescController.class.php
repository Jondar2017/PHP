<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/19
 * Time: 0:03
 */

namespace Home\Controller;

use Think\Controller;

class HotelDescController extends Controller
{
    public function index()
    {

        //获取酒店详情
        $desc = M('hotel_intro')
                -> field('hotel_desc, hotel_image')
                -> where(['hotel_id' => I('get.id')])
                -> find();
        //获取酒店设施服务
        $facilities = M('hotel_facilities')
                      -> where(['hotel_id' => I('get.id')])
                      -> find();
        //获取酒店房间详情
        $room = M('room')
                -> where(['hotel_id' => I('get.id')])
                -> select();
        //获取酒店名称和地址
        $hotel = M('hotel')
                 -> field('hotel_name, hotel_addr')
                 -> where(['hotel_id' => I('get.id')])
                 -> find();
        //获取酒店所在地
        $city = I('get.city');
        //变量分配
        $this -> assign('city', $city);
        $this -> assign('hotel', $hotel);
        $this -> assign('desc', $desc);
        $this -> assign('facilities', $facilities);
        $this -> assign('room', $room);
        //展示模板
        $this -> display();
    }


}