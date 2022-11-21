<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<?php
include_once("connectionDB.php");
?>

    <form action=""method="POST">
collage_name:<br>
<input type="text"name="collage_name"><br><br>
collage_address:<br>
<input type="collage_address"name="collage_address"><br><br>
collage_phone_number:<br>
<input type="text"name="collage_phone_number"><br><br>
collage_email:<br>
<input type="collage_email"name="collage_email"><br><br>
collage_eiin_number:<br>
<input type="text"name="collage_eiin_number"><br><br>
<!--<input type="submit"name="submit"name="submit"><br><br>-->
<input type="submit"value="submit"name="submit"><br><br>
</form>

<?php
//insert//
if(isset($_REQUEST['submit'])){
    $collage_name=$_REQUEST['collage_name'];
    $collage_address=$_REQUEST['collage_address'];
    $collage_phone_number=$_REQUEST['collage_phone_number'];
    $collage_email=$_REQUEST['collage_email'];
    $collage_eiin_number=$_REQUEST['collage_eiin_number'];

    //echo $collage_name."".$collage_address."".$collage_phone_number."".$collage_email."".$collage_eiin_number;//


    $sql="INSERT INTO info(collage_name,collage_address,collage_phone_number,collage_email,collage_eiin_number)
VALUES('$collage_name','$collage_address','$collage_phone_number',' $collage_email','$collage_eiin_number')";

$result=mysqli_query($conn,$sql);

if($result){
    echo "data insert";
}else{
    echo "Error:" . mysqli_error($conn);
}

}

?>
<table>
        <tr>
            <th>Collage_Name</th>
            <th>Collage_Address</th>
            <th>Collage_Phone_Number</th>
            <th>Collage_Email</th>
            <th>Collage_Eiin_Number</th>
            <th>Action</th>

        </tr>

        <?php
$sql="SELECT * FROM info";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>{$row['collage_name']}</td>
    <td>{$row['collage_address']}</td>
    <td>{$row['collage_phone_number']}</td>
    <td>{$row['collage_email']}</td>
    <td>{$row['collage_eiin_number']}</td>
    <td>
    <button>
        <a href ='delete.php?deleteId={$row["id"]}'>Delete</a>
    </button>
    

<button>
        <a href ='update.php?updateId={$row["id"]}'>update</a>
    </button>
</td>
    </tr>";
}


?>
</table>
</body>
</html>