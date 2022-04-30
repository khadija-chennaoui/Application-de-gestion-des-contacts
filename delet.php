<?php include('conn.php');
$model = new Ajout();
$id=$_REQUEST['id'];
$delet = $model->delete($id);
header("Location: contact.php");
