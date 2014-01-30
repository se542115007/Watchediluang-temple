
<!DOCTYPE html>
<html lang="en">
<?php include 'dbConnect.php'; ?>
<head>
  	<title>Attraction</title>
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/css3-mediaqueries.js"></script>
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<div class="main-bg">
    <!-- Header -->
    <header>
    
    	<div class="nav-responsive"><div>MENU</div>
			<select onchange="location=this.value">
				
			</select>
		</div>
    	<div class="inner">
            <h1 class="logo"><a href="index1-.php"></a></h1>
            <nav>
                <ul class="sf-menu">
                    <li class="current"><a href="index1-.php">home</a>
                       <ul> <li><a href="History.php">History</a></li>
                      </ul>
                    </li>
                    
                    <li><a href="">Attraction</a>
                      <ul class="child">
          				  <li><a href="Attraction-1.php">Phra Chedi Luang</a></li>
          				  <li><a href="Attraction-2.php">Chedi Burapajarn</a></li>
                      </ul>
                    </li>
                    
                    <li>
                    	<a href="Monks.php">Monks</a>        	
                    </li>
                    <li><a href="#">Activity</a>
                       <ul>
         				<li><a href="Activity-1.php">Sai kun dork In-Ta_Khin Ceremony</a></li>
         				<li><a href="Activity-2.php">Tak Bard Peng Pud</a></li>
         				<li><a href="Activity-3.php">Fon Sean Ha Buddha's Water Sprinkling Ceremony</a></li>
       				   </ul>
                    </li>
                    <li><a href="Gallery.php">Gallery</a></li>
                    <li><a href="Location.php">Location</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <!-- Content -->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com | Zerotheme.com</div>
        <div class="zerogrid">
            <div class="wrapper">
            	<div class="row content-bg">
                	<div class="wrapper">
                    	<article>
    <table>
    <td>
    <h5>Information Management</h5>
 <form action="updateDB.php" method="post" >    
    <table style="white-space:nowrap" >
    <tr > 
          <td > 
           
           <li>Homepage</li>
    		 <a href="EditeInfo.php?id=6">History</a></br>
    	   <li>Attraction</li>
   		     <a href="EditeInfo.php?id=1">Phra Chedi Luang</a></br>
   	 	     <a href="EditeInfo.php?id=2">Chedi Burapajarn</a></br>
             
    	   <li>Activity</li>
    		 <a href="EditeInfo.php?id=3">Sai kun dork In-Ta-Khin Ceremony. </a></br>      
			 <a href="EditeInfo.php?id=4">Tak Bard Peng Pud</a></br>
			 <a href="EditeInfo.php?id=5">Fon Saen Ha Buddhas Water Sprinkling Ceremony</a></br>
             
          </td> 
          <td >
          <h6> Name</h6><textarea cols="25" rows="2" name="Tname">
        <?php 
		$id= $_GET["id"];?>
	<?php
	
	
	$res = mysql_query("Select * from attraction where id=".$id."");
	while ($row = mysql_fetch_array($res)) {  
	echo "".$row["name"]."";	
	
	}
     ?>
</textarea>

	<h6>Description</h6><textarea cols="80" rows="5" name="Tdescription">
	<?php
	
$res = mysql_query("Select * from attraction where id=".$id."");
	while ($row = mysql_fetch_array($res)) {  
	echo "".$row["description"]."";	
	}
mysql_close();

  ?>
</textarea></br>
 <?php 
      echo "<input type="."hidden"."  name="."id".">";
 ?>
<input type="submit" value="Submit"/>
</form>
           </td>    
    </tr>
   
    </table>
     
   
</td><td>

    
    </table>
   
                            </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
      
    <!-- Footer -->
     <footer>
    	<div class="zerogrid">
        	<div class="row footer-bg">
        			<div class="hr-border-2"></div>
                    <div class="wrapper">
                        <div class="col-2-10">
							<div class="wrap-col">
	                        	<div class="copyright">
                                <table>
                                   <td><a href="#"><img src="images/Team log.png" alt=""></a></td>
                                   <td><div>103 Road King Prajadhipok Phra Singh, Muang District, Chiang Mai 50200, Thailand</div></td>
                                   
                                   <td><a href="#"><img src="images/social-icon-2.png" alt=""></a>
                                          <form action="index1-.php" method="get"></td>
                                   <td><a href="Admin/admin/login.php" style="font-size:12px;font-style:inherit" >Login</a>
		                                  </form> </td>	                                
                                </table>
	                            	
	                            	
                              </div>
							</div>
                        </div>
	            
                    </div>
        	</div>
        </div>
    </footer>
</div>
</body>
</html>