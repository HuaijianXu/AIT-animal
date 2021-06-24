<?php
include 'connect.php';
$method = $_POST['method'];
if ($method=='kind'){
    $query = mysqli_query($_conn,"select kind as data ,count(kind)as num from product group by kind");
}
elseif ($method=='place'){
    $query = mysqli_query($_conn,"select province as data, count(province)as num from product group by province");
}
while ($rows = mysqli_fetch_array($query)){
    $data[] = array('name'=>$rows['data'],'value'=>$rows['num']);
}
$json = json_encode($data);
echo $json;
return $json;
?>