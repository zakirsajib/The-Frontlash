<?php 

add_shortcode( 'frontlashstyleindex', 'frontlash_styleindex' );

function frontlash_styleindex($atts){
	ob_start();
?>

<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="col-lg-12 filter-by">
				<h4>Filter By</h4>
			</div>
			<div class="col-lg-12 show-all">
				<button class="btn active filter-btn" onclick="filterSelection('all')"> Show all</button>
			</div>
			<div id="myBtnContainer">
				<div class="col-lg-5 col-md-6 col-sm-12">
				  <button class="btn filter-btn" onclick="filterSelection('recycled')"> Recycled </button>
				  <button class="btn filter-btn" onclick="filterSelection('livingwage')"> Living Wage</button>
				  <button class="btn filter-btn" onclick="filterSelection('vegan')"> Vegan</button>
				  <button class="btn filter-btn" onclick="filterSelection('sustainable')"> Sustainable</button>
				  <button class="btn filter-btn" onclick="filterSelection('fairtrade')"> Fair Trade</button>
				</div>
				
				<div class="col-lg-5 col-md-6 col-sm-12">
				  <button class="btn filter-btn" onclick="filterSelection('organic')"> Organic </button>
				  <button class="btn filter-btn" onclick="filterSelection('transparency')"> Transparency</button>
				  <button class="btn filter-btn" onclick="filterSelection('philanthropic')"> Philanthropic</button>
				  <button class="btn filter-btn" onclick="filterSelection('locallymade')"> Locally Made</button>
				  <button class="btn filter-btn" onclick="filterSelection('representation')"> Representation</button>
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php return ob_get_clean(); 
} ?>