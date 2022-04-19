<?php include('conn.php');
$model = new Model();
$id=$_REQUEST['id'];
$delet = $model->delete($id);
header("Location: contact.php");
