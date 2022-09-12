<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="book_store";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $url=$_POST['URL'];
    $rating=$_POST['rating'];
    $feedback=$_POST['feedback'];

    $sql_query = "INSERT INTO review_details(name,email,URL,rating,feedback)
    VALUES 
    ('$name','$email','$url','$rating','$feedback')";

    if(mysqli_query($conn,$sql_query))
    {
        // echo "New Details Entry inserted successsfully !";
        header('location:review.html');
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>