<?php
SESSION_start();
?>



         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
         <!DOCTYPE HTML>
         <html>
         	<head>
             <meta charset="utf-8">
          <link rel ="stylesheet" type="text/css" href=" css/style.css">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         	<meta http-equiv="X-UA-Compatible" content="IE=edge">
          	<meta name="viewport" content="width=device-width, initial-scale=1">
         	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
         	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
         	<meta name="author" content="freehtml5.co" />

         	<!--
         	//////////////////////////////////////////////////////

         	FREE HTML5 TEMPLATE
         	DESIGNED & DEVELOPED by FreeHTML5.co

         	Website: 		http://freehtml5.co/
         	Email: 			info@freehtml5.co
         	Twitter: 		http://twitter.com/fh5co
         	Facebook: 		https://www.facebook.com/fh5co

         	//////////////////////////////////////////////////////
         	 -->

           	<!-- Facebook and Twitter integration -->
         	<meta property="og:title" content=""/>
         	<meta property="og:image" content=""/>
         	<meta property="og:url" content=""/>
         	<meta property="og:site_name" content=""/>
         	<meta property="og:description" content=""/>
         	<meta name="twitter:title" content="" />
         	<meta name="twitter:image" content="" />
         	<meta name="twitter:url" content="" />
         	<meta name="twitter:card" content="" />

         	<!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">	 -->
         	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">

         	<!-- Animate.css -->
         	<link rel="stylesheet" href="css/animate.css">
         	<!-- Icomoon Icon Fonts-->
         	<link rel="stylesheet" href="css/icomoon.css">
         	<!-- Bootstrap  -->
         	<link rel="stylesheet" href="css/bootstrap.css">

         	<!-- Magnific Popup -->
         	<link rel="stylesheet" href="css/magnific-popup.css">

         	<!-- Flexslider  -->
         	<link rel="stylesheet" href="css/flexslider.css">

         	<!-- Theme style  -->
         	<link rel="stylesheet" href="css/style.css">

         	<!-- Modernizr JS -->
         	<script src="js/modernizr-2.6.2.min.js"></script>
         	<!-- FOR IE9 below -->
         	<!--[if lt IE 9]>
         	<script src="js/respond.min.js"></script>
         	<![endif]-->
         
         </head>
         	<body>

         	<div class="fh5co-loader"></div>

         	<div id="page">
         	<nav class="fh5co-nav" role="navigation">
         		<div class="top-menu">
         			<div class="container-fluid">
         				<div class="row">
         					<div class="col-xs-2">
         						<div id="fh5co-logo"><a href="home.html">Reading<span>.</span></a></div>
         					</div>
         					<div class="col-xs-10 text-right menu-1">
         						<ul>
         							<li><a href="home.html">Home</a></li>


         							<li class="active"><a href="contactus.html">contactus</a></li>
         							<li class="btn-cta"><a href="#"><span>Login</span></a></li>
         						</ul>
         					</div>
         				</div>

         			</div>
         		</div>
         	</nav>

           <aside id="fh5co-hero" class="js-fullheight">
           <div class="flexslider js-fullheight">
             <ul class="slides">
               <li class="holder" style="background-image: url(http://blog.bookbaby.com/wp-content/uploads/2016/05/Book-and-eBook-Banner.jpg);">


               </li>
               </ul>
             </div>
         </aside>
           <div id="fh5co-product">
           		<div class="container">



    <?php
        if(isset($_SESSION['user'])){
            echo "Welcome Again, ".$_SESSION['user'];
            echo '
            <form action="include/logout_script.php" method="post" id="logout-form">
            <input type="submit" class= "button" name="submit" value="Log-out">
        </form>
            ';
        }
    ?>





			<?php

	require_once 'dbconfig.php';

	if(isset($_GET['delete_userid']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT pic FROM tbl_users1 WHERE userid =:uuserid');
		$stmt_select->execute(array(':uuserid'=>$_GET['delete_userid']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		@unlink("user_images/".$imgRow['pic']);

		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM tbl_users1 WHERE userid =:uuserid');
		$stmt_delete->bindParam(':uuserid',$_GET['delete_userid']);
		$stmt_delete->execute();

 	}

?>


<center>

</br>
</br>
	<div class="page-header">
    	<d2 class="h2"> جميع المذكرات  <a class="btn btn-default" href="addnew1.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; اضافة مذكرة جديدة </a></d2>
   </br></br> </div>
</center>



<?php

	$stmt = $DB_con->prepare('SELECT userid, title, description, pic FROM tbl_users1 ORDER BY userid DESC');
	$stmt->execute();

	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>

			<table>

			<tr> <div class= "double1"></br>
				<img src="user_images/<?php echo $row['pic']; ?>" class="img-rounded" wuseridth="100px" height="100px"  align="right"/></br></br></br>
</br>
</br>
				<h2 class="page-header" align="right"><?php echo  $title. "</br>&nbsp;&nbsp;".$description; ?></h2>
				<p class="page-header">
				<center><span>
 				<a class="btn btn-danger" href="?delete_userid=<?php echo $row['userid']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
				</span></center>
		</p></br>
</br>



			</div>




    </br>
</br>
</br>
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; لم يوجد بيانات
            </div>
        </div>
        <?php
	}

?> </tr>
</br>
</br>


 </table>	</div>


 </div>





<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>



  <footer id="fh5co-footer" role="contentinfo">
  <div class="container">
  <div class="row row-pb-md">
    <div class="col-md-4 fh5co-widget">
      <h4>Reading</h4>
      <p>An online system that targets all readers or reading enthusiasts so that they provide them with the required books. In addition, there is space for the reader to leave his notes or a notebook of his own. Also, the reader can communicate with the "Read" system easily as possible to save his needs and put his opinion</p>
    </div>
    <div class="col-md-4 col-md-push-1">
      <h4>Links</h4>
      <ul class="fh5co-footer-links">
        <li><a href="home">Home</a></li>

        <li><a href="contactus">Contact us</a></li>
      </ul>
    </div>

    <div class="col-md-4 col-md-push-1">
      <h4>Contact Information</h4>
      <ul class="fh5co-footer-links">
        <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
        <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
        <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
        <li><a href="http://gettemplates.co">gettemplates.co</a></li>
      </ul>
    </div>

  </div>

  <div class="row copyright">
    <div class="col-md-12 text-center">
      <p>
        <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
        </p>
      <p>
        <ul class="fh5co-social-icons">
          <li><a href="#"><i class="icon-twitter"></i></a></li>
          <li><a href="#"><i class="icon-facebook"></i></a></li>
          <li><a href="#"><i class="icon-linkedin"></i></a></li>
          <li><a href="#"><i class="icon-dribbble"></i></a></li>
        </ul>
      </p>
    </div>
  </div></div>

  </footer>
  </div>

  <div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

  </body>
  </html>
