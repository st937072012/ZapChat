
<?
$id =  trim($_POST["in_id"]) ;
$psd =  trim($_POST["in_psd"]) ;
$boo = false;

$acceptuser = array(
    "rock" => "123",
    "zap" => "123",
);

echo $id."<br>";
echo $psd."<br>";

foreach ($acceptuser as $key => $value) {
	if($id==$key) if($psd==$value) {$boo=true; break;}	
}
if($boo)success();
else fail();
function success(){
	session_start();
	$_SESSION['name'] =  $id;echo '<script>alert("登入成功 !");</script>';
	echo '<script>location.href="index.php" ;</script>';
}
function fail(){
	echo $email ."   " .$psd ;
	echo '<script>alert("登入失敗 !"); location.href="index.php?page=signin.php " ;</script>';
}
?>

