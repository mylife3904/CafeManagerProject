<?php
    $con = mysqli_connect("localhost", "ghtjd8264", "sw15*cs25", "ghtjd8264");
    mysqli_set_charset($con,"utf8");
    $result = mysqli_query($con, "SELECT * FROM EMPLOYEE;");
    $response = array();

    while($row = mysqli_fetch_array($result)) {
        array_push($response,array("emp_name"=>$row[0],"salary"=>$row[1]));
    }

    echo json_encode(array("response"=>$response));
    mysqli_close($con)

?>