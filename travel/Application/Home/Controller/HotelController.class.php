<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/14
 * Time: 20:50
 */

namespace Home\Controller;
use Think\Controller;
use Think\Page;

class HotelController extends Controller {

    public function index() {

        $gz = $this -> queryAllHotel(1);
        $sz = $this -> queryAllHotel(8);
        $dg = $this -> queryAllHotel(3);
        $hz = $this -> queryAllHotel(10);
        $zs = $this -> queryAllHotel(11);
        $fs = $this -> queryAllHotel(6);
        $this -> assign('gz', $gz);
        $this -> assign('sz', $sz);
        $this -> assign('dg', $dg);
        $this -> assign('hz', $hz);
        $this -> assign('zs', $zs);
        $this -> assign('fs', $fs);
        $this -> display();
    }

    public function economics() {

        $gz = $this -> queryHotel(1, '经济型', 12);
        $sz = $this ->  queryHotel(8, '经济型', 12);
        $this -> assign('gz', $gz);
        $this -> assign('sz', $sz);
        $this -> display();
    }

    public function cityHotel() {

        $this->hotel();
    }


    public function cityHotel_economics()
    {

        $this->hotel();
    }

    private function hotel() {


        $city_id = I('get.city_id');
        $hotel_type = I('get.hotel_type');

        $hotel = $this -> queryHotel($city_id, $hotel_type, 10);
        $city_name = $this -> queryCity($city_id);

        //查询区域
        $region = M('region') -> where(['city_id' => $city_id]) -> select();
        $this -> assign('city_id', $city_id);
        $this -> assign('hotel', $hotel);
        $this -> assign('name', $city_name);
        $this -> assign('region', $region);
        $this -> display();
    }


    public function cityHotel_4() {

         $this->hotel();
    }

    private function queryAllHotel($city_id)
    {

         $data = M()
            -> field('hotel.hotel_id, hotel.hotel_name, hotel.hotel_type, hotel.hotel_price, 
                     hotel.hotel_addr, city.name')
            -> table(['travel_hotel' => 'hotel', 'travel_city' => 'city'])
            -> where('hotel.hotel_city_id = city.id and hotel.hotel_city_id = '.$city_id)
            -> limit(12)
            -> select();
         return $data;
    }

    private function queryHotel($city_id, $hotel_type, $limit)
    {
        $hotel = M()
            -> field('hotel.hotel_id, hotel.hotel_name, hotel.hotel_type, hotel.hotel_price,
                     hotel.hotel_addr, city.name, intro.hotel_image')
            -> table(['travel_hotel' => 'hotel',
                      'travel_city' => 'city',
                      'travel_hotel_intro' => 'intro'])
            -> where('hotel.hotel_city_id = city.id and hotel_type = '."'$hotel_type'".' 
            and hotel.hotel_city_id = '.$city_id.' and hotel.hotel_id = intro.hotel_id')
            -> limit($limit)
            -> select();
        return $hotel;
    }

    private function queryCity($city_id) {

        $city_name = M('city')
            -> field('name')
            -> find(intval($city_id));
        return $city_name;
    }

    public function search() {

        $region_id = I('post.region_id');
        $city_id = I('post.city_id');

        $hotel = M() -> field('hotel.*, intro.hotel_image')
            -> table(['travel_hotel' => 'hotel', 'travel_hotel_intro' => 'intro'])
            -> where('hotel.hotel_id = intro.hotel_id and 
                         hotel.region_id = '. $region_id)
            -> select();
        $this -> assign('city_id', $city_id);
        $this -> assign('hotel', $hotel);
        $this -> display();
    }
}