
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aerna-Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans&family=Road+Rage&family=Sarabun&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/tablogo.png" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/0ee0b8759e.js" crossorigin="anonymous"></script>
  
</head>

<?php include("pack/nav1.php"); ?>

<style>
iframe{
    width:100%;
    height:250px;
}
body
{
    font-family: 'Sarabun', sans-serif;
}
.contact_head
{
    margin-top:10%;
    letter-spacing:1.5px;
    font-weight:700;
}


.contactus .form_div
{
    margin-top:5vh;
    background-color:#f2f2f2;
    
}

.contactus .contact_head
{
    font-size:20px;
    padding-top:20px;
}

.contactus .input-field {
   
  position: relative;
  width: 300px;
  margin-top:5vh;
  height: 44px;
  line-height: 44px;
}

.contactus .input-field1 {
   
  position: relative;
  width: 300px;
  margin-top:10vh;
  height: 44px;
  line-height: 44px;
}

.button-two,
{
  cursor: pointer;
  font-size:24px;
  color:white;
 
}

.contactus .button-two {
       
  border-radius: 4px;
  background-color:black;
  border: none;
  padding: 10px;
  width: 90px;
  margin-left:0px;
  margin-top:5vh;
  margin-bottom:5vh;
  transition: all 0.5s;
}


.contactus .button-two span {
  cursor: pointer;
  color:white;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}


.contactus .input-field2 {
   
  position: relative;
  width: 300px;
  margin-top:10vh;
  height: 44px;
  line-height: 44px;
}

.contactus label {
  position: absolute;
  top: 0;
  text-align:left;
  left: 0;
  width: 100%;
  color: grey;
  transition: 0.2s all;
  cursor: text;
}
.contactus input {
  width: 100%;
  border: 0;
  background-color:#f2f2f2;
  outline: 0;
  padding: 0.5rem 0;
  border-bottom:2px solid black;
  box-shadow: none;
  color: #111;
}
.contactus input:invalid {
  outline: 0;
  // color: #ff2300;
  //   border-color: #ff2300;
}
.contactus input:focus,
input:valid {
  border-color: black;
}
.contactus input:focus~label,
input:valid~label {
  font-size: 14px;
  top: -24px;
  color: grey;
}

.contactus .submit_btn
{
    margin-top:2vh;
}

.contactus .btn_s
{
  display: inline-block;
    background-color:#ffbe2e;
         margin-top:7vh;
         margin-bottom:5vh;
      border:none;  
         margin-right:1px;
         padding:10px;
 font-weight:bold;
 letter-spacing:1.2px;
	      font-family: 'Sarabun';
    text-decoration: none;
    color:black;
    font-size: 14px;
    border-radius: 7px;
    transition: 0.15s ease-in-out;
}

.contactus .btn_s:hover
{
 display: inline-block;
    background-color:#ffbe2e;
         margin-top:7vh;
         margin-bottom:5vh;
      border:none;  
         margin-right:1px;
         padding:10px;
 font-weight:bold;
 letter-spacing:1.2px;
	      font-family: 'Sarabun';
    text-decoration: none;
    color:black;
    font-size: 14px;
    border-radius: 7px;
    transition: 0.15s ease-in-out;
}

.contactus .contact_div
{
    background-color: black;
    margin-top:10vh;
    height:70vh;
}

#contact_divv
{
    display:block;
}

.contactus .contact_col
{
    background-color:#f2f2f2;
  color:black;
    margin-top:11%;
    margin-left:-5%;
   padding:20px;
   padding-top:10vh;
    padding-bottom:10vh;
   
}

.contactus .contact_heading
{
    font-family: 'Open Sans';
    font-size:30px;
    margin-top:5px;
    font-weight:bold;
   
}

.contactus .contact_col .icons
{
   font-size:20px;
   color:black;
    
}

.contactus .contact_details
{
     font-family: 'Sarabun';
    font-size:20px;
    color:black;
  
}

