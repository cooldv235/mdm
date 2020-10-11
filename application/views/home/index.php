
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css"  media="screen,projection"/>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Home | MDM</title>
    </head>

    <body id="home" class="scrollspy">

    	<!-- NAVBAR BEGIN -->
    	<div class="navbar-fixed">
    		<nav class="red lighten-1">
    			<div class="container">
    				<div class="nav-wrapper">
    					<a href="#" class="brand-logo">MDM Analytics</a>
    					<a href="#" data-target="mobile-nav" class="sidenav-trigger">
    						<i class="material-icons">menu</i>
    					</a>
    					<ul class="right hide-on-med-and-down">
    						<li>
    							<a href="#home">Home</a>
    						</li>
    						<li>
    							<a href="#gallery">Gallery</a>
    						</li>
    						<li>
    							<a href="#contact">About Us</a>
    						</li>
    						<li>
    							<a href="#contact">Contact Us</a>
							</li>
							<li>
    							<?php echo anchor('users/signup', 'sign up') ?>
    						</li>
    						<li>
								<a href="<?php echo site_url('admin/login') ?>">Login</a>
							</li>
    					</ul>
    				</div>
    			</div>
    		</nav>
    	</div>

    	<!-- FOR MOBILE -->
    	<ul class="sidenav red lighten-4" id="mobile-nav">
			<li>
				<a href="#home">Home</a>
			</li>
			<li>
				<a href="#gallery">Gallery</a>
			</li>
			<li>
				<a href="#about">About Us</a>
			</li>
			<li>
				<a href="#contact">Contact Us</a>
			</li>
			<?php if($this->session->userdata('authenticated')){ ?>

			<li>
    			<a href="#signup">dashboard</a>
    		</li>
			<li>
				<a href="#contact"> Logout </a>
			</li>
			<?php } else { ?>
				<li>
    			<a href="#signup">Sign up</a>
    		</li>
			<li>
				<a href="#login"> Login </a>
			</li> 
			<?php } ?> 
		</ul>
		<!-- NAVBAR END -->

		<!-- SLIDER BEGIN-->
		<section class="slider">
			<ul class="slides">
		      <li>
		        <img src="<?php echo base_url() ?>assets/images/mdm3.jpg"> <!-- random image -->
		        <div class="caption center-align">
		          <h2 class="black-text">This is our big Tagline!</h2>
		          <h5 class="light black-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		          quis nostrud </h5>
		        </div>
		      </li>
		      <li>
		        <img src="<?php echo base_url() ?>assets/images/mdm10.jpg"> <!-- random image -->
		        <div class="caption left-align">
		          <h2>Left Aligned Caption</h2>
		          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		          quis nostrud </h5>
		        </div>
		      </li>
		      <li>
		        <img src="<?php echo base_url() ?>assets/images/mdm7.jpg"> <!-- random image -->
		        <div class="caption right-align">
		          <h2>Right Aligned Caption</h2>
		          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		          quis nostrud </h5>
		        </div>
		      </li>
		    </ul>
		</section>
		<!-- SLIDER ENDS -->

		<!-- SEARCH SECTION -->
		<!-- <section id="search" class="section section-search teal darken-1 white-text center scrollspy">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h3>Search Website</h3>
						<div class="input-field">
							<input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="Schools,Vendors,Aanganwadi,etc...">
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- SEARCH SECTION END -->

		<!-- SECTION ICON BOXES -->
		<section class="section section-icons red lighten-1 center">
			<div class="container">
				<div class="row">
					<div class="col s12 m4">
						<div class="card-panel">
							<i class="material-icons large red-text">school</i>
							<h4>Schools</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="card-panel">
							<i class="material-icons large red-text">child_care</i>
							<h4>Children</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="card-panel">
							<i class="material-icons large red-text">home</i>
							<h4>Aanganwadi</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="card-panel">
							<i class="material-icons large red-text">people</i>
							<h4>NGOs</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="card-panel">
							<i class="material-icons large red-text">room_service</i>
							<h4>Food Info</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="card-panel">
							<i class="material-icons large red-text">business_center</i>
							<h4>Vendors</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
				</div>
			</div> 
		</section>
		<!-- SECTION ICON BOXES END-->

		<!-- SECTION GOVT SCHEMES -->
		<section id="scheme" class="section section-scheme scrollspy">
	    <div class="container">
	      <div class="row">
	        <h4 class="center">
	          <span class="red-text">CREATED</span> BY</h4>
	        <div class="col s12 m3">
	          <div class="card">
	            <div class="card-image">
	              <img src="<?php echo base_url() ?>assets/images/dushyant.jpg" alt="">
	              <span class="card-title">Dushyant Vishwakarma</span>
	            </div>
	            <div class="card-content">
	              <p>Created the Front End and Admin Panel using Front-End Technologies
	              </p>
	            </div>
	          </div>
	        </div>
	        <div class="col s12 m3">
	          <div class="card">
	            <div class="card-image">
	              <img src="<?php echo base_url() ?>assets/images/vibhav.jpg" alt="">
	              <span class="card-title">Vibhav Sarathe</span>
	            </div>
	            <div class="card-content">
	              <p>Created the Back End with Front End using Back-End Technologies
	              </p>
	            </div>
	          </div>
	        </div>
	        <div class="col s12 m3">
	          <div class="card">
	            <div class="card-image">
	              <img src="<?php echo base_url() ?>assets/images/nancy.jpg" alt="">
	              <span class="card-title">Nancy Goel</span>
	            </div>
	            <div class="card-content">
	              <p>Designed the Interface of this Website using desgin tools
	              </p>
	            </div>
	          </div>
	        </div>
	        <div class="col s12 m3">
	          <div class="card">
	            <div class="card-image">
	              <img src="<?php echo base_url() ?>assets/images/karan.jpg" alt="">
	              <span class="card-title">Karan Yadav</span>
	            </div>
	            <div class="card-content">
	              <p>Designed and developed the Database in MySQL
	              </p>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- SECTION GOVT SCHEMES END -->

	   <!-- SECTION SOCIAL MEDIA  -->
	  <section class="section section-follow red lighten-1 white-text center">
	    <div class="container">
	      <div class="row">
	        <div class="col s12">
	          <h4>Follow SIRT</h4>
	          <p>Follow us on social media</p>
	          <a href="https://www.facebook.com/SIRTBhopal/" target="_blank" class="white-text">
	            <i class="fab fa-facebook fa-4x"></i>
	          </a>
	          <a href="https://twitter.com/SIRT_BHOPAL?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="white-text">
	            <i class="fab fa-twitter fa-4x"></i>
	          </a>
	          <a href="https://in.linkedin.com/school/sirtbhopal/" target="_blank" class="white-text">
	            <i class="fab fa-linkedin fa-4x"></i>
	          </a>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- SECTION SOCIAL MEDIA END-->

	  <!-- SECTION GALLERY -->
	  <section id="gallery" class="section section-gallery scrollspy">
	    <div class="container">
	      <h4 class="center">
	        <span class="red-text">Photo </span> Gallery
	      </h4>
	      <div class="row">
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm1.jpg" alt="">
	        </div>
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm2.jpeg" alt="">
	        </div>
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm3.jpg" alt="">
	        </div>
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm4.jpeg" alt="">
	        </div>
	      </div>

	      <div class="row">
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm5.jpg" alt="">
	        </div>
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm6.jpg" alt="">
	        </div>
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm7.jpg" alt="">
	        </div>
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm8.jpg" alt="">
	        </div>
	      </div>

	      <div class="row">
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm9.jpg" alt="">
	        </div>
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm10.jpg" alt="">
	        </div>
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm11.jpg" alt="">
	        </div>
	        <div class="col s12 m3">
	          <img class="materialboxed responsive-img" src="<?php echo base_url() ?>assets/images/mdm12.jpeg" alt="">
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- SECTION GALLERY ENDS -->

	  <!-- SECTION CONTACT US -->
	  <section id="contact" class="section section-contact scrollspy">
	    <div class="container">
	      <div class="row">
	        <div class="col s12 m6">
	          <div class="card-panel red lighten-1 white-text center">
	            <i class="material-icons medium">description</i>
	            <h5>About Us</h5>
	            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus sed praesentium delectus. Sit, mollitia
	              quo. Veniam repellat voluptas ipsum doloremque?</p>
	          </div>
	          <ul class="collection with-header">
	            <li class="collection-header">
	              <h4>Location</h4>
	            </li>
	            <li class="collection-item">Ayodhya Bypass Road</li>
	            <li class="collection-item">K-sector,Minal Residency</li>
	            <li class="collection-item">Bhopal, Madhya Pradesh 462041</li>
	          </ul>
	        </div>
	        <div class="col s12 m6">
	          <div class="card-panel grey lighten-3">
	            <h5 class="center">Contact Us</h5><br><br><br>
	            <div class="input-field">
	              <input type="text" placeholder="Name" id="name">
	              <label for="name">Name</label>
	            </div>
	            <div class="input-field">
	              <input type="email" placeholder="Email" id="email">
	              <label for="email">Email</label>
	            </div>
	            <div class="input-field">
	              <input type="text" placeholder="Phone" id="phone">
	              <label for="phone">Phone</label>
	            </div>
	            <div class="input-field">
	              <textarea class="materialize-textarea" placeholder="Enter Message" id="message"></textarea>
	              <label for="message">Message</label>
	            </div>
	            <input type="submit" value="Submit" class="btn red lighten-1">
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- SECTION CONTACT US ENDS -->

	  <!-- SECTION FOOTER -->
	  <footer class="section red lighten-1 white-text center">
	    <p class="flow-text">MDM Analytics SIRT-E College &copy; 2020</p>
	  </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
      <!-- CUSTOM JS -->
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/main.js"></script>
    </body>
  </html>