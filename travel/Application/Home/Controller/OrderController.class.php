<?php
/**
 * Created by PhpStorm.
 * User: Jondar
 * Date: 2017/6/27
 * Time: 11:21
 */

namespace Home\Controller;


use Think\Controller;

class OrderController extends Controller
{

    //线路订单
    public function index(){
        $id = I("post.id");
        $line_arr = M("index_recomend")->where(array("recomend_id"=>$id))->getField("recomend_des", true);
        $line_name = $line_arr[0];
        $adult_price = I("post.adult_price");
        $child_price = I("post.child_price");
        $discount = I("post.discount");
        $type_id = I("post.type_id");
        $price_type_arrs = I("post.price_type_arrs");
        $start_time = I("post.start_time");
        $adult_num = I("post.adult_num");
        $child_num = I("post.child_num");
        $total_price = $adult_price * $adult_num + $child_price * $child_num;

        $data = array();
        $data["id"] = $id;
        $data["line_name"] = $line_name;
        $data["adult_price"] = $adult_price;
        $data["child_price"] = $child_price;
        $data["discount"] = $discount;
        $data["type_id"] = $type_id;
        $data["price_type_arrs"] = $price_type_arrs;
        $data["start_time"] = $start_time;
        $data["adult_num"] = $adult_num;
        $data["child_num"] = $child_num;
        $data["total_price"] = $total_price;

//        dump($data);
//        die();
        $all = array();
        $all['0'] = $data;
        $this->all = $all;
        $this->display();
    }


    //处理订单信息
    public function order(){
        $line_name = I("post.line_name");
        $adult_price = I("post.adult_price");
        $child_price = I("post.child_price");
        $total_price = I("post.total_price");
        $adults = I("post.adults");
        $children = I("post.children");
        $travel_type = I("post.travel_type");
        $line_id = I("post.id");
        $username = I("post.username");
        $phone = I("post.phone");
        $comments = I("post.intro");
        $start_time = I("post.start_time");

        $order = array();
        $order["line_name"] = $line_name;
        $order["adult_price"] = $adult_price;
        $order["child_price"] = $child_price;
        $order["total_price"] = $total_price;
        $order["adults"] = $adults;
        $order["children"] = $children;
        $order["travel_type"] = $travel_type;
        $order["line_id"] = $line_id;
        $order["username"] = $username;
        $order["phone"] = $phone;
        $order["comments"] = $comments;
        $order["start_time"] = $start_time;
        $order['user_id'] = session('id');

        $line_order = M("line_order");
        $result = $line_order->data($order)->add($order);
        if($result){
            echo "<script>alert('添加成功')</script>";
            $this -> redirect('Index/index');
        } else {
            echo "失败";
        }
    }
}