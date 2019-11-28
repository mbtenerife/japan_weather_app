<?php
require_once("includes/initialize.php");
$city = $_GET['city'];
$cityId = $_GET['city_id'];
$content='city_home.php';

require_once ('theme/city_template.php');

?>