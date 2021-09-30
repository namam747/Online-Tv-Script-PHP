<?php



$rtm = mysql_fetch_array(mysql_query("SELECT utype, regtm FROM users WHERE id='".$uid."'"));

	
if ($rtm[0] == 0){

$willdel = $rtm[1]+24*60*60;
$ctm = time();

$seconds = $willdel-$ctm;

$days    = floor($seconds / 86400);
$hours   = floor(($seconds - ($days * 86400)) / 3600);
$minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
$seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));

$tms = "$hours HOURS $minutes MINUTES $seconds SECONDS";

echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	
<center>
Currently You are not subscribed to any Plan <a href=\"$dashurl/upgrade\"class=\"btn btn-xs btn-info\"> Subscribe Now</a> to keep Your Account  live.
<br/><br/>
Your Account WIll DELETE in <b> $tms</b>
</center>
</div>";


echo "<div style=\"margin-top:60px;\"></div>";
}	


?>