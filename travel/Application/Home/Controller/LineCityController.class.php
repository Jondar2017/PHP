<?php
/**
 * Created by PhpStorm.
 * User: Jondar
 * Date: 2017/6/30
 * Time: 0:07
 */

namespace Home\Controller;


use Think\Controller;

class LineCityController extends Controller
{
    public function index(){

        //获取城市
        $city_name = I("get.city_name");
        $cities = M("city")->where(array("name"=>$city_name))->select();
        $this->cities = $cities;

        //获取多少日游
        $c_days_id = M("index_recomend")->where(array('recomend_city'=>$city_name))->getField("days_id", true);
        $days_id = array_unique($c_days_id);
        $this->city_name = $city_name;
        $this->days = $days_id;
        //获取城市线路
//        $lines = M("index_recomend")->where(array("recomend_city"=>$city_name))->select();
//        $this->line = $lines;

        $all_lines = M("index_recomend");
        $count = $all_lines->where(array("recomend_city"=>$city_name))->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $all_lines->where(array("recomend_city"=>$city_name))->order('recomend_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('line',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function get_days(){
        $days_id = I('get.days_id');
        //获取城市
        $city_name = I("get.city_name");
        $cities = M("city")->where(array("name"=>$city_name))->select();
        $this->cities = $cities;

        //获取多少日游
        $c_days_id = M("index_recomend")->where(array('recomend_city'=>$city_name))->getField("days_id", true);
        $days = array_unique($c_days_id);
        $this->city_name = $city_name;
        //一日游
        if($days_id == 1){
            $this->days = $days;
            $this->get_page($days_id, $city_name);
            $this->display("line_day01_type");
        }
        //两日游
        if($days_id == 2){
            $this->days = $days;
            $this->get_page($days_id, $city_name);
            $this->display("line_day02_type");
        }

        //三日游
        if($days_id == 3){
            $this->days = $days;
            $this->get_page($days_id, $city_name);
            $this->display("line_day03_type");
        }
    }

    public function get_page($days_id, $city_name){
        $all_lines = M("index_recomend");
        $count = $all_lines->where(array("days_id"=>$days_id, "recomend_city"=>$city_name))->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $all_lines->where(array("days_id"=>$days_id, "recomend_city"=>$city_name))->order('recomend_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('line',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    }
}