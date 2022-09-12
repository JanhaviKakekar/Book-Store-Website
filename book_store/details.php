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
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    // $country=$_POST['country'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];

    $sql_query = "INSERT INTO con_details(firstname,lastname,phone,subject)
    VALUES 
    ('$firstname','$lastname','$phone','$subject')";

    if(mysqli_query($conn,$sql_query))
    {
        // echo "New Details Entry inserted successsfully !";
        header('location:contact.html');
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>