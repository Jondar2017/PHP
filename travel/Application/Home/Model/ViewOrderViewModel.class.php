<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/7/2
 * Time: 23:12
 */

namespace Home\Model;


class ViewOrderViewModel extends \Think\Model\ViewModel
{
    public $viewFields = array(

        'ViewOrder' => array('*'),
        'User' => array('username' => 'name',
            '_on' => 'ViewOrder.user_id = User.id')
    );
}