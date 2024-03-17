<?php 
if(isset($_POST['submit'])){ 
$dbconn=mysqli_connect("mysql","root","","schooldb"); // Database connetion 
// inserting in Database 
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$regno=$_POST['regno']; 

$sql="INSERT INTO tbl_student SET firstname='$firstname',  
lastname='$lastname',regno='$regno'"; 
$quer =mysqli_query($dbconn,$sql); 
header("location:table.php"); 
} ?> 
<!DOCTYPE html> <html> <head>  <title> Form to Register</title> 
<body>
<style>
			.y{
		height:27px;
		border-radius: 5px;
		color:blue;
		background:#efe7eb;
		font-size: 23px;
		font-family:Juice ITC;
		width: 300px;
		border: none;
		
		text-align: center;
		box-shadow:  3px 2px blue;
     
		
		}
	.y:hover{
			background:#ffffff;
			color:  blue;
			font-size: 20px;
			font-family:Monotype Corsiva;
			}
                       background{
		height:27px;

		width: 148px;
		border: none;
		
		text-align: center;
		
		
			}
			#p{
		height:27px;
		border-radius: 0px 20px;
		color:white;
		background:blue;
		font-size: 23px;
		font-family:Juice ITC;
		width: 148px;
		border: none;
		
		text-align: center;
		box-shadow:  3px 4px black;
		
			}
			#p:hover{
			background:black;
			color:white;
			font-size: 20px;
			font-family:Juice ITC;	
			}
                        
                        #btn{
		height:32px;
		border-radius:5px;
                
		color:white;
		background:#007bff;
                margin-top: -22px;
		width: 118px;
		border: none;
                font-family: Arial Black; 
                font-size: 20px;
		margin-right:-970px; 
		text-align: center;
		box-shadow:  3px 3px blue;
		
			}
			#btn:hover{
			background:blue;
			color:white;
			font-size: 20px;
			font-family:Juice ITC;	
			}
                        #logout{
		height:35px;
		border-radius:5px;
		color:white;
		background:#007bff;
     
		width: 428px;
		border: none;
                font-family: Arial Black; 
                font-size: 20px;
		
		text-align: center;
		box-shadow:  1px 2px white;
                margin-top: 35px;
		
			}
			#logout:hover{
			background:#007bff;
			color:white;
			font-size: 20px;
			font-family:Juice ITC;	
			}
                         #fab{
				 //please parametters
                         height:32px;
		border-radius: 9px;
		color:  blue;
		background:white;
		font-size: 23px;
		font-family:Juice ITC;
		width: 260px;
		border: none;
               
                
                margin-top: -20px;
		
		text-align: center;
		box-shadow: 2px 6px 10px blue;
        
                        }
                        #fab:hover{
                        border-radius: 20px;
                        background:#ffffff;
			color:  blue;
			font-size: 20px;
			font-family:Monotype Corsiva;
                     }
              
					 .mnu
{
background-color:#000000;
padding:4px 7px 4px 7px;
color:#FFFFFF;
text-decoration:none;
-moz-border-radius:3px 3px 0 0;
-webkit-border-radius:3px 3px 0 0;
border-radius:3px 3px 0 0;
text-transform:uppercase;

}         


		</style>
        <div>

</head><H2><CENTER>WELCOME TO MY CRUD PAGE</H2> </CENTER> <body><center>  <table> <form action="" method="POST"> 
<tr><td><b style="font-family:Juice ITC;font-size: 20px;color:  black">First Name</b></td><td><input type="text" name="firstname"  class="y"></td></tr> 


<tr><td><b style="font-family:Juice ITC;font-size: 20px;color:  black">Last Name</b></td><td><input type="text" name="lastname" class="y"></td></tr> 
<tr><td><b style="font-family:Juice ITC;font-size: 20px;color:  black">Registration Number</b></td><td><input type="text" name="regno" class="y"></td></tr> 

<tr><td><input type="submit" name="submit" id="p"></td> 
<td><a  href="table.php" id="p">View</a></td></tr> 
</div>
</form> </table></center></body> </html> 
  
