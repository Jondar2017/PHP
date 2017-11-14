<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=UTF-8");
class IndexController extends Controller {
    public function index(){
        $index = M("index_recomend");
        //获取旅游天数的方法
        $days_ids = $index->getField("days_id", true);
        $days_id = array_unique($days_ids);
        $days = array();
        foreach($days_id as $v){
            $day = M("index_days")->where(array('days_id'=>$v))->find();
            array_push($days, $day);
        }
//        dump($days);
//        die();
        $this->days = $days;

        //获取推荐旅游地点的方法
        $recomend = $index->Limit(8)->select();
        $this->recomend = $recomend;


        //获取热门目的地的方法
        $host = M("view")->Limit(10)->select();
        $this->host = $host;

        //获取热门线路城市的方法
        $city = $index->getField("recomend_city",true);
        $hotcity = array_unique($city);
        $this->hotcity = $hotcity;

        //获取景点等级
        $this->level = $this->get_level();

        $this->display();
    }


    //获取景点等级的方法
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

    //景点搜索
    public function sign_search(){
        $ticket = I("post.ticket_input");
        $where['view_name'] = array("like", "%$ticket%");
        $where['view_city'] = array("like", "%$ticket%");
        $where['_logic'] = 'OR';
        $views = M("view")->where($where)->select();
        $this->views = $views;
        $this->display();
    }

    //线路搜索
    public function line_search(){
        $line = I("post.line_input");
        $where['recomend_des'] = array("like", "%$line%");
        $where['recomend_city'] = array("like", "%$line%");
        $where['_logic'] = 'OR';
        $line = M("index_recomend")->where($where)->select();
        $this->line = $line;
        $this->display();
    }
}