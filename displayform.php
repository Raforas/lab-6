<!-- To display all information of database. -->
<!DOCTYPE html>
<html>
<body>
<?php

//AMIR GELENYA LOOOLL

//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "mydb") or die(mysqli_error($link));

//SQL query
$query = "SELECT * FROM user"
	or die(mysqli_connect_error());
	
//Execute the query (the recordset $rs contains the result)
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $ID = $row["UserID"];
	$nama = $row["UserName"];
	$umur = $row["UserAge"];
	$jantina = $row["UserGender"];
	$pangkat = $row["UserTitle"];
	$hobi = $row["UserHobby"];
	$komen = $row["UserComment"];
?>	
	<table>
	<tr>
		<td><?php echo $nama; ?></td>
		<td><?php echo $umur; ?></td>
		<td><?php echo $jantina; ?></td>
		<td><?php echo $pangkat; ?></td>
		<td><?php echo $hobi; ?></td>
		<td><?php echo $komen; ?></td>

		<td>
			<a href="update.php?id=<?php echo $pID; ?>">Ubah</a> || 
			<a href="buang.php?id=<?php echo $pID; ?>">Padam</a>
		</td>
	</tr>
	</table>
<?php
    }
} else {
    echo "0 results";

}
?>
<br><br>
<div align="center">[ <a href="index.php">Halaman Utama</a> |
<a href="Q1a.php">Tambah data baharu</a> ] </div>
	