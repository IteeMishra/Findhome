<?php
include "db.php";
$email=$_POST['email'];
$password=$_POST['password'];
$query1="insert into reghome(email,password) 
values('$email','$password')";
$query2="insert into login(email,password) 
values('$email','$password')";
mysqli_query($db,$query2);
if(mysqli_query($db,$query1))
{
?>
<script>
alert("registration Successfully");
window.location="registration.php";
</script>
<?php
}

?>