<?php
extract($_POST);
include 'newconnect.php';
@mysqli_query($db, 'SET NAMES utf8');
$z = mysqli_query($db,"SELECT * FROM `produkty`");
while($tab = mysqli_fetch_row($z))
{ $j = $tab[0];
if(isset($_POST['usuwanie']))
{
if($d[$j]!="") 
{$x = "DELETE FROM `produkty` WHERE `id_product`=".$d[$j];
$lol= mysqli_query($db, $x);}}

}

if( isset($_POST['dodawanie'])){
if(($nazwa!="")&&($kategoria!="")&&($opis!="")&&($cena!=""))
$p = "INSERT INTO `produkty` ( nazwa, kategoria, opis, cena, img ) VALUES ( '".$nazwa."', '".$kategoria."', '".$opis."', '".$cena."', '".$img."')";
$lol = mysqli_query($db,$p);}


if( isset($_POST['submit']) )
{
$s = "UPDATE `produkty` SET `nazwa` = '".$n1."', `kategoria`='".$n2."', `opis`='".$n3."', `cena`='".$n4."', `img`='".$n5."' WHERE `id_product` = ".$submit;
$lol=mysqli_query($db,$s);}
header('location:eProdukt.php');
?>
