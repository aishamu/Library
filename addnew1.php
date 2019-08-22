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
           <style>
		   .header {
  height: 450px; 
  
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;  
  background-image: url(http://blog.bookbaby.com/wp-content/uploads/2016/05/Book-and-eBook-Banner.jpg);";
 
}
           .books{
           width: 80px;
           height: 80px;
           position: absolute;
           left: 1000px;
         top: 850px;
            z-index: 0;
               }
             .booksPosition {
               position: absolute;
           left: 1010px;
              top: 940px;
               z-index: 1;

                }
            .star{
           width: 80px;
           height: 80px;
           position: absolute;
           left: 830px;
           top: 850px;
            z-index: 0;
               }
             .starPosition {
               position: absolute;
           left: 840px;
           top: 940px;
               z-index: 1;

                }

                    .memo{
           width: 80px;
           height: 80px;
           position: absolute;
           left: 500px;
           top: 850px;
            z-index: 0;
               }
             .memoPosition {
               position: absolute;
               left: 500px;
                top: 940px;
               z-index: 1;


                }




           		 		 .rait{
               width: 80px;
               height: 80px;
               position: absolute;
               left: 650px;
             top: 850px;
                z-index: 0;
                   }
           		  .raitPosition {
                   position: absolute;
               left: 650px;
                top: 940px;
           		 z-index: 1;

                    }

.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: right;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: grey;
  color: white;
}

.topnav a.active {
  background-color: black;
  color: white;
}

           </style>
           </head>
           	<body>

           	<div class="fh5co-loader"></div>

                   	 <div class="topnav">
  <a class="active" href="home.html">الصفحة الرئيسية</a>
  <a href="home.html">إقرأ</a>
  <a href="contactus.html">تواصل معانا</a>
  <a href="registration.html">التسجيل</a>
</div>

            <div class="header">

 
         </div>
             <div id="fh5co-product">
             		<div class="container">


 <?php

	error_reporting( ~E_NOTICE ); // avouserid notice

	require_once 'dbconfig.php';

	if(isset($_POST['btnsave']))
	{
		$title = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user email

		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];


		if(empty($title)){
			$errMSG = "Please Enter Title.";
		}
		else if(empty($userjob)){
			$errMSG = "Please Enter Description.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'user_images/'; // upload directory

			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

			// valuserid image extensions
			$valuserid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valuserid extensions

			// rename uploading image
			$pic = rand(1000,1000000).".".$imgExt;

			// allow valuserid image file formats
			if(in_array($imgExt, $valuserid_extensions)){
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					@move_uploaded_file($tmp_dir,$upload_dir.$pic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
		}


		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO tbl_users1(title,description,pic) VALUES(:uname, :ujob, :upic)');
			$stmt->bindParam(':uname',$title);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$pic);

			if($stmt->execute())
			{
				$successMSG = " ...  المذكرة الجديدة اضيفت بنجاح";
 			}
			else
			{
				$errMSG = "حدث خطا اثناء الاضافة ";
			}
		}
	}
?>






<center>
  <br>
 <div class="container">

	<div class="page-header">
    	<h3>اضافة مذكرة جديدة  <a class="btn btn-default" href="index1.php"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; عرض الكل </a></h3>
    </div>


	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>
 <div class= "double1">
 <form method="post" enctype="multipart/form-data" class="form-horizontal">

	<table class="table table-bordered table-responsive">

    <tr>
    	        <td></br><input class="form-control" type="text"   name="user_name" placeholder=" " value="<?php echo $title; ?>" /></td>
<td><label class="control-label"></br>عنوان المذكرة </label></td>
    </tr>
    <tr>
    	        <td> </br><textarea  class="form-control" rows="10" cols="50" type="text" name="user_job" placeholder=" " value="<?php echo $userjob; ?>"></textarea></td>
<td><label class="control-label">محتوى المذكرة </br></br></br></br></label></br></td>
    </tr>

    <tr>
    	        <td></br><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
<td><label class="control-label">.صورة</label></td>
    </tr>

    <tr>
       </br> <td colspan="2"><center></br><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> <d3> &nbsp; حفظ المذكرة
       </br> </center> </button>
        </td>
   </tr>

    </table>

</form>


</br>

</div>












<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</br>
</br>
</br>
  </div>
  </div>
  <!--end of left content-->




 	<footer id="fh5co-footer" role="contentinfo">
 		<div class="container">
 			 

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
 			</div>

 		</div>
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
