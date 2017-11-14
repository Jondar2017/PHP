<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/12
 * Time: 20:36
 */

namespace Home\Controller;


use Think\Controller;
use Think\Page;

class FoodController extends Controller {

    public function index() {

        //从数据库中获取数据
        $food = M('food');
        $page = new Page($food -> count(), 12);
        $data = $food
                -> field('food_id, food_name, food_decs, food_taste, image_path')
                -> limit($page -> firstRow, $page -> listRows)
                -> select();
        $this -> assign('show', $page -> show());
        $this -> assign('data', $data);
        $this -> display();
    }

    public function showFoodDetail() {

        $food = M('food');
        $food_id = intval($_GET['food_id']);
        $data = $food
            ->field('food_id, food_name, food_decs, image_path, food_taste')
            ->find($food_id);
        $shop_info = M('food_shop')
            ->field('food_shop_id, shop_name, shop_addr, shop_image')
            -> where("food_shop_id in (select food_shop_id from travel_food_foodshop where food_id = $food_id)")
            -> select();
        $this -> assign('data', $data);
        $this -> assign('shop_info', $shop_info);
        $this -> display();
    }

    public function showShopInfo() {

        $data = M('food_shop') -> find(intval(I('get.food_shop_id')));
        $this -> assign('data', $data);
        $this -> display();
    }

    public function like() {

        $food = M('food');
        $food_id = intval(I('get.food_id'));
        $like = intval(I('get.like'));
        $result = $food -> save(['food_id' => $food_id, 'food_taste' => $like]);
        if ($result)
            echo $like;
    }

    public function search() {

        if (IS_POST) {

            $search = I('post.search');
            session('search', $search);
        }else {

            $search = session('search');
        }
        $food = M('food');
        $page = new Page($food -> where(['city_name' => $search]) -> count(), 12);
        $data = $food
            -> field('food_id, food_name, food_decs, food_taste, image_path')
            -> where(['city_name' => $search])
            -> limit($page -> firstRow, $page -> listRows)
            -> select();
        $this -> assign('show', $page -> show());
        $this -> assign('data', $data);
        $this -> display();
    }
}