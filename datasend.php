<html>
<head>

<title>
datasend
</title>
</head>
<body>
Submission successfull
</body>
<?php
$source_ip=$_POST['Source IPv4 Address'];
$destination_ip=$_POST['Destination IPv4 Address'];
$source_port=$_POST['sport'];
$type=$_POST['port'];
$des_port=$_POST['dport'];
$np=$_POST['npack'];
$plpp=$_POST['plpp'];
$payload="\"Udp test\"";
echo $source_port;
if($type=="udp")
{
echo $source_port;
$command="sendip -p ipv4 -is $source_ip -p udp -us $source_port -ud $des_port -d $payload -v $destination_ip";
$last_line = system($command, $retval);
echo $last_line;
}
else if($type=="tcp")
{$command="sendip $surce_ip -p tcp -ts $source_port -td $des_port -tn -is $destination_ip";
$last_line = system($command, $retval);
echo $last_line;
}
?>
</html>
