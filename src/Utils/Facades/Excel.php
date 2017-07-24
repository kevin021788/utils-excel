<?php
// +----------------------------------------------------------------------
// | Excel.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace limx\Utils\Facades;

use limx\Utils\Excel as Client;

class Excel
{
    public static function __callStatic($name, $arguments)
    {
        $excel = new Client();
        return $excel->$name(...$arguments);
    }
}