.contactus .contact_row2
{
    margin-top:20px;
}


@media only screen and (max-width: 950px) 
{
 .contactus 
{
    margin-top:5vh;
    margin-bottom:10vh;
} 

.contactus .form_div
{
    margin-left:10px;
     margin-right:10px;
    background-color:#f2f2f2;
    
}
  
 #contact_divv
{
    display:none;
} 
  
.contactus .contact_col
{
    background-color:#f2f2f2;
  color:black;
 margin-left:10px;
 margin-right:10px;
}
    
}



</style>



<body>
    
    <div class="container contact">
        
        <div class="row">
            <center><h2 class="contact_head">CONTACT US</h2></center>
        </div>
        <br>
        <div class="jumbotron text-center container" style="padding:10px;">
            <!--<h1>My First Bootstrap Page</h1>-->
            <!--<p>Resize this responsive page to see the effect!</p> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.7345299261906!2d77.31107071503091!3d28.397085082511186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdd717b8d87cd%3A0x89fd0f0acfdf806b!2sEncrobytes%20Training%20Solutions%20(C%2C%20C%2B%2B%2C%20Data%20Structures%2C%20Algorithms%2C%20Java%2C%20Python%2C%20React%20Native%2C%20PHP%2C%20MYSQL%2C%20HTML%2C%20CSS%2C%20Bootstrap%2C%20Javascript%2C%20JQuery%2C%20React%20JS%2C%20Node%20JS%2C%20Mongo%20DB%2C%20AWS%2C%20RPA%2C%20Cyber%20Security)!5e0!3m2!1sen!2sin!4v1651928525148!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        
        <div class="row contactus">
            
            <div class="col-sm-1"></div>
            
            <div class="col-sm-4 form_div">
                
                <div class="row">
                    <center><p class="contact_head">Contact Us</p></center>
                </div>
                
                <center> <div class="row input-field">
                   <input type="text" id="name" name="name" required />
                    <label for="name">Enter Your Name:</label>
                  </div>
                </center> 
                
                <center> <div class="row input-field1">
                   <input type="text" id="nameemail" name="email" required />
                    <label for="nameemail">Enter Your Email:</label>
                  </div>
                </center> 
                
                
                <center> <div class="row input-field2">
                   <input type="text" id="namemessage" name="message" required />
                    <label for="namemessage">Enter Your Message:</label>
                  </div>
                </center>
                
                <center>
                    <div class="row submit_btn">
                        <button class="button-two"><span>Submit</span></button>
                    </div>
                </center>
                
            </div>
            
              <div class="col-sm-1"></div>
            
            <div class="col-sm-1 contact_div" id="contact_divv">
                
            </div>
            
            <div class="col-sm-5 contact_col">
                
                
                    <div class="row">
                           
                            <div class="col-md-2 col-xs-2">
                                <i class="ri-phone-line icons"></i>
    
                            </div>
                                
                            <div class="col-md-10 col-xs-10">
                                <p class="contact_details">+91-88xxx7xx</p>
                            </div>
                            
                    </div>
                        
                    <div class="row contact_row2">
                           
                            <div class="col-md-2 col-xs-2">
                                <i class="ri-mail-line icons"></i>
                            </div>
                            
                            <div class="col-md-10 col-xs-10">
                                <p class="contact_details">info@gadgetarena.com</p>
                            </div>
                            
                    </div>
                        
                    <div class="row contact_row2">
                           
                            <div class="col-md-2 col-xs-2">
                                <i class="ri-map-pin-2-line icons"></i>
                            </div>
                            
                            <div class="col-md-10 col-xs-10">
                                <p class="contact_details"> cgfggd
                                </p>
                            </div>
                            
                    </div>
                    
                   
                
            </div>
            
            
          
        </div>
        
    </div>    
    <?php include("pack/footer.php"); ?>
    
</body>
</html>