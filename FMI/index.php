<?php
if(isset($_POST["user"])){
require 'FindMyiPhone.php';

try {

	$FindMyiPhone = new FindMyiPhone($_POST["user"], $_POST["pass"]);


} catch (exception $e) {
	if($e->getMessage()==true){
		echo "ITS OK";
	}else{
		echo "ERROR LOGIN";
	}
}
}
?>
<form action="" method="post">
<input name="user">
<input name="pass">
<input type="submit">
</form>