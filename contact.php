<?php include_once('include/header.php'); ?>
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
	  <div class="container">
		  <div class="banner_content text-center banner_content_h2">
			  <h2>Contact</h2>
			  <div class="page_link">
				  <a>Kom op de digitale koffie.</a>
			  </div>
		  </div>
	  </div>
  </div>
</section>
<section class="section-margin">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Neem contact met ons op</h2>
			</div>
			<div class="col-lg-8 mb-4 mb-lg-0" style="">
				<form class="form-contact contact_form" action="mailer.php"  method="post" required id="contactForm" novalidate="novalidate">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<input class="form-control" name="subject" id="subject" type="text" required placeholder="Onderwerp">
							</div>
						</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input class="form-control" name="name" id="name" type="text" required placeholder="Naam">
						</div>
					</div>
						<div class="col-sm-6">
						<div class="form-group">
							<input class="form-control" name="email" id="email" type="email" required placeholder="Email adres">
						</div>
					</div>
						<div class="col-12">
							<div class="form-group">
								<input type="hidden" name="_next" />
								<textarea class="form-control w-100" name="message" id="message"required  cols="30" rows="9" placeholder="Bericht"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group mt-lg-3">
						<button type="submit" class="primary_btn button-contactForm">Verstuur bericht</button>
					</div>
				</form>
			</div>
			<div class="col-lg-4">
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-home"></i></span>
					<div class="media-body">
						<h3>Emmen, Drenthe</h3>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-tablet"></i></span>
					<div class="media-body">
						<h3><a href="tel:454545654">06 872 073 07</a></h3>
						<p>24/7 Bereikbaar via WhatsApp <br>
						Voor een snel antwoord op al u vragen.</p>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3><a href="mailto:support@colorlib.com">info@friendlytapirs.com</a></h3>
						<p>Vraag een offerte aan.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include_once('include/footer.php'); ?>