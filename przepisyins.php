<?php
extract($_POST);
include 'newconnect.php';
$z = mysqli_query($db,"SELECT * FROM `przepisy`");
@mysqli_query($db, 'SET NAMES utf8');
while($tab = mysqli_fetch_row($z))
{ $j = $tab[0];
if(isset($_POST['usuwanie']))
{
if($d[$j]!="") 
{$x = "DELETE FROM `przepisy` WHERE `id`=".$d[$j];
$lol= mysqli_query($db, $x);}}

}

if( isset($_POST['dodawanie'])){
if(($nazwa!="")&&($rodzaj!="")&&($skladniki!="")&&($opis!="")) 
$p = "INSERT INTO `przepisy` ( rodzaj, nazwa, skladniki, opis, img ) VALUES ( '".$rodzaj."','".$nazwa."','".$skladniki."', '".$opis."', '".$img."')";
$lol = mysqli_query($db,$p);}
else {echo("blad");}


if( isset($_POST['submit']) )
{
$s = "UPDATE `przepisy` SET  `rodzaj` = '".$n1."', `nazwa` = '".$n2."', `skladniki` = '".$n3."', `opis` = '".$n4."', `img` = '".$n5."' WHERE `id` = ".$submit;
$lol=mysqli_query($db,$s);}
header('location:ePrzepisy.php');
?>
