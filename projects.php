<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Projects' ></cms:template>
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
		<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />	
		<link rel="stylesheet" type="text/css" href="css/effect1.css" />
		<link rel="stylesheet" type="text/css" href="css/pjkstyle.css" />
		<script src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="<cms:show k_admin_link />includes/jquery.min-1.5.1.js"></script>
   		<script type="text/javascript" src="<cms:show k_site_link />slimbox/js/slimbox2.js"></script>
	    <link rel="stylesheet" href="<cms:show k_site_link />slimbox/css/slimbox2.css" type="text/css" media="screen" />
		
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
			<div class="bg-abstract projects">
				<div class="intro-products">
			    	<h4>PROYEK-PROYEK PJK</h4>
			    	<div class="row">
			    		<div class="product-container partner">
			    			<div class="col s12">
			    				<img src="<cms:editable name='project_image' label='Image' show_preview='1' desc='Upload image here' type='image' />" width="100%">
			    			</div>			    			
			    		</div>
			    	</div>			    	
				</div>
				<div class="ip-main">
					<div class="row">
					<cms:repeatable name='my_multiple_link' >
						<cms:editable type='image' name='my_image' label='Photo' show_preview='1' preview_width='150' input_width='200' col_width='300' />
					    <cms:editable type='text' name='my_link' label='Links' />
					</cms:repeatable>

					<cms:repeatable name='my_multiple_link2' >
						<cms:editable type='image' name='my_image2' label='Photo' show_preview='1' preview_width='150' input_width='200' col_width='300' />
					    <cms:editable type='text' name='my_link2' label='Links' />
					</cms:repeatable>
					
					<ul class="list-projects">
						<cms:show_repeatable 'my_multiple_link' >
							<li><a href="<cms:show my_image />" rel="lightbox-<cms:show my_image/>">
							<cms:show my_link/></a></li>
						</cms:show_repeatable>
					</ul>

					<ul class="list-projects list-2">
						<cms:show_repeatable 'my_multiple_link2' >
							<li><a href="<cms:show my_image2 />" rel="lightbox-<cms:show my_image2/>">
							<cms:show my_link2/></a></li>
						</cms:show_repeatable>
					</ul>
					
   
					</div>
				</div>
				<div class="sticky-wrapper">
					<div id="sticky-anchor"></div>
					<ul class="sosmed-icon-line projects-sos" id="sticky">
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
		<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>				
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