<?php
/**
 * Created by PhpStorm.
 * User: Jondar
 * Date: 2017/6/30
 * Time: 15:24
 */

namespace Home\Controller;


use Think\Controller;

class SignOrderController extends Controller
{
    public function index(){
        $ticket_id = I("get.ticket_id");

        //获取景点名称
        $view_ticket = M("view_ticket");
        $view_id = $view_ticket->where(array("ticket_id"=>$ticket_id))->getField("view_id");
        $view_name = M("view")->where(array("view_id"=>$view_id))->getField("view_name");
        $this->view_name = $view_name;

        //获取门票信息
        $tickets = $view_ticket->where(array("ticket_id"=>$ticket_id))->select();
        $this->tickets = $tickets;
        $this->display();
    }

    //处理订单信息
    public function order(){
        $username = I("post.link_man");
        $view_name = I("post.view_name");
        $ticket_name = I("post.ticket_name");
        $ticket_price = I("post.ticket_price");
        $num = I("post.num");
        $total_price = I("post.total_price");
        $travel_date = I("post.travel_date");
        $phone = I("post.link_phone");

        $order = array();
        $order['username'] = $username;
        $order['view_name'] = $view_name;
        $order['ticket_name'] = $ticket_name;
        $order['ticket_price'] = $ticket_price;
        $order['num'] = $num;
        $order['total_price'] = $total_price;
        $order['travel_date'] = $travel_date;
        $order['phone'] = $phone;
        $order['user_id'] = session('id');
        $view_order = M("view_order");
        $result = $view_order->add($order);
        if($result){
            echo "<script>alert('添加成功')</script>";
            $this -> redirect('Index/index');
        } else {
            echo "插入失败";
        }
    }
}