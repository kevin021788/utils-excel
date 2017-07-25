<?php
// +----------------------------------------------------------------------
// | BaseTest.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\Utils;

use limx\Utils\Facades\Excel;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    protected $data = [
        [1, 'limx', '男'],
        [2, 'lmx', '男'],
        [3, 'Agnes', '女']
    ];

    public function testBaseCase()
    {
        $path = ROOT_PATH . '/storage/temp/';
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $file = 'test';
        Excel::sheet(0)->title('测试')->create($this->data)->store($file, $path, 'xls');
    }
}