<?php
/**
 * Created by PhpStorm.
 * User: Jondar
 * Date: 2017/5/17
 * Time: 15:59
 */

namespace Home\Controller;


use Think\Controller;

class SignController extends Controller
{
    public function index(){

        //获取广东景点名称
        $this->cities = $this->get_name();

        //获取广东景点的等级
        $this->level = $this->get_level();

        //获取广东景点的类型
        $this->type = $this->get_type();

        //获取关注量为第一景点的信息
        $view_top = M("view")->where(array("view_hot"=>1))->select();
        $view_top = $this->get_level_id($view_top);
        $this->view_top = $view_top;
//        dump($view_top);
//        die();

        //获取关注量为第二景点的信息
        $view_second = M("view")->where(array("view_hot"=>2))->select();
        $view_second = $this->get_level_id($view_second);
        $this->view_second = $view_second;

        //获取关注量为第三景点的信息
        $view_third = M("view")->where(array("view_hot"=>3))->select();
        $view_third = $this->get_level_id($view_third);
        $this->view_third = $view_third;

        //获取剩下的景点信息
        $view = M("view"); // 实例化view对象
        $count = $view->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $view->where(array("view_hot"=>0))->order('view_id')->limit($Page->firstRow.','.$Page->listRows)->select();


        $this->assign('views',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }


    //获取各个星级景点
    public function get_level_view(){
        //获取广东景点名称
        $this->cities = $this->get_name();

        //获取广东景点的等级
        $this->level = $this->get_level();

        //获取广东景点的类型
        $this->type = $this->get_type();

        //判断广东景点等级
        $l_id = I("get.l_id");

        //5A级景点
        if($l_id == 1){
            $this->get_page($l_id);
            $this->display("sign_level_5");
        }

        //4A级景点
        if($l_id == 2){
            $this->get_page($l_id);
            $this->display("sign_level_4");
        }

        //3A级景点
        if($l_id == 3){
            $this->get_page($l_id);
            $this->display("sign_level_3");
        }

        //2A级景点
        if($l_id == 4){
            $this->get_page($l_id);
            $this->display("sign_level_2");
        }
    }

    //获取景点的详细信息
    public function desc(){
        $view_id = I('get.view_id');
        $this->ve = $view_id;

        //获取景点信息
        $views = M("view")->where(array("view_id"=>$view_id))->select();
        $views = $this->get_level_id($views);
        $this->views = $views;

        //获取每个景点门票信息
        $ticket = M("view_ticket")->where(array("view_id"=>$view_id))->select();
        $this->ticket = $ticket;
        $this->display();
    }
    //分页
    public function get_page($l_id){
        $view = M("view");
        $count = $view->where(array("view_level_id"=>$l_id))->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $view->where(array("view_level_id"=>$l_id))->order('view_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('views',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    }

    //获取广东景点名称
    public function get_name(){
        $c_cities = M("view")->getField("view_city", true);
        $cities = array_unique($c_cities);
        return $cities;
    }

    //获取广东景点等级
    public function get_level(){
        $c_level_id = M("view")->getField("view_level_id",true);
        $level_id = array_unique($c_level_id);
        $level = array();
        foreach($level_id as $v){
            $level_name = M("view_level")->where(array("level_id"=>$v))->find();
            array_push($level, $level_name);
        }
        return $level;
    }

    //获取广东景点类型
    public function get_type(){
        $c_view_type_id = M("view")->getField("view_type_id", true);
        $view_type_id = array_unique($c_view_type_id);
        $types = array();
        foreach($view_type_id as $v){
            $type = M("view_type")->where(array("view_type_id"=>$v))->getField("view_type_name");
            array_push($types, $type);
        }
        return $types;
    }
    //给景点添加等级
    public function get_level_id($view){
        for($i=0; $i<count($view); $i++){
            $this->level_id = $view[$i]["view_level_id"];
            switch($this->level_id){
                case 1:
                    $view[$i]["view_level"] = "AAAAA";
                    break;
                case 2:
                    $view[$i]["view_level"] = "AAAA";
                    break;
                case 3:
                    $view[$i]["view_level"] = "AAA";
                    break;
                case 4:
                    $view[$i]["view_level"] = "AA";
                    break;
            }
        }
        return $view;
    }

    //给景点写点评
    public function write(){
        $user_id = I("post.user_id");
        $view_id = I("post.view");
        $comment = I("post.comment");
        $now = I("post.now");

        $data['user_id'] = $user_id;
        $data['view_id'] = $view_id;
        $data['comment'] = $comment;
        $data['now'] = $now;

        $view_comment = M("view_comment");
        $view_comment->add($data);

        $result = $view_comment->where(array('view_id'=>$view_id))->order('comment_id desc')->select();
        $this->ajaxReturn($result);

    }
}