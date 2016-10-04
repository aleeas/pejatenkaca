<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Product' ></cms:template>
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
	<body class="layout-content">
		<div id="ip-container" class="ip-container">
			
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
		    		      <div class="switch-lang content-product">
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
        	
			<!-- main content -->
			<div class="bg-abstract products">
				<div class="intro-products">
			    	<h4>PRODUK-PRODUK PJK</h4>
			    	<div class="row">
			    		<div class="product-container">
			    			<div class="col s7 l6 right-align top-text">
			    				<cms:editable name='prod_desc' label='Description' desc='Enter description of property here'
						     	type='richtext' />
			    			</div>
			    			<div class="col s5 l6 left-align top-img">
			    				<img src="<cms:editable name='prod_image' label='Image' width='275' show_preview='1' desc='Upload image here' type='image' />" />  
			    			</div>
			    		</div>
			    	</div>
				</div>
				<div class="ip-main">
					<div class="row">
						<div class="category-product">
							<h6>Pilih Kategori</h6>
							<div class="product-icon">
								<ul class="prod-icon">
									<li><a href="prod-kaca.php"><img src="img/Kaca Icon.png"> 
										<div class="text-prod-icon">Kaca</div></a></li>
									<li><a href="prod-alumunium-btg.php"><img src="img/Alum Btg Icon.png">
										<div class="text-prod-icon">Alumunium Batang</div></a></li>
									<li><a href="prod-alumunium-lbr.php"><img src="img/Alum Lbr Icon.png"> 
										<div class="text-prod-icon">Alumunium Lembar</div></a></li>
									<li><a href="prod-acc.php"><img src="img/Acc Icon.png"> 
										<div class="text-prod-icon">Aksesoris</div></a></li>
									<li><a href="prod-etc.php"><img src="img/Lain-lain Icon.png"> 
										<div class="text-prod-icon">Lain-lain</div></a></li>
								</ul>
							</div>
						</div>		         
					</div>
				</div>
				<div class="sticky-wrapper">
					<div id="sticky-anchor"></div>
					<ul class="sosmed-icon-line" id="sticky">
		          		<li><a href="#"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>          		
		          		<li><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>
		          		<li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
		          	</ul>
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
		      
		       $("#nav-toggle").click(function(){
    		  		$(".menu-mobile").slideToggle();
    		  });

		       function sticky_relocate() {
				    var window_top = $(window).scrollTop();
				    var div_top = $('#sticky-anchor').offset().top;
				    if (window_top > div_top) {
				        $('#sticky').addClass('stick');
				        $('#sticky-anchor').height($('#sticky').outerHeight());
				    } else {
				        $('#sticky').removeClass('stick');
				        $('#sticky-anchor').height(0);
				    }
				}

				$(function() {
				    $(window).scroll(sticky_relocate);
				    sticky_relocate();
				});
		    });
		    document.querySelector( "#nav-toggle" ).addEventListener( "click", function() {
			  this.classList.toggle( "active" );
			});
			
		</script>

		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/57d37efdc465436c8cdfae16/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
			})();
		</script>

	</body>
</html>
<?php COUCH::invoke(); ?>