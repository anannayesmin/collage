<?php
include("connectionDB.php");

if(isset($_GET['updateId'])){

    // echo "is set";
    $id = $_GET['updateId'];

    $sql = "SELECT * FROM info where id=$id";

    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result); 

    
}
?>
 <form action="update.php?updateId=<?php echo $id?>" method="POST">
collage_name:<br>
<input type="text"name="collage_name" value="<?php echo $row['collage_name']?>"><br><br>
collage_address:<br>
<input type="collage_address"name="collage_address"value="<?php echo $row['collage_address']?>"><br><br>
collage_phone_number:<br>
<input type="text"name="collage_phone_number"value="<?php echo $row['collage_phone_number']?>"><br><br>
collage_email:<br>
<input type="collage_email"name="collage_email"value="<?php echo $row['collage_email']?>"><br><br>
collage_eiin_number:<br>
<input type="text"name="collage_eiin_number"value="<?php echo $row['collage_eiin_number']?>"><br><br>
<input type="submit" value="update" name="update"><br><br>

</form>

<?php
if(isset($_REQUEST['update'])){
    $collage_name=$_REQUEST['collage_name'];
    $collage_address=$_REQUEST['collage_address'];
    $collage_phone_number=$_REQUEST['collage_phone_number'];
    $collage_email=$_REQUEST['collage_email'];
    $collage_eiin_number=$_REQUEST['collage_eiin_number'];


    $sql="UPDATE info SET collage_name='$collage_name',collage_address='$collage_address',
    collage_phone_number='$collage_phone_number',collage_email='$collage_email',
    collage_eiin_number='$collage_eiin_number' WHERE id=$id";

    $result = mysqli_query($conn, $sql);
if($result){
    echo "New Data Inserted Successfully";
    header("location: index.php");
}
else{
    echo "Error: ". mysqli_error($conn);
}

}
?>
    


