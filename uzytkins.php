<?php
extract($_POST);
include 'newconnect.php';
$z = mysqli_query($db,"SELECT * FROM `uzytkownicy`");
while($tab = mysqli_fetch_row($z))
{ $j = $tab[0];
if(isset($_POST['usuwanie']))
{
if($d[$j]!="") 
{$x = "DELETE FROM `uzytkownicy` WHERE `id`=".$d[$j];
$lol= mysqli_query($db, $x);}}

}

if( isset($_POST['dodawanie'])){
if(($login!="")&&($haslo!="")&&($email!=""))
$p = "INSERT INTO `uzytkownicy` ( login, haslo, email) VALUES ( '".$login."', '".$haslo."','".$email."')";
$lol = mysqli_query($db,$p);}


if( isset($_POST['submit']) )
{
$s = "UPDATE `uzytkownicy` SET `login` = '".$n1."', `haslo`='".$n2."', `email`='".$n3."' WHERE `id` = ".$submit;
$lol=mysqli_query($db,$s);}
header('location:eUzytk.php');
?>
