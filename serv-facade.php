<?php require_once( 'admin/cms.php' ); ?>

<cms:template title='Service Facade' clonable='1' dynamic_folders='1' gallery='1'>
   <cms:editable 
      name='gg_image' 
      label='Image' 
      desc='Upload your main image here'
      width='500'
      height='500'
      show_preview='1'
      preview_height='200'
      type='image'
   />
   
   <cms:editable 
      name='gg_thumb' 
      label='Image Thumbnail' 
      desc='Thumbnail of the main image above'
      width='275'
      height='176'
      enforce_max='1'
      assoc_field='gg_image' 
      show_preview='1'
      type='thumbnail'
   />  

   <cms:editable 
      name='my_thumb_2' 
      label='Image Thumbnail 2' 
      desc='Second thumbnail of the main image above'
      width='275'
      height='176'
      assoc_field='gg_image' 
      show_preview='1'
      type='thumbnail'
   />  
   
   <cms:editable 
      name='my_desc' 
      label='Description' 
      height='60'
      type='textarea'
   />
               
</cms:template>
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
		<link href="css/imagehover.css" rel="stylesheet" media="all">	
		<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
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
			<div class="bg-abstract partner services facade">
				<div class="intro-products">
			    	<h4>Layanan Kami</h4>
			    	<div class="row">
			    		<div class="container">
			    			<div class="col s12 l9 m6 m-pd">
			    				<div class="img-service left">
			    					<img src="img/Facade Icon.png" width="200">
			    				</div>
			    				<div class="desc-service left white-text">
			    					<h5>Facade Curtain Wall</h5>
			    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    					consequat.</p>
			    				</div>
			    			</div>
			    			<div class="col s12 l3 m3 backtocat">
			    				<a href="service.php">Kembali ke Kategori</a>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="row">
			    		<div class="container">
			    			<div id="gallery-wrapper">
							   
							   <cms:if k_is_list>
							      
							      <!-- gallery folders --> 
							      							      
							      <cms:set my_page="<cms:gpc 'pg' method='get' />" />
							      <cms:if my_page lt '2' >
							         <ul class="gallery folders"> 
							            <cms:folders childof=k_folder_name hierarchical='1' depth='1'>
							            
							               <cms:set my_folder_image="" />
							               <cms:if k_folder_image>
							                  <cms:set my_folder_image=k_folder_image />
							               <cms:else />
							                  <cms:pages folder=k_folder_name include_subfolders='0' limit='1'>
							                      <cms:set my_folder_image=my_thumb_2 scope='parent' />
							                  </cms:pages>
							               </cms:if>
							               <cms:if my_folder_image=''><cms:set my_folder_image="<cms:show k_admin_link />theme/images/empty-folder.gif" /></cms:if>
							               
							               <li>
							                  <a href="<cms:show k_folder_link />">
							                     <img alt="<cms:show k_folder_title />" src="<cms:show my_folder_image />"/>
							                     <span class="title"><cms:show k_folder_title /></span>
							                     <span class="count_images"><cms:show k_folder_totalpagecount /> images</span>
							                     <span class="count_folders"><cms:show k_folder_totalchildren /> folders</span>
							                  </a>
							               </li>
							            </cms:folders> 
							         </ul>   
							      </cms:if>
							      
							      <!-- gallery images-->
							      <ul class="gallery">
							         <cms:pages folder=k_folder_name include_subfolders='0' limit='12' paginate='1'>
							            <li class="col s12 l3 m4">
							               <a href="<cms:show gg_image />" rel="lightbox-<cms:show k_page_foldername/>" <cms:if my_desc>title="<cms:show my_desc/>"</cms:if>>
							                  <img alt="<cms:show k_page_title />" src="<cms:show my_thumb_2 />"/>
							               </a>
							               <div class="caption-text">
							               	  <h5><cms:show k_page_title /></h5>
							               	  <span><cms:show my_desc/></span>
							                </div>
							            </li>
							            
							            <cms:if k_paginated_bottom >
							               <div style="clear:both"><cms:paginator /></div>   
							            </cms:if>
							            
							         </cms:pages>
							      </ul>
							  
							   <cms:else /><!-- k_is_page -->   
							      
							      <div id="image_container">
							         <img alt="<cms:show k_page_title />" src="<cms:show gg_image />"/>
							      </div>
							      
							   </cms:if>

							</div>
			    		</div>
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
		<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>	
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


				$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : 'img/kusen/thumbnail 1.jpg',
						title : 'Kusen 1'
					}, {
						href : 'img/kusen/thumbnail 2.jpg',
						title : 'Kusen 2'
					}, {
						href : 'img/kusen/thumbnail 1.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
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