
<?php
if($_SERVER['REQUEST_METHOD']==="POST")
{
 
 if(empty($_POST['Conversion']['History']['Home'])){
	echo "Field Empty";
}
 else{
	echo "<h1> Welcome, " . $_POST['Conversion']['History']['Home']['Search'] . "</h1>";
}

}

?>