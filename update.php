<?php 
 include 'connect.php';
 $id=$_GET['updateid'];
$sql="select * from `elect1` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$query=$row['query'];

 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $query=$_POST['query'];

    $sql="update `elect1` set id=$id,name='$name',email='$email',query='$query' where id=$id";
    $result=mysqli_query($con,$sql);
    
    if($result)
    {
        print("updated sucessfully");
    }
    else{
        die(mysqli_error($con));
    }
 }
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Electric </title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your name"
                    name="name" 
                    value=<?php 
                    echo $name;
                    ?>>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your name"
                    name="email"
                    value=<?php 
                    echo $email;
                    ?>
                    >
            </div>
            <div class="form-group">
                <label>Query</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your name"
                    name="query"
                    value=<?php 
                    echo $query;
                    ?>
                    >
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>