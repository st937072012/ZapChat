<?php

$id =  trim($_POST["in_id"]) ;
$psd =  trim($_POST["in_psd"]) ;
$boo = false;

$acceptuser = array(
    "rock" => "123",
    "zap" => "123",
);

foreach ($acceptuser as $key => $value) {
	if($id==$key) if($psd==$value) {$boo=true; break;}	
}
echo $id;

if($boo){
	session_start();
	$_SESSION['name'] =  $id;
	echo $_SESSION['name'] ;
	echo '<script>alert("登入成功 !");</script>';
	echo '<script>location.href="index.php" ;</script>';
}
else echo '<script>alert("登入失敗 !"); location.href="signin.php " ;</script>';


?>

