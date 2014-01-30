<!DOCTYPE html>
<html lang="en">
<?php include 'dbConnect.php'; ?>
<head>
  	<title>Watchediluang</title>
  	<meta charset="utf-8">
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
		<html>
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
                    <li>
                    <script src="https://www.google.com/jsapi"
        type="text/javascript"></script>
    <script type="text/javascript">
      google.load("search", "1");

      // Call this function when the page has been loaded
      function initialize() {
        var searchControl = new google.search.SearchControl();
        searchControl.addSearcher(new google.search.WebSearch());
        searchControl.addSearcher(new google.search.NewsSearch());
        searchControl.draw(document.getElementById("searchcontrol"));
      }
      google.setOnLoadCallback(initialize);
    </script></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
</form>		

		<div class="slider-full">
	        <div class="slider-container">
	            <div class="mp-slider">
	                <ul class="items">
	                    <li><img src="images/slide-1.jpg" alt="" /><div class="banner mp-ban-1"><span class="row-1"></span><span class="row-2"></span><span class="row-3"></span></div></li>
	                    <li><img src="images/slide-2.jpg" alt="" /><div class="banner mp-ban-2"><span class="row-1"></span><span class="row-2"></span><span class="row-3"></span></div></li>
	                </ul>
	            </div>
	        </div>
	        <a href="#" class="mp-prev"></a>
	        <a href="#" class="mp-next"></a>
		</div>	
    </header>
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
    
    <!-- Content -->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com | Zerotheme.com</div>
        <div class="zerogrid">
            <div class="row content-bg">
                	
                    	<div class="col-5-10">
							<div class="wrap-col">
                        	<article class="indent-bot">
                              <table>
    <td><tr><a style="color:#000">-----------------------------------</a><img src="images/h1.jpg" /></tr></td>
    <td><tr><a style="color:#000">-----------------------------------------------------------------</a><img src="images/h2.jpg" /></tr>

    
    </td>
  
  
    <td><?php
								      $res = mysql_query("Select * from attraction where id=7");
									  while ($row = mysql_fetch_array($res)) {
									  echo "<h6>".$row["name"]."</h6>"; echo("<br>");
									  echo "<h8>". $row["description"]."</h8>"; echo("<br>");
	                                        }
                                     ?></td>
    <td>
                              		  <?php
											$res = mysql_query("Select * from attraction where id=8");
											while ($row = mysql_fetch_array($res)) {
											echo "<h6>".$row["name"]."</h6>"; echo("<br>");
											echo "<h8>". $row["description"]."</h8>"; echo("<br>");    
																}	

									?></td>    
                                    
                                     
                                    
                                   
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
                                   <td><a href="www.google.com"><img src="images/Team log.png" alt=""></a></td>
                                   <td><div>103 Road King Prajadhipok Phra Singh, Muang District, Chiang Mai 50200, Thailand</div></td>
                                   
                                   <td><a href="http://www.facebook.com/sharer/sharer.php?u=www.Watchediluang-Chiangmai.com&t=Goooyuyyuu"><img src="images/social-icon-2.png" alt=""></a>
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