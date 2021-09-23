<?php
$servername ="localhost";
$username ="root";
$password ="";
$databasename ="register";

$conn=mysqli_connect($servername,$username, $password, $databasename)
;
if(!$conn)
{
    die("connection failed:" .mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $message = $_POST['message'];

    $sql_query = "INSERT INTO entry_details
    (first_name,email,text,message)
          VALUES
    ('first_name', 'email', 'text', 'message')";

    if(mysqli_query($conn, $sql_query))
    {
        echo"new deatails entry inserted successfully!";
    }
    else
    {
        echo"error:" .$sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);

    
}