<?php 
if(isset($_GET['id']))
{
include("admin/pack/lib.php");
$id = input($_GET['id']);
$category = '';
include("admin/pack/config.php");
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gadget Arena</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans&family=Road+Rage&family=Sarabun&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/tablogo.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/0ee0b8759e.js" crossorigin="anonymous"></script>

</head>

<?php include("pack/nav1.php"); ?>

<style>

.products
{
    margin-top:10%;
}

.products .main_img
{
    padding-left:4vh;
    height:40vh;
    padding-right:4vh;
}

.products .multi_img
{
    height:20vh;
    width:auto;
}

.products .main_img2
{
    /*padding-left:8vh;*/
}

.products .buy_row
{
    background-color:black;
    width:85%;
}

.products .buy_head
{
    color:white;
    font-size:16px;
   
    
}


.products .whatsapp_icon
{
    color:white;
    padding:8px;
    background-color:green;
}

.products .fb_row
{
    padding-top:20px;
}

.products .fb_icon
{
    color:white;
    padding:8px;
    background-color:black;
}

.products .icon_col
{
     margin-top:13px;
}

.products .product_name
{
    font-size:34px;
    font-weight:700;
}

.products .product_describe
{
    font-size:14px;
padding-top:15px;
}

.products .feature
{
    font-size:15px;
    color:grey;
}

.products .feature2
{
    font-size:15px;
    color:black;
    font-weight:600;
}

.products .image-mobile
{
    border:1px solid #cccccc;
  width:28%;
}

.products .image-mobile2
{
    border:1px solid #cccccc;
    width:28%;
    margin-left:11vh;
}

.products .brand_name
{
    /*font-size:17px;*/
        font-size:17px;
    background-color:black;
    color:white;
    padding:10px;
}

.products .brand_content
{
    font-size:15px;
    padding-top:15px;
}

.projects
	  {
	      padding-left:10vh;
	      padding-right:10vh;
	  margin-top:2vh;   
	  }
	  
	  .projects .image h3, 
	  {
	      margin-left:10px;
	  }


.products .product_head
{
  
    font-size:28px;
}

.products .imgg
{
    height:40vh;
    width:100%;
}

.products .products_section
{
    padding-left:6vh;
    padding-top:10vh;
}

.card{
    text-decoration:none;
    color:black;

}
.card:hover{
    opacity:1;
    color:gray;
    /*box-shadow: 10px 10px 5px lightblue;    */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    transition: ease-in-out .2s all;

}
@media only screen and (max-width: 950px) 
{
    
    .products
{
    margin-top:-10vh;
}

    
    .products .product_name
{
    font-size:34px;
    padding-left:10px;
    margin-top:5vh;
    font-weight:700;
}

.products .product_describe
{
    font-size:14px;
    padding-right:10px;
padding-left:10px;
}
    
.products
{
    padding-top:13vh;
}

.products .main_img
{
    padding-left:2vh;
    padding-right:2vh;
}

.products .main_img2
{
    padding-left:2vh;
}

.products .buy_row
{
    background-color:black;
    width:100%;
}

.products .buy_head
{
    color:white;
    font-size:16px;
}



.products .products_section
{
    padding-left:0vh;
    padding-top:4vh;
}

.products .image-mobile
{
    border:1px solid #cccccc;
  width:auto;
  margin-top:-5vh;

}

.products .image-mobile2
{
    border:1px solid #cccccc;
    width:auto;
  
  margin-left:0vh;
    margin-top:8vh;
}

.products .brand_name
{
    font-size:17px;
}

.products .brand_content
{
    font-size:15px;
    padding-top:15px;
}
.projects
	  {
	      padding-left:3vh;
	      padding-right:3vh;
	  margin-top:10vh;   
	  }

	  .projects .image h3, 
	  {
	      margin-left:10px;
	  }
  
}    


</style>

<body>
    
    <div class="container products">
        
        <div class="row">
            <?php
                $select = "select * from product where p_id = '$id'";
                $update = mysqli_query($conn,$select);
                $num = mysqli_num_rows($update);
                if($num > 0 ){
                    while($res = mysqli_fetch_assoc($update)){
                        $productID = $res['p_id'];
                        $category = $res['category'];
                        
                        ?>
            
                            <div class="col-sm-5">
                                
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    
                                   
                                    
                                     
                                    
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        
                                        
                                        
                                        
                                      <!--<div class="item active">-->
                                      <!--  <img src="img/1.jpg" alt="Los Angeles" style="width:100%;">-->
                                      <!--</div>-->
                                
                                      <!--<div class="item">-->
                                      <!--  <img src="img/1.jpg" alt="Chicago" style="width:100%;">-->
                                      <!--</div>-->
                                    
                                    
                                    <?php
                                            if ($res['image'] == null) {
                                                $path99 = '';
                
                                                $sql1 = "SELECT * FROM img_src where p_id ='$productID'";
                                                $qry1 = mysqli_query($conn, $sql1);
                                                $num1 = mysqli_num_rows($qry1);
                                                    if ($num1 > 0)
                                                    {
                                                        $num = 1;
                                                        while ($res1 = mysqli_fetch_assoc($qry1)) 
                                                        {
                                                            $path99 = $res1['path'];
                                                            // echo 'hhh '.$num;
                                                            ?>
                                                                <!--<img src="img/images/<?php echo $path99; ?>" class="img-responsive" >-->
                                                                <div class="item <?php echo ($num == 1) ? 'active':'';?>">
                                                                    <img src="img/images/<?php echo $path99; ?>" alt="New york" style="width:100%; height:60vh" class="img-responsive">
                                                                </div>
                                                            <?php
                                                            $num++;
                                                        }
                                                    }
                                            }
                                    ?>
                                    </div>
                                
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                    
                                </div>
                                
                                
                                
                                
                                
                               <!-- <div class="row">
                                    <div class="col-sm-12">
                                          <?php
                                            if ($res['image'] == '') {
                                                $path = '';
                
                                                $sql1 = "SELECT * FROM img_src where p_id ='$productID'";
                                                $qry1 = mysqli_query($conn, $sql1);
                                                $num1 = mysqli_num_rows($qry1);
                                                if ($num1 >= 1) {
                                                    while ($res1 = mysqli_fetch_assoc($qry1)) {
                                                        $path = $res1['path'];
                                                        break;
                                                    }
                                            ?>
                                                <img src="img/images/<?php echo $path; ?>" class="img-responsive" >
                                                <img src="img/images/<?php echo $path; ?>" class="img-responsive main_img" alt="aerna" id="mainImg"> 
                                                
                                            <?php
                                                }
                                            }
                                            ?>
                                        
                                        
                                    </div>
                                </div><br>-->
                                
                               <!-- <div class="row">
                                    
                                    <div class="col-sm-12">
                                        
                                        <div class="row">
                                        
                                        
                                            <?php
                                                if ($res['image'] == '') {
                                                    $last = "";
                    
                                                    $sql1 = "SELECT * FROM img_src where p_id ='$productID'";
                                                    $qry1 = mysqli_query($conn, $sql1);
                                                    $num1 = mysqli_num_rows($qry1);
                                                    if ($num1 >= 1) {
                                                        while ($res1 = mysqli_fetch_assoc($qry1)) {
                                                            // $path = $res1['path'];
                                                            $last = $res1['path'];
                                                        ?>
                                                        <div class="col-sm-4 col-xs-4" style="max-width: 70%;">
                                                                <img src="img/images/<?php echo $last; ?>" class="img-responsive multi_img" alt="aerna" onclick="img_change('<?php echo $last;?>');">
                                                                <a href="<?php echo $last;?>" ><img src="img/images/<?php echo $last; ?>" class="img-responsive" alt="aerna" width="250px" height="250px" id="<?php echo $last;?>"></a>
                                                        </div>
                                                        
                                                        <?php
                                                        }
                                                    }
                                                }
                                            ?>
                                        
                                        </div>
                                        <!--<img src="img/1.jpg" class="img-responsive main_img2" alt="aerna">
                                    </div>
                                    
                                    <!--<div class="col-sm-7 col-xs-8">
                                        
                                    <!--</div>
                                    
                                    
                                </div>-->
                                
                            </div>
                            
                            <div class="col-sm-6">
                                
                                <div class="row">
                                    <h2 class="product_name"><?php echo $res['product_title'];?></h2>
                                    <!--<p class="product_name"><?php echo $res['product_brand'];?></p>-->

                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-3">
                                        <h3 class="feature">Brand: </h3>
                                    </div>
                                    
                                    <div class="col-sm-10 col-xs-9">
                                        <h3 class="feature2"><?php echo $res['product_brand'];?></h3>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-3">
                                        <h3 class="feature">Color: </h3>
                                    </div>
                                    
                                    <div class="col-sm-10 col-xs-9">
                                        <h3 class="feature2"><?php echo $res['color'];?></h3>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-3">
                                        <h3 class="feature">Varient: </h3>
                                    </div>
                                    
                                    <div class="col-sm-10 col-xs-9">
                                        <h3 class="feature2"><?php echo $res['product_size'];?></h3>
                                    </div>
                                    
                                </div>
                               
                               <!--///////-->
                               <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-3">
                                        <h3 class="feature">Warranty: </h3>
                                    </div>
                                    
                                    <div class="col-sm-10 col-xs-9">
                                        <h3 class="feature2"><?php echo $res['warranty'];?></h3>
                                    </div>
                                    
                                </div>
                               <!--///////-->
                               <!--///////-->
                               <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-3">
                                        <h3 class="feature">Accessories: </h3>
                                    </div>
                                    
                                    <div class="col-sm-10 col-xs-9">
                                        <h3 class="feature2"><?php echo $res['accessories'];?></h3>
                                    </div>
                                    
                                </div>
                               <!--///////-->
                              
                               <!--///////-->
                               <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-3">
                                        <h3 class="feature">Condition: </h3>
                                    </div>
                                    
                                    <div class="col-sm-10 col-xs-9">
                                        <h3 class="feature2"><?php echo $res['product_condition'];?></h3>
                                    </div>
                                    
                                </div>
                               <!--///////-->
                               <!--///////-->
                               <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-3">
                                        <h3 class="feature">BatteryHealth: </h3>
                                    </div>
                                    
                                    <div class="col-sm-10 col-xs-9">
                                        <h3 class="feature2"><?php echo $res['battery'];?></h3>
                                    </div>
                                    
                                </div>
                               <!--///////-->
                               <!--///////-->
                               <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-3">
                                        <h3 class="feature">Country: </h3>
                                    </div>
                                    
                                    <div class="col-sm-10 col-xs-9">
                                        <h3 class="feature2"><?php echo $res['country'];?></h3>
                                    </div>
                                    
                                </div>
                               <!--///
                               ////-->
                               <!--///////-->
                               <div class="row">
                                    
                                    <div class="col-sm-2 col-xs-3">
                                        <h3 class="feature">Billing: </h3>
                                    </div>
                                    
                                    <div class="col-sm-10 col-xs-9">
                                        <h3 class="feature2"><?php echo $res['billing'];?></h3>
                                    </div>
                                    
                                </div>
                               <!--///////-->
                               
                                <!--<div class="row">-->
                                    
                                <!--    <div class="col-sm-2 col-xs-3">-->
                                <!--        <h3 class="feature">Price: </h3>-->
                                <!--    </div>-->
                                    
                                <!--    <div class="col-sm-10 col-xs-9">-->
                                <!--        <h3 class="feature2">₹ <?php echo $res['product_price'];?></h3>-->
                                <!--    </div>-->
                                    
                                <!--</div>-->
                                
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <h3 class="feature"><?php echo $res['description'];?></h3>
                                    </div>
                                    
                                </div>
                                 <div class="row">
                                     <div class="col-sm-7">
                                     
                                    <div class="row buy_row">
                                            <div class="col-sm-7 col-xs-6">
                                                <h2 class="buy_head" style="padding-bottom:5px;">Buy Now</h2>
                                            </div>
                                            
                                            <div class="col-sm-5 col-xs-6 icon_col">
                                                <center><i class="ri-whatsapp-line whatsapp_icon" ></i></center>
                                            </div>
                                        </div>
                                        
                                        <div class="row fb_row">
                                            <div class="col-sm-5 col-xs-6">
                                                <p>Connect us:</p>
                                            </div>
                                            
                                            <div class="col-sm-7 col-xs-6">
                                                <i class="ri-phone-fill fb_icon" ></i>&nbsp &nbsp<i class="ri-whatsapp-line whatsapp_icon" ></i>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="col-sm-5"></div>
                                        
                                </div>
                                
                            </div>
                            
                            <div class="col-sm-1"></div>
            
            
                        <?php
                    }
                }
                
            ?>
        </div>
        
        
        
        
        <?php
         $select1 = "select * from product where category = '$category' ";
        $update1 = mysqli_query($conn,$select1);
        $num1 = mysqli_num_rows($update1);
        if($num1 > 1 ){
        ?>
      
            
            <!--loops Start here-->
                <?php
                $sql = "select * from product where category = '$category'";
                $qry = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($qry);
                $counter=1;
                if ($num >= 1) {
                    ?>
                     <div class="row products_section">
                        <div class="col-sm-4">
                            <h2 class="product_head">Related Products</h2>
                        </div>
                        
                        <div class="col-sm-7"></div>
                    </div>
                    <div class="row projects">
                    <?php
                    
                    
                    while ($res = mysqli_fetch_assoc($qry)) {
                        $productID = $res['p_id'];
                ?>
                <a href="product.php?id=<?php echo $productID; ?>" style="text-decoration:none;">
                    <div class="col-sm-3 
                    <?php
                    if($counter==2 || $counter==3)
                    {
                        echo 'image-mobile2';
                    }
                    else
                    {
                        echo 'image-mobile';
                    }
                    ?>
                    card">
                        <div class="row image">
                             <?php
                                if ($res['image'] == '') {
                                    $path = '';
    
                                    $sql1 = "SELECT * FROM img_src where p_id ='$productID'";
                                    $qry1 = mysqli_query($conn, $sql1);
                                    $num1 = mysqli_num_rows($qry1);
                                    if ($num1 >= 1) {
                                        while ($res1 = mysqli_fetch_assoc($qry1)) {
                                            $path = $res1['path'];
                                        }
                                ?>
    
                                        
                                            <img src="img/images/<?php echo $path; ?>" class="img-responsive imgg" >
                                        
                                <?php
                                    }
                                }
                                ?>
                            <!--<img src="img/1.jpg" class="img-responsive">-->
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="brand_name"><b><?php echo $res['product_title']; ?></b></h3>
                                <!--<p class="brand_name"><b><?php echo $res['product_brand']; ?></b></p>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!--<h3 class="brand_name"><b><?php echo $res['product_title']; ?></b></h3>-->
                                <!--<p class="brand_name"><b><?php echo $res['product_brand']; ?></b></p>-->
                                 <p>Brand:<b> <?php echo $res['product_brand']; ?></b></p>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6">
                            <p>Capacity:<b><?php echo $res['product_size']; ?></b></p>
                        </div> 
                            <div class="col-sm-6">
                                <p>Color:<b><?php echo $res['color']; ?></b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <p>Billing:<b>Not Available</b></p>
                            </div>
                            <div class="col-sm-5"></div>
                        </div>
                    </div>
                </a>
                
                <?php
                $counter++;
                if($counter==4)
                {
                    $counter=1;
                }
                }
                }
                ?>
                
        </div> 
        <?php
        }
        
        ?>
    </div>
    
     <?php include("pack/footer.php"); ?>
    <script>
        function img_change(a){
            // document.getElementById("main").classList.add('img/images/'.a);
            // alert(a);
            var b = "img/images/";
            // concat
            // document.getElementById("main").src = 'img/images/1.jpg';
          
            document.getElementById("mainImg").src="img/images/"+a;
         
            
        }
    </script>
</body>
</html>
<?php
}
else{
    header('location:index.php');
}
?>