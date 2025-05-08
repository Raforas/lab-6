<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="readForm">
    <meta name="author" content="Amir Firdaus">
    <title>readForm</title>
</head>
<body>

<?php
// capture form data
$nama = $_POST["nama"];
$umur = $_POST["umur"];
$jantina = $_POST["jantina"];
$pangkat = $_POST["pangkat"];
$hobi = $_POST["hobi"];
$komen = $_POST["komen"];

if (!empty($_POST["hobi"])) {
    $hobi_string = implode(",", $_POST["hobi"]);
} else {
    $hobi_string = "";
}

// to make a connection with database
	$link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

	// to select the targeted database
	mysqli_select_db($link, "mydb") or die(mysqli_error());

  // to create a query to be executed in sql
	$query = "insert into user values('','$nama','$umur','$jantina','$pangkat','$hobi_string','$komen')"  
	or die(mysqli_connect_error());

	// to run sql query in database
	$result = mysqli_query($link, $query);
	     
	//Check whether the insert was successful or not
	if($result) 
	        {
		        
                    echo("Data insert");
					
		}
		else 
	        {
			        
	            die("Insert failed");
	        }

?>

<caption>User input is listed below:</caption><br><br>
<table border="2" cellpadding="8" cellspacing="0">
    <tr>
        <td>Name</td>
        <td><?php echo htmlspecialchars($_POST["nama"]); ?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><?php echo htmlspecialchars($_POST["umur"]); ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo htmlspecialchars($_POST["jantina"]); ?></td>
    </tr>
    <tr>
        <td>Title</td>
        <td><?php echo htmlspecialchars($_POST["pangkat"]); ?></td>
    </tr>
    <tr>
        <td>Hobby</td>
        <td>
            <?php
            if (!empty($_POST["hobi"])) {
                foreach ($_POST["hobi"] as $hobi) {
                    echo htmlspecialchars($hobi) . "<br>";
                }
            } else {
                echo "No hobby selected.";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Comments</td>
        <td><?php echo nl2br(htmlspecialchars($_POST["komen"])); ?></td>
    </tr>
</table>
</body>
</html>
