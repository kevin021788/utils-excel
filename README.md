# utils-excel

## 使用方法
~~~
use limx\Utils\Facades\Excel;

$path = ROOT_PATH . '/storage/temp/';
if (!is_dir($path)) {
    mkdir($path, 0777, true);
}

$data = [
    ['ID', 'NAME', 'SEX'],
    [1, 'limx', '男'],
    [2, 'lmx', '男'],
    [3, 'Agnes', '女']
];

$file = 'test';
Excel::sheet(0)->title('测试')->create($this->data)->store($file, $path, 'xls');
~~~
