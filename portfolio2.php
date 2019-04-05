<?php include_once('include/header.php'); ?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
  $(document).ready(function() {
     $("#show_hide").click(function () {
		 $("#item").hide("500"); 
		$("#item1").hide("500"); 
		$("#item2").hide("500"); 
		$( "#item" ).toggle({
			duration: 500,
		});
  });  
  });
  $(document).ready(function() {
     $("#show_hide1").click(function () {
		$("#item").hide("500"); 
		$("#item2").hide("500"); 
		$("#item3").hide("500"); 
		$( "#item1" ).toggle({
			duration: 500,
		});
  });  
  });
  $(document).ready(function() {
     $("#show_hide2").click(function () {
		$("#item").hide("500"); 
		$("#item1").hide("500"); 
		$("#item3").hide("500"); 
		$( "#item2" ).toggle({
			duration: 500,
		});
  });  
  });
  $(document).ready(function() {
     $("#show_hide3").click(function () {
		$("#item").hide("500"); 
		$("#item1").hide("500"); 
		$("#item2").hide("500"); 
		$( "#item3" ).toggle({
			duration: 500,
		});
  });  
  });
</script>
   

  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center banner_content_h2">
                  <h2>Portfolio</h2>
                  <div class="page_link">
                      <a>ons vorige werk op een rijtje</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
    
	<section class="portfolio_area section_gap_bottom" id="portfolio" style="padding-top: 40px;">
		<div class="container-fluid" style="padding: 0px 80px;">
			<div class="row justify-content-start align-items-center">
				<div class="col main_title">
				<h2>Onze vorige projecten.</h2>
				</div>
			</div>
			
			<div class="row">
				<div class="col squar">
					<img src="https://placehold.it/250x250">
				</div>
				<div class="col squar">
					<img src="https://placehold.it/250x250">
				</div>
				<div class="col squar">
					<img src="https://placehold.it/250x250">
				</div>
				<div class="col squar">
					<img src="https://placehold.it/250x250">
				</div>
				<div class="col squar">
					<img src="https://placehold.it/250x250">
				</div>
				<div class="col squar">
					<img src="https://placehold.it/250x250">
				</div>
			</div>
		</div>
	</section>
	
	
<?php include_once('include/footer.php');?>