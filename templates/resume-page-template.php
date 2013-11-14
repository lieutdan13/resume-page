<?php

wp_head();

// setup variables - if you're overriding in a child template be sure to keep these here! only chnage the markup below and use these to fill in dynamic info
//$avatar 		= ;
$hide_experience 	= get_post_meta(get_the_ID(),'rp_disable_experience', true) ? get_post_meta(get_the_ID(),'rp_disable_experience', true) : false;
$hide_github 		= get_post_meta(get_the_ID(),'rp_disable_github', true) ? get_post_meta(get_the_ID(),'rp_disable_github', true) : false;
$hide_skills 		= get_post_meta(get_the_ID(),'rp_disable_skills', true) ? get_post_meta(get_the_ID(),'rp_disable_skills', true) : false;
$hide_education 	= get_post_meta(get_the_ID(),'rp_disable_education', true) ? get_post_meta(get_the_ID(),'rp_disable_education', true) : false;
$hide_portfolio 	= get_post_meta(get_the_ID(),'rp_disable_portfolio', true) ? get_post_meta(get_the_ID(),'rp_disable_portfolio', true) : false;

$objective_title = get_post_meta(get_the_ID(),'rp_objective_title', true) ? get_post_meta(get_the_ID(),'rp_objective_title', true) : __('Objective','resume-page');
$objective_content = get_post_meta(get_the_ID(),'rp_objective_content', true) ? get_post_meta(get_the_ID(),'rp_objective_content', true) : __('What is your objective?','resume-page');

$experience_title = get_post_meta(get_the_ID(),'rp_experience_title', true) ? get_post_meta(get_the_ID(),'rp_experience_title', true) : __('Experience','resume-page');
$github_title = get_post_meta(get_the_ID(),'rp_github_title', true) ? get_post_meta(get_the_ID(),'rp_github_title', true) : __('Github Activity','resume-page');
$skills_title = get_post_meta(get_the_ID(),'rp_skills_title', true) ? get_post_meta(get_the_ID(),'rp_skills_title', true) : __('Skills','resume-page');
$education_title = get_post_meta(get_the_ID(),'rp_education_title', true) ? get_post_meta(get_the_ID(),'rp_education_title', true) : __('Education','resume-page');

do_action('ba_resume_page_before');

	?>
		<section class="resume-wrap">
			<div class="resume-container">
				<div class="resume-inner">

					<!-- start resume header -->
					<header class="row resume-section-header" style="margin-bottom:40px;">
						<div class="col-sm-3">
							<img src="http://placekitten.com/600/400" class="img-responsive">
						</div>
						<div class="col-sm-6 resume-bio">
							<h1 class="zmt resume-bio-title">Unicorn Rider
							<h2 class="zmt resume-bio-tag"><small>Crime Fighting Superstar</small></h2>
							<a href="#" class="resume-bio-email">email@info.com</a>
							<a href="#" class="resume-bio-site">http://website.com</a>
							<a class="muted resume-bio-phone" href="#">555-555-5555</a>
						</div>
						<div class="col-sm-3 resume-social-wrap">
							<ul class="resume-social unstyled">
								<li><a href="#">tweeter</a></li>
								<li><a href="#">tweeter</a></li>
								<li><a href="#">tweeter</a></li>
							</ul>
						</div>
					</header>
					<!-- end resume header -->

					<!-- start main -->
					<main class="resume-section-main">

						<!-- start objective -->
						<section class="row resume-objective-wrap">
							<div class="col-sm-3">
								<h4 class="zmt resume-item-title">Objective</h4>
							</div>
							<div class="col-sm-9 resume-objective">
								<p>Seeking expanded opportunies within select organizations where I can utilize my expertise to implement profit oriented results.</p>
							</div>
						</section>
						<!-- end objective -->

						<hr />

						<!-- start work experience wrap -->
						<section class="row resume-work-wrap">
							<div class="col-sm-3">
								<h4 class="zmt resume-item-title">Experience</h4>
							</div>
							<div class="col-sm-9">

								<!-- company -->
								<div class="row resume-company">
									<div class="col-sm-9">
										<h4 class="zmt resume-company-title">Senior Project Manager</h4>
										<h4><small>Web Design stuidios</small></h4>
										<p>Did some shit here</p>
									</div>
									<div class="col-sm-3">
										<p class="label label-info">label</p>
									</div>
								</div>
								<!-- end company -->

								<!-- company -->
								<div class="row resume-company">
									<div class="col-sm-9">
										<h4 class="zmt resume-company-title">Senior Project Manager</h4>
										<h4><small>Web Design stuidios</small></h4>
										<p>Did some shit here</p>
									</div>
									<div class="col-sm-3">
										<p class="label label-info">label</p>
									</div>
								</div>
								<!-- end company -->

							</div>
						</section>
						<!-- end work experience wrap -->

						<hr />

						<!-- start github activity stream -->
						<section class="row resume-github-wrap">
							<div class="col-sm-3">
								<h4 class="zmt resume-item-title">Github Activity</h4>
							</div>
							<div class="col-sm-9 github-stream-wrap">
								<ul class="github-stream unstyled">
									<?php echo ba_resume_page_github_feed( 'bearded-avenger', $excluded = array(), $count = 5, $include_css = true);?>
								</ul>
							</div>
						</section>
						<!-- end github activity stream -->

						<hr />

						<!-- start skillset wrap -->
						<section class="row resume-skillset-wrap">
							<div class="col-sm-3">
								<h4 class="zmt resume-item-title">Skills</h4>
							</div>
							<div class="col-sm-9 resume-skillset-list-wrap">

								<!-- skillset 1 -->
								<div class="row">
									<div class="col-sm-6">
										<ul class="unstyled resume-skillset-list">
											<li>skill</li>
											<li>skill</li>
											<li>skill</li>
										</ul>
									</div>
									<div class="col-sm-6">
										<ul class="unstyled resume-skillset-list">
											<li>skill</li>
											<li>skill</li>
											<li>skill</li>
										</ul>
									</div>
								</div>
								<!-- end skillset -->

							</div>
						</section>
						<!-- end skillset wrap -->

						<hr />

						<!-- start education wrap -->
						<section class="row resume-education-wrap">
							<div class="col-sm-3">
								<h4 class="zmt resume-item-title">Education</h4>
							</div>
							<div class="col-sm-9">

								<!-- skillset 1 -->
								<div class="row resume-education-item">
									<div class="col-sm-12">
										<h3 class="zmt resume-education-title">Harvard</h3>
										<h4 class="resume-education-tag"><small>Business Law</small> 4.0 GPA</h4>
										<p>I was awesome</p>
									</div>
								</div>
								<!-- end skillset -->

							</div>
						</section>
						<!-- end education wrap -->

					</main>
					<!-- end main -->


				</div>
			</div>
		</section>
	<?php

do_action('ba_resume_page_after');

wp_footer();
