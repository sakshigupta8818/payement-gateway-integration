<!DOCTYPE html>
<html>
<head>
  <title>Proceed to Pay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="check.css">
<style>
.bb{ 
width:1520px;
height:800px;
margin-top:-14px;
margin-left:-14px;
margin-right:-3px;
margin-bottom:-20px;
 }
 .to
{ margin-top:-780px;
text-align: center;
color: white;
font-size: 50px;
font-weight:bold;
}
.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin-top: -40px;
  margin-left: 320px;
margin-right:50px;
}

</style>

</head>
<body >
  <div >
  <img src="collage4.png" class="bb">
<p class="to">Fill the details for Donation</p>
  <div class="row">
    <div class="col-75">
  </div>
    <div class="container" >
      <form action="checkout.php" method="POST">
        <div class="row">
          <div class="col-50">
            <h3>Personal Details</h3>
            <label><i class="fa fa-user"></i> Full Name</label>
            <input type="text" name="name" placeholder="Enter your name">
            <label><i class="fa fa-envelope"></i> Email</label>
            <input type="text" name="email" placeholder="Enter your email id">
            <label><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" name="address" placeholder="Enter your address">
            <label><i class="fa fa-institution"></i> City</label>
            <input type="text" name="city" placeholder="Enter your city">
            <div class="row">
            <div class="col-50">
            <label>State</label>
            <input type="text" name="state" placeholder="Enter your state">
            </div>
            <div class="col-50">
            <label>Zip</label>
            <input type="text" name="zip" placeholder="Enter your area's pincode(zip)">
			</div>
            </div>
            <label>Select the amount you want to donate</label>
			<select name="amount" placeholder="amount">
			<?php 
			$amt=500;
			while($amt<=100000)
			{ echo "<option value=$amt>₹&nbsp;".$amt."</option>";
				$amt=$amt+500;}
			?></select>
            </div>
			<div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-paypal" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:orange;"></i>
            <i class="fa fa-cc-discover" style="color:red;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" name="cardname" placeholder="Enter the name on the card">
            <label for="ccnum">Credit card number</label>
            <input type="text" name="cardnumber" placeholder="Enter the card number">
            <label for="expmonth">Expiry Month</label>
            <input type="text" name="expmonth" placeholder="Month">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Expiry Year</label>
                <input type="text" name="expyear" placeholder="Year">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" name="cvv" placeholder="CVV">
              </div>
            </div>
			</div>
        
        </div>
        <p style="margin-top:-10px">Invoice will be send to your email</p>
        <center><input type="submit" value="Confirm Payment" onclick="message()" name="submit" class="btn"></center>
      </form>
	  <script type="text/javascript">
             function message()
                {
                  box=confirm("Do you want to donate amount?");
                  if(box==true)
                    {window.open('index.php');}
                  else
                    {document.getElementById("myform").reset();}
                }
    </script>

<?php 
  include('connect.php');
  
  if(isset($_POST['submit']))
  {   $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $amount=$_POST['amount'];
    
    $feed="insert into donate(name,email,address,city,state,zip,amount)values('$name','$email','$address','$city','$state','$zip','$amount')";
    
    if(mysqli_query($conn,$feed))
    {   
  //echo "<script>alert('Submitted')</script>";
  }
  }
  ?>
    
    </div>
  </div>
</div>
</body>

</html>
