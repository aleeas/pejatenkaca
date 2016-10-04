
<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Home' ></cms:template>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Pejaten Jaya Kaca</title>
		<meta name="description" content="Pejaten Kaca: Kaca, Alumunium, Stainless" />
		<meta name="keywords" content="pejaten kaca, kaca, stainless, steel, jaya, jaya kaca, pjk, pja, jaya abadi" />
		<meta name="author" content="Pejaten Kaca" />
		<link rel="shortcut icon" href="../favicon.ico">
		<!--Import Google Icon Font-->
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css">
      	<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" /> -->		
		<link rel="stylesheet" type="text/css" href="css/effect1.css" />
		<link rel="stylesheet" type="text/css" href="css/pjkstyle.css" />
		<script src="js/modernizr.custom.js"></script>
		
	</head>
	<body>
		<div id="ip-container" class="ip-container">
			<!-- initial header -->
			<header class="ip-header">
				<div class="logo-caption preload-img">
					<img src="img/Logo Caption.png" class="logo-splash">
				</div>
				<div class="ip-loader">
					<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
						<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
					</svg>
				</div>
			</header>
			<!-- end header -->
			<div class="row" style="margin-bottom:60px;">
	        	<nav class="shades black nav-down" role="navigation">
	    		    <div class="nav-wrapper container">
	    		      <a id="logo-container" href="#" class="brand-logo">
	    		      	 <?php include('logo.php'); ?>   		      		      	
	    		      </a>
	    		      <div class="relative left">
		    		      <div class="search-box">
		    		      	<input type="text" name="searchbox" class="searchbox" placeholder="Search">
		    		      </div>
		    		      <div class="switch-lang">
		    		      	<a href="#!"><span id="ind">Ind</span></a>
		    		      	<a href="#!"><span id="eng">Eng</span></a>
		    		      </div>
	    		      </div>	    		      
	    		      <?php include('menu.php'); ?>  
	    		      <a href="#" data-activates="nav-mobile" class="button-collapse" id="nav-toggle"><span></span></a>
	    		    </div>
	    		    <div class="menu-mobile" style="display:none">
	    		    	<?php include('menu-mobile.php'); ?>  
	    		    </div>
	    		</nav>
        	</div>
        	<div class="slider">
			    <ul class="slides">
			      <li>
			        <img src="<cms:editable name='prop_image' label='Image' desc='Upload main image here' show_preview='1' group='prop_uploads' width='100%' type='image' />"/> <!-- random image -->
			        <div class="caption center-align">
			          <h5 class="light grey-text text-lighten-3">Selamat datang di</h5>
			          <h4>Pejaten Jaya Kaca</h4>			          
			        </div>
			      </li>
			     <li>
			        <img src="<cms:editable name='prop_image2' label='Image' desc='Upload main image here' show_preview='1' group='prop_uploads' assoc_field='prop_image' type='image' />"/>  			        
			      </li>
			       <li>
			        <img src="<cms:editable name='prop_image3' label='Image' desc='Upload main image here' show_preview='1' group='prop_uploads' assoc_field='prop_image' type='image' />"/>			        
			      </li>
			      <li>
			        <img src="<cms:editable name='prop_image4' label='Image' desc='Upload main image here' show_preview='1' group='prop_uploads' assoc_field='prop_image' type='image' />"/>			        
			      </li>
			      <li>
			        <img src="<cms:editable name='prop_image5' label='Image' desc='Upload main image here' show_preview='1' group='prop_uploads' assoc_field='prop_image' type='image' />"/>			        
			      </li>
			    </ul>
			</div>
			<!-- main content -->
			<div class="bg-abstract">
				<div class="ip-main">
					<div class="home-wrapper">
						<h4>About Us</h4>
						<div class="desc-about">
							<cms:editable name='prop_desc' label='Description' desc='Enter description of property here'
						     type='richtext' />							
						</div>
						<ul class="sosmed-icon-inline">
			          		<li><a href="#"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>          		
			          		<li><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>
			          		<li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
			          	</ul>

			         <div class="menu-bottom">
			         	<div class="row clear-mbottom">
				         	<a href="services.php"><div class="col s6 relative center-align">
				         		<img src="img/BT Serv 3.png" class="hide-on-med-and-down">
				         		<img src="img/BT Serv 3 S.png" class="hide-on-large-only">
				         	</div></a>
				         	<a href="product.php"><div class="col s6 center-align">
				         		<img src="img/BT Prod 3.png" class="hide-on-med-and-down">
				         		<img src="img/BT Prod 3 S.png" class="hide-on-large-only push-to-right">
				         	</div></a>
			         	</div>
			         	<div class="row clear-mbottom">
				         	<a href="projects.php"><div class="col s6 center-align">
				         		<img src="img/BT Proj 3.png" class="hide-on-med-and-down">
				         		<img src="img/BT Proj 3 S.png" class="hide-on-large-only">
				         	</div></a>
				         	<a href="partner.php"><div class="col s6 center-align">
				         		<img src="img/BT Partner 3.png" class="hide-on-med-and-down">
				         		<img src="img/BT Partner 3 S.png" class="hide-on-large-only push-to-right">
				         	</div></a>
			         	</div>
			         </div>	
					</div>
				</div>
			</div>
			<!-- <div class="live-chat right">
				<a href="javascript:void(Tawk_API.toggle())"><img src="img/live-chat.png"></a>
			</div> -->
			<footer class="page-footer">
	          <div class="container">
	            <div class="row clear-mbottom padbotom10">
	              <div class="col l9 s12 left-align">
	                <h5 class="white-text uppercase">Pejaten Jaya Kaca</h5>
	                <p class="grey-text text-lighten-4">Jl. Raya Pejaten No. 14, Pasar Minggu, Jakarta Selatan <br> Telp. : 021 79199651, 7940124, 79181336 Fax. : 021 7987527 <br> Email : aloy_pjk@hotmail.com </p>
	              </div>
	              <div class="col l3 s12 right-align">
	                <ul class="socmed-icon-btm">
	                  <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Facebook</a></li>
	                  <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i> Google Plus</a></li>
	                  <li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i> Instagram</a></li>	                  
	                </ul>
	              </div>
	            </div>
	          </div>
	          
	        </footer>
			<!-- end main content -->

		</div><!-- /container -->
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>				
		<script src="js/classie.js"></script>
		<script src="js/pathLoader.js"></script>
		<script src="js/main.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/effect-onscroll.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
		      $('.slider').slider({
		      	full_width: true,
		      	height: 500
		      });
		       $("#nav-toggle").click(function(){
    		  		$(".menu-mobile").slideToggle();
    		  });
		    });
		    document.querySelector( "#nav-toggle" ).addEventListener( "click", function() {
			  this.classList.toggle( "active" );
			});
			
		</script>
		

	</body>
</html>
<?php COUCH::invoke(); ?>