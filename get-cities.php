<?php
$country = $_GET["country"];

if($country === "usa") {
    $cities = array("New York", "Los Angeles", "Chicago");
} elseif($country === "canada") {
    $cities = array("Toronto", "Vancouver", "Montreal");
}elseif($country === "india") {
    $cities = array("Mumbai", "Banglore", "Delhi");
} else {
    $cities = array();
}

echo json_encode($cities);
?>