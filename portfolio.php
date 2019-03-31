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
                      <a href="index.html">Home</a>
                      <a href="portfolio.html">Portfolio</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
    
	<section class="portfolio_area section-margin pb-0" id="portfolio">
		<div class="container-fluid" style="padding: 0px 80px;">
			<div class="row" style="height: 350px;;">
				<div class="col-lg " >
					<div class="col iffy portfolio_image " id="show_hide"class="portfolio_image" ></div>
				</div>
				<div class="col-lg " >
					<div class="col iffy portfolio_image" id="show_hide1" class="portfolio_image" ></div>
				</div>
				<div class="col-lg " >
					<div class="col iffy portfolio_image"  id="show_hide2"class="portfolio_image" ></div>
				</div>
				<div class="col-lg " >
					<div class="col iffy portfolio_image"  id="show_hide3"class="portfolio_image" ></div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col" id="item">
					<h2>Title 1</h2>
					<p>Also signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
							moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
							his faceAlso signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
							moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
							his face
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col" id="item1">
					<h2>Title 2</h2>
					<p>Also signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
							moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
							his faceAlso signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
							moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
							his face
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col" id="item2">
					<h2>Title 3</h2>
					<p>Also signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
							moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
							his faceAlso signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
							moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
							his face
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col" id="item3">
					<h2>Title 4</h2>
					<p>Also signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
							moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
							his faceAlso signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
							moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
							his face
					</p>
				</div>
			</div>
		</div>
	</section>
<?php include_once('include/footer.php');?>