
	<?php
     print_r($_POST);
	?>
	<br/>
	<?php
	if (isset($_POST['submit'])) {
		echo "form was submitted<br/>";
	}
	if (isset($POST["username"])) {
		$username = $_POST["username"];
}

if (isset($_POST["password"])) {
	$password = $_POST["password"];

}

?>

<?php	
	echo "{$username}:{$password}";
	?>
