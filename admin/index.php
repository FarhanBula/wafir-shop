<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>

	
	<center><h1>Hai Admin!! | Selamat Datang Di Aplikasi Wafir Shop</h1></center>
	<br/>
	<div class="col-md-8 col-md-offset-2">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>		
			</ol>
 
			<!-- deklarasi carousel -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="foto/FB_IMG_15709495696545247.jpg" style="width: 100%; height: 700px;" >
					<div class="carousel-caption">
						<h3>Wafir Shop</h3>
						<p>Barang Keren Dan Berkualitas.</p>
					</div>
				</div>
				<div class="item">
					<img src="foto/FB_IMG_15705139006076501.jpg" style="width: 100%; height: 700px;" >
					<div class="carousel-caption">
						<h3>Wafir Shop</h3>
						<p>Barang Keren Dan Berkualitas.</p>
					</div>
				</div>
				<div class="item">
					<img src="foto/FB_IMG_15709495877272563.jpg" style="width: 100%; height: 700px;">
					<div class="carousel-caption">
						<h3>Wafir Shop</h3>
						<p>Barang Keren Dan Berkualitas.</p>
					</div>
				</div>				
			</div>
 
			<!-- membuat panah next dan previous -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

<?php 
include 'footer.php';

?>