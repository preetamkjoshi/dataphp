<?php
$host='https://sheltered-escarpment-97581.herokuapp.com';
$user='preetamkjoshi';
$pass='';
$conn=mysql_connect($host,$user,$pass);
$Tm500ml=1;
$Sm500ml=2;
$DTm500ml=3;
$Tm250ml=4;
$Gm500ml=5;
$Tm1lit=6;
$Sm1lit=7;
$Gm1lit=8;
$Tm6lit=9;
$Gm6lit=10;
$chaachnam=11;
$chaachplain=12;
$panner200gm=13;
$panner1kg=14;
$shrikhandE50gm=15;
$shrikhandE100gm=16;
$shrikhandK100gm=17;
$shrikhandk500gm=18;
$Lassi250ml=19;
$Dahi200gm=20;

$aa=$_POST["aa"];
$ab=$_POST["ab"];
$ac=$_POST["ac"];
$ad=$_POST["ad"];
$ae=$_POST["ae"];
$af=$_POST["af"];
$ag=$_POST["ag"];
$ah=$_POST["ah"];
$ai=$_POST["ai"];
$aj=$_POST["aj"];
$cha=$_POST["cha"];

$ba=$_POST["ba"];
$bb=$_POST["bb"];
$bc=$_POST["bc"];
$bd=$_POST["bd"];
$be=$_POST["be"];
$bf=$_POST["bf"];
$bg=$_POST["bg"];
$bh=$_POST["bh"];
$bi=$_POST["bi"];
$bj=$_POST["bj"];
$cha2=$_POST["cha2"];

$ca=$_POST["ca"];
$cb=$_POST["cb"];
$cc=$_POST["cc"];
$cd=$_POST["cd"];
$ce=$_POST["ce"];
$cf=$_POST["cf"];
$cg=$_POST["cg"];
$chp=$_POST["chp"];
$ci=$_POST["ci"];
$cj=$_POST["cj"];
$cha3=$_POST["cha3"]; 
$nulli=0;
$date=$_POST["Date"];
$date=date('Y-m-d');
$datee=date("Y-m-d",strtotime('today'));
$time=date('H:i:s');

mysql_select_db('b3_20728890_demand');
 $id=1000;
if($aa!=0||$ba!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Tm500ml','$aa','$ba','$datee','$time')";
    mysql_query($sql,$conn);
	
	
}
if($ab!=0||$bb!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Sm500ml','$ab','$bb','$datee','$time')";
    mysql_query($sql,$conn);
	
}
if($ac!=0||$bc!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$DTm500ml','$ac','$bc','$datee','$time')";
    mysql_query($sql,$conn);
	
}

if($ad!=0||$bd!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Tm250ml','$ad','$bd','$datee','$time')";
    mysql_query($sql,$conn);
	
}
if($ae!=0||$be!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Gm500ml','$ae','$be','$datee','$time')";
    mysql_query($sql,$conn);
	
}

if($af!=0||$bf!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Tm1lit','$af','$bf','$datee','$time')";
    mysql_query($sql,$conn);
	
}

if($ag!=0||$bg!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Sm1lit','$ag','$bg','$datee','$time')";
    mysql_query($sql,$conn);
	
}

if($ah!=0||$bh!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Gm1lit','$ah','$bh','$datee','$time')";
    mysql_query($sql,$conn);
	
}

if($ai!=0||$bi!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Tm6lit','$ai','$bi','$datee','$time')";
    mysql_query($sql,$conn);
	
}

if($aj!=0||$bj!=0)	
{
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Gm6lit','$aj','$bj','$datee','$time')";
    mysql_query($sql,$conn);
	
	
}
//echo $ca;
if($ca!=0){
	$id=1+$id;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$chaachnam','$ca','$nulli','$datee','$time')";
 mysql_query($sql,$conn);
	}

if($cb!=0){
	$id=$id+1;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$chaachplain','$cb','$nulli','$datee','$time')";
 mysql_query($sql,$conn);
	}
	
if($cc!=0){
	$id=$id+1;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$panner200gm','$cc','$nulli','$datee','$time')";
	
 mysql_query($sql,$conn);
	}

	
if($cd!=0){
	$id=$id+1;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$panner1kg','$cd','$nulli','$datee','$time')";
 mysql_query($sql,$conn);
	}

	
if($ce!=0){
	$id=$id+1;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$shrikhandE50gm','$ce','$nulli','$datee','$time')";
 mysql_query($sql,$conn);
	}
	
	
if($cf!=0){
	$id=$id+1;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$shrikhandE100gm','$cf','$nulli','$datee','$time')";
 mysql_query($sql,$conn);
	}
	
	
if($cg!=0){
	$id=$id+1;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$shrikhandK100gm','$cg','$nulli','$datee','$time')";
 mysql_query($sql,$conn);
	}
	
	
if($chp!=0){
	$id=$id+1;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$shrikhandk500gm','$chp','$nulli','$datee','$time')";
 mysql_query($sql,$conn);
	}
if($ci!=0){
	$id=$id+1;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Lassi250ml','$ci','$nulli','$datee','$time')";
 mysql_query($sql,$conn);
	}
if($cj!=0){
	$id=$id+1;
	$sql="INSERT into demandenteryrt(Id,Name_Of_Product,E_caret,M_caret,Date,Time) value('$id','$Dahi200gm','$cj','$nulli','$datee','$time')";
 mysql_query($sql,$conn);
	}
echo "your demand submited successfully";

?>