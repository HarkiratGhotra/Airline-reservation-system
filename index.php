<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Travel Website</title>
<link rel="stylesheet" type="text/css" href="main.css" />
<link rel="stylesheet" type="text/css" href="css/typography.css" />
<link rel="stylesheet" type="text/css" href="but.css" />
<script type="text/javascript">
function bigImg(x)
{
x.style.height="210px";
x.style.width="210px";
}

function normalImg(x)
{
x.style.height="200px";
x.style.width="200px";
}
</script>
</head>

<body bgcolor="yellow">
	<hr size="10" color="#c50d17" />
	


</p>
	<?php
	include('headr.php');
	include ('connect.php');
	?>
	<br />
	<br />
	
	

	
	
	
	<div id="mform">
	<table>
		<tr>
			<td><div id="form"  style="color: white; cursor: crosshair;">
					<div id="menu">	<!--Inner menu-->			
						<h4><font color="black">Book Your Flight Tickets</font></h4>
					</div>
					<p>
<form action="admin.php" method="post">			
	
	<font color="black">

</p>

    Leaving From:<br /><select name="from">
    	<option value="--">--</option>
    	<option value="Delhi">Delhi</option>
    	<option value="Mumbai">Mumbai</option>
    	<option value="Kolkata">Kolkata</option>
    	<option value="Agra">Agra</option>
    	<option value="Leh">Leh</option>
    	<option value="Nagpur">Nagpur</option>
    	<option value="Chennai">Chennai</option>
    	<option value="Chandigarh">Chandigarh</option>
    	<option value="Pune">Pune</option>
    	<option value="Port Blair">Port Blair</option>
    	<option value="Visakhapatnam">Visakapatnam</option>
    	
    	<option value="Varanasi">Varanasi</option>
    	</select>
    	
    	<!--<input type="text" name="from" size="20" autocomplete="on" placeholder="Enter city" required=""/>&nbsp;&nbsp;<br />--><br />Going To:<br /><select name="to">
    	<option value="--">--</option>
    	<option value="Delhi">Delhi</option>
    	<option value="Mumbai">Mumbai</option>
    	<option value="Kolkata">Kolkata</option>
    	<option value="Agra">Agra</option>
    	<option value="Leh">Leh</option>
    	<option value="Nagpur">Nagpur</option>
    	<option value="Indore">Indore</option>
    	<option value="Chennai">Chennai</option>
    	<option value="Chandigarh">Chandigarh</option>
    	<option value="Pune">Pune</option>	
    	<option value="Port Blair">Port Blair</option>
    	<option value="Visakhapatnam">Visakapatnam</option>
    	<option value="Varanasi">Varanasi</option>
    	
    	</select><!--<input type="text" name="to" size="20" autocomplete="on" placeholder="Enter City" required=""/>
<br /> <!--<marquee onmouseover="stop();" onmouseout="start();">Sartgyhyb</marquee> -->
<br />	<table>
	Departure date:
	
	<tr>
		<td>Day:</td><br /><td>Month:</td><td>Year:</td></tr>
		<tr><td><select name='day'>
 	<option value="1"  selected="selected">--</option>
 	<option value="2">2</option>
 	<option value="3">3</option>
 	<option value="4">4</option>
 	<option value="5">5</option>
 	<option value="6">6</option>
 	<option value="7">7</option>
 	<option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option>
 	<option value="20">20</option>
 	<option value="21">21</option>
 	<option value="22">22</option>
 	<option value="23">23</option>
 	<option value="24">24</option>
 	<option value="25">25</option>
 	<option value="26">26</option>
 	<option value="27">27</option>
 	<option value="28">28</option>
 	<option value="29">29</option>
 	<option value="30">30</option>
 	<option value="31">31</option>
 	
 </select></td>
 <!--&nbsp;&nbsp;Month:-->
 <td><select name='month'>
 	<option selected="selected">--</option>
 	<option value="1">1</option>
 	<option value="2">2</option>
 	<option value="3">3</option>
 	<option value="4">4</option>
 	<option value="5">5</option>
 	<option value="6">6</option>
 	<option value="7">7</option>
 	<option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select></td>
 	
 	
<!--nbsp;&nbsp;Year:-->
 <td><select name='year' >
 	<option value="1"  selected="selected">--</option>
 	<option value="1" >2012</option>
 	<option value="2">2013</option>
 	</select>
</td>
</tr>
</table> 


 <br /> 
    <span>	
       
        <table>
        	<tr><td><!--Adults  &nbsp; </td><td><input type="text" size="2" name="NOA" required=""></td><!--<select id="NOA" tabindex="10" name="NOA"><option selected="selected" value="1" >1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option<option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>--> </span>
   
   </tr>
   
   <!-- <span>
    	<br />
    Seniors(65+ )  &nbsp; <select id="NOS" tabindex="10" name="NOS">
    <option selected="selected" value="0" >0</option>
    <option value="1">1</option>

    </select>
   </span>-->
   
   
    
    <span>
    <br/>
    <tr>
    <td>
    No. of Persons </td><td><input type="text" size="2" name="NOC" required=""></td>
    </tr>
    </table>
       </span>
			
	<br><br />	<br />			
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<!--<button class="btnExample" name="submit" value="Search Flights"/>Search Flights!</button>
		-->
		<input type="submit" name="submit" value="Search Flights">	
				
				</form>
				
				</div>
			</td>

			<td><div id="advertisement">
				<font color="white">Travel Safely and Peacefully</font>
				<img src="b1.gif" height=480 width=700>
			 	</div>
			</td>
		</tr>
</table>

<table>
		<tr>
			<td>
				
		    </td>
		    
		    <td>
		    	<table border="2">
		    		<tr>
		    			<td>
		    				
		    			</td>
		    			
		    			<td>
		    				
		    			</td>
		    </tr>	
		    	</table>
		    </tr>
		    	</div>
		    </td>
		</tr>
</table>
</div>




<div id="metas">
	<table>
		<tr>
			<td>
			<div id="ad">
				
			</div>
			</td>
			
			<td>
				<div id="frame1">
			<table>
				<tr>
					<td>
				<font color="#6e7b9b" size="10"><u>Travel</u></font> With US</td></tr>
				<tr><td><img src="travel.gif"></td>
					
					
				</tr>
				<tr>
					<td>
						
							Are ALL travel companies the same?WE don't think so...Here at Go Differently we like to do things... well differently...
							We like to think that's a GOOD thing... and hopefully, you'll agree...<br><a href="travelwithus.php">Read More</a></font>

</td>
					</tr>
				</table>
				</div></td>
				<td></td><td></td><td></td><td></td><td></td><td></td>
				<td>
				<div id="frame2">
				<table>
				<tr><td><font color="#6e7b9b"><u>Seek</u></font> Help</td></tr>
				<tr><td><img src="seek.gif"></td></tr>
				<tr><td>We love sharing our knowledge and are always happy to spend time answering whatever questions you may have so if you can't find what you're looking for here - or can't be bothered to scroll through it all, just send us an email instead...<br><a href="seekhelp.php">Read More</a></td>
				</table>
				</div>
				</td>
		</tr>
	</table>
				
<hr />
	
<?php include('footer.php'); ?>
</body>
</html>