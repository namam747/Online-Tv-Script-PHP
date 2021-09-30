<?php

$ddaa = mysql_query("SELECT id, regtm FROM users WHERE utype='0'");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {
$tm = time();
$del = $data[1]+24*60*60;

if($del<=$tm)	{
mysql_query("DELETE FROM users WHERE id='".$data[0]."'");
}

 } 

?>