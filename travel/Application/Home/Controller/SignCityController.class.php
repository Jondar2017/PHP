<?php
/**
 * Created by PhpStorm.
 * User: Jondar
 * Date: 2017/7/1
 * Time: 12:30
 */

namespace Home\Controller;


use Think\Controller;

class SignCityController extends Controller
{
    public function index(){

        //获取特定的城市
        $view_city = I("get.view_city");
        $this->view_city = $view_city;

        //获取特定城市的信息
        $cities = M("city")->where(array("name"=>$view_city))->select();
        $this->cities = $cities;


        //获取特定城市景点的等级
        $c_level_id = M("view")->where(array('view_city'=>$view_city))->order('view_level_id')->getField("view_level_id",true);
        $level_id = array_unique($c_level_id);
        $level = array();
        foreach($level_id as $v){
            $level_name = M("view_level")->where(array("level_id"=>$v))->find();
            array_push($level, $level_name);
        }
        $this->level = $level;


        //获取特定城市景点的类型
        $c_view_type_id = M("view")->where(array('view_city'=>$view_city))->getField("view_type_id", true);
        $view_type_id = array_unique($c_view_type_id);
        $types = array();
        foreach($view_type_id as $v){
            $type = M("view_type")->where(array("view_type_id"=>$v))->getField("view_type_name");
            array_push($types, $type);
        }
        $this->type = $types;

        //根据特定城市景点人们的关注度给景点进行热度标记
        $tops = M("view")->where(array('view_city'=>$view_city))->order("view_want desc")->select();
        $hot = 1;
        for($i=0; $i<count($tops); $i++){
            if($i<3){
                $tops[$i]['hot'] = $hot;
                $hot++;
            } else {
                $hot = 0;
                $tops[$i]['hot'] = $hot;
            }

        }
        $tops = $this->get_level_id($tops);
        $views = array();
        $j = 0;
        for($i=0; $i<count($tops); $i++){
            if($tops[$i]['hot'] == 1){
                $view_top = array();
                $view_top[$i] = $tops[$i];
                $this->view_top = $view_top;
            }
            if($tops[$i]['hot'] == 2){
                $view_second = array();
                $view_second[$i] = $tops[$i];
                $this->view_second = $view_second;
            }
            if($tops[$i]['hot'] == 3){
                $view_third[$i] = $tops[$i];
                $this->view_third = $view_third;
            }
            if($tops[$i]['hot'] == 0){
                $views[$j] = $tops[$i];
                $j += 1;
            }
        }
        $count = count($views);//得到数组元素个数
        $Page  = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
        $lists = array_slice($views,$Page->firstRow,$Page->listRows);
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = $Page->show();// 分页显示输出﻿
        $this->assign("views",$lists);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }


    public function get_city_level(){
        $levelid = I("get.level_id");

        //获取特定的城市
        $view_city = I("get.view_city");
        $this->view_city = $view_city;

        //获取特定城市的信息
        $cities = M("city")->where(array("name"=>$view_city))->select();
        $this->cities = $cities;


        //获取特定城市景点的等级
        $c_level_id = M("view")->where(array('view_city'=>$view_city))->order('view_level_id')->getField("view_level_id",true);
        $level_id = array_unique($c_level_id);
        $level = array();
        foreach($level_id as $v){
            $level_name = M("view_level")->where(array("level_id"=>$v))->find();
            array_push($level, $level_name);
        }
        $this->level = $level;

        if($levelid == 1){
            $this->get_page($levelid, $view_city);
            $this->display("city_level_5");
        }
        if($levelid == 2){
            $this->get_page($levelid, $view_city);
            $this->display("city_level_4");
        }
        if($levelid == 3){
            $this->get_page($levelid, $view_city);
            $this->display("city_level_3");
        }
        if($levelid == 4){
            $this->get_page($levelid, $view_city);
            $this->display("city_level_2");
        }
    }

    //分页显示
    public function get_page($levelid, $view_city){
        $view = M("view"); // 实例化view对象
        //条件
        $map['view_level_id'] = $levelid;
        $map['view_city'] = $view_city;
        $count = $view->where($map)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show  = $Page->show();// 分页显示输出


        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $view->where($map)->order("view_id")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('views',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
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


}