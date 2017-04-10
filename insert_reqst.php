<?php 

include("db.php"); 

$pat_name=$_POST['pat_name'];
$typ_dis=$_POST['typ_dis'];
$doc_name=$_POST['doc_name'];
$whn_req=$_POST['whn_req'];
$cont_num=$_POST['cont_num'];
$blood_gp=$_POST['blood_gp'];
$req_city=$_POST['req_city'];
$hosp_add=$_POST['hosp_add'];

 

if ($pat_name==""  or $typ_dis=="" or $doc_name=="" or $whn_req=="" or $cont_num=="" or $blood_gp=="" or $req_city=="" or $hosp_add=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}




else{

$sql="INSERT INTO blood_req(pat_name,typ_dis,doc_name,whn_req,cont_num,blood_gp,req_city,hosp_add)
VALUES
('$pat_name','$typ_dis','$doc_name','$whn_req','$cont_num','$blood_gp','$req_city','$hosp_add')";
 mysql_query($sql) or die(mysql_error());


 header( 'Location: request_blood.php' ) ;
 echo "Your message has been received";
 }
?>