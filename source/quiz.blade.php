@extends('_layouts.lp')

@section('title', 'Interactive Quizzes | Outgrow')

@section('metaDescription')
	<meta name="description" content="Generate more leads and traffic with Outgrow’s interactive quiz builder. Create your first interactive quiz. Start your free trial."/>
	<link rel="canonical" href="http://outgrow.co/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Interactive Calculators | Outgrow" />
	<meta property="og:description" content="Generate more leads and traffic with Outgrow’s interactive quiz builder. Create your first interactive quiz. Start your free trial." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Generate more leads and traffic with Outgrow’s interactive quiz builder. Create your first interactive quiz. Start your free trial." />
	<meta name="twitter:title" content="Interactive Calculators | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/navbar.css">
	<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')

	<!-- <div class="header-logo">
		<a href="https://outgrow.co/?utm_source=website&utm_medium=logo&utm_campaign=outgrow_quiz_page" class="" target="_blank">
			<img src="https://dzvexx2x036l1.cloudfront.net/lp-header-logo.png" alt="lp-header-logo image">
		</a>
	</div> -->

	<!-- start: landing page HTML  -->
	<section class="section section-banner section-banner-quiz">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center">
				<h1 class="main-heading">Generate More Leads And Traffic With Outgrow’s Interactive Quiz Builder</h1>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 banner-inner">
				<div class="col-md-8 col-sm-7 col-xs-12 banner-jacket">
					<img src="https://dzvexx2x036l1.cloudfront.net/banner_img_quiz.png" alt="Outgrow's Interactive Quiz Builder">
				</div>
				<div class="col-md-4 col-sm-5 col-xs-12 np banner-content">
					<p>“I like how you can customize each part of the quiz specific to the needs of each quiz. The user interface is super simple to set up, which makes this easy to create and deploy." </p>
					<span class="profile-detail">Nathan Windsor, Founder, Macroscape</span>
					<div class="company-detail">
						Macroscape helped one of its clients get a conversion rate of 36% with an interactive quiz
					</div>
					<!-- <a href="https://app.outgrow.co/signup?utm_source=website&utm_medium=CTA&utm_campaign=outgrow_quiz_page">
						<button type="button" class="btn btn-white-new">Create Your First Interactive Quiz <i class="material-icons">arrow_forward</i></button>
					</a> -->
					<div class="startTrial-outer">
						<label>Create Your First Interactive Quiz </label>
						<i class="material-icons">email</i>
						<input class="lead-form-email1" name="emailId" type="email" placeholder="Enter your email ID">
						<span class="lead-form-btn">
							<a href="//app.outgrow.co/signup/?email=" class="lead-email1 btn-buildcal" onclick="callGA('CANNOT WAIT CTA'); ">
								Start Free Trial
							</a>				
						</span>
					</div>
					<script src="{{ $page->baseUrl }}/js/pageScripts/index.js"></script>
					<script src="{{ $page->baseUrl }}/js/pageScripts/lead-form.js"></script>
				</div>
			</div>
		</div>
	</section>
	<script>
			document.getElementsByClassName('lead-form-email1')[0].onchange = function (e) {
							let email = e.target.value;
							let href = "//app.outgrow.co/?email=";
							document.getElementsByClassName('lead-email1')[0].href = href + email;
						}
			document.getElementsByClassName('lead-form-email1')[0].onkeypress = function (e) {
							let email = e.target.value;
							let href = "//app.outgrow.co/?email=";
							if (e.keyCode == 13) {
								window.location.href = href+email;
							}
						}
			</script>
	<section class="section section-second">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-heading">Easily Build Interactive Quizzes With Outgrow’s Intuitive, User-Friendly Platform </div>
				<img class="rs-show" src="https://dzvexx2x036l1.cloudfront.net/lp-section-second-img.png" alt="lp-section-second-img image">
				<ul>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Interactive quizzes such as personality quizzes and BuzzFeed-style quizzes generate loads of traffic and leads for your business </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Outgrow’s powerful quiz builder helps you create engaging, immersive quizzes without any design and coding help </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Choose from a selection of sophisticated design templates which have been designed to make your quiz look like a million bucks </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Don’t have time to design a quiz from scratch? We have a variety of pre-made quizzes waiting for you inside the app </span> </li>
					<li><i class="material-icons">keyboard_arrow_right</i> <span>Our amazing support team is on call 24/7 to make sure that your quiz gets published without a hitch </span> </li>
				</ul>
				<img class="rs-hide" src="https://dzvexx2x036l1.cloudfront.net/lp-section-second-img.png" alt="lp-section-second-img image">
			</div>
		</div>
	</section>

	<section class="section section-premade-temp">
		<div class="container-fluid">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-heading text-center">Examples Of Quizzes You Can Make With Outgrow </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 section-premade-temp-inner">
				<div id="premade-loader-new" class="preloader">
					<div class="white-wrapper">
						<div class="status">&nbsp;</div>
					</div>
				</div>
				<div class="premade-template-new hide">
					<div class="search-input">
						<!-- <h4>Select Your Industry</h4> -->
						<div class="input-group">
							<i class="material-icons">search</i>
							<input type="text" name="search" id="search-experience" oninput="filterList()" onkeyup = "searchList(event)" placeholder="Search Experiences by Keyword">
						</div>
						<div class="no-search hide">
							<i class="material-icons">error</i> You can see some generic examples below and you can reach out to us <a href="javascript:void(0);" id="intercom_trigger" class="intercom_trigger">here</a> for more specific examples or any other questions. 
						</div>
					</div>
					<div class="premade-template-left">

						<ul class="pre-temp-cat pre-temp-cat-new" id="calc-cats">
							{{-- <li class="active">
								<a href="javascript:void(0)" id="Auto" onclick="shuffleCalcs('Auto')">Auto</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Education" onclick="shuffleCalcs('Education')">Education</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Finance" onclick="shuffleCalcs('Finance')">Finance</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="MarketingAdvertising"
								onclick="shuffleCalcs('MarketingAdvertising')">Marketing & Advertising</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="HealthFitness"
								onclick="shuffleCalcs('HealthFitness')">Health & Fitness</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Legal"
								onclick="shuffleCalcs('Legal')">Legal</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Quintessential"
								onclick="shuffleCalcs('Quintessential')">Quintessential</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="RealEstateConstruction"
								onclick="shuffleCalcs('RealEstateConstruction')">Real Estate &
									Construction</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Funnels" onclick="shuffleCalcs('Funnels')">
								Funnels
								</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Trending" onclick="shuffleCalcs('Trending')">
								Trending
								</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Technology"
								onclick="shuffleCalcs('Technology')">Technology</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Travel"
								onclick="shuffleCalcs('Travel')">Travel</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="Publishing"
								onclick="shuffleCalcs('Publishing')">Publishing</a>
							</li>
							<li>
								<a href="javascript:void(0)" id="TVandEntertainment"
								onclick="shuffleCalcs('TVandEntertainment')">TV and Entertainment</a>
							</li> --}}
						</ul>
						<div class="form-group col-xs-12 np">
							<div class="selectize selectize-wrapper">
								<select id="select-list" placeholder="Select List">
									<option value="Auto">Auto</option>
									<option value="Education">Education</option>
									<option value="Education">Education</option>
									<option value="HealthFitness">Health & Fitness</option>
									<option value="Quintessential">Quintessential</option>
									<option value="RealEstateConstruction">Real Estate & Construction</option>
									<option value="MarketingAdvertising">Technology</option>
									<option value="Publishing">Publishing</option>
									<option value="Travel">Travel</option>
									<option value="TVandEntertainment">TV and Entertainment</option>
									<option value="Trending">Trending</option>

								</select>
							</div>
						</div>
					</div>
					<div class="pre-temp-cont pre-temp-cont-new"> 
						<ul class="pre-temp-list" id="gallery-content-center">

							<!-- <li class="active filter-all filter-auto" id="calc-auto-loan">
								<a href="javascript:void(0)" onclick="markAsActive('calc-auto-loan')">Auto Loan Calculator</a>
							</li>
							<li class="All Financia filter-all filter-auto" id="calc-early-payment">
								<a href="javascript:void(0)" onclick="markAsActive('calc-early-payment')">Early Payment Calculator</a>
							</li>
							<li class="All Math filter-all filter-auto" id="calc-downpayment">
								<a href="javascript:void(0)" onclick="markAsActive('calc-downpayment')">How much should I put down?</a>
							</li>
							<li class="All Others filter-all filter-education" id="calc-student-budget"> 
								<a href="javascript:void(0)" onclick="markAsActive('calc-student-budget')">Student Budget Calculator</a>
							</li>
							<li class="All Math filter-all filter-education" id="calc-harward-score">
								<a href="javascript:void(0)" onclick="markAsActive('calc-harward-score')">What is a good enough score to get into Harvard with your background?</a>
							</li>
							<li class="All Math filter-all filter-finance" id="calc-home-budget">
								<a href="javascript:void(0)" onclick="markAsActive('calc-home-budget')">Home Budget Calculator</a>
							</li>
							<li class="All Others filter-all filter-health" id="calc-weight-loss">
								<a href="javascript:void(0)" onclick="markAsActive('calc-weight-loss')">Weight Loss Calculator</a>
							</li>
							<li class="All Financial filter-all filter-publishing" id="calc-trump-plan">
								<a href="javascript:void(0)" onclick="markAsActive('calc-trump-plan')">How will Trump's tax plan affect you?</a>
							</li> -->
						</ul>
						<div class="pre-temp-view">
							<!-- <div class="tag-exp"><i class="material-icons">star_rate</i><span class="tag-exp-text"> Customisable for the Auto Industry</span></div> -->
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
									<a class="btn btn-red btn-hover" href="//app.outgrow.co/signup">Build your own</a>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="no-match-found hide">
						<div class="no-match-found-inner"><i class="material-icons">warning</i>No Matches found!</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>

	<section class="section section-embeds">
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 hide" id="liveReviews">
			<div class="container mobile-container">
				<div class="section-2-heading" style="color: rgb(34, 34, 34);">
					Average Rating 4.9/5 <br/> 500+ Reviews
				</div>
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

			<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1">
				<div class="container mobile-container protfolio-section">

					<div id="fb" class="protfolio-inner-section" data-repuso-grid="4406" data-website-id="0"></div>

					<div id="capterra" class="protfolio-inner-section testhide" data-repuso-grid="4407" data-website-id="0"></div>

					<div id="g2" class="protfolio-inner-section testhide" data-repuso-grid="4320" data-website-id="0"></div>

					<div id="google" class="protfolio-inner-section testhide" data-repuso-grid="5402" data-website-id="0"></div>
				</div>
			</div>
		</div>

		<!-- start static HTML of fb, capterra, g2 crowd and google -->
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np custom-embeds" id="staticReviews">
			<div class="container mobile-container">
				<div class="section-2-heading" style="color: rgb(34, 34, 34);">
					Average Rating 4.9/5 <br/>500+ Reviews
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
			 function getTemplateName(template) {
				let templates = [{
					id: 'template-eight',
					text: 'The Venice'
				},
				{
					id: 'template-seven',
					text: 'The Seattle'
				}, {
					id: 'one-page-card-new',
					text: 'The Chicago'
				},
				{
					id: 'sound-cloud-v3',
					text: 'The Londoner'
				}, {
					id: 'inline-temp-new',
					text: 'The Greek'
				},
				{
					id: 'experian',
					text: 'The Tokyo'
				}, {
					id: 'template-five',
					text: 'The Madrid'
				},
				{
					id: 'template-six',
					text: 'The Stockholm'
				}
				];
				return templates.find(t => t.id.includes(template));
			}
			function getCalcType(type) {
				if (type === 'Calculator') {
					return 'CALC';
				} else if (type === 'Poll') {
					return 'POLL';
				} else if (type.toLowerCase().includes('graded')) {
					return 'TEST';
				} else if (type.toLowerCase().includes('outcome')) {
					return 'QUIZ';
				} else if (type.toLowerCase().includes('com')) {
					return 'ECOM'
				} else if (type.toLowerCase().includes('bot')) {
					return 'CHATBOT'
				}
			}
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
            // window.calcs = [
            //     {
            //         "id": "used-car-new-car",
            //         "Name": "New Car vs Used Car",
            //         "Published Link": "https://premade.outgrow.us/New-Car-vs-Used-Car",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/new+car+vs+used+car.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Auto",
            //         "Description": "Find out whether you should buy a used card or a new one.",
            //         "filters": [
            //             "filter-auto",
            //             "Auto"
            //         ]
            //     },
            //     {
            //         "id": "car-rent-buy",
            //         "Name": "Should i buy or rent a car?",
            //         "Published Link": "https://premade.outgrow.us/Buy-Or-Lease-Calculator",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/should+you+buy+or+lease+your+next+car.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Auto",
            //         "Description": "Answer 6 questions to find out whether you should buy or lease your next car.",
            //         "filters": [
            //             "filter-auto",
            //             "Auto"
            //         ]
            //     },
            //     {
            //         "id": "type-car",
            //         "Name": "Which type of car is best suited to my use case?",
            //         "Published Link": "http://premade.outgrow.us/what-car-should-you-go-for",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/what+kind+of+car+should+you+buy.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Auto",
            //         "Description": "Find out which car suits you the best.",
            //         "filters": [
            //             "filter-auto",
            //             "Auto"
            //         ]
            //     },
            //     {
            //         "id": "ivy-league",
            //         "Name": "Which Ivy League is best for me?",
            //         "Published Link": "https://premade.outgrow.us/which-ivy-league-is-best-for-you",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/which+ivy+league+is+best+for+you.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Education",
            //         "Description": "Answer 9 simple questions to find out which Ivy League college is best for you.",
            //         "filters": [
            //             "filter-auto",
            //             "Education"
            //         ]
            //     },
            //     {
            //         "id": "study-major",
            //         "Name": "Which major should I study?",
            //         "Published Link": "https://premade.outgrow.us/What-major-should-i-study",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/what+major.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Stockholm",
            //         "Industry": "Education",
            //         "Description": "Find out which major should you study.",
            //         "filters": [
            //             "filter-auto",
            //             "Education"
            //         ]
            //     },
            //     {
            //         "id": "sport-right",
            //         "Name": "Which sport is right for my fitness goals?",
            //         "Published Link": "https://premade.outgrow.us/sport-quiz",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/Sports+quiz.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Stockholm",
            //         "Industry": "health-fitness",
            //         "Description": "Find out which sport will be best suited for you.",
            //         "filters": [
            //             "filter-auto",
            //             "health-fitness"
            //         ]
            //     },
            //     {
            //         "id": "yoga-right",
            //         "Name": "Which type of Yoga is right for me?",
            //         "Published Link": "https://premade.outgrow.us/yoga",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/which+type+of+yoga+is+right+for+me.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "health-fitness",
            //         "Description": "Find out which yoga practice will deliver the results you want and is best suited for your physical condition",
            //         "filters": [
            //             "filter-auto",
            //             "health-fitness"
            //         ]
            //     },
            //     {
            //         "id": "rent-buy",
            //         "Name": "Should I buy or rent?",
            //         "Published Link": "https://premade.outgrow.us/should-i-buy-or-rent",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/Buy+Or+Rent.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Stockholm",
            //         "Industry": "construction",
            //         "Description": "Find out if you should buy or rent your next accomodation.",
            //         "filters": [
            //             "filter-auto",
            //             "construction"
            //         ]
            //     },
            //     {
            //         "id": "summer-quiz",
            //         "Name": "The ultimate summer destination quiz!",
            //         "Published Link": "https://premade.outgrow.us/ultimate-summer-destination-quiz",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/ultimate+summer+destination+quiz.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Travel",
            //         "Description": "Find out which summer destination should you be heading out to.",
            //         "filters": [
            //             "filter-auto",
            //             "Travel"
            //         ]
            //     },
            //     {
            //         "id": "friends-character",
            //         "Name": "Which Friends character are you?",
            //         "Published Link": "https://premade.outgrow.us/which-friends-character-are-you",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/which+friends+character+are+you.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Entertainment",
            //         "Description": "Find out which Friends character are you most like.",
            //         "filters": [
            //             "filter-auto",
            //             "Entertainment"
            //         ]
            //     },
            //     {
            //         "id": "olympic-controversy",
            //         "Name": "Which 2018 Winter Olympics Controversy Are You?",
            //         "Published Link": "https://premade.outgrow.us/premade-839",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/Which+2018+Winter+Olympics+Controversy+Are+You.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Trending",
            //         "Description": "The 2018 Winter Olympics has been in the storm of controversies. Find out which one would you be!",
            //         "filters": [
            //             "filter-auto",
            //             "Trending"
            //         ]
            //     },
            //     {
            //         "id": "destination-quiz",
            //         "Name": "The Ultimate Expat Destination Quiz",
            //         "Published Link": "https://premade.outgrow.us/premade-838",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/The+Ultimate+Expat+Destination+Quiz.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Trending",
            //         "Description": "Find out the expat destination most suitable for you!",
            //         "filters": [
            //             "filter-auto",
            //             "Trending"
            //         ]
            //     },
            //     {
            //         "id": "oscar-nominee",
            //         "Name": "Which Oscar Best Picture Nominee are you?",
            //         "Published Link": "https://premade.outgrow.us/premade-842",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/Which+Oscar+Best+Picture+Nominee+are+you.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Trending",
            //         "Description": "There are 9 Best Picture nominations this year. Find out which of them are you likely to be!",
            //         "filters": [
            //             "filter-auto",
            //             "Trending"
            //         ]
            //     },
            //     {
            //         "id": "chinese-flower",
            //         "Name": "Find out your Chinese New Year Flower",
            //         "Published Link": "https://premade.outgrow.us/premade-847",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/Find+out+your+Chinese+New+Year+Flower.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Chicago",
            //         "Industry": "Trending",
            //         "Tier": "",
            //         "Description": "The Lunar New Year celebrations involve a lot of floral decorations. Find out which one suits you the best. ",
            //         "filters": [
            //             "filter-auto",
            //             "Trending"
            //         ]
            //     },
            //     {
            //         "id": "black-panther",
            //         "Name": "Are you as Posh as Black Panther?",
            //         "Published Link": "https://premade.outgrow.us/premade-873",
            //         "GIF": "https://dzvexx2x036l1.cloudfront.net/calc_images/Are+you+as+Posh+as+Black+Panther.gif",
            //         "Type": "Outcome Quiz",
            //         "Layout": "Stockholm",
            //         "Industry": "Trending",
            //         "Description": "Find out how posh you are compared to one of the wealthiest fictional characters of all time.",
            //         "filters": [
            //             "filter-auto",
            //             "Trending"
            //         ]
            //     }
            // ];

            window.onload = function () {
				let http = new XMLHttpRequest();
				let url1 = 'https://api.outgrow.co/api/v1/admin/getCalculators';
				http.open("POST", url1, true);

				http.onreadystatechange = function () {
					if (http.readyState === 4 && http.status === 200) {
						let res = JSON.parse(http.responseText);
						window.calcs = res.data.calculators;
						window.calcs = window.calcs.filter(calc=>calc.type === 'Outcome Quiz')
						window.industries = res.data.industries;
						getExistingIndustries();
						let trendingC = [];
						window.events = [];
						var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
						window.calcs.forEach(calc => {
							if (calc.industry === "Trending") {
								if (trendingC.length !== 6)
									trendingC.push(calc);
							}

							calc['GIF'] = calc.media;
							calc['Industry'] = calc.industry.replace(/(\s|&)/g, '');
							calc['Name'] = calc.title;
							calc['id'] = 'id' + calc._id;
							calc['Description'] = calc.description;
							let layout = getTemplateName(calc.template);
							calc['Layout'] = layout ? layout.text : 'Stockholm';
							calc['Published Link'] = calc.liveApp.url;
							calc['filters'] = ['filter-auto', calc.Industry, calc.type.replace(/\s/g, '')];
							if (calc.launch_date !== null) {
								let launch_date = new Date(calc.launch_date);
								let day = launch_date.getUTCDate();
								let month = launch_date.getUTCMonth();
								let year = launch_date.getUTCFullYear();
								let ev = {
									Date: new Date(year, month, day),
									id: calc._id,
									Title: calc.title,
									Link: '',
									Image: calc.media ? calc.media : 'https://dzvexx2x036l1.cloudfront.net/default_premade.jpg',
									Description: calc.Description,
									EventName: calc.event_name
								};
								window.events.push(ev);
							}
							calc['type'] = getCalcType(calc['type']);
						});
						jQuery('.preloader').addClass('hide');
						jQuery('.premade-template-new').removeClass('hide')
						setPremade();
						shuffleCalcs('Auto');
					}
				};
				http.send();
            }
		</script>  

	</section>

	<section class="section section-bg-btn">
		<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
			<a href="https://app.outgrow.co/signup?utm_source=website&utm_medium=CTA&utm_campaign=outgrow_quiz_page" class="params trialLOL">
				<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn btn-white-new">Try Outgrow for Free <i class="material-icons">arrow_forward</i></button>
			</a>
		</div>
	</section>

	<section class="section section-six section-six-quiz">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-10 col-sm-12 col-xs-12 np">
					<div class="section-heading">A Creative’s Guide To Building Viral Calculators & Quizzes </div>
					<img class="rs-show" src="https://dzvexx2x036l1.cloudfront.net/lp-section-six-img.png" alt="Viral Quizzes and Calculators Guide">
					<ul>
						<li><i class="material-icons">keyboard_arrow_right</i> <span>What makes certain Quizzes and Calculators go viral. </span> </li>
						<li><i class="material-icons">keyboard_arrow_right</i> <span>Actionable tips that any marketer can follow to create viral Quizzes and Calculators that are shared like crazy! </span> </li>
						<li><i class="material-icons">keyboard_arrow_right</i> <span>How to promote your Quizzes and Calculators to increase their chances of going viral with our Promotional Checklist. </span></li>
						<a href="https://get.outgrow.co/guide-to-building-viral-quizzes-and-calculators/?utm_source=website&utm_medium=link&utm_campaign=outgrow_quiz_page" class="" target="_blank">
							<button class="btn btn-red-new">Learn More <i class="material-icons">arrow_forward</i></button>
						</a>
					</ul>
				</div>
				<img class="rs-hide" src="https://dzvexx2x036l1.cloudfront.net/lp-section-six-img.png" alt="Viral Quizzes and Calculators Guide">
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
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading1.png" alt="How to make Buzzfeed-style quizzes">
					</div>
					<div class="col-md-12 np reading-content">
						<h4>How to make Buzzfeed-style quizzes</h4>
						<p>Is there a magical formula to creating BuzzFeed's wildly popular quizzes? Of course there is and here's our guide on how to make them. </p>
						<a href="https://outgrow.co/blog/how-to-make-buzzfeed-style-quizzes?utm_source=website&utm_medium=link&utm_campaign=outgrow_quiz_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading2.png" alt="Principles of Persuasion to Make Engaging Interactive Content">
					</div>
					<div class="col-md-12 np reading-content">
						<h4>Using the Principles of Persuasion to Make Engaging Interactive Content </h4>
						<p>Find out what each principle means and learn how to apply those principles to get more results out of quizzes. </p>
						<a href="https://outgrow.co/blog/interactive-content-engagement-tips?utm_source=website&utm_medium=link&utm_campaign=outgrow_quiz_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np reading-block">
					<div class="img-scaler">
						<img src="https://dzvexx2x036l1.cloudfront.net/lp-reading3.png" alt="TAG Livros Case Study">
					</div>
					<div class="col-md-12 np reading-content">
						<h4>[Case Study] How TAG Livros Generated 55K+ Leads Within a Month </h4>
						<p>In this interactive marketing success story, find out how a book signing club, generated more than 55K leads using interactive content. </p>
						<a href="https://outgrow.co/blog/tag-livros-interactive-marketing-success-story?utm_source=website&utm_medium=link&utm_campaign=outgrow_quiz_page" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-quotes">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 np section-quotes-border">
				<blockquote><span class="quote-left1">“</span>This is the best quiz maker out there for any serious marketer who is looking for something easy, quick, and full of features. They are constantly adding more to the platform as well. <span class="quote-right1">“</span></blockquote>
				<span>- Jennifer Dean, Director of Marketing and Digital Content, <br/>Ona Connect</span>
			</div>
		</div>
	</section>

	<section class="section section-btn">
		<div class="col-md-12 col-sm-12 col-xs-12 np text-center">
			<span>Plans start at $14 per month. No credit card required. </span>
			<a href="https://app.outgrow.co/signup?utm_source=website&utm_medium=CTA&utm_campaign=outgrow_quiz_page" class="params trialLOL">
				<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn btn-red-new">Start your Free Trial! <i class="material-icons">arrow_forward</i></button>
			</a>
		</div>
	</section>

	<!-- end: landing page HTML  -->
	<script>
		let navgetinspired = document.getElementById('nav-get-inspired');
		navgetinspired.classList.add("active")
	</script>
	<script>
		function debounced(delay, fn) {
			let timerId;
			return function (...args) {
				if (timerId) {
					clearTimeout(timerId);
				}
				timerId = setTimeout(() => {
					fn(...args);
					timerId = null;
				}, delay);
			}
		}

		window.filterList = function () {
			let list = jQuery('#calc-cats').children();
			list.each(function (index) {
				jQuery(this).removeClass('active');
			});
			debounced(500, searchCalc)();
		}
		window.searchList = function (event) {
			if (event.keyCode === 13) {
				filterList();
			}
		}
		</script>
@endsection

@section('inlinescripts')
@endsection


@section('pageScripts')
	const libs = {
	"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
	"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
	"index": "{{ $page->baseUrl }}/js/pageScripts/index.js",
	"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
	"navbar": "{{ $page->baseUrl }}/js/pageScripts/navbar.js",
	"simplebar": "https://unpkg.com/simplebar@latest/dist/simplebar.js",
	}
@endsection
