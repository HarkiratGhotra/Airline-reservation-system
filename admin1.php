<?php
 session_start();
 ?>
<html>
<body>
<head>
<!--<link rel="stylesheet" type="text/css" href="main.css" />
-->
</head>



<style>
	td
	{
		width: 200px;
		text-align: center;
	}
</style>

<?php 
mysql_connect('localhost','root','');
mysql_query("create database if not exists fares");
mysql_select_db('fares');
//if(@$_REQUEST['sub'])
//{
//	mysql_q;uery("insert into airline_fares(Airline,Departure,Arrival,Duration,Price,Type) values('".$_REQUEST['laksh']."','".$_REQUEST['ish']."','".$_REQUEST['k']."')") or die(mysql_error());
//echo "data base updated. saved succesfully"; 
//}
//$_SESSION['NOA'] = $_REQUEST['NOA']; 
$_SESSION['NOC'] = $_REQUEST['NOC']; 
//$_SESSION['NOS'] = $_REQUEST['NOS']; 

$from = @$_REQUEST['from']; 
//echo $from;
echo"Choose your Train";	
$to   = @$_REQUEST['to'];
$_SESSION['from']=$from;
//echo $_SESSION['from'];
$_SESSION['to']=$to;
$day = @$_REQUEST['day']; 	
$month   = @$_REQUEST['month'];
$year = @$_REQUEST['year'];
$_SESSION['day']=$day;
$_SESSION['month']=$month;
$_SESSION['year']=$year; 	
echo"<CENTER><b> Select Your Flight</CENTER>";
echo"<table>";
echo"<hr>";
	echo"<tr><td><strong>Airline</strong></td><td><strong>Departure</strong></td><td><strong>Arrival</strong></td><td><strong>Duration</strong><td><strong>Fare</strong></td><td><strong>Type</strong></td></strong><td><strong>Book</strong></td></strong><td>seats remaining</td></tr>";
	
	
	echo"</table>";
	echo"<hr>";

	$res=mysql_query("SELECT * FROM `tabletf` WHERE `from`= '$from' && `to`= '$to'") or die(mysql_error());
	while($row=mysql_fetch_array($res))
	{
				
			$code=$row[8];
			$_SESSION['code']=$code;
			echo "<a href=status1.php?resid='$code'>";echo "<table>";
			?><table class="gridtable"><Form name ="form1" Method ="post" ACTION ="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=T5T5S6WFQNX8C"> <!--<Input type="radio" name="asd" value=<?php echo $row[0]; ?> required=""/> <label for="asd"></label>--><?php
			echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[9]."</td></tr>";
	      	
	      	echo "</table><hr />";
			$image="$row[0].jpg";	      	
			$departure=$row[1];
			$arrival=$row[2];
	}
$_SESSION['departure']=$departure;
$_SESSION['arrival']=$arrival;
$_SESSION['image']=$image;



//$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : '';



//echo"<button type='submit'  ><b>Select & Countinue for payment</b></button>";
//<?php 
//@$r = mysql_query("SELECT * FROM airline_fares WHERE `id`= ".$_REQUEST['asd']."") or die(mysql_error());
//$rw=mysql_fetch_array($r);
//$_SESSION['rw']=$rw;
//echo $_GET['asd'];
 
echo"</form>";
?>
</body>
</html>