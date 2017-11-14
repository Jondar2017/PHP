<?php
/**
 * Created by PhpStorm.
 * User: Jondar
 * Date: 2017/6/21
 * Time: 9:38
 */

namespace Home\Controller;


use Think\Controller;

class LineController extends Controller
{
    public function index(){
        //获取旅游目的地
        $c_city = M("index_recomend")->getField("recomend_city",true);
        $cities = array_unique($c_city);
        $this->cities = $cities;

        //获取多少日游
        $c_days_id = M("index_recomend")->getField("days_id", true);
        $days_id = array_unique($c_days_id);
        $this->days = $days_id;

        //获取线路信息
//        $lines = M("index_recomend")->select();
//        $this->line = $lines;

        $all_lines = M("index_recomend"); // 实例化User对象
        $count = $all_lines->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $all_lines->order('recomend_id')->limit($Page->firstRow.','.$Page->listRows)->select();


        $this->assign('line',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }
    //显示一日游的旅游页面
    public function get_days(){
        //获取旅游目的地
        $c_city = M("index_recomend")->getField("recomend_city",true);
        $cities = array_unique($c_city);
        $this->cities = $cities;

        //获取多少日游
        $c_days_id = M("index_recomend")->getField("days_id", true);
        $days = array_unique($c_days_id);
        $this->days = $days;

        $days_id = I('get.days_id');

        //一日游
        if($days_id == 1){
            $this->get_page($days_id);
            $this->display("line_day01_type");
        }

        //两日游
        if($days_id == 2){
            $this->get_page($days_id);
            $this->display("line_day02_type");
        }

        //三日游
        if($days_id == 3){
            $this->get_page($days_id);
            $this->display("line_day03_type");
        }

        //四日游
        if($days_id == 4){
            $this->get_page($days_id);
            $this->display("line_day04_type");
        }

        //五日游
        if($days_id == 5){
            $this->get_page($days_id);
            $this->display("line_day05_type");
        }
    }
    //显示线路详细信息
    public function desc(){
        $recomend_id = I('get.id');
        $recomend = M("index_recomend")->where(array('recomend_id'=>$recomend_id))->select();
        $this->line = $recomend;
        $feature = M("line_feature")->where(array('feature_id'=>$recomend_id))->select();
        $this->feature = $feature;
        $this->display();
    }


    public function get_page($days_id){
        $all_lines = M("index_recomend");
        $count = $all_lines->where(array("days_id"=>$days_id))->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $all_lines->where(array("days_id"=>$days_id))->order('recomend_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('line',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    }

}