<?php 
include('../database/config.php');
include('../database/function.php');
include('../database/session.php');
?>

<?php 

if (isset($_GET["id"])) {
	$CatId = $_GET["id"];

	global $ConnectingDB; 
	$sql = "DELETE  FROM  add_project  WHERE id='$CatId' ";
	$Execute = $ConnectingDB->query($sql);
	if ($Execute) {
		
		$_SESSION["SuccessMessage"] = "Project deleted SuccessFully ! ";
			Redirect_to("add_project");
	}
	else{
		$_SESSION["ErrorMessage"] = "Something Went to wrong. Try Again !";
			Redirect_to("add_project");
	}
}





 ?>