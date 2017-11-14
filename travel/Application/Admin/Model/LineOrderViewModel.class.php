<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/7/2
 * Time: 22:35
 */

namespace Admin\Model;


class LineOrderViewModel extends \Think\Model\ViewModel
{

    public $viewFields = array(

        'LineOrder' => array('*'),
        'User' => array('username' => 'name', '_on' => 'LineOrder.user_id = User.id')
    );
}