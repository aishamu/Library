


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
         <style>
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

         	<div id="page">
                  	 <div class="topnav">
  <a class="active" href="home.html">الصفحة الرئيسية</a>
  <a href="home.html">إقرأ</a>
  <a href="contactus.html">تواصل معانا</a>
  <a href="registration.html">التسجيل</a>
</div>

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


<br>
<div class="container home">
<font face="comic sans ms">
<h3><center> pdf قائمة من الكتب المتوفرة  </center> </h3>
</font>
<center>
 <table class="table table-bordered">
  <thead>
   <tr>
  	<th><font face="comic sans ms">الملفات المرفقه </font></th>
	<th><font face="comic sans ms">نبذة  </font></th>
  <th><font face="comic sans ms">العنوان</font></th>


  </tr>
   </thead> </center>


    <tbody>

                 </div>
				 <?php

	@$link=mysql_connect("localhost","root","");
	mysql_select_db("test2",$link);
	$q="select count(*) \"total\"  from presentation";
	$ros=mysql_query($q,$link);
	$row=(mysql_fetch_array($ros));
	$total=$row['total'];
	$dis=3;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
	$q="SELECT * FROM presentation ORDER BY subject ASC limit $k,$dis";
	$ros=mysql_query($q,$link);

	while($row=mysql_fetch_array($ros))
	{
		echo '<tr>';

			echo "<td align=center><a title='Click here to download in file.'
		     href='download.php?id={$row['file']}'>{$row['file']} </a>";
			echo '<td align=center>' .$row['topic']; echo '<td align=center>' . $row['subject'];


		echo '</tr>';

	}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	if($page_cur>1)
	{
	 echo '<a href="display.php?page='.($page_cur-1).'" style="cursor:pointer;color:DeepSkyBlue ;" ><input style="cursor:pointer;background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" السابق "></a> ';
     }
	else
	{

	  echo '<input style="background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value=" السابق "> ';

	}
	for($i=1;$i<$total_page;$i++)
	{
		if($page_cur==$i)
		{

			echo '<input style="background-color:DeepSkyBlue ;border:2px black solid;border-radius:5px;width:30px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> ';

		}
		else
		{
		echo '<a href="display.php?page='.$i.'"> <input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a> ';

		}
	}
	if($page_cur<$total_page)
	{

		echo '<a href="display.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" التالي "></a>';

	}
	else
	{

	 echo '<input style="background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   التالي "> ';
     }

?>
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
