<html>
<head>

<title>
datasend
</title>
<script type="text/javascript"> function back()
{
window.location="ipv4generator.php"
}

</script>
</head>
<body>
<input type="button" value="Back" onclick="back()" />
</body>
<?php
$source_ip=$_POST['Source_ip'];
$destination_ip=$_POST['des_ipadd'];
$source_port=$_POST['sport'];
$type=$_POST['port'];
$des_port=$_POST['dport'];
$np=$_POST['npack'];
$nopackets=$_POST['nopacket'];
$plpp=$_POST['plpp'];
$ipg=$_POST['ipg'];
$poption=$_POST['gender'];

if($nopackets=="02")

{
$counter=0; 
$number=1;
}

else 
{
$counter=0;
$number=$np;
}
if($poption=="own")

{

$payloadd=$_POST["payload"];

}
if($payloadd)
{
exec("sh -c 'echo $payloadd > payload.txt'"); exec("sh -c 'echo > packet.txt'");

$file=fopen("payload.txt","r");

echo "$number $type Packets send to port $des_port of $destination_ip";
echo "<br>";
while($number>=1)

{

$i=0;
$ofile=fopen("packet.txt","w");

while($i<$plpp)

{

if(feof($file))
{
break;

}

$var=fgetc($file); 
fputs($ofile,$var);
$i++;
}

//$data==`cat payload.txt`; 
$data=shell_exec("cat packet.txt"); 
echo $data;
if($type=="udp")
{
echo $source_port;
$command="sendip -p ipv4 -is $source_ip -p udp -us $source_port -ud $des_port -d \"$payloadd\" -v $destination_ip";
$last_line = system($command, $retval);
echo $last_line;
echo"<br>";
}
else if($type=="tcp")
{
$command="sendip -p ipv4 -is $source_ip -p tcp -ts $source_port -td $des_port -d \"$payloadd\" -v $destination_ip";
$last_line = system($command, $retval);
echo $last_line;
echo"<br>";
echo"<br>";
}
else if($type=="icmp")
{
$command="sendip -p ipv4 -is $source_ip -p icmp -d \"$payloadd\" -v $destination_ip";
$last_line = system($command, $retval);
echo $last_line;
echo"<br>";

}
usleep($ipg); 
if($counter==0) 
$number--;

fclose($file); 
fclose($ofile);
}

}

else
{
$payloadd="heyii";

//echo "<br>$pdetail<br>";
while($number>=1)

{

if($type=="udp")
{
echo $source_port;
$command="sendip -p ipv4 -is $source_ip -p udp -us $source_port -ud $des_port -d \"$payloadd\" -v $destination_ip";
$last_line = system($command, $retval);
echo $last_line;
echo"<br>";
}
else if($type=="tcp")
{
$command="sendip -p ipv4 -is $source_ip -p tcp -ts $source_port -td $des_port -d \"$payloadd\" -v $destination_ip";
$last_line = system($command, $retval);
echo $last_line;
echo"<br>";
echo"<br>";
}
else if($type=="icmp")
{
$command="sendip -p ipv4 -is $source_ip -p icmp -d \"$payloadd\" -v $destination_ip";
$last_line = system($command, $retval);
echo $last_line;
echo"<br>";

}
usleep($ipg); 
if($counter==0)
{$number--;}
}


}


?>
</html>
