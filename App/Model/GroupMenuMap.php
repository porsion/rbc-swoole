<?php
/**
 *
 * Author:YoSoos
 * web:https://www.yosoos.com
 * date:2019/12/22 下午7:25
 * class:GroupMenuMap.php
 * Project:YoSoos
 *
 */

namespace App\Model;


use EasySwoole\ORM\AbstractModel;

class GroupMenuMap extends  AbstractModel
{
    protected $connectionName = 'read__';
    protected $tableName = 'group_menu_map';
    protected $autoTimeStamp = false;


    /**
     * @param GroupMenuMap $mode
     * @param $deleteId
     * 删除之后的事件
     */
    protected static function onAfterDelete(self $mode,$deleteId)
    {
           // var_dump($mode->getWhere());
    }


}