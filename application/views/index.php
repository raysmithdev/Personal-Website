<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>Ray Smith</title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Web Developers, irishbizparty, irishdev, coding.org">
	<meta name="keywords" content="Web Developer, Cork, Cork IT Network, Freelancer Cork, Ireland, Web Design">
	<meta name="author" content="Ray Smith">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="assets/css/font-mfizz.css" rel="stylesheet">	

    
    <!-- Google Fonts + Material Icons -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Animate + Custom Animations CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- Angular CSS -->
    <link href="assets/css/angular.css" rel="stylesheet">
	
	<!-- Sweetalert -->
	<link href="assets/css/sweetalert.css" rel="stylesheet">
	
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">	

    <!-- Master CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

</head>
<body>
    <!-- Hero START -->
    <section id="hero" class="hero clearfix" ng-controller="IntroController" ng-cloak> 
	    
	    <div class="hero-overlay"></div>      
		<div class="hero-wrapper">
			<!-- Main title -->
			<h1 class="title wow slideInLeft">Ray Smith</h1>
			
			<h4 class="subtitle wow slideInRight" data-wow-delay="1s">Web Developer | Eager to keep learning</h4>
			
			<a href="http://raysblog.herobo.com/" target="_blank">
				 <input type="submit" class="btn btn-clear wow fadeIn" data-wow-duration="1s" data-wow-delay="2s" value="Checkout my blog">
			</a>
		</div>
    </section>
    <!-- Hero END -->
    
    <!-- About Me START -->
    <section id="about-section" class="section-padding text-center">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-3 col-md-offset-2">
					<!-- <img src="assets/images/me-couch.png" class="wow flipInX img-rounded center-block hidden-xs"> -->
					<div class='fln-hireme' data-username='raysmithdev' data-style='plain' data-type='badge' data-bg='' data-theme='' ></div>				

    			</div>
    			<div class="col-md-7 content">
    				<p class="desc">
    						Hi, My Name is Ray.
    						I am a Web Developer from Cork. I love making websites and web applications using a number of frameworks. I like to use PHP for backend work but recently I have started learning node js.
    						I have a passion for clean design so I keep this to the forefront when designing and developing websites. When I am not programming you will find me either listening to 8 Tracks or running the roads. 
    				</p>
    			</div>
    		</div>
    	</div>	 
    </section>
    <!-- About me END -->
    
    <!-- Skills START -->
	<section id="skills-section" class="skills text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<header>
						<h1 class="title">Some of my skills</h1>
					</header>
					<div class="skills-wrapper">
						<div class="col-md-4 wow flipInY" data-wow-duration="3s">
							<div class="icon">
								<i class="fa fa-laptop"></i>
							</div>
							<h2 class="desc">1. Web Development</h2>
							<p>I am a self taught developer who started with iOS development and I am now an experienced web developer. I like to develop my applications MVC frameworks such as Laravel & Symfony.</p>
						</div>
						<div class="col-md-4 wow flipInX" data-wow-delay="1s" data-wow-duration="3s">
							<div class="icon">
								<i class="fa fa-clock-o"></i>
							</div>
							<h2 class="desc">2. Time Management</h2>
							<p>Being a developer, time management is key. I manage my time by waking up every morning and writing down the tasks ordering them based on priority. If something is mission critical then that task will be completed first that day.
							</p>
						</div>
						<div class="col-md-4 wow flipInY" data-wow-delay="2s" data-wow-duration="3s">
							<div class="icon">
								<i class="fa fa-github"></i>
							</div>
							<h2 class="desc">3. Source Control</h2>
							<p>Working with code is delicate. It is important to back it up and keep it in a safe place. It is also necessary to use some kind of source control when working with other dev's. For this I use Github.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Skills END -->
			
    <!-- Divider START -->
    <div id="portfolio" class="divider ">
        <h3 class="h1-heading">Portfolio 2015</h3>
    </div>
    <!-- Divider END -->

    <!-- Portfolio Item START -->
    <section id="lovelauren" class="portfolio-item wow fadeInLeft" data-wow-delay="1s">
        <!-- Title H1 -->
        <h1>LoveLauren</h1>

        <small class="portfolio-type-of-work">Web Design & Development 2015</small>

        <!-- Lead Text -->
        <p class="lead">I had the exciting opportunity to work with one of Cork's bloggers Lauren in redesigning and developing her blog. Lauren came to me wanting a whole revamp of her image online.</p>
    
        <!-- Portfolio Picture -->
        <div class="box"> 
            <div class="content">

                <!-- iPhone -->
                <div class="iphone wp4 delay-2s">
                    <img class="iphone-screenshot" src="assets/images/lovelauren-mobile.png">
                </div>

                <!-- Laptop -->
                <div class="laptop wp4 delay-1s">
                    <img class="laptop-screenshot" src="assets/images/lovelauren-laptop.png">
                </div>

            </div> 
        </div>

        <!-- Button Small -->
        <a href="http://lovelauren.eu" class="btn btn-default" target="_blank">View site</a>

        
    </section>
    <!-- Portfolio Item END -->
    
    <!-- Registered Post =============================================->
    <!-- Portfolio Item START -->
     <section id="rp" class="portfolio-item" ng-controller="RegisteredPostController" >

        <h1>Registered Post</h1>

        <small class="portfolio-type-of-work">September 2014 - January 2015</small>

        <!-- Lead Text -->
        <p class="lead">I was fresh out of college and wanted a challenge to gain more experience as a Web Developer. This is where I seized the opportunity to become part of a startup. I was the sole developer of registeredpost.ie with a team of 5 consisting of 2 marketers & 2 founders.</p>
        
        <div class="rp-selection">
	        <ul class="list-inline">
		        <li><input type="submit" class="btn-portfolio" value="Frontend" ng-class="{'btn-active': selectedTab == '1' }" ng-click="setTab(1)"></li>
		        <li><input type="submit" class="btn-portfolio" value="Backend" 	ng-class="{'btn-active': selectedTab == '2' }" ng-click="setTab(2)"></li>
	        </ul>
        </div>
    
        <!-- Frontend Start -->
        <div class="box" ng-show="selectedTab == '1'"> 
            <div class="content" ng-class="{'porfolio-fade-in': selectedTab == '1' }">

                <!-- iPhone -->
                <div class="iphone">
                    <img class="iphone-screenshot" src="assets/images/rp-mobile.png">
                </div>

                <!-- Laptop -->
                <div class="laptop">
                    <img class="laptop-screenshot" src="assets/images/rp-laptop.png">
                </div>

            </div> 
        </div>
        <!-- Frontend END -->
        
        <!-- Backend Start -->
        <div class="box" ng-show="selectedTab == '2'"> 
            <div class="content" ng-class="{'porfolio-fade-in': selectedTab == '2' }">

                <!-- iPhone -->
                <div class="iphone">
                    <img class="iphone-screenshot" src="assets/images/rp-admin-mobile.png">
                </div>

                <!-- Laptop -->
                <div class="laptop">
                    <img class="laptop-screenshot" src="assets/images/rp-admin-laptop.png">
                </div>

            </div> 
        </div>
        <!-- Backen2 END -->

        <!-- Button Small -->
        <a href="http://registeredpost.ie" class="btn btn-default">View site</a>
        
    </section>
    <!-- Portfolio Item END -->
    
    <!-- Frameworks START -->
    <section id="frameworks">
    	<div class="container">
			<div class="row">
				<header>
					<h1 class="title">Frameworks I Use</h1>
				</header>
			</div>
			<div class="row item">
				<div class="col-md-12">
					<div class="wrapper">
						<i class="icon-php-alt icon wordpress"></i>
						<h1 class="title">Wordpress</h1>
						<p class="desc">PHP Framework</p>
					</div>
				</div>
			</div>
			<div class="row item">
				<div class="col-md-12">
					<div class="wrapper">
						<i class="icon-php-alt icon laravel"></i>
						<h1 class="title">Laravel</h1>
						<p class="desc">PHP Framework</p>
						<p class="perc">80%</p>
					</div>
				</div>
			</div>
			<div class="row item">
				<div class="col-md-12">
					<div class="wrapper">
						<i class="icon-php-alt icon codeigniter"></i>
						<h1 class="title">CodeIgniter</h1>
						<p class="desc">PHP Framework</p>
					</div>
				</div>
			</div>
			<div class="row item">
				<div class="col-md-12">
					<div class="wrapper">
						<i class="fa fa-diamond icon ruby"></i>
						<h1 class="title">Rails</h1>
						<p class="desc">Ruby Framework</p>
					</div>
				</div>
			</div>
			<div class="row item">
				<div class="col-md-12">
					<div class="wrapper">
						<i class="icon-html icon bootstrap"></i>
						<h1 class="title">Bootstrap</h1>
						<p class="desc">Frontend Framework</p>
					</div>
				</div>
			</div>
			<div class="row item">
				<div class="col-md-12">
					<div class="wrapper">
						<i class="icon-javascript icon javascript"></i>
						<h1 class="title">Angular JS</h1>
						<p class="desc">Frontend Javascript Framework</p>
					</div>
				</div>
			</div>
    	</div>
    </section>
    <!-- Frameworks END -->

    <!-- Hobbies START -->
	<section id="hobbies">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<header class="wow bounceInUp">
						<h1 class="title">What I like to do away from the computer</h1>
					</header>
				</div>
			</div>
			<div class="row main-content">
				<div class="col-md-12">
					<ol  class="list-item">
						<li class="wow slideInLeft" data-wow-delay="1s">
							<h1 class="title">
								Running
							</h1>
							<p class="desc">When I am not on my computer I like to put on my headphones and go for a run. I am no marathon runner but I like to keep fit<i class="material-icons">face</i>
					I love using the RunKeeper app which you can download <a href="http://runkeeper.com/running-app" target="_blank">here</a>. It's great because you can also run with friends sharing your best times etc.
						</li>
						<li class="wow slideInLeft" data-wow-delay="2s">
							<h1 class="title">
								Music
							</h1>
							<p class="desc">I am always listening to music when programming so this is definetly something a love. Im really easy when it comes to music
							so I will listen to anything. I really enjoy listening to house music do and I usually use 8tracks to play alot of random stuff	<i class="material-icons">queue_music</i>
							</p>
						</li>
					</ol>
					</p>
				</div>
			</div>

		</div>
	</section>
    <!-- Hobbies END -->
 
    <!-- Contact START -->
    <section id="contact" class="wow fadeInLeft" ng-controller="ContactController">
        <!-- Title H1 -->
        <div class="row">
			<div class="col-md-6 col-md-offset-3 contact-box">
				<h1 class="h1-heading text-center">Contact me</h1>
				<h2 class="sub-title portfolio-fade-in" id="flash-alert" ng-show="messageSent">Message sent!</h2>
		        <form role="form" class="form" name="form" ng-submit="submitForm(data, form.$valid)" novalidate>
		            <div class="form-group">
		                <label for="email">Email:</label><br>
		                <span class="error"= ng-show="form.email.$error.required && submitted">* This field is required</span>
		                <span class="error" style="color:red;" ng-show="form.email.$error.email &&submitted">* Please give me a valid email</span>
		                <input type="email" class="form-control" id="email" name="email" ng-model="data.email" required>
		            </div>
		            <div class="form-group">
		                <label for="pwd">Message</label><br>
		                <span class="error" style="color:red;" ng-show="form.message.$error.required && submitted">* This field is required</span>
		                <textarea name="message" class="form-control" id="" cols="30" rows="10" ng-model="data.message" required></textarea>
		            </div>
		            <button type="submit" class="btn-clear pull-right">{{btnTxt}}</button>
		        </form>
			</div>
        </div>
    </section>
    <!-- Contact END -->

    <footer class="footer " id="footer">
		<header>
       	 	<h1 class="h1-heading animated fadeInLeft">Connect with me</h1>
		</header>
        <ul class="list-inline">
           <li><a href="https://twitter.com/_Ray_123" target="_blank"><i class="fa fa-twitter"></i></a></li>
           <li><a href="https://ie.linkedin.com/pub/ray-smith/66/5aa/196" target="_blank"><i class="fa fa-linkedin"></i></a></li>
           <li><a href="https://www.facebook.com/ray.smith.90038" target="_blank"><i class="fa fa-facebook"></i></a></li>
           <li><a href="https://github.com/raysmithdev" target="_blank"><i class="fa fa-github"></i></a></li>
        </ul>
	
        <p><small>Made in my bedroom - By Ray Smith - Copyright 2015</small></p>
    </footer>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="assets/js/angular/app.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <!-- Sweetalert js -->
    <script src="assets/js/sweetalert.min.js"></script>
        
    <!-- Wow JS For animations -->
    <script src="assets/js/wow.min.js"></script>    
    <script>
		new WOW().init();
	</script>

	<script type='text/javascript'>(function(d) {
    var po = d.createElement('script');
    po.type = 'text/javascript'; po.async = true; po.src = '//static.flnwdgt.com/build/js/hireme-sdk.js';
    var s = d.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
})(document);</script>
  
</body>
</html>

