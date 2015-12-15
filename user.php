
<html>
<head>

<style>
.colc
{
font-family: san-serif;
color: #9EFF36;
}

.colc:hover
{
font-family: san-serif;
color: #456745;
}

</style>

</head>

<link rel="stylesheet" type="text/css" href="style2.css" />
<link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
	<div id="header">
         <p><font color="white" size="40"><a href="" class="colc"> Click N GO</a></font></p>
         <a href="login.php"><input type="button" value="logout"  id="log" /></a>
         <p align=right><input type="button" value="My Trip"  id="trip"/></p>
		</div>

<div id ="menu1">
	<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#">About Us</a>
		<ul>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Email Us</a>
				<ul>
					<li><a href="#">Link1</a></li>
					<li><a href="#">Link2</a>
						<ul>
							<li><a href="#">Hello</a></li>
							<li><a href="#">How</a></li>
							<li><a href="#">R</a></li>
							<li><a href="#">U</a></li>
						</ul>
					</li>
					<li><a href="#">Why</a></li>
					<li><a href="#">You</a></li>
				</ul>
			</li>
			<li><a href="#">Do</a></li>
			<li><a href="#">That</a></li>
		</ul>
	</li>
	<li><a href="#">To</a></li>
	<li><a href="#">Me</a></li>
</ul>
</div>
<table>
		<tr>
			<td><div id="form"  style="  color: white; cursor: crosshair;">
					<div id="menu">	<!--Inner menu-->			
						<h1><font color="black">Book Your Travel</font></h1>
					<!--	<input type="button" name="oneway" value="One-Way"/>
						<input type="button" name="twoway" value="Two-Way"/>
						<input type="button" name="oneway" value="Railway"/>
						<input type="button" name="oneway" value="Taxi"/>-->
					</div>
					<p>
<font color="black"><input type="radio" name="oneway" value="yes" tabindex="1" checked="true" />One Way

<input type="radio" name="oneway" value="no" tabindex="1"  />Round Trip
<br /><br />
</p>

<form>
    Leaving From:<br /><input type="text" name="from" size="50" autocomplete="on" />&nbsp;&nbsp;<br />Going To:<br /><input type="text" name="to" size="50" autocomplete="on"  />
<br />
<br />	Departure date:
<br />	Day:<select>
 	<option value="1"  selected="selected">1</option>
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
 	
 </select>
 &nbsp;&nbsp;Month:
 <select>
 	<option value="1">1</option>
 	<option value="2">2</option>
 	<option value="3">3</option>
 	<option value="4">4</option>
 	<option value="5">5</option>
 	<option value="6">6</option>
 	<option value="7">7</option>
 	<option value="8"selected="selected">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
 	
&nbsp;&nbsp;Year:
 <select>
 	<option value="1"  selected="selected">2012</option>
 	<option value="2">2013</option>
 	</select>
 


 <br /> <br /><br />
    <span>	
       
        Adults(18-65)<select id="NOA" tabindex="10" name="NOA"><option selected="selected" value="1" >1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option<option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select> </span>
   
    <span>
    &nbsp;&nbsp;Seniors(65+)<select id="NOS" tabindex="10" name="NOS">
    <option selected="selected" value="0" >0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    </select>
    </span>
   
   
    <span>
    &nbsp;&nbsp;Children(0-17)<select id="NOC tabindex="10" name="NOC">
    	
    <option selected="selected" value="0" >0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    </select>
    </span>
			
	<br><br />	<br />			
				
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><input type="button" name="search" value="Search Flights"> </a>			
				
				
				
				</div>
			</td>

			<td><div id="advertisement">
				advertisement comes here if we want them
			 	</div>
			</td>
		</tr>
</table>

<table>
		<tr>
			<td>
				<div id="calender">
				calender comes here if we want so 
			    </div>
		    </td>
		    
		    <td>
		    	<table border="2">
		    		<tr>
		    			<td>
		    				<div id="packages">
		    					  	package		
		    			    </div>
		    			</td>
		    			
		    			<td>
		    				<div id="packages1">
		    						 package	
		    				</div>
		    				
		    			</td>
		    </tr>	
		    	</table>
		    </tr>
		    	</div>
		    </td>
		</tr>
</table>



<!--<button style="width:65;height:65" style="background-color:transparent" type="submit"  ><b>Air Travel</b></button> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button style="width:65;height:65" style="background-color:transparent" type="submit" ><b>Train Travel</b></button></form> 
-->
<!--</div> 

				
			</td>

			<td><div id="advertisement">
				advertisement comes here if we want them
			 	</div>
			</td>
		</tr>
</table>

<table>
		<tr>
			<td>
				<div id="calender">
				//calender comes here if we want so 
			  </div> 
		    
		    
		    <td>
		    	<table border="2">
		    		<tr>
		    			<td>
		    				<div id="packages">
		    					  	package		
		    			    </div>
		    			</td>
		    			
		    			<td>
		    				<div id="packages1">
		    						 package	
		    				</div>
		    				
		    			</td>
		    </tr>	
		    	</table>
		    </tr>
		    	</div>
		    </td>
		</tr>
</table>-->

<hr />
<?php include('footer.php'); ?>
</body>
</html>
