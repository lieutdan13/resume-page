<?php

wp_head();

// setup variables - if you're overriding in a child template be sure to keep these here! only chnage the markup below and use these to fill in dynamic info
$hide_objective 	= get_post_meta(get_the_ID(),'rp_disable_objective', true);
$hide_experience 	= get_post_meta(get_the_ID(),'rp_disable_experience', true);
$hide_github 		= get_post_meta(get_the_ID(),'rp_disable_github', true);
$hide_skills 		= get_post_meta(get_the_ID(),'rp_disable_skills', true);
$hide_education 	= get_post_meta(get_the_ID(),'rp_disable_education', true);
$hide_portfolio 	= get_post_meta(get_the_ID(),'rp_disable_portfolio', true);

$objective_title = get_post_meta(get_the_ID(),'rp_objective_title', true) ? get_post_meta(get_the_ID(),'rp_objective_title', true) : __('Objective','resume-page');
$objective_content = get_post_meta(get_the_ID(),'rp_objective_content', true) ? get_post_meta(get_the_ID(),'rp_objective_content', true) : __('What is your objective?','resume-page');

$experience_title = get_post_meta(get_the_ID(),'rp_experience_title', true) ? get_post_meta(get_the_ID(),'rp_experience_title', true) : __('Experience','resume-page');
$github_title = get_post_meta(get_the_ID(),'rp_github_title', true) ? get_post_meta(get_the_ID(),'rp_github_title', true) : __('Github Activity','resume-page');
$skills_title = get_post_meta(get_the_ID(),'rp_skills_title', true) ? get_post_meta(get_the_ID(),'rp_skills_title', true) : __('Skills','resume-page');
$education_title = get_post_meta(get_the_ID(),'rp_education_title', true) ? get_post_meta(get_the_ID(),'rp_education_title', true) : __('Education','resume-page');
$portfolio_title = get_post_meta(get_the_ID(),'rp_portfolio_title', true) ? get_post_meta(get_the_ID(),'rp_portfolio_title', true) : __('Portfolio','resume-page');

$skills = get_post_meta(get_the_ID(),'rp_single_skill', false);
$schools = get_post_meta(get_the_ID(),'rp_school_places', false);
$companies = get_post_meta(get_the_ID(),'rp_work_places', false);

$themeclass = get_post_meta(get_the_ID(),'rp_theme', true) ? get_post_meta(get_the_ID(),'rp_theme', true) : 'corporate';

do_action('ba_resume_page_before');

	?>
		<section class="resume-wrap <?php echo $themeclass;?>">
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

						<?php if (!$hide_objective) { ?>
							<!-- start objective -->
							<section class="row resume-objective-wrap">
								<div class="col-sm-3">
									<h4 class="zmt resume-item-title"><?php echo $objective_title;?></h4>
								</div>
								<div class="col-sm-9 resume-objective">
									<?php echo $objective_content;?>
								</div>
							</section>
							<hr />
							<!-- end objective -->
						<?php }


						if (!$hide_experience) { ?>
							<!-- start work experience wrap -->
							<section class="row resume-work-wrap">
								<div class="col-sm-3">
									<h4 class="zmt resume-item-title"><?php echo $experience_title;?></h4>
								</div>
								<div class="col-sm-9">

									<?php foreach($companies as $company): ?>
										<!-- company -->
										<div class="row resume-company">
											<div class="col-sm-9">
												<h4 class="zmt resume-company-title"><?php echo $company['rp_work_title'];?></h4>
												<h4><small><?php echo $company['rp_work_company'];?></small></h4>
												<p><?php echo $company['rp_work_desc'];?></p>
											</div>
											<div class="col-sm-3">
												<p class="label label-info"><?php echo $company['rp_work_dates'];?></p>
											</div>
										</div>
										<!-- end company -->
									<?php endforeach; ?>

								</div>
							</section>
							<hr />
							<!-- end work experience wrap -->
						<?php }


						if (!$hide_skills) { ?>
							<!-- start skillset wrap -->
							<section class="row resume-skillset-wrap">
								<div class="col-sm-3">
									<h4 class="zmt resume-item-title"><?php echo $skills_title;?></h4>
								</div>
								<div class="col-sm-9 resume-skillset-list-wrap">

									<!-- skillset 1 -->
									<div class="row">
										<div class="col-sm-12">

											<ul class="unstyled resume-skillset-list">
												<?php foreach($skills as $skill):
													printf('<li>%s</li>',$skill);
												endforeach; ?>
											</ul>
										</div>
									</div>
									<!-- end skillset -->

								</div>
							</section>
							<hr />
							<!-- end skillset wrap -->
						<?php }


						if (!$hide_education) { ?>
							<!-- start education wrap -->
							<section class="row resume-education-wrap">
								<div class="col-sm-3">
									<h4 class="zmt resume-item-title"><?php echo $education_title;?></h4>
								</div>
								<div class="col-sm-9">

									<?php foreach($schools as $school): ?>
										<!-- skillset 1 -->
										<div class="row resume-education-item">
											<div class="col-sm-12">
												<h4 class="zmt resume-education-title"><?php echo $school['rp_school_name'];?></h4>
												<h4 class="resume-education-tag"><small><?php echo $school['rp_school_course'];?></small></h4>
												<p><?php echo $school['rp_school_desc'];?></p>
											</div>
										</div>
										<!-- end skillset -->
									<?php endforeach; ?>

								</div>
							</section>
							<hr />
							<!-- end education wrap -->
						<?php }

						if (!$hide_github) { ?>
							<!-- start github activity stream -->
							<section class="row resume-github-wrap">
								<div class="col-sm-3">
									<h4 class="zmt resume-item-title"><?php echo $github_title;?></h4>
								</div>
								<div class="col-sm-9 github-stream-wrap">
									<ul class="github-stream unstyled">
										<?php echo ba_resume_page_github_feed( 'bearded-avenger', $excluded = array(), $count = 5, $include_css = true);?>
									</ul>
								</div>
							</section>
							<hr />
							<!-- end github activity stream -->
						<?php }

						if (!$hide_portfolio) { ?>
							<!-- start portfolio -->
							<section class="row resume-portfolio-wrap">
								<div class="col-sm-3">
									<h4 class="zmt resume-item-title"><?php echo $portfolio_title;?></h4>
								</div>
								<div class="col-sm-9 resume-porfolio">
									<?php echo ba_resume_page_portfolio();?>
								</div>
							</section>
							<!-- end portfolio -->
						<?php } ?>

					</main>
					<!-- end main -->


				</div>
			</div>
		</section>
	<?php

do_action('ba_resume_page_after');

wp_footer();
