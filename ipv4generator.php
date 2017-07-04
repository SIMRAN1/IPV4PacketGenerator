<?php
session_start();

?>
<html>
<head>

<title>
signup
</title>
<script>
 function check() {
     document.getElementById("stext").value=document.getElementById("sdrop").value;
    } 
function check1() {
     document.getElementById("dtext").value=document.getElementById("ddrop").value;
    } 
function check2() {
     document.getElementById("ltext").value=document.getElementById("ldrop").value;
    } 
 </script>
</head>
<body>
<h1>IPv4 Traffic Generator</h1>
<div class="form">
<form action="datasend.php" method="post" >
	

Source IPv4 address:<input type="text" name="Source IPv4 Address" placeholder="sourceip" required><br>
Destination IPv4 address:<input type="text" name="Destination IPv4 Address" placeholder="destinationip" required><br>
Protocols:<select name="port">
  <option value="tcp">tcp</option>
  <option value="arp">arp</option>
  <option value="udp">udp</option>
  </select><br>
Application(Source):<input type="text" name="sport" id="stext" placeholder="source port" required>
<select name="sourceport" id="sdrop" onChange="check();">
  <option value="21">FTP</option>
  <option value="23">TELNET</option>
  <option value="22">SSH</option>
  <option value="53">DNS</option>
  <option value="80">HTTP</option>
  </select><br>
Application(Destination):<input type="text" name="dport" id="dtext" placeholder="destination port" required>
<select name="sourceport" id="ddrop" onChange="check1();">
  <option value="21">FTP</option>
  <option value="23">TELNET</option>
  <option value="22">SSH</option>
  <option value="53">DNS</option>
  <option value="80">HTTP</option>
  </select><br>
No of Packets:<input type="text" name="npack" id="ntext" placeholder="No of packets" required>
<select name="nopacket">
  <option value="NONCONT">NON-CONTINOUS</option>
  <option value="CONT">CONTINOUS</option>
  
  </select><br>
Paylod Length Per packet:<input type="text" name="plpp" id="ltext" placeholder="length" required>
<select name="length" id="ldrop" onChange="check2();">
  <option value="8">MIN(8 bytes)</option>
  <option value="512">Max(512 bytes)</option>
  <option value="222">222 bytes</option>
 
  </select><br>
Interpacket gap:<input type="text" name="ipg" placeholder="Default(None)" required><br>
<div id="Payload">
Payload Option:<input type="radio" name="gender" value="random">Random Bytes
  <input type="radio" name="gender" value="own">Define My Own<br>
<textarea rows="4" cols="50" name="own">
Enter text here...</textarea>
</div>



<input type="submit" name="submit" value="submit"/>
 <button id="reset" type="button">Reset</button> 
 <button id="stop" type="button">Stop</button> 




</form>

</div>



</body>

</html>

