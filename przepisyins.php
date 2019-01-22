<?php
extract($_POST);
include 'newconnect.php';
$z = mysqli_query($db,"SELECT * FROM `przepisy`");
while($tab = mysqli_fetch_row($z))
{ $j = $tab[0];
if(isset($_POST['usuwanie']))
{
if($d[$j]!="") 
{$x = "DELETE FROM `przepisy` WHERE `id`=".$d[$j];
$lol= mysqli_query($db, $x);}}

}

if( isset($_POST['dodawanie'])){
if(($nazwa!="")&&($rodzaj!="")&&($składniki!="")&&($opis!=""))
$p = "INSERT INTO `przepisy` ( nazwa, rodzaj, składniki, opis, img ) VALUES ( '".$nazwa."', '".$rodzaj."','".$składniki."', '".$opis."', '".$img."')";
$lol = mysqli_query($db,$p);}


if( isset($_POST['submit']) )
{
$s = "UPDATE `przepisy` SET `nazwa` = '".$n1."', `rodzaj`='".$n2."', `składniki`='".$n3."', `opis`='".$n4."', `img`='".$n5."' WHERE `id` = ".$submit;
$lol=mysqli_query($db,$s);}
header('location:ePrzepisy.php');
?>
