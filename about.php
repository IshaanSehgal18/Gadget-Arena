<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aerna-About</title>
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

<style>

body
{
    font-family: 'Sarabun', sans-serif;
}



.about .about_head
{
    font-size:40px;
    font-weight:700;
    margin-top:10%;
}

.about .about_img
{
    padding-left:5vh;
    height:50vh;
    padding-right:5vh;
}

.about .about_section
{
    margin-top:5%;
}

.about .content
{
    padding-top:15px;
    font-size:18px;
    color:#524f4f;
}

.about .content2

{
    padding-top:15px;
    padding-left:30px;
    font-size:18px;
    color:#524f4f;
}

#mobile
{
    display:none;
    
}

#pc
{
    display:block;
    
}

@media only screen and (max-width: 950px) 
{
 .about .about_head
{
    font-size:40px;
    font-weight:700;
    margin-top:40%;
    margin-bottom:10%;
}

.about .about_img
{
    padding-left:2vh;
    height:50vh;
    padding-right:2vh;
}

.about .content
{
    margin-top:20px;
    font-size:18px;
    padding-left:13px;
    color:#524f4f;
}

.about .content2
{
    padding-left:30px;
    font-size:18px;
    color:#524f4f;
}
#pc
{
    display:none;
    
}

#mobile
{
    display:inline-block;
    
}


}

</style>

<body>
    <?php include("pack/nav1.php"); ?>
    
    <div class="container about" id="pc">
        
        <div class="row">
            <center><h2 class="about_head">ABOUT US</h2></center>
        </div>
        
        <div class="row about_section">
            
            <div class="col-sm-4">
                <img src="img/1.jpg" class="img-responsive about_img" alt="aerna">
            </div>
            
            <div class="col-sm-1"></div>
            
            <div class="col-sm-7">
                <p class="content">GADGET ARENA TM is everything you need to get through the troubles you are dealing with your gadgets.
                We at Gadget Arena help you look out for the best possible solution for all your hustles. <br><br>If you are confused about your data
                Or is it your device you are unable to tackle Or if your device needs some new parts. If you are looking for something new and pocket
                friendly. <br><br> Gadget Arena TM  is one-stop to trouble shoot all your problems. We deal in all kinds of IT related services, data related services, 
                device related support, device exchange and resale.</p>
            </div>
        </div><br>
        
        <div class="row about_section">
            <div class="col-sm-7">
                <p class="content2">Our Professional Services and Quality maintenance have been our Business Statement since past decade.<br><br>
                Hundreds of Five Star Reviews and thousands of quality devices motivate us to deliver best of our services to you.<br><br>
Try us once and there will be no place else you would ever need. 
</p>
            </div>
            
            
            <div class="col-sm-1"></div>
            
            <div class="col-sm-4">
                <img src="img/1.jpg" class="img-responsive about_img" alt="aerna">
            </div>
        </div>
        
    </div>
    
    
     <div class="container about" id="mobile">
        
        <div class="row">
            <center><h2 class="about_head">About Us</h2></center>
        </div>
        
        <div class="row about_section">
            
            <div class="col-sm-4">
                <img src="img/1.jpg" class="img-responsive about_img" alt="aerna">
            </div>
            
            <div class="col-sm-1"></div>
            
            <div class="col-sm-7">
                <p class="content">GADGET ARENA TM is everything you need to get through the troubles you are dealing with your gadgets.
                We at Gadget Arena help you look out for the best possible solution for all your hustles. <br><br>If you are confused about your data
                Or is it your device you are unable to tackle Or if your device needs some new parts. If you are looking for something new and pocket
                friendly. <br><br> Gadget Arena TM  is one-stop to trouble shoot all your problems. We deal in all kinds of IT related services, data related services, 
                device related support, device exchange and resale.</p>
            </div>
        </div><br>
        
        <div class="row about_section">
            
            <div class="col-sm-4">
                <img src="img/1.jpg" class="img-responsive about_img" alt="aerna">
            </div>
            
            <div class="col-sm-1"></div>
            
            <div class="col-sm-7">
                <p class="content">Our Professional Services and Quality maintenance have been our Business Statement since past decade.<br><br>
                Hundreds of Five Star Reviews and thousands of quality devices motivate us to deliver best of our services to you.<br><br>
Try us once and there will be no place else you would ever need. </p>
            </div>
        </div>
        
    </div>
    
     <?php include("pack/footer.php"); ?>
    
</body>
</html>