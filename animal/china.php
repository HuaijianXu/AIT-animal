<?php

include 'connect.php';
$query = mysqli_query($_conn,"select province, count(province)as num from product group by province");
$arr = array();
while ($rows = mysqli_fetch_array($query)){
    array_push($arr,array('name'=>$rows['province'],'value'=>$rows['num']));
}
$json = json_encode($arr);
echo $json;
return $json;
?>