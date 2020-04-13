<?php
/*
Этот файл делает выборку координат с БД и кодирует их в формат JSON
*/
$industry = isset( $_GET['ind'] ) ? (int)$_GET['ind'] : null;
$id = isset( $_GET['id'] ) ? (int)$_GET['id'] : null;
if( !$industry ) {
	if (!$id) {
		$sql = "SELECT latitude, longitude FROM project";
	}
	else {
		$sql = "SELECT latitude, longitude FROM project WHERE id = $id";
	}
}
else {
	if (!$id) {
		$sql = "SELECT latitude, longitude FROM project WHERE industry = $industry";
	}
	else {
		$sql = "SELECT latitude, longitude FROM project WHERE id = $id";
	}
}
$connect = mysqli_connect("localhost", "root", "", "z");

$query = mysqli_query($connect, $sql);
$a = [];
while ( $array = mysqli_fetch_assoc($query) ) {
	$a[] = ['coords' => [$array['latitude'], $array['longitude']]];
}

echo json_encode($a);

?>