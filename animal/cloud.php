<?php
ini_set('memory_limit','1021M');
require_once "./jieba-php-master/src/vendor/multi-array/MultiArray.php";
require_once "./jieba-php-master/src/vendor/multi-array/Factory/MultiArrayFactory.php";
require_once "./jieba-php-master/src/class/Jieba.php";
require_once "./jieba-php-master/src/class/Finalseg.php";
require_once "./jieba-php-master/src/class/JiebaAnalyse.php";
use Fukuball\Jieba\Jieba;
use Fukuball\Jieba\Finalseg;
use Fukuball\Jieba\JiebaAnalyse;
Jieba::init();
Finalseg::init();
JiebaAnalyse::init();
include 'connect.php';
$query = mysqli_query($_conn,"select * from product");
$content = "";
while ($rows = mysqli_fetch_array($query)){
    $content=$content.",".$rows['title'].",".$rows['content'];
}
$top_k = 10;
$tags = JiebaAnalyse::extractTags($content,$top_k);
$arr = array();
foreach($tags as $name => $value):
    array_push($arr,array('name'=>$name,'value'=>$value));
endforeach;
$json = json_encode($arr);
echo $json;
return $json;
?>