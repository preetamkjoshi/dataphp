define('HOST','us-cdbr-iron-east-05.cleardb.net');
 define('USER','b1072be6f3fc46');
 define('PASS','a12a7ce5');
 define('DB','b3_20728890_demand');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect'); 
 
  $date=date('Y-m-d');
 $datee=date("Y-m-d",strtotime('today'));
 $datede = new DateTime($datee);
$datefind=$datede->format('Y-m-d');    

$sql = "SELECT * FROM demandenteryrt where Date='2017-09-29'";
 
 $json=array();
 $r = mysqli_query($con,$sql);
 
 while($row=mysqli_fetch_array($r,MYSQL_ASSOC))
{
    array_push($json,array("Id"=>$row['Id'],"Name_Of_Product"=>$row['Name_Of_Product'],"E_caret"=>$row['E_caret'],"M_caret"=>$row['M_caret'],"Date"=>$row['Datee'],"Time"=>$row['Timee']));
}
 echo json_encode(array("server_responce"=>$json));//array("result"=>$result));
 
 mysqli_close($con);

//echo "what you are not working";

 ?>
 
 