<?php

wp_head();

do_action('ba_resume_page_before');

	?>
		<section class="resume-wrap">
			<div class="resume-container">
				<div class="resume-inner">

					<header class="row resume-section-header">
						<div class="col-sm-3">
							<img src="http://placekitten.com/600/400" class="img-responsive">
						</div>
						<div class="col-sm-6">
							<h1>Unicorn Rider</h1>
							<h3>Crime Fighting Superstar</h3>
							<a href="#">email@info.com</a>
							<a href="#">http://website.com</a>
							<a class="muted" href="#">555-555-5555</a>
						</div>
						<div class="col-sm-3">
							<ul class="resume-social unstyled">
								<li><a href="#">tweeter</a></li>
								<li><a href="#">tweeter</a></li>
								<li><a href="#">tweeter</a></li>
							</ul>
						</div>
					</header>

					<!-- start main -->
					<main class="resume-section-main">

						<!-- start objective -->
						<section class="row resume-objective">
							<div class="col-sm-3">
								<h3>Objective</h3>
							</div>
							<div class="col-sm-9">
								<p>Seeking expanded opportunies within select organizations where I can utilize my expertise to implement profit oriented results.</p>
							</div>
						</section>
						<!-- end objective -->

						<hr />

						<!-- start work experience wrap -->
						<section class="row resume-work-experience">
							<div class="col-sm-3">
								<h3>Experience</h3>
							</div>
							<div class="col-sm-9">

								<!-- company -->
								<div class="row">
									<div class="col-sm-9">
										<h3>Senior Project Manager</h3>
										<h4><small>Web Design stuidios</small></h4>
										<p>Did some shit here</p>
									</div>
									<div class="col-sm-3">
										<p class="label label-info">label</p>
									</div>
								</div>
								<!-- end company -->

								<!-- company -->
								<div class="row">
									<div class="col-sm-9">
										<h3>Senior Project Manager</h3>
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

						<!-- start skillset wrap -->
						<section class="row resume-skillset">
							<div class="col-sm-3">
								<h3>Skills</h3>
							</div>
							<div class="col-sm-9">

								<!-- skillset 1 -->
								<div class="row">
									<div class="col-sm-6">
										<ul class="unstyled">
											<li>skill</li>
											<li>skill</li>
											<li>skill</li>
										</ul>
									</div>
									<div class="col-sm-6">
										<ul class="unstyled">
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

						<!-- end education wrap -->

					</main>
					<!-- end main -->

				</div>
			</div>
		</section>
	<?php

do_action('ba_resume_page_after');

wp_footer();
