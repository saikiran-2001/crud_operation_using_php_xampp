<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `elect1` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "deleted";
    }
    else{
        die(mysqli_error($con));
    }
}
?>