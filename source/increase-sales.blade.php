@extends('_layouts.lp')

@section('title', 'Increase Online Sales | Outgrow')

@section('metaDescription')
	<meta name="description" content="Increase your online sales with interactive quizzes, calculators and assessments. Build your first interactive experience. Start your free trial."/>
	<link rel="canonical" href="http://outgrow.co/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Interactive Calculators | Outgrow" />
	<meta property="og:description" content="Increase your online sales with interactive quizzes, calculators and assessments. Build your first interactive experience. Start your free trial." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Increase your online sales with interactive quizzes, calculators and assessments. Build your first interactive experience. Start your free trial." />
	<meta name="twitter:title" content="Interactive Calculators | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')

	<div class="header-logo">		
		<a href="https://outgrow.co/?utm_source=website&utm_medium=logo&utm_campaign=outgrow_sales_page" class="" target="_blank">
			<img src="https://dzvexx2x036l1.cloudfront.net/lp-header-logo.png" alt="lp-header-logo image">
		</a>
	</div>

	<!-- start: landing page HTML  -->
	<section class="section section-banner section-banner-sales">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center">
				<h1 class="main-heading">Increase your Online Sales with Interactive Quizzes, Calculators and Assessments </h1>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 banner-inner">
				<div class="col-md-8 col-sm-7 col-xs-12 banner-jacket">
					<img src="https://dzvexx2x036l1.cloudfront.net/banner_img_sales.png" alt="Increase your online sales with Outgrow"> 
				</div>
				<div class="col-md-4 col-sm-5 col-xs-12 np banner-content">
					<p>"This tool was so easy to use. We've tried other calculator tools but Outgrow had a variety of templates and designs as well as the flexibility of making our own formulated results."  </p>
					<span class="profile-detail">Katya S., Owner, Reach and Make Millions</span>
					<div class="company-detail">
						Katya’s company made over $10,000 in revenue in just a month of using an Outgrow business calculator.
					</div>
					<a href="https://app.outgrow.co/signup?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page">
						<button type="button" class="btn btn-white-new">Build Your First Interactive Experience <i class="material-icons">arrow_forward</i></button>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-second section-second-survey">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-heading">Generate More Revenue And Leads By Using Outgrow’s Sophisticated Quizzes, Calculators And Assessments. </div>
				<img class="rs-show" src="https://dzvexx2x036l1.cloudfront.net/lp-section-second-img.png" alt="lp-section-second-img image">
				<ul>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Ready-to-use, customizable templates so that you don’t have to worry about design and code </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>All templates have been heavily optimize to improve conversion on both desktop and mobile </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>See record conversion rates with interactive lead generation forms </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Track visits, conversions and traffic across all channels </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Send and receive data from over 1000 apps with our powerful integrations </span> </li>
				</ul>
				<img class="rs-hide" src="https://dzvexx2x036l1.cloudfront.net/lp-section-second-img.png" alt="lp-section-second-img image"> 
			</div>
		</div>
	</section>

	<section class="section section-premade-temp">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-heading text-center">Examples Of Revenue-Generating Outgrow Quizzes, Calculators Aand Assessments </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 section-premade-temp-inner">
				<!-- <div class="preloader">
					<div class="status">&nbsp;</div>
				</div> -->
				<div class="premade-template">
					<ul class="pre-temp-cat" id="calc-cats">
						<li class="active">
							<a href="javascript:void(0)" id="Auto" onclick="shuffleCalcs('Auto')">Auto</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Education"
							   onclick="shuffleCalcs('Education')">Education</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Finance" onclick="shuffleCalcs('Finance')">Finance</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="marketing-advertising"
							   onclick="shuffleCalcs('marketing-advertising')">Marketing & Advertising</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Quintessential" onclick="shuffleCalcs('Quintessential')">Quintessential</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="construction" onclick="shuffleCalcs('construction')">Real
								Estate & Construction</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Technology"
							   onclick="shuffleCalcs('Technology')">Technology</a>
						</li>
						<li>
							<a href="javascript:void(0)" id="Entertainment" onclick="shuffleCalcs('Entertainment')">TV
								and Entertainment</a>
						</li>

					</ul>
					<div class="pre-temp-cont">
						<ul class="pre-temp-list" id="gallery-content-center">

							<li class="filter-all Auto active" id="new-car-used-car">
								<a href="javascript:void(0)" onclick="markAsActive('new-car-used-car')">
									Find out whether you should buy a used card or a new one.</a></li>
							<li class="filter-all Auto" id="buy-rent">
								<a href="javascript:void(0)" onclick="markAsActive('buy-rent')">
									Answer 6 questions to find out whether you should buy or lease your next car.</a>
							</li>
							<li class="filter-all Auto" id="auto-loan">
								<a href="javascript:void(0)" onclick="markAsActive('auto-loan')">
									Find out how much monthly installment you'll be paying on your auto loan.</a></li>
							<li class="filter-all Auto" id="early-payment">
								<a href="javascript:void(0)" onclick="markAsActive('early-payment')">
									How much extra monthly payment will you need to make to shorten your car loan
									term?</a></li>
							<li class="filter-all Auto" id="put-down">
								<a href="javascript:void(0)" onclick="markAsActive('put-down')">
									Find out the downpayment amount you'll need to purchase your new home.</a></li>
							<li class="filter-all Auto" id="type-car">
								<a href="javascript:void(0)" onclick="markAsActive('type-car')">
									Find out which car suits you the best.</a>
							</li>
						</ul>
						<div class="pre-temp-view">
							<div class="temp-preview">
								<span class="image-bg1">
									<span class="image-scroll1">
										<img id="premade-gif" src="https://dzvexx2x036l1.cloudfront.net/calc_images/auto+loan+calculator.gif" />
									</span>
								</span>
								<div class="content temp-info">
									<h3>
										<p id="premade-calc-name">
											<i class="material-icons">&#xE80E;</i>
											AUTO LOAN CALCULATOR
										</p>
										<span id="premade-calc-layout">
											<strong>Layout:</strong> 
											The Londoner 
										</span>
									</h3>
									<a id="premade-preview-link" class="btn btn-red btn-hover" target="_blank" href="https://premade.outgrow.us/Auto-Loan-Calc">Preview</a>
									<a class="btn btn-red btn-hover" href="https://app.outgrow.co/signup?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page">Build your own</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-embeds">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 hide" id="liveReviews">
			<div class="container mobile-container">
				<div class="section-heading text-center">Average Rating 4.9/5 <br/>450+ Reviews </div>
				<div class="social-media-section">
					<div class="each-arrow-section">
						<div id="fb-img" class="arrow_box testactive" onclick="openTestimonial('fb')">
							<img alt="Facebook image" src="//dzvexx2x036l1.cloudfront.net/facebookim.png"/> 
							<img alt="Facebook image" src="//dzvexx2x036l1.cloudfront.net/facebookh.png" class="over over1"/>  
						</div>
			
						<div id="capterra-img" class="arrow_box" onclick="openTestimonial('capterra')">
							<img alt="Capterra image" src="//dzvexx2x036l1.cloudfront.net/capterraimg.png"/>
							<img alt="Capterra image" src="//dzvexx2x036l1.cloudfront.net/capterah.png" class="over over2"/>  
						</div>
			
						<div id="g2-img" class="arrow_box" onclick="openTestimonial('g2')">
							<img alt="G2 Crowd image" src="//dzvexx2x036l1.cloudfront.net/crowd.png"/> 
							<img alt="G2 Crowd image" src="//dzvexx2x036l1.cloudfront.net/crowdh.png" class="over over3"/> 
						</div>

						<div id="google-img" class="arrow_box" onclick="openTestimonial('google')">
							<img alt="Google image" src="https://dzvexx2x036l1.cloudfront.net/google_logo.png"/> 
							<img alt="Google image" src="https://dzvexx2x036l1.cloudfront.net/google_hover.png" class="over over4"/> 
						</div>

					</div>

				</div>
			</div>
		</div>
		
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1">
			<div class="container mobile-container protfolio-section">
				
				<div id="fb" class="protfolio-inner-section" data-repuso-grid="4406" data-website-id="0"></div>

				<div id="capterra" class="protfolio-inner-section testhide" data-repuso-grid="4407" data-website-id="0"></div>

				<div id="g2" class="protfolio-inner-section testhide" data-repuso-grid="4320" data-website-id="0"></div>

				<div id="google" class="protfolio-inner-section testhide" data-repuso-grid="5402" data-website-id="0"></div>
			</div>
		</div>

		<!-- start static HTML of fb, capterra, g2 crowd and google -->
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np custom-embeds" id="staticReviews">
			<div class="container mobile-container">
				<div class="section-2-heading" style="color: rgb(34, 34, 34);">
					Average Rating 4.9/5 <br/>450+ Reviews
				</div>

				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#fb-tab"></a></li>
					<li><a data-toggle="tab" href="#capterra-tab"></a></li>
					<li><a data-toggle="tab" href="#g2crowd-tab"></a></li>
					<li><a data-toggle="tab" href="#google-tab"></a></li>
				</ul>

				<div class="tab-content">
					<div id="fb-tab" class="tab-pane fade in active">
						<div class="col-md-12 col-sm-12 col-xs-12 np">
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">If you are an A+ marketer, you will love this beast! It looks simple but the intelligence you get out of it is incredible. Makes generation of qualified leads a lot easier and even fun. A lot of thought has gone into building this piece of software. For sure.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Dapo Bankole</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-dapo.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">Such a great idea for conversion rate optimization on landing pages! These are the benefits that I found were great for us: - When you've maximized good quality traffic, this is a great idea to optimize conversion rates on your landing pages - When used intelligently, visual content mixed with calculators and quizzes leads to better engagement and completion rates - Integrates with most important tools out there. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Jonathan Naccache</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-jona.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">Great calculator quiz building tool with various field types and well-designed modern templates. The resources section and support is great too. Very happy with the software.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Va Barber Hua</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-va.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">You can't beat outgrow for creating advanced quizzes that help you generate leads. It's like the facebook quizzes we used to do for fun, but now you can use them to generate top quality leads for your business. If you do some thinking, you'd be shocked how many different quizzes you can come up with. Super customisable and easy to use, would definitely recommend checking it out!</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Bryce York</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-bryce.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">These guys are so cool! Their product is fun and easy to use and obviously developed by a team of creative geniuses that care about their customers.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Rachel Kornak</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-rachel.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">The next generation of content marketing This software is extremely agile and allows us to build any type of calculator or quiz we can imagine. This is one of the best options out there to create engaging content, especially in a time when blog posts are being dull.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Jake Anderson</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-jake.png">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="capterra-tab" class="tab-pane fade">
						<div class="col-md-12 col-sm-12 col-xs-12 np">
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">Such a great idea for conversion rate optimization
									Pros: - When you've maximized good quality traffic, this is a great idea to optimize conversion rates on your landing pages - When used intelligently, visual content mixed with calculators and quizzes leads to better engagement and completion rates - Integrates with most important tools out there
									Cons: - Wish there was more visual mapping for different outcomes, but I am confident this will be available in the near future.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Verified Reviewer</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg"> -->
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">You can't beat Outgrow for quizzes
									Pros: You can't beat Outgrow for creating advanced quizzes that help you generate leads. It's like the facebook quizzes we used to do for fun, but now you can use them to generate top quality leads for your business. Highly recommend testing it out.
									Cons: It can be a little expensive (especially if you want the more advanced features), but if you're using it properly it'll pay for itself in no time.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Verified Reviewer</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg"> -->
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">Easy to Set-up, Great Converter
									Pros: Converting visitors to leads at a rate of 10x vs. not using Outgrow. Further, we're dropping these leads into a drip campaign specific to the results of their quiz.
									Cons: Cosmetically the tempalte we are using has shadows. Outgrow was quick to suggest an alternative template.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Ryan Zagata</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg"> -->
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">Outgrow is on to having a great product!
									Pros: I love that I can build a quiz in minutes. I love that I can mix different types of questions: Multiple choice, open ended, or select all that apply.
									Cons: I would like more page editing features rather than to depend on templates. Also, when I want to embed the Quiz on one of my pages I cannot (I don't know CSS or am a programmer) change the background color of the Quiz to reflect my site colors. This would be nice to do. I hear the new version coming out may solve this...
									Overall: Quizzes are the future of internet marketing. People love quizzes and they help you build a relationship with someone easier. If you don't use quizzes you are missing a great tool to market your products.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Ed Ferrigan</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<!-- <img alt="G2Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-ed.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">Pros: The Outgrow software is something I have been looking for in the market for a long time. However, I could only find unglamorous, 'ugly' designs and bad user interfaces.... Then, I found Outgrow. Outgrow provide a really easy solution to the problems of marketing and engaging with consumers in 2017. The team are a really dedicated support who get back to you within a few minutes on live chat.
									Cons: Nothing. Everything is great. I would like to see more features being added though, to add even more value, but otherwise really great!
									Overall: Being able to really engage with my consumers and give them fun ways to know more about my brand.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<!-- <span class="testi-desig ellipsis"></span> -->
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg">  -->
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<!-- <div class="testimonial-question">What do you like best?</div> -->
								<div class="testimonial-answer">The next generation of content marketing
									Pros: This software is extremely agile and allows us to build any type of calculator or quiz we can imagine. This is one of the best options out there to create engaging content, especially in a time when blog posts are being dull.
									Cons: I wish the lead generation module was more agile in terms of placement. Also I would like to see an advanced drag and drop editor.
									Overall: Generate more leads. Capture the attention of my customers and build goodwill with great content.</div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Jake Anderson</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
											</a>
										</div>
										<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg">  -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="g2crowd-tab" class="tab-pane fade">
						<div class="col-md-12 col-sm-12 col-xs-12 np">
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-question">What do you like best?</div>
								<div class="testimonial-answer">I think these quizzes are fabulous! I can do a variety of quizzes to intrigue my blog readers, and make different ones to fit the need at that time. Sometimes humorous, serious, or simply interesting. I love the social share so once the reader gets their outcome, they can share on social media. Also, it can take them back directly to my website. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="G2Crwod logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-question">What do you like best?</div>
								<div class="testimonial-answer">Outgrow is the gamification of online customer engagement, a conversion machine that improves the experience of our visitors. At Bazaar10X.com we track the most effective growth strategies and Outgrow comes at the top of our list for online marketing and customer engagement. Their platform is flexible, easy to use and fully customizable making every experience unique and relevant to our target audience. We use Outgrow to drive conversion, add value or educate our audience and to pre-qualify leads. The follow-up process for our leads is much more targetted with Outgrow because we already collected key information to make the content and value proposition more relevant. We collect more leads with more relevant info. I term of SEO, the platform includes all the bells and whistles to rank and it can be used both as a standalone landing page or embedded on a website. All and all relly impressed with Outgrow, right now at the centre of our online engagement strategy. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="G2Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="{{ $page->baseUrl }}/https://dzvexx2x036l1.cloudfront.net/testimonial-userImg2.jpg">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-question">What do you like best?</div>
								<div class="testimonial-answer">Outgrow is best thought of as a very powerful calculator. Imagine a very intelligent person sitting across from you with a computer asking questions, calculating results, and feeding the results back to you in an easy-to-understand form. Outgrow is all of that and more. The best part about Outgrow is that it is equally useful for beginners and advanced users alike. You can get started creating simple calculators and quizzes in no time. You can make those calculators and quizzes gorgeous with little effort. You can do it in less than 15 minutes. But it doesn't stop there. The advanced calculation features allow you to design highly complex apps without needing to do any coding. The possibilities for lead magnets and premium products are infinite and exciting. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg3.jpg">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-question">What do you like best?</div>
								<div class="testimonial-answer">I like to use my time to work on my business but tactical are just as important so being able to learn a piece of software in the shortest space of time make sense. But that's not all. I have used all sorts of software , from page builders, to trackers, to heatmappers, to webinars software. What impresses me most about Outgrow is that it delivers on it's promises. All functionalities work and the support turnaround is fast and personal. I find i am not wasting time waiting 2 months plus for bug fixes and poor excuses. When i have an issue or i am not sure about a particular function - i just send a chat ticket and invariably it gets answered with 40 minutes. Money likes speed and money is fuel for a business. I like things that work! </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg4.jpg">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-question">What do you like best?</div>
								<div class="testimonial-answer">This tool was so easy to use. We've tried other calculator tools but Outgrow had a variety of templates and designs as well as the flexibility of making our own formulated results. Plus the customer support team was extremely helpful in getting our calculator perfected before launch. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg5.jpg">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-question">What do you like best?</div>
								<div class="testimonial-answer">Their customization was really great, their template selection was excellent as it let me customize my quiz exactly the way I wanted. Their drag and drip feature made it really easy for anyone in my team to be able to modify the quiz and customize it to our needs. At one point I had some questions about the platform and needed technical support, they were very helpful through the phone and were willing to work with me. The fact that the sales rep had researched my company prior to our call and gave us suggestions as to how to better implement Outgrow into our website to increase our leads was impressive. I don't think I've had a company do its research on a customer before jumping on a call. It also really helped in terms of context, since I avoided having to explain who we are and what we do. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg6.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="google-tab" class="tab-pane fade">
						<div class="col-md-12 col-sm-12 col-xs-12 np">
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-answer">Love Outgrow as the marketing tool to get profile and health profiling of our customers. Getting to know our Health Bootcamp members well is critical as it enables us to customize the experience. Our success depends on how well we know the issues they are facing. Outgrow has great templates and branded designs as well as a very simple beautiful user experience. We have had 96% response rate using Outgrow Quiz. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Reena Jadhav</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-reenaJ.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-answer">We've been using Outgrow to create interactive content for a range of clients. It's a great tool for creating interesting ways to add leads to the top of the funnel, whilst staying away from the overused free PDF guides, etc. The content builder is very easy to use, but extremely powerful. The scoring logic is really useful, especially the "if most answers are A, give the outcome X". There are a number of potential integrations, including to the most popular email marketing systems. The native integration with Active Campaign was perfect for our clients. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Robert Peters</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-robertP.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-answer">Put simply - why will your audience leave - once they start interacting with an Outgrow calculator. Simply outstanding .. guys you have created an amazing engaging platform where the clients get massive value. Also 24 hrs support and simply superb. great to see a company investing in great platform but also on customer service .. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Vicky Singh</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-vickyS.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-answer">Love the easy function for building a Quiz and the ability for branding. Your new leads are coming! We have searched for this for a couple of years and now it´s here. Thanks, Outgrow! Fantastic software. Easy to use, meet needs and are enjoyable! The customer service is fast with high knowledge and flexible mindset. To fully meet our brand book, and tone of voice, there have to be more fonts. Such as Open Sans and top Google font family. Meet needs, easy to use and enjoyable! </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Joakim Thörn</span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-joakimT.png">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
								<div class="testimonial-quote"></div>
								<div class="testimonial-answer">Great product for creating quizzes, surveys with viral power. Love the calculator option, we can create powerful assessments for our clients which calculate scores, then use that score to assign an assessment or gap value. Amazingly powerful. Support is great, really great, they always answer, always help with things we are doing even when it's a weird request. Not many cons, new features show up, but it's pretty powerful now. We've had a few growing pains as we learn to create assessments and quizzes, but support has helped us through them. </div>
								<div class="testimonial-bottom">
									<div class="testimonial-bottom-left">
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
										<i class="material-icons">star_rate</i>
									</div>
									<div class="testimonial-bottom-right">
										<div class="testi-content">
											<span class="testi-desig ellipsis">Tom Lyons </span>
											<a href="javascript:void(0);" class="view-post ellipsis">View Post
												<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
											</a>
										</div>
										<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-tomL.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end static HTML of fb, capterra, g2 crowd and google -->

		<script>
			function triggerLiveStaticReviews () {
				var url = 'https://api.repuso.com/v1/widgets/posts/4406?callback=jQuery111205308389182797406_1512564953651&website_id=0&_=1512564953652';
				var live = document.querySelector('#liveReviews');
				var static = document.querySelector('#staticReviews');

				var xhr = new XMLHttpRequest;
				xhr.onreadystatechange = function () {
					console.log('Ready state changed');
					if (this.status == 200) {
						live.classList.remove('hide');
						static.classList.add('hide');
					}
					else {
						static.classList.remove('hide');
						live.classList.add('hide');
					}
				}
				xhr.open("GET", url, true);
				xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
				xhr.send();
			}

			var gridJS = document.createElement('script');
			gridJS.src = 'https://repuso.com/widgets/grid.js';

			gridJS.onload = triggerLiveStaticReviews;

			var head = document.querySelector('head');
			head.appendChild(gridJS);

            var head = document.querySelector('head');
            head.appendChild(gridJS);

            window.calcs = [
                {
                    "id": "new-car-used-car",
                    "Name": "New Car vs Used Car",
                    "Published Link": "https://premade.outgrow.us/New-Car-vs-Used-Car",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/new+car+vs+used+car.gif",
                    "Type": "Outcome Quiz",
                    "Layout": "Chicago",
                    "Industry": "Auto",
                    "Description": "Find out whether you should buy a used card or a new one.",
                    "filters": [
                        "filter-auto",
                        "Auto"
                    ]
                },
                {
                    "id": "buy-rent",
                    "Name": "Should i buy or rent a car?",
                    "Published Link": "https://premade.outgrow.us/Buy-Or-Lease-Calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/should+you+buy+or+lease+your+next+car.gif",
                    "Type": "Outcome Quiz",
                    "Layout": "Chicago",
                    "Industry": "Auto",
                    "Tier": "",
                    "Description": "Answer 6 questions to find out whether you should buy or lease your next car.",
                    "filters": [
                        "filter-auto",
                        "Auto"
                    ]
                },
                {
                    "id": "auto-loan",
                    "Name": "Auto Loan Calculator",
                    "Published Link": "https://premade.outgrow.us/Auto-Loan-Calc",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/auto+loan+calculator.gif",
                    "Type": "Calculator",
                    "Layout": "Londoner",
                    "Industry": "Auto",
                    "Tier": "",
                    "Description": "Find out how much monthly installment you'll be paying on your auto loan.",
                    "filters": [
                        "filter-auto",
                        "Auto"
                    ]
                },
                {
                    "id": "early-payment",
                    "Name": "Early Payment Calculator",
                    "Published Link": "https://premade.outgrow.us/Early-Payment-Calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/early+payment+calculator.gif",
                    "Type": "Calculator",
                    "Layout": "Tokyo",
                    "Industry": "Auto",
                    "Tier": "",
                    "Description": "How much extra monthly payment will you need to make to shorten your car loan term?",
                    "filters": [
                        "filter-auto",
                        "Auto"
                    ]
                },
                {
                    "id": "put-down",
                    "Name": "How much should I put down?",
                    "Published Link": "https://premade.outgrow.us/Downpayment-Calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/downpayment+calculator.gif",
                    "Type": "Calculator",
                    "Layout": "Londoner",
                    "Industry": "Auto",
                    "Tier": "",
                    "Description": "Find out the downpayment amount you'll need to purchase your new home.",
                    "filters": [
                        "filter-auto",
                        "Auto"
                    ]
                },
                {
                    "id": "type-car",
                    "Name": "Which type of car is best suited to my use case?",
                    "Published Link": "http://premade.outgrow.us/what-car-should-you-go-for",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/what+kind+of+car+should+you+buy.gif",
                    "Type": "Outcome Quiz",
                    "Layout": "Chicago",
                    "Industry": "Auto",
                    "Tier": "",
                    "Description": "Find out which car suits you the best.",
                    "filters": [
                        "filter-auto",
                        "Auto"
                    ]
                },
                {
                    "id": "ivy-league",
                    "Name": "Which Ivy League is best for me?",
                    "Published Link": "https://premade.outgrow.us/which-ivy-league-is-best-for-you",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/which+ivy+league+is+best+for+you.gif",
                    "Type": "Outcome Quiz",
                    "Layout": "Chicago",
                    "Industry": "Education",
                    "Tier": "",
                    "Description": "Answer 9 simple questions to find out which Ivy League college is best for you.",
                    "filters": [
                        "filter-auto",
                        "Education"
                    ]
                },
                {
                    "id": "college-degree",
                    "Name": "Calculate the total REAL net cost of your college degree.",
                    "Published Link": "https://premade.outgrow.us/Real-NET-college-degree-cost",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+much+is+college+really+going+to+cost+you.gif",
                    "Type": "Calculator",
                    "Layout": "Madrid",
                    "Industry": "Education",
                    "Tier": "",
                    "Description": "Find out how much is college really going to cost you.",
                    "filters": [
                        "filter-auto",
                        "Education"
                    ]
                },
                {
                    "id": "budget-calc",
                    "Name": "Student Budget Calculator",
                    "Published Link": "https://premade.outgrow.us/student-budget-calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/calculate+your+student+budget.gif",
                    "Type": "Calculator",
                    "Layout": "Madrid",
                    "Industry": "Education",
                    "Tier": "",
                    "Description": "Use this calculator to calculate your budget as a full-time student.",
                    "filters": [
                        "filter-auto",
                        "Education"
                    ]
                },
                {
                    "id": "harvard",
                    "Name": "What is a good enough score to get into Harvard with your background?",
                    "Published Link": "https://premade.outgrow.us/Harvard-Minimum-Score-Calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/chances+of+getting+into+harvard.gif",
                    "Type": "Calculator",
                    "Layout": "Greek",
                    "Industry": "Education",
                    "Tier": "",
                    "Description": "Find out if your SAT or ACT scores are good enough to land you in Harvard.",
                    "filters": [
                        "filter-auto",
                        "Education"
                    ]
                },
                {
                    "id": "major-study",
                    "Name": "Which major should I study?",
                    "Published Link": "https://premade.outgrow.us/What-major-should-i-study",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/what+major.gif",
                    "Type": "Outcome Quiz",
                    "Layout": "Stockholm",
                    "Industry": "Education",
                    "Tier": "",
                    "Description": "Find out which major should you study.",
                    "filters": [
                        "filter-auto",
                        "Education"
                    ]
                },
                {
                    "id": "mortgage",
                    "Name": "The quintessential mortage calculator!",
                    "Published Link": "https://premade.outgrow.us/Copy-of-The-quintessential-mortgage-calculator-1",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/mortgage+calculator.gif",
                    "Type": "Calculator",
                    "Layout": "Londoner",
                    "Industry": "Finance",
                    "Tier": "",
                    "Description": "Calculate your monthly mortgage payment.",
                    "filters": [
                        "filter-auto",
                        "Finance"
                    ]
                },
                {
                    "id": "home-budget",
                    "Name": "Home Budget Calculator",
                    "Published Link": "https://premade.outgrow.us/Home-Budget-Calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/calculate+your+monthly+home+budget.gif",
                    "Type": "Calculator",
                    "Layout": "Tokyo",
                    "Industry": "Finance",
                    "Tier": "",
                    "Description": "Calculate your monthly home budget and find how much you are saving each month.",
                    "filters": [
                        "filter-auto",
                        "Finance"
                    ]
                },
                {
                    "id": "retire",
                    "Name": "How much do you need to retire?",
                    "Published Link": "https://premade.outgrow.us/How-much-do-you-need-to-retire",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+much+do+you+need+to+retire.gif",
                    "Type": "Calculator",
                    "Layout": "Tokyo",
                    "Industry": "Finance",
                    "Tier": "",
                    "Description": "How much money do you need if you want to retire?",
                    "filters": [
                        "filter-auto",
                        "Finance"
                    ]
                },
                {
                    "id": "save-million",
                    "Name": "SAVE A MILLION DOLLARS CALCULATOR",
                    "Published Link": "https://premade.outgrow.us/When-can-you-become-a-millionaire",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/when+can+you+become+a+millionaire.gif",
                    "Type": "Calculator",
                    "Layout": "Tokyo",
                    "Industry": "Finance",
                    "Tier": "",
                    "Description": "Find out when you will become a millionaire!",
                    "filters": [
                        "filter-auto",
                        "Finance"
                    ]
                },
                {
                    "id": "savings-goal",
                    "Name": "Savings goal calculator",
                    "Published Link": "https://premade.outgrow.us/Saving-goal-calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/savings+goal+calculator.gif",
                    "Type": "Calculator",
                    "Layout": "Londoner",
                    "Industry": "Finance",
                    "Tier": "",
                    "Description": "Set your savings goal today and find out how much you need to invest every month to achieve that goal.",
                    "filters": [
                        "filter-auto",
                        "Finance"
                    ]
                },
                {
                    "id": "balance-retirement",
                    "Name": "What will be my 401(k) balance at retirement?",
                    "Published Link": "https://premade.outgrow.us/401k-calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/what+will+be+my+401k+balance+at+retirement.gif",
                    "Type": "Calculator",
                    "Layout": "Seattle",
                    "Industry": "Finance",
                    "Tier": "",
                    "Description": "Find out how much balance will you have in your 401(k) at retirement.",
                    "filters": [
                        "filter-auto",
                        "Finance"
                    ]
                },
                {
                    "id": "credit-card",
                    "Name": "How long will it take to pay off my credit card?",
                    "Published Link": "https://premade.outgrow.us/credit-card-pay-off-calc",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+long+will+it+take+to+payoff+my+credit+card.gif",
                    "Type": "Calculator",
                    "Layout": "Seattle",
                    "Industry": "Finance",
                    "Tier": "",
                    "Description": "Find out how long will you take to payoff your credit card.",
                    "filters": [
                        "filter-auto",
                        "Finance"
                    ]
                },
                {
                    "id": "digital",
                    "Name": "What is your digital quotient?",
                    "Published Link": "https://premade.outgrow.us/digital-quotient-quiz",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/find+out+your+digital+quotient.gif",
                    "Type": "Graded Quiz",
                    "Layout": "Stockholm",
                    "Industry": "marketing-advertising",
                    "Tier": "",
                    "Description": "Find out your Digital Quotient.",
                    "filters": [
                        "filter-auto",
                        "marketing-advertising"
                    ]
                },
                {
                    "id": "seo-quiz",
                    "Name": "Find out where you stand amongst 5000 marketers on this SEO quiz!",
                    "Published Link": "https://premade.outgrow.us/grade_your_seo_knowledge",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/SEO+knowledge+quiz.gif",
                    "Type": "Graded Quiz",
                    "Layout": "Stockholm",
                    "Industry": "marketing-advertising",
                    "Tier": "",
                    "Description": "Find out if your SEO knowledge stacks up against top the 150 marketers with this 12-question SEO quiz.",
                    "filters": [
                        "filter-auto",
                        "marketing-advertising"
                    ]
                },
                {
                    "id": "expert",
                    "Name": "Calculate how much hiring an expert consultant will save you versus running PPC in house.",
                    "Published Link": "https://premade.outgrow.us/ppc-agency-vs-inhouse-calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/PPC+vs+in-house.gif",
                    "Type": "Calculator",
                    "Layout": "Chicago",
                    "Industry": "marketing-advertising",
                    "Tier": "",
                    "Description": "Find out whether you should go for a PPC agency or build an in-house team.",
                    "filters": [
                        "filter-auto",
                        "marketing-advertising"
                    ]
                },
                {
                    "id": "facebook-marketing",
                    "Name": "You think you are a Facebook Marketing expert? Take this quiz to really find out!",
                    "Published Link": "https://premade.outgrow.us/facebook-marketing-expert-quiz",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/are+you+really+a+facebook+marketing+expert.gif",
                    "Type": "Graded Quiz",
                    "Layout": "Stockholm",
                    "Industry": "marketing-advertising",
                    "Tier": "",
                    "Description": "Take this quiz to find out if you are a Facebook Marketing Expert.",
                    "filters": [
                        "filter-auto",
                        "marketing-advertising"
                    ]
                },
                {
                    "id": "paid-advertsing",
                    "Name": "How much should you spend on paid advertising?",
                    "Published Link": "https://premade.outgrow.us/how-much-should-you-spend-on-paid-advertising",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+much+should+you+spend+on+paid+advertising.gif",
                    "Type": "Calculator",
                    "Layout": "Tokyo",
                    "Industry": "marketing-advertising",
                    "Tier": "",
                    "Description": "Find out how much you should spend on Paid Advertising.",
                    "filters": [
                        "filter-auto",
                        "marketing-advertising"
                    ]
                },
                {
                    "id": "roi-marketing",
                    "Name": "ROI of your Marketing Strategy",
                    "Published Link": "https://premade.outgrow.us/ROI-of-your-Email-Marketing-Strategy",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/roi+of+your+email+marketing+strategy.gif",
                    "Type": "Calculator",
                    "Layout": "Londoner",
                    "Industry": "marketing-advertising",
                    "Tier": "",
                    "Description": "Estimate the ROI of your current email marketing strategy.",
                    "filters": [
                        "filter-auto",
                        "marketing-advertising"
                    ]
                },
                {
                    "id": "blogging-frequency",
                    "Name": "Blogging Frequency Calculator",
                    "Published Link": "https://premade.outgrow.us/blogging-frequency-calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+often+should+you+blog.gif",
                    "Type": "Calculator",
                    "Layout": "Chicago",
                    "Industry": "marketing-advertising",
                    "Tier": "",
                    "Description": "Find out how often you should be blogging and how much you stand to gain from it.",
                    "filters": [
                        "filter-auto",
                        "marketing-advertising"
                    ]
                },
                {
                    "id": "high-roi",
                    "Name": "Check how high of a ROI you can get with Outgrow!",
                    "Published Link": "https://premade.outgrow.us/roi-of-using-outgrow",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/roi+of+using+outgrow.gif",
                    "Type": "Calculator",
                    "Layout": "Londoner",
                    "Industry": "Quintessential",
                    "Tier": "",
                    "Description": "Estimate the ROI you will get from using Outgrow.",
                    "filters": [
                        "filter-auto",
                        "Quintessential"
                    ]
                },
                {
                    "id": "resale-value-property",
                    "Name": "Find out the resale value of your property",
                    "Published Link": "https://premade.outgrow.us/how-much-will-you-make-by-selling-your-property",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+much+will+you+make+from+selling+your+property.gif",
                    "Type": "Calculator",
                    "Layout": "Stockholm",
                    "Industry": "construction",
                    "Tier": "",
                    "Description": "Enter some details about your property and find out how much you will make by selling it.",
                    "filters": [
                        "filter-auto",
                        "construction"
                    ]
                },
                {
                    "id": "build-pool",
                    "Name": "How much does it cost to build a pool?",
                    "Published Link": "https://premade.outgrow.us/cost-of-building-a-pool",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/cost+of+building+a+pool.gif",
                    "Type": "Calculator",
                    "Layout": "Chicago",
                    "Industry": "construction",
                    "Tier": "",
                    "Description": "Find out how much you will need to shell out for your dream pool.",
                    "filters": [
                        "filter-auto",
                        "construction"
                    ]
                },
                {
                    "id": "buy-or-rent",
                    "Name": "Should I buy or rent?",
                    "Published Link": "https://premade.outgrow.us/should-i-buy-or-rent",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/Buy+Or+Rent.gif",
                    "Type": "Outcome Quiz",
                    "Layout": "Stockholm",
                    "Industry": "construction",
                    "Tier": "",
                    "Description": "Find out if you should buy or rent your next accomodation.",
                    "filters": [
                        "filter-auto",
                        "construction"
                    ]
                },
                {
                    "id": "house-afford",
                    "Name": "How much house can I afford?",
                    "Published Link": "https://premade.outgrow.us/how-much-house-can-I-afford",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+much+house+can+i+afford.gif",
                    "Type": "Calculator",
                    "Layout": "Greek",
                    "Industry": "construction",
                    "Tier": "",
                    "Description": "Enter your details to find out the house value that fits within your budget.",
                    "filters": [
                        "filter-auto",
                        "construction"
                    ]
                },
                {
                    "id": "buying-home",
                    "Name": "See how much it would cost you to rent instead of buying a home.",
                    "Published Link": "https://premade.outgrow.us/renting-vs-buying-cost-calculator",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/buying+vs+renting+calculator.gif",
                    "Type": "Calculator",
                    "Layout": "Madrid",
                    "Industry": "construction",
                    "Tier": "",
                    "Description": "See how much it would cost you to rent instead of buying a house.",
                    "filters": [
                        "filter-auto",
                        "construction"
                    ]
                },
                {
                    "id": "real-estate",
                    "Name": "You shouldn't buy real estate unless you pass this ultimate buyer quiz!",
                    "Published Link": "https://premade.outgrow.us/ultimate-buyer-quiz",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/real+estate+buying+quiz.gif",
                    "Type": "Graded Quiz",
                    "Layout": "Chicago",
                    "Industry": "construction",
                    "Tier": "",
                    "Description": "Take this quiz to find out if you are ready to buy a house.",
                    "filters": [
                        "filter-auto",
                        "construction"
                    ]
                },
                {
                    "id": "saas",
                    "Name": "Are you leveraging SaaS right? Calculate the efficacy of your tech dollars.",
                    "Published Link": "https://premade.outgrow.us/Health-SaaS-metrics",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+healthy+is+your+saas+business.gif",
                    "Type": "Calculator",
                    "Layout": "Madrid",
                    "Industry": "Technology",
                    "Tier": "",
                    "Description": "Find out if your SaaS business is in a healthy condition.",
                    "filters": [
                        "filter-auto",
                        "Technology"
                    ]
                },
                {
                    "id": "calculate-efficiency",
                    "Name": "Calculate how much efficiency you stand to gain by shifting to an automated payroll solution.",
                    "Published Link": "https://premade.outgrow.us/savings-from-Payroll-System",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+much+can+your+company+save+with+payroll+system.gif",
                    "Type": "Calculator",
                    "Layout": "Stockholm",
                    "Industry": "Technology",
                    "Tier": "",
                    "Description": "Find out how much your company can save with a payroll system.",
                    "filters": [
                        "filter-auto",
                        "Technology"
                    ]
                },
                {
                    "id": "build-app",
                    "Name": "How much to build an app?",
                    "Published Link": "https://premade.outgrow.us/How-much-to-build-an-app1",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/how+much+to+build+an+app.gif",
                    "Type": "Calculator",
                    "Layout": "Madrid",
                    "Industry": "Technology",
                    "Tier": "",
                    "Description": "Get an estimate of how much you will need to build the app that you want.",
                    "filters": [
                        "filter-auto",
                        "Technology"
                    ]
                },
                {
                    "id": "friends-character",
                    "Name": "Which Friends character are you?",
                    "Published Link": "https://premade.outgrow.us/which-friends-character-are-you",
                    "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/which+friends+character+are+you.gif",
                    "Type": "Outcome Quiz",
                    "Layout": "Chicago",
                    "Industry": "Entertainment",
                    "Tier": "",
                    "Description": "Find out which Friends character are you most like.",
                    "filters": [
                        "filter-auto",
                        "Entertainment"
                    ]
                }
            ]

            window.onload = function () {
                setPremade();
                shuffleCalcs('Auto');

            }
		</script> 

	</section>

	<section class="section section-bg-btn section-bg-btn-sales">
		<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
			<a href="https://app.outgrow.co/signup?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" class="params trialLOL">
				<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn btn-white-new">Make more sales with Outgrow <i class="material-icons">arrow_forward</i></button>
			</a>
		</div>		
	</section>

	<section class="section section-six section-six-survey">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-10 col-sm-12 col-xs-12 np">
					<div class="section-heading">Guide: Generate a New Revenue Stream with Interactive Content Marketing </div>
					<img class="rs-show" src="https://dzvexx2x036l1.cloudfront.net/lp-section-six-img_increase-sales.png" alt="Interactive Content Marketing for Digital Agencies"> 
					<ul>
						<li><i class="material-icons">keyboard_arrow_right</i> <span>Why Agencies Should Offer Interactive Content. </span> </li>
						<li><i class="material-icons">keyboard_arrow_right</i> <span>How Companies like New York Times and Buzzfeed are Crushing it with Interactive Content. </span> </li>
						<li><i class="material-icons">keyboard_arrow_right</i> <span>How to Pitch Interactive Content Marketing to Clients with Ready-to-Use Sales Email Templates, Case Studies, Decks & More. </span></li>
					</ul>
					<a href="https://get.outgrow.co/interactive-content-marketing-for-digital-agencies/?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" class=""  target="_blank">
						<button class="btn btn-red-new">Learn More <i class="material-icons">arrow_forward</i></button>
					</a>
				</div>
				<img class="rs-hide" src="https://dzvexx2x036l1.cloudfront.net/lp-section-six-img_increase-sales.png" alt="Interactive Content Marketing for Digital Agencies"> 
			</div>
		</div>
	</section>

	<section class="section section-reading">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="section-heading text-center">Related Reading </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading1_increase-sales.png" alt="5 Signs You’re Being Too ‘Salesy"> 
					</div>
					<div class="col-md-12 np reading-content">
						<h4>5 Signs You’re Being Too ‘Salesy’ and How to Sell Better </h4>
						<p>As a salesperson, you may not realize when you cross the thin line between selling and pushing your product/service into the prospect’s face. This post talks about how to avoid being too salesy. </p>
						<a href="https://outgrow.co/blog/how-to-sell-better/?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading2_increase_sales.png" alt="Value Based Selling"> 
					</div>
					<div class="col-md-12 np reading-content">
						<h4>Value Based Selling: How to Sell by Not Selling </h4>
						<p>How do you inform a prospect about your product, gauge their interest, and finally close the sale, if not through the traditional sales pitch? Find out how. </p>
						<a href="https://outgrow.co/blog/value-based-selling/?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading3_increase_sales.png" alt="How Macroscape Helped Its Client get a 36% Conversion Rate"> 
					</div>
					<div class="col-md-12 np reading-content">
						<h4>[Case Study] How Macroscape Helped Its Client Get a 36% Conversion Rate </h4>
						<p>Find out how a marketing consulting firm helped one of its clients clock 36% conversion rate using a quiz. </p>
						<a href="https://outgrow.co/blog/macroscape-interactive-marketing-success-story?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-quotes section-quotes_increase-sales">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 np section-quotes-border">
				<blockquote>If you are currently generating leads using other products, you will see a slight dip in the volume of leads you gain but, a significantly higher yield in the quality of the leads. All in all, you would much rather call 10 and make 8 sales rather than calling 100 to make the same 8 sales. It's a winner. </blockquote>
				<span>- Charles Dohs, Marketing Coordinator - Digital, Commerce Home Mortgage </span>
			</div>
		</div>
	</section>

	<section class="section section-btn">
		<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
			<span>Plans start at $25 per month. No credit card required. </span>
			<a href="https://app.outgrow.co/signup?utm_source=website&utm_medium=link&utm_campaign=outgrow_sales_page" class="params trialLOL">
				<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn btn-red-new">Start your Free Trial! <i class="material-icons">arrow_forward</i></button>
			</a>
		</div>		
	</section>

	<!-- end: landing page HTML  -->

@endsection

@section('inlinescripts')
@endsection


@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"index": "{{ $page->baseUrl }}/js/pageScripts/index.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
	}
@endsection
