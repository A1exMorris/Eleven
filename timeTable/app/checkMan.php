<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkMan extends Model
{
    //



}
$dom=file_get_contents('file:///G:/Project/Ten/06.htm');

$content=array();

preg_match_all('#<tr(.*?)>(.*?)</tr>#is',$dom , $content);

foreach ($content[0] as $item) {
    $item=iconv('windows-1251', 'UTF-8', $item);
    $exit[]=$item;
}
//print_r($exit);

foreach ($exit as $item)
{
    //echo $item;
    preg_match_all('#<TD  NOWRAP>(.*?)</TD>#is',$item, $colls);
    $exit2[]=$colls[0];
}
foreach ($exit2 as $item) {
    print_r($item[0]);
}