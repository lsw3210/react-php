<?php
	include "./wp-admin/config.php";
    
    $conn = new mysqli($host,$dbid,$dbpass,$dbname);
	
    $sql = "SELECT * FROM wp_wap_dong limit 10";
    $result = mysqli_query($conn, $sql);    
    $row = mysqli_fetch_array($result);

    $list_array = array("code" =>$row['code'],
                        "dong" =>$row['dong']);

    $result_array = json_encode($list_array);
    
    echo $result_array;
    
?>