<?php
$connect = mysql_connect('127.0.0.1','root','');

if($connect){
mysql_select_db('blood finder');
}
else
{
echo 'connection failed!';
}
?> 