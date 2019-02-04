<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='index.css' >
		<link rel='stylesheet' type='text/css' href='css/print.css' />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
<script> 
function myFunction()
{ document.getElementById("demo").innerHTML=Date();
}
</script>
<style>
#identity { margin-left: 15px;
	margin-right: 15px;
float:left;
margin-top: 15px;
text-align:left;
}
#order { float: right;
			font-size: 20px;
			font-weight: bolder; 
			margin-right: 15px;
			margin-top:10px;  }
#od { float: left;
	width:250px;
	font-size:15px;
			margin-left: 15px;
			margin-top:10px;  }
		
#page-wrap { width: 600px;
 margin-top: 50px;
   border: 1.5px solid black;
   background-color:#f2f2f2;
height: 480px;
}
.r
{width: 95%;
color:black;
height:1px;
margin-top:200px;
margin-left: 15px;
margin-right: 20px;
background-color: black;
}
.btn {
  background-color: #408CE0;
  color: white;
  padding: 12px;
  width: 20%;
  border:none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
  height:50px;
  margin-top:60px;
}

.btn:hover {
  background-color: lightgrey;
color:black;
}

</style>
</head>
<body onload="myFunction()">
<center>
	<div id="page-wrap">
		<div>
			<p id="header">INVOICE</p>
			<div id="od">Date:<p id="demo"></p></div>
			<div id="order"><p>Payement Confirmation</p></div>
			<div id="identity">
            <h3>Hello,</h3>
            <p style="font-size: 15px;">Thank you for doanting to this cause. Education is a gift for life. We help children to reach school and stay there. The wonderful effects of education span generations. With your support, we can give children a better tomorrow by giving them an opportunity to go to school.</p>
			</div>
			<hr class="r"></hr>
			<div id="customer">
				<div id="con">
					<form action="index.php" method="GET">
							<?php
							sleep(1);

			include('connect.php');
	$fee="select * from donate order by 1 DESC";
	$run=mysqli_query($conn,$fee);
	$i=1;
	$row=mysqli_fetch_array($run);
	
	$sno=$row['sno'];
	$name=$row['name'];
    $email=$row['email'];
    $address=$row['address'];
    $city=$row['city'];
    $state=$row['state'];
    $zip=$row['zip'];
    $amount=$row['amount'];
    		?>
				
					<p><?php echo $name;?></p>
					<p><?php echo $email;?></p>
					<p><?php echo $address;?></p>
					<p><?php echo $city. " , ". $state." , ". $zip?> </p>
				</div>    		
		</div>
		<table id="meta" style="text-align: right;">
		  			<hr class="r" style="margin-top:20px;"></hr>
		  <center><tr>
                    <td class="meta-head"><b>Invoice No. :</b></td>
                    <td><div><?php echo $sno; ?></div></td>
                </tr>
                <tr>
                    <td class="meta-head"><b>Amount Donated :</b></td>
                    <td><div >₹&nbsp;&nbsp;<?php echo $amount; ?></div></td>
                </tr>
            </center>
            </table>
			<form>
			</div><br><br><br>
			<button type="button" class="btn" onclick="window.print()">Print</button>
	</div>
</center>
</body>
</html>