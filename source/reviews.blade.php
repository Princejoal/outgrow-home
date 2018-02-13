@extends('_layouts.master')

@section('title', 'Interactive Calculators and Quizzes | Outgrow')

@section('metaDescription')
	<meta name="description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators."/>
	<link rel="canonical" href="http://outgrow.co/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Interactive Calculators | Outgrow" />
	<meta property="og:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta name="twitter:title" content="Interactive Calculators | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')
	<script src="{{ $page->baseUrl }}/js/swiper.min.js"></script>
	<!-- <script src="{{ $page->baseUrl }}/js/jssor.min.js"></script>  -->
	
	
	<section class="section section-1">
		<div class="container-fluid">
			<div class="col-md-12 col-xs-12 col-sm-12 section-1-left text-center">
				<div class="section1-left-cellnoab">
					<!-- <h4 class="mk-animate-element fade-in">
						eBooks, blogs & whitepapers giving average results?
					</h4> -->
					<h1 class="section1-firstheadnoab">
						<span class="font-semibold">Boost</span> Your Marketing with <span class="font-semibold">Highly Interactive Content</span>
					</h1>

					<div class="col-md-12 col-sm-12 col-xs-12 np home-imgs">
						<ul>	
							<li>
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-calc.png"> 
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-calc1.png">
								Calculators</li>
							<li>
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-quizzes.png">
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-quizzes1.png">
								Quizzes</li>
							<li>
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-assessments.png">
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-assessments1.png">
								Assessments </li>
							<li class="recmd">
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-recom.png">
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-recom1.png">
								Recommendations</li>
							<li>
								<img src="//dzvexx2x036l1.cloudfront.net/img-home-polls.png" class="polls">
								<img class="rs-hide" src="//dzvexx2x036l1.cloudfront.net/img-home-polls1.png" class="polls">
								Polls</li>
						</ul>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer startTrial-outer1">
							<i class="material-icons">email</i>
							<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your work email">							
							<span class="lead-form-btn">
								<a href="//app.outgrow.co/signup/?email=" class="lead-email btn-buildcal" onclick="callGA('CANNOT WAIT CTA')">
									Start Free Trial
								</a>
								<span class="live-demo">OR <a href="https://sample.outgrow.co/builder-demo/sample-calculator" class="">TAKE A LIVE DEMO</a></span>
							</span>
							<div id="bfrVid"></div>
						</div>
					</div>

					<!-- <div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer">
							<i class="material-icons">email</i>
							<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your email address">
							<a href="//app.outgrow.co/signup/?email=" class="lead-email" onclick="callGA('CANNOT WAIT CTA')">
								<span class="btn-buildcal fade-in lead-form-btn btn-claimSubDomain">
									Claim your Sub Domain
								</span>
							</a>
							<div id="bfrVid"></div>
					</div> -->

				</div>
			</div>

			<script>
				document.getElementsByClassName('lead-form-email')[0].onchange = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/signup/?email=";
					document.getElementsByClassName('lead-email')[0].href = href + email;
				}

				document.getElementsByClassName('lead-form-email')[0].onkeypress = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/signup/?email=";
					if (e.keyCode == 13) {
						window.location.href = href+email;
					}
				}
			</script>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height video-img-shadow" id="video-main-rs-mob">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-mob" data-toggle="modal" data-target="#video-modal">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
							<!-- <img class="video-arrow" src="//dzvexx2x036l1.cloudfront.net/video-arrow.png" /> -->
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height video-img-shadow" id="video-main-rs">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-res" onclick="changeHeightRes()">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
							<!-- <img class="video-arrow" src="//dzvexx2x036l1.cloudfront.net/video-arrow.png" /> -->
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-hide text-center hide-height video-img-shadow" id="video-main">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-web" id="him1" onclick="changeHeightWeb1()">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
							<!-- <img class="video-arrow" src="//dzvexx2x036l1.cloudfront.net/video-arrow.png" /> -->
						</div>
					</div>
				</div>
			</div> 

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-hide text-center hide-height" id="video-main-xl">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-web" id="him1-xl" onclick="changeHeightWebXL()">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div>

			<script>
				document.getElementsByClassName("video-playIcon")[0].onclick = function () {
					console.log('Some cick');
					document.getElementsByClassName("outgrow-video-mob")[0].src = 'https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3'
				}
				function btnclose() {
					document.getElementsByClassName("outgrow-video-mob")[0].src = 'https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3'
				}
				function changeHeightRes () {
					console.log('Res');
					window.location.replace('#bfrVid')
					document.getElementsByClassName("video-img-inner-res")[0].innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main-rs');
					if (xDiv.style.height == '')
						xDiv.style.height = '460px';
					else
						xDiv.style.height = '';
				}
				function changeHeightWeb1 () {
					console.log('Tab');
					window.location.replace('#bfrVid')
					document.getElementById("him1").innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main');

					if (xDiv.style.height == '')
						xDiv.style.height = '574px';
					else
						xDiv.style.height = '';
				}

				function changeHeightWebXL () {
					console.log('Tab');
					window.location.replace('#bfrVid')
					document.getElementById("him1-xl").innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main-xl');

					if (xDiv.style.height == '')
						xDiv.style.height = '1160px';
					else
						xDiv.style.height = '';
				}
			</script>
		</div>
	</section>

	<section class="section sec-clients-logos">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-hide text-center">
				<div class="img-wrapper">
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/adobe.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/datavail.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/statefarm.png" />
					<img class="scrollimg1"  src="images/clients-logos/lockheed-martin.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/florida-capital-bank.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/catapult-system.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/mulesoft.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/radius.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/golf-avenue.png" />
					<img class="scrollimg1 abl"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/abl.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/agl.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/the-offshore-group.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/canvas-medical.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/black-hawk.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/sm.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/currencyfair.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/pinpoint-software.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/temcoUK.png" />
					<img class="scrollimg1 abl"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/ladder.png" />

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np scale-up rs-show text-center rs-hide-int-res">
				<div class="img-wrapper">
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/adobe.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/datavail.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/statefarm.png" />
					<img class="scrollimg1"  src="images/clients-logos/lockheed-martin.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/florida-capital-bank.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/catapult-system.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/mulesoft.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/radius.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/golf-avenue.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/agl.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/the-offshore-group.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/canvas-medical.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/black-hawk.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/sm.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/currencyfair.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/pinpoint-software.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/temcoUK.png" />

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-show text-center rs-hide-int-mob">
				<div class="img-wrapper">
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/adobe.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/datavail.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/statefarm.png" />
					<img class="scrollimg1"  src="images/clients-logos/lockheed-martin.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/florida-capital-bank.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/catapult-system.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/mulesoft.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/radius.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/golf-avenue.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/agl.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/the-offshore-group.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/canvas-medical.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/black-hawk.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/sm.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/currencyfair.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/pinpoint-software.png" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/clients-logos/temcoUK.png" />

				</div>
			</div>
		</div>
	</section>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np">
		<div class="container custom-container  mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				A New Marketing Toolkit
			</div>
			<!-- <span class="marketing-tool">A New Marketing Toolset</span> -->
			<div class="interactive-outer-section">
				<div class="each-row">
						<div class="case-interactive-left-side">
								<div class="interactive-subinner-left-section">
									<span class="site-image">
									  <img src="//dzvexx2x036l1.cloudfront.net/img-table1.png"/> 
									</span>
								</div>
								<div class="interactive-subinner-right-section">
										<div class="interactive-content">
											<span class="tag1">Boost Lead Generation</span>
											<span class="tag2"></span>
											<span class="main-content">
												Calculators & quizzes engage customers at a psychological level. This leads to record conversion rates of over 60% consistently!
											</span>
										</div>
								</div>
						</div>
						<div class="case-interactive-right-Side">
									<div class="interactive-subinner-left-section">
									 <span class="site-image">
										<img src="//dzvexx2x036l1.cloudfront.net/img-table2.png"/> 
									 </span>
								</div>
								<div class="interactive-subinner-right-section">									
									<div class="interactive-content">
										<span class="tag1">Add Value</span>
										<span class="main-content">
											Calculators give personalized answers to your customer’s most pressing questions about your industry.
										</span>
									</div>
								</div>
							
						</div>
				</div>
				<div class="each-row">
						<div class="case-interactive-left-side">
								<div class="interactive-subinner-left-section">
									 <span class="site-image">
										<img src="//dzvexx2x036l1.cloudfront.net/img-table3.png"/> 
									 </span>
								</div>
								<div class="interactive-subinner-right-section">
										<div class="interactive-content">
										<span class="tag1">Go Viral</span>											
										<span class="main-content">
											Quizzes and calculators tend to go viral. You reach a wider audience, your brand gets noticed, and your referral traffic shoots through the roof.
										</span>
									</div>
								</div>
						</div>
						<div class="case-interactive-right-Side">
									<div class="interactive-subinner-left-section">
                                      <span class="site-image">
										  <img src="//dzvexx2x036l1.cloudfront.net/img-table4.png"/> 
									  </span>
								</div>
								<div class="interactive-subinner-right-section">
									<div class="interactive-content">
										<span class="tag1 sit">Extract Intelligent Analytics</span>
										<span class="main-content">
											Which prospect is an Eagles fan? Who has more than 20 employees? Get customer insights without being pushy!
										</span>
									</div>
								</div>
							
						</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers">
		<div class="container custom-container  mobile-container">
			<div class="buzzfeed-left-section">
			  <img src="//dzvexx2x036l1.cloudfront.net/uni6.png" class="uni1">
			</div>
			<div class="case-breathers-rightSide">
				<div class="heading fnt-chnge bu">Did you know?</div>
				<h5 class="subheading">
					<span class="font-semibold">7</span>
					of the <span class="font-semibold"> 20</span>
					most shared articles on <span class="font-semibold"> Buzzfeed</span> are 
				    <span class="font-semibold">quizzes!</span>
				</h5>
				<a href="http://resources.outgrow.co/how-to-make-buzzfeed-style-quizzes" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
			</div>
		</div>
	</div>

	<!-- Homepage section 3 end-->

	<section class="section">
		<div class="container mobile-container">
			<div class="section-2-heading">
				Beautiful Engaging Experiences <br/>Without Developers
			</div>
			<h5 class="section-2-subheading mk-animate-element scale-up">
				 Create beautiful experiences in minutes with our simple, yet powerful development studio.
			</h5>
		</div>
	</section>

	<!-- Homepage section 4 start-->
	<section class="section section-4">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 np section-4-right mk-animate-element fade-in rs-show">
				<div class="video-frame">
					<span class="circle"></span>
					<div class="embed-responsive embed-responsive-16by9">
						<!-- <video width="1324" height="607" autoplay loop>
							<source src="//dzvexx2x036l1.cloudfront.net/Outgrow-demo.webm" type="video/webm">
						</video> -->
						<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/1Bkoqqp1lro?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0?ecver=2" width="640" height="360" frameborder="0" gesture="media" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 section-4-left ">
				<h4 class="mk-animate-element right-to-left capt">
					Build Beautiful
				</h4>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">format_paint</i>
					<span><b>Appealing layouts</b> that set your UX apart</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">view_compact</i>
					<span>Showcase your brand with <b>quick customizations</b> </span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">developer_board</i>
					<span>Publish in minutes, with <b>no IT headache</b></span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 np section-4-right mk-animate-element fade-in rs-hide">
				<div class="video-frame">
					<span class="circle"></span>
					<div class="embed-responsive embed-responsive-16by9">
						<!-- <video width="1324" height="607" autoplay loop>
							<source src="//dzvexx2x036l1.cloudfront.net/Outgrow-demo.webm" type="video/webm">
						</video> -->
						<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/1Bkoqqp1lro?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0?ecver=2" width="640" height="360" frameborder="0" gesture="media" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 4 end-->

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img class="scrollimg1 mk-animate-element scale-up sec5-2-1" src="//dzvexx2x036l1.cloudfront.net/img-publishAnywhere.png" />
			</div>
			<div class="col-xs-12 col-sm-12 col-sm-push-9 col-md-3 section-5-left">
				<h4 class="mk-animate-element right-to-left publish">
					Publish Anywhere
				</h4>
				<span class="mk-animate-element right-to-left" >
					<i class="material-icons">public</i>
					<span>Publish on <b>your domain</b> or a URL of your choice.</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Embed beautifully in any <b>App, Webpage or CMS</b>.</span>
				</span>
				 <span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Present as a <b>Pop-up</b> or a <b>slide-in</b>. </span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-hide">
				<img class="scrollimg1 mk-animate-element scale-up sec5-2-1" src="//dzvexx2x036l1.cloudfront.net/img-publishAnywhere.png" />
			</div>
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<!-- Homepage section 6 start-->
	<section class="section section-6">
		<div class="container img-container">
			<div class="col-xs-12 col-sm-12 col-md-9 np mk-animate-element fade-in section-6-right rs-show">
				<img class="scrollimg1 mk-animate-element right-to-left sec6-2-1" src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-tab.png" />
				<img class="scrollimg1 sec6-2-2 mk-animate-element left-to-right" src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-mobile.png" />
			</div>
			<div class="col-xs-12 col-md-3 col-sm-12 section-6-left mobile-container">
				<h4 class="mk-animate-element left-to-right ">
					Boost Growth
				</h4>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">timeline</i>
					<span>See <b>record</b> conversion rates with interactive <b>lead generation</b> forms.</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">face</i>
					<span>Go <b>viral</b> with seamless <b>Facebook, Twitter and Linkedin</b> integrations.</span>
				</span>
			</div>
			<div class="col-xs-12 col-sm-9 np mk-animate-element fade-in section-6-right rs-hide">
				<img class="scrollimg1 mk-animate-element right-to-left"  src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-tab.png" />
				<img class="scrollimg1 sec4-2 mk-animate-element left-to-right" src="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-mobile.png" />
			</div>
		</div>
	</section>

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img class="scrollimg1 mk-animate-element scale-up" src="//dzvexx2x036l1.cloudfront.net/img-analyze_improve.png" />
			</div>
			<div class="col-xs-12 col-sm-12 col-sm-push-9 col-md-3 section-5-left">
				<h4 class="mk-animate-element right-to-left publish">
					Analyze & Improve
				</h4>
				<span class="mk-animate-element right-to-left" >
					<i class="material-icons">public</i>
					<span>Hyper-targeted sales outreach with <b>rich customer data</b></span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Track <b>visits, conversions</b> and traffic from across all channels</span>
				</span>
				 <span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Easily integrate with <b>over 500 sales & marketing tools</b></span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-hide">
				<img class="scrollimg1 mk-animate-element scale-up" src="//dzvexx2x036l1.cloudfront.net/img-analyze_improve.png" />
			</div>

			<!-- <div class="col-xs-12 col-sm-12 text-center rs-hide">
				<a href="{{ $page->baseUrl }}/features"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Explore More Features</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div> -->
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers case-breathers-imgRight">
		<div class="container  custom-container mobile-container">
			
			   <img src="//dzvexx2x036l1.cloudfront.net/s1.png" class="rs-show uni3">
			
			<div class="case-breathers-rightSide new-yk">
				<div class="heading fnt-chnge">Who could have guessed?</div>
				<h5 class="subheading">
					<span class="font-semibold">New York Times'</span> 
					most successful content is actually a <span class="font-semibold">quiz!</span>
				</h5>
				<a href="http://resources.outgrow.co/top-viral-calculators" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
			</div>
			<div class="left-sec rs-hide">
			   <img src="//dzvexx2x036l1.cloudfront.net/s2.png">
			</div>
		</div>
	</div>

	<section class="section sec-integrations hide">
		<div class="container mobile-container">
			<div class="section-2-heading">
				Over 500 integrations
			</div>
			<h5 class="section-2-subheading mk-animate-element scale-up">
				 Easily Integrate with Over 500 sales & marketing tools
			</h5>
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-hide mk-in-viewport text-center">
				<!--<img class="mk-animate-element scale-up int-box-shadow"  data-src="//dzvexx2x036l1.cloudfront.net/img-integration-full.jpg" />-->
				<div class="img-int-wrapper">
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-res">
				<!--<img class="int-box-shadow" data-src="//dzvexx2x036l1.cloudfront.net/img-integration-resp.jpg">-->
				<div class="img-int-wrapper">
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-mob">
				<!--<img class="int-box-shadow"  src="//dzvexx2x036l1.cloudfront.net/img-integration-mob.jpg">-->
				<div class="img-int-wrapper">
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img class="scrollimg1"  src="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 6 end-->

	<!-- Homepage The Outgrow Magic -->
	<div class="section-main">
		<section class="section section-5 sec-outgrowMagic-title">
			<div class="container mobile-container">
				<div class="section-2-heading">
					Outgrow In Practice
				</div>
				<h5 class="section-2-subheading mk-animate-element scale-up">
					Presenting our highly optimized design layouts
				</h5>
			</div>
		</section>

		<section class="section section-5 sec-outgrowMagic">
			<div class="container-fluid np">
				<div class="col-xs-12 col-sm-12 col-md-12 np">
					<!--<div id="sticky-anchor"></div>-->
					<div class="tab-outer-frame col-xs-12 col-md-12 col-sm-12 text-center">
						<!--<span class="icon-webcam"></span>-->
						<div class="hrefTarget tab-inner-frame col-xs-12 col-md-12 col-sm-12">
							<div class="iframe-outer">
								<iframe id="og-iframe" src="//website.outgrow.us/build-a-startup?vHeight=1"></iframe>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-12 col-sm-12 mobile-container rs-hide calc-links text-center">
					<div class="calc-links-inner">
						<a href="javascript:void(0);" class="active"
							onclick="display('//website.outgrow.us/build-a-startup?vHeight=1')">
							<img class="thumb-calc" src="{{ $page->baseUrl }}/images/calc06.jpg" />
						</a>
						<a href="javascript:void(0);" class=""
							onclick="display('//website.outgrow.us/Which-engineering-major-is-right-for-you?vHeight=1')">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc01.jpg" />
						</a>
						<a href="javascript:void(0);" class=""
							onclick="display('//website.outgrow.us/Cost-of-a-video-campaign-4?vHeight=1')">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc02.jpg" />
						</a>
						<a href="javascript:void(0);" class=""
							onclick="display('//website.outgrow.us/What-is-your-risk-of-getting-a-heart-disease?vHeight=1')">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc03.jpg" />
						</a>
						<a href="javascript:void(0);" class=""
							onclick="display('//website.outgrow.us/outgrow-roi?vHeight=1')">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc04.jpg" />
						</a>
						<a href="javascript:void(0);" class=""
							onclick="display('//website.outgrow.us/build-an-app?vHeight=1')">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc05.jpg" />
						</a>
					</div>
				</div>

				<div class="col-xs-12 col-md-12 col-sm-12 section-6-left mobile-container rs-show text-center">
					<div class="col-md-12 col-sm-12 col-xs-12 np calc-links">
						<a href="//website.outgrow.us/build-a-startup?vHeight=1" class="col-sm-4 np calcembed active" target="_blank">
							<img class="thumb-calc" src="{{ $page->baseUrl }}/images/calc06.jpg" />
						</a>
						<a href="//website.outgrow.us/Which-engineering-major-is-right-for-you?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc01.jpg" />
						</a>
						<a href="//website.outgrow.us/Cost-of-a-video-campaign-4?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc02.jpg" />
						</a>
						<a href="//website.outgrow.us/What-is-your-risk-of-getting-a-heart-disease?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc03.jpg" />
						</a>
						<a href="//website.outgrow.us/outgrow-roi?vHeight=1" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc04.jpg" />
						</a>
						<a href="//website.outgrow.us/build-an-app" class="col-sm-4 np calcembed" target="_blank">
							<img class="thumb-calc" src="//dzvexx2x036l1.cloudfront.net/calc05.jpg" />
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers case-productHunt">
		<div class="container  custom-container  mobile-container">
			<div class="product-hunt-left">
			     <img src="//dzvexx2x036l1.cloudfront.net/uni4.png">
			</div>
			<div class="case-breathers-rightSide product-outer">
				<div class="heading fnt-chnge product-hunt hunt1">It's your turn now!</div>
				<h5 class="subheading">
					Calculators are amongst the highest rated products on <span class="font-semibold">Product Hunt.</span>
				</h5>
				<a href="http://resources.outgrow.co/product-hunt-promotions-interactive-content" target="_blank" class="btn btn-readmore-link">Read more <i class="material-icons">keyboard_arrow_right</i></a>
			</div>
		</div>
	</div>
	
	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 hide" id="liveReviews">
		<div class="container mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				Critically Acclaimed
			</div>
			<div class="social-media-section">
				<div class="each-arrow-section">
					<div id="fb-img" class="arrow_box testactive" onclick="openTestimonial('fb')">
						<img src="//dzvexx2x036l1.cloudfront.net/facebookim.png"/> 
						<img src="//dzvexx2x036l1.cloudfront.net/facebookh.png" class="over over1"/>  
					</div>
		
					<div id="capterra-img" class="arrow_box" onclick="openTestimonial('capterra')">
						<img src="//dzvexx2x036l1.cloudfront.net/capterraimg.png"/>
						<img src="//dzvexx2x036l1.cloudfront.net/capterah.png" class="over over2"/>  
					</div>
		
					<div id="g2-img" class="arrow_box" onclick="openTestimonial('g2')">
						<img src="//dzvexx2x036l1.cloudfront.net/crowd.png"/> 
						<img src="//dzvexx2x036l1.cloudfront.net/crowdh.png" class="over over3"/> 
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1">
			<div class="container mobile-container protfolio-section">
				
				<div id="fb" class="protfolio-inner-section" data-repuso-grid="4406" data-website-id="0"></div>

				<div id="capterra" class="protfolio-inner-section testhide" data-repuso-grid="4407" data-website-id="0"></div>

				<div id="g2" class="protfolio-inner-section testhide" data-repuso-grid="4320" data-website-id="0"></div>
			</div>
		</div>
	</div>

	<!-- start static HTML of fb, capterra and g2 crowd -->
	<div class="col-md-12 col-sm-12 col-xs-12 text-center np custom-embeds" id="staticReviews">
		<div class="container mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				Critically Acclaimed
			</div>			

			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#fb-tab"></a></li>
				<li><a data-toggle="tab" href="#capterra-tab"></a></li>
				<li><a data-toggle="tab" href="#g2crowd-tab"></a></li>
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
											<img src="images/testimonial-fb-mini.png">
										</a>
									</div>
									<img src="images/testimonial-userImg-dapo.png">
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
											<img src="images/testimonial-fb-mini.png">
										</a>
									</div>
									<img src="images/testimonial-userImg-jona.png">
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
											<img src="images/testimonial-fb-mini.png">
										</a>
									</div>
									<img src="images/testimonial-userImg-va.png">
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
											<img src="images/testimonial-fb-mini.png">
										</a>
									</div>
									<img src="images/testimonial-userImg-bryce.png">
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
											<img src="images/testimonial-fb-mini.png">
										</a>
									</div>
									<img src="images/testimonial-userImg-rachel.png">
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
											<img src="images/testimonial-fb-mini.png">
										</a>
									</div>
									<img src="images/testimonial-userImg-jake.png">
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
											<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									<!-- <img src="images/testimonial-userImg1.jpg"> -->
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
											<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									<!-- <img src="images/testimonial-userImg1.jpg"> -->
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
											<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									<!-- <img src="images/testimonial-userImg1.jpg"> -->
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
											<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									 <img src="images/testimonial-userImg-ed.png"> 
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
											<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									 <!-- <img src="images/testimonial-userImg1.jpg">  -->
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
											<!-- <img src="images/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									 <!-- <img src="images/testimonial-userImg1.jpg">  -->
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
											<img src="images/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img src="images/testimonial-userImg1.jpg">
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
											<img src="images/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img src="images/testimonial-userImg2.jpg">
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
											<img src="images/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img src="images/testimonial-userImg3.jpg">
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
											<img src="images/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img src="images/testimonial-userImg4.jpg">
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
											<img src="images/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img src="images/testimonial-userImg5.jpg">
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
											<img src="images/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img src="images/testimonial-userImg6.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<!-- end static HTML of fb, capterra and g2 crowd -->

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
	</script>

	<!--section testimonial -->
	<!-- <div class="section-main">
		<section class="section section-7-top">
			<div class="container mobile-container">
				<h1 class="section-2-heading mk-animate-element scale-up">
					Check What Our Users Have To Say!
				</h1>
			</div>
		</section>
		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-show-less480 ">
			<div class="swiper-container swiper-container1 mk-animate-element scale-up">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile01.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile03.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile04.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile05.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile06.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile07.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile08.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
				</div>
			</div>
			
			<div class="swiper-pagination swiper-pagination1"></div>
			
			<div class="swiper-button-next swiper-button-next1"></div>
			<div class="swiper-button-prev swiper-button-prev1"></div>
		</div>

		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-show rs-hide-less480">
			<div class="swiper-container swiper-container2 mk-animate-element scale-up">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile01.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile01.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile03.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile03.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile04.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile04.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile05.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile05.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile06.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile06.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile07.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile07.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile08.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile08.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
				</div>
			</div>
			
			<div class="swiper-pagination swiper-pagination2"></div>
			
			<div class="swiper-button-next swiper-button-next2"></div>
			<div class="swiper-button-prev swiper-button-prev2"></div>
		</div> 

		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-hide">
			<div class="swiper-container swiper-container3 mk-animate-element scale-up">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials01.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials01.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials03.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials03.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials04.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials04.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials05.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials05.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials06.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials06.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials07.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials07.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials08.jpg" src="//dzvexx2x036l1.cloudfront.net/testimonials08.jpg" alt="" class="scrollimg1 qode-lazy-image" />
					</div>
				</div>
			</div>
			
			<div class="swiper-pagination swiper-pagination3"></div>
			
			<div class="swiper-button-next swiper-button-next3"></div>
			<div class="swiper-button-prev swiper-button-prev3"></div>
		</div>
		<script>
			var swipera = new Swiper('.swiper-container1', {
				pagination: '.swiper-pagination1',
				paginationClickable: true,
				nextButton: '.swiper-button-next1',
				prevButton: '.swiper-button-prev1',
				spaceBetween: 30,
				slidesPerView: 3,
				centeredSlides: true,
				autoplayDisableOnInteraction: false
			});

			var swiperb = new Swiper('.swiper-container2', {
				pagination: '.swiper-pagination2',
				paginationClickable: true,
				nextButton: '.swiper-button-next2',
				prevButton: '.swiper-button-prev2',
				spaceBetween: 30,
				slidesPerView: 3,
				centeredSlides: true,
				autoplayDisableOnInteraction: false
			});

			var swiperc = new Swiper('.swiper-container3', {
				pagination: '.swiper-pagination3',
				paginationClickable: true,
				nextButton: '.swiper-button-next3',
				prevButton: '.swiper-button-prev3',
				spaceBetween: 30,
				slidesPerView: 3,
				centeredSlides: true,
				autoplayDisableOnInteraction: false
			});
		</script>
	</div> -->
	<!--section testimonial -->

	<!--section ranking -->
	<div class="section-main section-ranking hide">
		<section class="section section-7-top">
			<div class="container mobile-container">
				<h1 class="section-2-heading mk-animate-element scale-up">
					Lorem Ipsum Ranking
				</h1>
			</div>
		</section>

		<div class="col-xs-12 col-sm-12 np text-center">
			<div class="swiper-container swiper-container4">
				<div class="swiper-wrapper">
					<div class="swiper-slide swiper-slide-first">
						<img src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" alt="" class="scrollimg1 qode-lazy-image" />
						<div class="swiper-content">
							<h3>Mste natus error sit voluptatem accusantium doloremque laudantium</h3>
							<span>Lorem ipsum dolor in reprehenderit in voluptate velit esse cillum dolore eu</span>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" alt="" class="scrollimg1 qode-lazy-image" />
						<div class="swiper-content">
							<h3>Mste natus error sit voluptatem accusantium doloremque laudantium</h3>
							<span>Lorem ipsum dolor in reprehenderit in voluptate velit esse cillum dolore eu</span>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" alt="" class="scrollimg1 qode-lazy-image" />
						<div class="swiper-content">
							<h3>Mste natus error sit voluptatem accusantium doloremque laudantium</h3>
							<span>Lorem ipsum dolor in reprehenderit in voluptate velit esse cillum dolore eu</span>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" alt="" class="scrollimg1 qode-lazy-image" />
						<div class="swiper-content">
							<h3>Mste natus error sit voluptatem accusantium doloremque laudantium</h3>
							<span>Lorem ipsum dolor in reprehenderit in voluptate velit esse cillum dolore eu</span>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" alt="" class="scrollimg1 qode-lazy-image" />
						<div class="swiper-content">
							<h3>Mste natus error sit voluptatem accusantium doloremque laudantium</h3>
							<span>Lorem ipsum dolor in reprehenderit in voluptate velit esse cillum dolore eu</span>
						</div>
					</div>
				</div>
			</div>
			
			<div class="swiper-pagination swiper-pagination4"></div>
			
			<div class="swiper-button-next swiper-button-next4"></div>
			<div class="swiper-button-prev swiper-button-prev4"></div>
		</div> 
		<script>

			var swiper = new Swiper('.swiper-container4', {
				pagination: '.swiper-pagination4',
				paginationClickable: true,
				nextButton: '.swiper-button-next4',
				prevButton: '.swiper-button-prev4',
				spaceBetween: 30,
				slidesPerView: 3,
				centeredSlides: true,
				// freeMode: true
				// autoplayDisableOnInteraction: false

			});
		</script>
	</div> 
	<!--section ranking -->

	<div class="section-main section-ranking hide">
		<section class="section section-7-top">
			<div class="container mobile-container">
				<h1 class="section-2-heading mk-animate-element scale-up">
					Lorem Ipsum Ranking
				</h1>
			</div>
		</section>
	    <div id="jssor_1" class="jssor-wrapper">
			<div data-u="slides" class="jssor-slides">

				<div data-p="137.50" class="jssor-slide-image i1 jssor-active">
					<img data-u="image" src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" />
					<div class="jssor-content">
						<h3>Mste natus error sit voluptatem accusantium doloremque laudantium</h3>
						<span>Lorem ipsum dolor in reprehenderit in voluptate velit esse cillum dolore eu</span>
					</div>
				</div>
				<div data-p="137.50" class="jssor-slide-image i2">
					<img data-u="image" src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" />
					<div class="jssor-content">
						<h3>Mste natus error sit voluptatem accusantium doloremque laudantium</h3>
						<span>Lorem ipsum dolor in reprehenderit in voluptate velit esse cillum dolore eu</span>
					</div>
				</div>
				<div data-p="137.50" class="jssor-slide-image i3">
					<img data-u="image" src="{{ $page->baseUrl }}/images/ranking-swiper-img1.jpg" />
					<div class="jssor-content">
						<h3>Mste natus error sit voluptatem accusantium doloremque laudantium</h3>
						<span>Lorem ipsum dolor in reprehenderit in voluptate velit esse cillum dolore eu</span>
					</div>
				</div>
			</div>
			<!-- Bullet Navigator -->
			<div data-u="navigator" class="navigator-parent jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
				<div data-u="prototype" class="i" style="width:16px;height:16px;">
					<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						<circle class="b" cx="8000" cy="8000" r="5800"></circle>
					</svg>
				</div>
			</div>
			<!-- Arrow Navigator -->
			<!-- <div onclick="onNavigatorClick()" data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
				<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
				</svg>
			</div>
			<div onclick="onNavigatorClick()" data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
				<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
				</svg>
			</div> -->
		</div>
	</div>

	<div class="section-main section-ranking">
		<section class="section section-7-top">
			<div class="container mobile-container">
				<h1 class="section-2-heading mk-animate-element scale-up">
					Top Ranked Content Marketing Tool
				</h1>
			</div>
		</section>
		<div class="swiper-container-ranking rs-hide">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-history="1">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_1.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow has the highest overall Usability Score among content marketing software</h3> -->
						<span>Outgrow has the highest overall Usability Score among content marketing software</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 2">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_2.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</h3> -->
						<span>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 3">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_3.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow listed as the most ROI-friendly Content Marketing Software</h3> -->
						<span>Outgrow listed as the most ROI-friendly Content Marketing Software</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 4">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_4.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow is listed as the number 1 content marketing software for small business</h3> -->
						<span>Outgrow is listed as the number 1 content marketing software for small business</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 5">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_5.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</h3> -->
						<span>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</span> 
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<!-- <div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div> -->
		</div>
		<script>
			var swiper = new Swiper('.swiper-container-ranking', {
				spaceBetween: 80,
				slidesPerView: 2,
				centeredSlides: true,
				loop: true,
				slideToClickedSlide: true,
				autoplay: 2500,
				paginationClickable: true,
				autoplayDisableOnInteraction: false,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				// history: 'slide',
				
			});
		</script>

		<div class="swiper-container-ranking-res rs-show">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-history="1">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_1.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow has the highest overall Usability Score among content marketing software</h3> -->
						<span>Outgrow has the highest overall Usability Score among content marketing software</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 2">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_2.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</h3> -->
						<span>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 3">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_3.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow listed as the most ROI-friendly Content Marketing Software</h3> -->
						<span>Outgrow listed as the most ROI-friendly Content Marketing Software</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 4">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_4.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow is listed as the number 1 content marketing software for small business</h3> -->
						<span>Outgrow is listed as the number 1 content marketing software for small business</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 5">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_5.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</h3> -->
						<span>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</span> 
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<!-- <div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div> -->
		</div>
		<script>
			var swiper = new Swiper('.swiper-container-ranking-res', {
				spaceBetween: 50,
				slidesPerView: 1,
				centeredSlides: true,
				slideToClickedSlide: true,
				autoplay: 2500,
				paginationClickable: true,
				autoplayDisableOnInteraction: false,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				// history: 'slide',
				
			});
		</script>

		<div class="swiper-container-ranking-lg rs-hide">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-history="1">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_1.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow has the highest overall Usability Score among content marketing software</h3> -->
						<span>Outgrow has the highest overall Usability Score among content marketing software</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 2">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_2.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</h3> -->
						<span>Outgrow is the highest rated content marketing software among G2 Crowd reviewers with a Satisfaction Score of 100%</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 3">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_3.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow listed as the most ROI-friendly Content Marketing Software</h3> -->
						<span>Outgrow listed as the most ROI-friendly Content Marketing Software</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 4">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_4.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow is listed as the number 1 content marketing software for small business</h3> -->
						<span>Outgrow is listed as the number 1 content marketing software for small business</span> 
					</div>
				</div>
				<div class="swiper-slide" data-history="Slide 5">
					<img data-u="image" src="{{ $page->baseUrl }}/images/top_ranked_img_5.jpg" />
					<div class="swiper-content">
						<!-- <h3>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</h3> -->
						<span>Outgrow ranks 1st when it comes to Ease-of-Implementation among content marketing software</span> 
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<!-- <div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div> -->
		</div>
		<script>
			var swiper = new Swiper('.swiper-container-ranking-lg', {
				spaceBetween: 90,
				slidesPerView: 3,
				centeredSlides: true,
				loop: true,
				slideToClickedSlide: true,
				autoplay: 2500,
				paginationClickable: true,
				autoplayDisableOnInteraction: false,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				// history: 'slide',
				
			});
		</script>

	</div>
	
	<section class="section start-trial-cta free-trail mb0">
		<div class="start-free-trail np">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="">
					<div class="bg1-img">
						<a href="https://app.outgrow.co/" class="params trialLOL">
								<button onclick="callGA(\'CANNOT WAIT CTA\')" class="btn-buildcal btn-buildcal1 mk-animate-element fade-in">
								<img src="//dzvexx2x036l1.cloudfront.net/icon-mouse.png">Start Free Trial</button>
						</a>
						<div class=""><label>Plans Start at $25/month</label></div>
						<!-- <label>No Credit Card Required</label> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<div id="video-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" onclick="btnclose()" id="btn-close-mob" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="row">
						<div class="modal-video-full">
							<div class="tab-content">
								<div id="overview" class="tab-pane fade in active">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="outgrow-video outgrow-video-mob" src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3" data-src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('inlinescripts')
@endsection


@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"jssor": "{{ $page->baseUrl }}/js/jssor.min.js",
		"index": "{{ $page->baseUrl }}/js/pageScripts/index.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
	}
@endsection