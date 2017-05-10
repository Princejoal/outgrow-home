@extends('_layouts.master')

@section('title', 'Examples | Outgrow')

@section('css')
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/animations.css">
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/custom-sa.css">
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/sahil-hover.css">
	<link rel='stylesheet' href="{{ $page->baseUrl }}/css/stylesheet.min.css" type="text/css" media='all'  />
	<link rel='stylesheet' href="{{ $page->baseUrl }}/css/js_composer.mina752.css?ver=4.11.2.1" type='text/css' media='all' />
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/useCase.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/animated-masonry-gallery.css" type="text/css" />
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/useCase-responsive.css">
@endsection

@section('pageClass', 'usecase')

@section('pageId', '')

@section('content')
	<!--  top section-->
	<section class="section top-sec-example rs-hide">
		<div class="col-md-12 col-xs-12 col-sm-12 np">
			<div class="container">
				<div class="collage-outer ">
					<div class="collage-hollow repeat animated bounceIn slow go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">settings</i>
							</span>
							<div class="collage-text text-center">Services
							</div>
						</div>
					</div>
					<div class="collage-solid s-first animated bounceInUp go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">cloud_queue</i>
							</span>
							<div class="collage-text text-center">SaaS
							</div>
						</div>
					</div>
					<div class="collage-hollow h-sec animated bounceInRight go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">local_library</i>
							</span>
							<div class="collage-text text-center">Education
							</div>
						</div>
					</div>
					<div class="collage-hollow h-third animated bounceInDown go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">local_hospital</i>
							</span>
							<div class="collage-text text-center">Healthcare
							</div>
						</div>
					</div>
					<div class="collage-solid s-sec animated bounceInLeft go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">domain</i>
							</span>
							<div class="collage-text text-center">Construction
							</div>
						</div>
					</div>
					<div class="collage-solid s-third animated fadeInDown go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">airplanemode_active</i>
							</span>
							<div class="collage-text text-center">Travel & Hospitality
							</div>
						</div>
					</div>
					<div class="collage-solid s-fourth animated fadeInUp go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">monetization_on</i>
							</span>
							<div class="collage-text text-center">Finance
							</div>
						</div>
					</div>
					<div class="collage-hollow h-fourth animated growIn go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">send</i>
							</span>
							<div class="collage-text text-center">Manufacturing
							</div>
						</div>
					</div>
					<div class="collage-solid s-fifth animated fadeInDown go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">speaker_notes</i>
							</span>
							<div class="collage-text text-center">Publishing
							</div>
						</div>
					</div>
					<div class="collage-solid s-sixth animated fadeInRight go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">toys</i>
							</span>
							<div class="collage-text text-center">Real Estate & Home Furnishing
							</div>
						</div>
					</div>
					<div class="collage-hollow h-fifth animated bounceIn slow go">
						<div class="hvr-grow">
							<span class="mat-icon">
								<i class="material-icons">more_horiz</i>
							</span>
							<div class="collage-text text-center">Others
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Homepage section 7 start-->
	<section class="section section-7-top">
		<div class="container mobile-container">
			<div class="section-2-heading mk-animate-element scale-up">
				 The Outgrow Magic
			</div>
			<div class="section-2-subheading mk-animate-element scale-up">
				 Get inspired by some of our most successful calculators & quizzes!
			</div>
		</div>
	</section>
	<section class="section section-7 ex-mb30">
		<div class="container-fluid np">
			<section>
				<span class="section-runnigheading mk-animate-element scale-up hide">Get Inspired..</span>
			</section>
			<div class="col-xs-12 col-md-6 col-sm-12 section-9-right col-sm-push-6 ">
				<div class="col-xs-12 col-sm-12 slider-sa text-center">
					<div class="rs-show">
 						<div class="swiper-container box-shadow  mk-animate-element scale-up rs-show">
 							<div class="swiper-wrapper">
 								<div class="swiper-slide">
 									<img src="{{ $page->baseUrl }}/images/em1-3.jpg" alt="" class="qode-lazy-image" />
 								</div>
 								<div class="swiper-slide">
 									<img src="{{ $page->baseUrl }}/images/em1-2.jpg" alt="" class="qode-lazy-image" />
 								</div>
 							</div>
 							<!-- Add Pagination -->
 						</div>
 						<div class="swiper-pagination"></div>
 					</div>
 					<div class="qode-cards-gallery-holder left rs-hide" data-side=left>
 						<div class="qode-cards-gallery">
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="http://resources.outgrow.co/what-kind-of-engineer-you-should-be/ " target="_blank">  <img src="#" alt="" class="qode-lazy-image" data-image="/images/em1-2.jpg"
 										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
 									/> </a>
 							</div>
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="http://resources.outgrow.co/what-kind-of-engineer-you-should-be/ " target="_blank">  <img src="#" alt="" class="qode-lazy-image" data-image="/images/em1-3.jpg"
 										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
 									/> </a>
 							</div>
						 </div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 section-9-left col-sm-pull-6 ">
				<h4 class="mk-animate-element left-to-right">
					What kind of engineer should you be?
				</h4>
				<div class="sec9-test mk-animate-element left-to-right">
					<em class="left">“</em>
					<p>
						The first question prospective students ask is: 'which major is right for me'? This calculator lets us answer such questions and build relationships early on. The bounce rates were < 10% - something I haven't seen after spending over $10M in online ads.
						<em class="right">”</em>
					</p>
					<span class="text-1">Head of Admissions,</span>
					<span class="text-2">Top Ranked Online University</span>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-11 np">
					<div class="circle-value mk-animate-element left-to-right">
						<em class="">k</em>
						<label class="counter">22</label>
						<p>Unique Views</p>
					</div>
					<div class="circle-value mk-animate-element left-to-right">
						<em class="">k</em>
						<label class="counter">12</label>
						<p>Leads</p>
					</div>
					<div class="circle-value mk-animate-element left-to-right">
						<em class="">%</em>
						<label  class="counter">98</label>
						<p>Conversion Rate</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-11 np rs-hide">
					<a href="http://resources.outgrow.co/what-kind-of-engineer-you-should-be/ " target="_blank"> <button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
				</div>
				<div class="col-xs-12 col-sm-11 np rs-show">
					<a href="https://website.outgrow.co/Which-engineering-major-is-right-for-you" target="_blank"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Quiz</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 7 end-->
	<!-- Homepage section 8 start-->
	<section class="section section-8">
		<div class="container-fluid np">
			<div class="col-xs-12 col-sm-12 col-md-6 section-7-left1">
				<div class="col-xs-12 col-sm-12 slider-sa text-center">
					<div class="rs-show">
 						<div class="swiper-container box-shadow  mk-animate-element scale-up">
 							<div class="swiper-wrapper">
 								<div class="swiper-slide">
 									<img src="{{ $page->baseUrl }}/images/em2-1.jpg" alt="" class="qode-lazy-image" />
 								</div>
 								<div class="swiper-slide">
 									<img src="{{ $page->baseUrl }}/images/em2-2.jpg" alt="" class="qode-lazy-image" />
 								</div>
 							</div>
 							<!-- Add Pagination -->
 						</div>
 						<div class="swiper-pagination"></div>
 					</div>
 					<div class="qode-cards-gallery-holder right rs-hide" data-side=right>
 						<div class="qode-cards-gallery">
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="https://website.outgrow.co/5875396fe62e5172076953fe" class="embed-modal2" target="_blank" > <img src="#" alt="" class="qode-lazy-image" data-image="/images/em2-1.jpg"
 										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
 									/> </a>
 							</div>
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="https://website.outgrow.co/5875396fe62e5172076953fe" class="embed-modal2" target="_blank"> <img src="#" alt="" class="qode-lazy-image" data-image="/images/em2-2.jpg"
 										style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true" /> </a>
 							</div>
						 </div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 section-7-left">
				<h4 class="mk-animate-element right-to-left">
					How much should you pay for a video campaign ?
				</h4>
				<div class="sec9-test mk-animate-element right-to-left">
					<em class="left">“</em>
					<p>
						The video cost calculator helped us create a brand centered around transparency. It soon became the go-to tool for advertisers to assess production costs (even when they were considering our competitors). Not surprisingly, today, it is our <b>#1 source of leads</b>.
						<em class="right">”</em>
					</p>
					<span class="text-1">Chief Creative Officer, </span>
					<span class="text-2">Top Hollywood Ad Agency</span>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-11 np">
					<div class="circle-value mk-animate-element right-to-left">
						<em class="">k</em>
						<label class="counter">56</label>
						<p>Unique Visits</p>
					</div>
					<div class="circle-value mk-animate-element right-to-left">
						<em class="">k</em>
						<label class="counter">19</label>
						<p>Search Traffic</p>
					</div>
					<div class="circle-value mk-animate-element right-to-left">
						<em class="">%</em>
						<label  class="counter">34</label>
						<p>Completion Rate</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-11 np rs-hide">
					<a href="https://website.outgrow.co/5875396fe62e5172076953fe" class="embed-modal2"  target="_blank"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
				</div>
				<div class="col-xs-12 col-sm-11 np rs-show">
					<a href="https://website.outgrow.co/5875396fe62e5172076953fe" target="_blank"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 8 end-->

	<!-- Homepage section 9 start-->
	<section class="section section-9">
		<div class="container-fluid np">
			<div class="col-xs-12 col-sm-12 col-md-6 col-sm-push-6 section-9-right">
				<div class="col-xs-12 col-sm-12 slider-sa text-center">
					<div class="rs-show">
 						<div class="swiper-container box-shadow  mk-animate-element scale-up rs-show">
 							<div class="swiper-wrapper">
 								<div class="swiper-slide">
 									<img src="{{ $page->baseUrl }}/images/em3-3.jpg" alt="" class="qode-lazy-image" />
 								</div>
 								<div class="swiper-slide">
 									<img src="{{ $page->baseUrl }}/images/em3-2.jpg" alt="" class="qode-lazy-image" />
 								</div>
 							</div>
 							<!-- Add Pagination -->
 						</div>
 						<div class="swiper-pagination"></div>
 					</div>
 					<div class="qode-cards-gallery-holder left rs-hide" data-side=left>
 						<div class="qode-cards-gallery">
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="http://resources.outgrow.co/risk-of-getting-heart-disease/" target="_blank"> <img src="#" alt="" class="qode-lazy-image" data-image="/images/em3-3.jpg"
 									style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"
									 /> </a>
 							</div>
 							<div class="card" style="background-color:#f3f3f3">
 								<a href="http://resources.outgrow.co/risk-of-getting-heart-disease/" target="_blank"> <img src="#" alt="" class="qode-lazy-image" data-image="/images/em3-2.jpg"
 								 style="width:1122px;height:1px" data-ratio="0.62566844919786" data-lazy="true"	/> </a>
 							</div>
						 </div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 section-9-left section-9-left2 col-sm-pull-6">
				<h4 class="mk-animate-element left-to-right">
					What is your risk of getting a heart disease?
				</h4>
				<div class="sec9-test mk-animate-element left-to-right">
					<em class="left">“</em>
					<p>
						Being an age old healthcare company, social media was never a serious marketing channel. But this changed when we launched our series of "What is the risk of getting a ______ disease?" calculators. With these calculators, facebook is now our cheapest source of leads!
						<em class="right">”</em>
					</p>
					<span class="text-1">Head of Customer Experience,</span>
					<span class="text-2">IDBI Insurance</span>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-11 np">
					<div class="circle-value mk-animate-element left-to-right">
						<em class="">k</em>
						<label class="counter">98</label>
						<p>Unique Views</p>
					</div>
					<div class="circle-value mk-animate-element left-to-right">
						<em class="">%</em>
						<label class="counter">66</label>
						<p>Referral Traffic</p>
					</div>
					<div class="circle-value mk-animate-element left-to-right">
						<em class="">%</em>
						<label  class="counter">6</label>
						<p>Bounce Rate</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-11 np rs-hide">
					<a href="http://resources.outgrow.co/risk-of-getting-heart-disease/" target="_blank"> <button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
				</div>
				<div class="col-xs-12 col-sm-11 np rs-show">
					<a href="https://website.outgrow.co/What-is-your-risk-of-getting-a-heart-disease" target="_blank"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Try The Calculator</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
				</div>

			</div>
		</div>
	</section>
	<!-- Homepage section 9 end-->

	<section class="section">
		<div class="container">
			<div class="useCase-heading">
				There is a Calculator for that!
			</div>
		</div>
	</section>
    <!--  section end-->

	<!-- tab-section Start -->
	<section class="section">
		<div class="tab-section">
			<div class="container-fluid">
					<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="tab-title active">
						<a href="#industry" aria-controls="industry" class="res-tab" role="tab" data-toggle="tab" onclick="callGA('TYPE')">
							<i class="material-icons">done</i> By Type
						</a>
					</li>
					<li role="presentation" class="tab-title">
						<a href="#category" aria-controls="category" role="tab" data-toggle="tab" onclick="callGA('INDUSTRY')">
							<i class="material-icons">done</i> By Industry
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content usecase">
					<div role="tabpanel" class="tab-pane active" id="industry">
						<div class="gallery">
							<div class="gallery-header hide">
								<div class="gallery-header-center">
									<div id="gallery-header-center-left">
									</div>

								</div>
							</div>
							<div class="gallery-content">
								<div class="gallery-content-center">
										<div class="usecase-industry abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-sm-12 col-md-6 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Cost Calculators
													</h4>
													<p>More often than not, first question customers have is "how much will this cost me?", especially in services business like video production , software development or real estate.</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much will it cost to run a video marketing campaign?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the cost of app development in different countries.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the total REAL net cost of your college degree.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much would it cost me to invest in an index fund?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to climb mount everest?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much will I pay in broker fees to sell my home?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to build a pool?</span>
														</span>
													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide  mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner2.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show  mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner2.jpg" class= "img-pos box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/slide5-new.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Savings Calculators
													</h4>
													<p>Customers LOVE Savings. Illustrating how much your tool or service can save them can go a long way in building a strong case for your product and triggering a purchase.</p>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how much hiring an expert consultant will save you versus running PPC in house. </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much you can save by streamlining collaboration between your team members.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the tax rebates you can earn by investing in education non-profits.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by using physical therapy for my knee versus a knee replacement surgery? </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can you save in building cost by "daylighting" (strategic placement of windows)?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much do you save in the long term with property insurance?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/slide5-new.jpg" class= "box-shadow img-res" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Diagnostic Calculators
													</h4>
													<p>Diagnose issues, qualities and concerns that are on the top of your customer's mind. A tool that assesses how well or badly they are doing (especially as compared to the competition) is almost guaranteed to get a click.</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your digital quotient?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How valuable is my brand?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculatate how much efficiency you stand gain by shifting to SaaS </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your health rating as compared to an average adult? </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much you spend on impulse purchases?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How well are you running your PPC campaign?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Check if you understand investing in bonds.</span>
														</span>
													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner7-ex.jpg" class="box-shadow" />
												</div>

												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner7-ex.jpg" class="box-shadow" />

												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/homepage-2.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Competitor Calculators
													</h4>
													<p>Over 93% of customers will check at least 4 options before making a purchase. Why not make it easy for them to make the comparison (and make an implicit case for your product or service)?</p>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Considering hiring an agency? Compare how cheap we are as compared to our competitors.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Find out how much you can save by studying abroad vs studying in the US.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Already use a affiliate management tool? Calculate how much you can save by shifting to our tool?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Compare cost of building an office building with us versus another local builder. </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How does my financial advisory fees compare with others?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Compare our price with other hotels in the area.</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/homepage-2.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Alternate Choice Calculators
													</h4>
													<p>A customer is a highly conflicted being. Not only does he or she have to decide between competitors, but also alternative ways of solving (or living with) their problems. Tell them why your solution is the best choice!</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much it would cost to build an in house team to run all your marketing and advertising.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how your earnings will differ if you decide to skip college.</span>
														</span>

														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Find out how much it would cost to invest on your own as compared to using an advisor.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Estimate how much it would cost you to rent instead of buying a home.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much it would cost to manufacture widgets in house versus outsource?</span>
														</span>
													</div>

												</div>

												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner5-new.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner5-new.jpg" class="box-shadow" />

												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">

												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/slide3.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Time Calculators
													</h4>
													<p>After price, time is the second biggest concern that customers have. In fact, it is the biggest reason that cause customers anxiety! </p>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much time will you save in a year by hiring our agency?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much development time will you save by choosing our SaaS tool.</span>
														</span>
													<!-- 	<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long will it take to shift from your legacy systems to new SaaS based cloud solution.</span>
														</span> -->
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long will it take you to recover from a heart surgery?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long will it take for you to build an office building?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take to double my money?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How many years should it take to prepare for retirement?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much time does it take to visit all major museums in Berlin?</span>
														</span>

													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/slide3.jpg" class="box-shadow img-res" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Grade Based Calculators
													</h4>
													<p>As human beings, we are highly sensitive to grades and can work relentlessly to get that A. You can expect grading calculators to be used as benchmarks by CEOs to set goals for their teams.</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Have an in-house marketing team? See how well it is doing.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you leveraging SaaS right? Calculate the efficacy of your tech dollars.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How prepared are you for the LSAT exam?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How prepared am I for retirement?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How well am I managing my money?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How valuable is your current health insurance plan?</span>
														</span>
													</div>

												</div>

												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner4-new.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner4-new.jpg" class="box-shadow" />

												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/banner6.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Risk calculators
													</h4>
													<p>Customers are extremely risk averse. But what if they do not understand the risks? Making them aware of their risks can create trust and form a very strong rapport.</p>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate your risk of falling behind on the digital curve.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how much you stand to lose by not leveraging Cloud.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your risk of getting a diabetes?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the risk of renting using Airbnb versus a hotel?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you at risk of severe hurricane damage?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/banner6.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>

									<div class="usecase-category abc">
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">

												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Industry Metrics Calculators
													</h4>
													<p>Help your audience easily calculate numbers and metrics that are important to them or their industry. Metrics calculators can help build a relationship based on trust and helpfulness.</p>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the life time value of your average cusomter's account.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the expected revenue from a native advertisement on my blog?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is a fair premium for homeowners insurance?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the average cap rate on a home in Texas?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the average CTR on a display ad?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner8-ex.jpg" class="box-shadow" />

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner8-ex.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-industry abc hide" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-5 col-sm-12 section-usecase2-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Customize as
														per your
														Brand
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">trending_up</i>
															<span>Conversion </span>
														</span>
														<span class="">
															<i class="material-icons">ac_unit</i>
															<span>Engagement</span>
														</span>
														<span class="">
															<i class="material-icons">devices</i>
															<span>All screen sizes </span>
														</span>
													</div>
													<span class="">
														<span>Add your logo and brand's colors to customize the look and feel! </span>
													</span>

												</div>
												<div class="col-xs-12 col-md-7 col-sm-12 np rs-hide">
													<img src="{{ $page->baseUrl }}/images/banner10.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show">
													<img src="{{ $page->baseUrl }}/images/banner10.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- second tab -->
					<div role="tabpanel" class="tab-pane" id="category">
						<div class="gallery">
							<div class="gallery-header hide">
								<div class="gallery-header-center">
									<div class="gallery-header-center-left">
									</div>
								</div>
							</div>
							<div class="gallery-content">
								<div class="gallery-content-center">
									<div class="usecase-category abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide">
													<img src="{{ $page->baseUrl }}/images/new-collag3.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Software as a Service
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Find out how much you can save by using SaaS versus building the tool in-house.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the RoI on using an email marketing SaaS platform.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how much efficiency you stand to gain by shifting to an automated payroll solution.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the wasted spend on your current SaaS tool.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long will it take to shift from your legacy systems to a new SaaS based cloud solution?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you leveraging SaaS right? Calculate the ROI of your tech dollars.</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/new-collag3.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Marketing Agency
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate how much hiring an expert consultant will save you versus running PPC in house. </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See if you can save upto $4000 monthly with our expert services.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate your potential RoI on Facebook video advertisements. </span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your digital quotient?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Considering hiring an agency? Compare how cheap we are as compared to our competitors.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Have a in house marketing team? See how well it is doing.</span>
														</span>

													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner7-ex.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner7-ex.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/slide5-new.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Education
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate the total REAL net cost of your college degree.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Calculate your living expenditure while at college.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is a good enough score to get into Harvard with your background?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much time do you have to study to pass the BAR exam?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how your salary differs if you decide to skip college.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Find out how much you can save by studying abroad.</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/slide5-new.jpg" class="box-shadow img-res" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Healthcare & Insurance
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by using telemedicine?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by using physical therapy for my knee versus a knee replacement surgery?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much it would cost you to delay addressing your shoulder injury.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the average number of days in the hospital for an open heart surgery?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is your risk of getting a heart disease?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you susceptible to Zika?</span>
														</span>
													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner6.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner6.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/Construction.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Construction & Real Estate
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much land do you need to construct a 10 story office building in LA?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the risk of a large earthquake impacting your building?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Are you at risk of severe hurricane damage?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to build a pool?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the ROI of buying a 2 bedroom apartment in New York?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much it would cost you to rent instead of buying a home.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can you save in electricity bills by using solar panels as a roof?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take to get approved for a mortgage?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the average Loan to Value ratio for a mall in California?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/Construction.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Finance
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much would I save for retirement if I started max contributions into my retirement account today?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How does my financial advisory fees compare with others?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See much it would cost to hire an financial advisor.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take to double my money? (questions here regarding where the person invests their money)</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much would it cost me to invest in an index fund?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How valuable is your current health insurance plan?</span>
														</span>
													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/banner8-ex.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/banner8-ex.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/banner2.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Travel & Hospitality
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by staying in a hostel versus a hotel?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>See how much it would cost to book each part of the tour separately versus with all together with a travel agency.</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to go to Brazil for the Olympics?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the risk of renting using Airbnb versus a hotel?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to climb mount everest?</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/banner2.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc" >
										<section class="section section-usecase2">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase2-left mk-animate-element left-to-right">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Manufacturing
													</h4>
													<div class="sec9-test section-usecase2-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much can I save by moving my manufacturing facility from the US to china?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take to fulfill an order of 5000 widgets?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How much does it cost to build an aluminium die?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the RoI on Outsourcing product development to China?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>How long does it take for a shipment to arrive from China?</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the risk that my Chinese manufacturer will delay the delivery?</span>
														</span>

													</div>

												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element right-to-left">
													<img src="{{ $page->baseUrl }}/images/manufacturing.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-8 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/manufacturing.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
									<div class="usecase-category abc">
										<section class="section section-usecase1">
											<div class="container img-container-right mobile-container">
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-hide mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/banner9-ex.jpg" class="box-shadow" />
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 section-usecase1-left mk-animate-element right-to-left">
													<span class=" mk-in-viewport full-visible hide">
														<i class="material-icons icon-style">format_paint</i>
													</span>
													<h4 class="">
														Publishing
													</h4>
													<div class="sec9-test section-usecase1-new">
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>Is your neighborhood at risk of a terrorist attack?[Supplement to a news article about a terrorist attack]</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the probability that you will lose your job? [Supplement ot an article or video about unemployment]</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What are the chances of Donald Trump winning your state? [Supplement to a news about the elections]</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What are your chances of becoming President? [This fun calculator can go along a news piece about elections]</span>
														</span>
														<span class="">
															<i class="material-icons">check_circle</i>
															<span>What is the probability that you will default on your student debt? [Can go with an article about rising student debt]</span>
														</span>
													</div>
												</div>
												<div class="col-xs-12 col-md-6 col-sm-12 np rs-show mk-animate-element left-to-right">
													<img src="{{ $page->baseUrl }}/images/banner9-ex.jpg" class="box-shadow" />
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- tab-section end -->
	<!-- Start Trial CTA-->
	<section class="section start-trial-cta">
		<div class="container-fluid np">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="bg1-img">
					<a href="#" id="trialAnchor">
						<button class="btn-buildcal mk-animate-element left-to-right mk-in-viewport full-visible ripple">
							<i class="material-icons">view_compact</i>
							<p>Build Your interactive experience</p>
						</button>
					</a>
					<!-- <label>No Credit Card Required</label> -->
				</div>
			</div>
		</div>
	</section>
@endsection

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"defaultDynamic": "{{ $page->baseUrl }}/js/default_dynamic3f4f.js?ver=1470129303",
		"plugins": "{{ $page->baseUrl }}/js/plugins.js",
		"defaultMin": "{{ $page->baseUrl }}/js/default.min.js",
		"isotope": "{{ $page->baseUrl }}/js/jquery.isotope.min.js",
		"custom": "{{ $page->baseUrl }}/js/custom.js",
		"bootstrap": "{{ $page->baseUrl }}/js/bootstrap.min.js",
		"footer": "{{ $page->baseUrl }}/js/pageScripts/footer.js"
	}
@endsection