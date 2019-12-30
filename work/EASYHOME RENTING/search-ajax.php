<?php

include('partials/db_connect.php');

$sql="SELECT * FROM `homerent` WHERE `homeAddress` LIKE '%" . $_POST['searchTerm'] . "%' ";

$result = mysqli_query($connection, $sql);

echo json_encode(mysqli_fetch_all($result));