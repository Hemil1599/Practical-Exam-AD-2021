<?php
include 'dbcon.php';
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$model=$_POST['model'];
$number=$_POST['number'];

$sql="select * from data where number= '$number'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
	echo ("<script language ='JavaScript'>
		window.alert('Car Model Already Present')
		window.location.href='javascript:history.go(-1)';
		</script>");
}
else
{
	$reg="insert into data(mail,phone,model,number) values('$mail','$phone','$model','$number')";
	mysqli_query($con,$reg);
	echo ("<script language ='JavaScript'>
		window.alert('Successfully Registered')
		window.location.href='http://localhost/PracExam/AllData.php';
		</script>");

}
?>
