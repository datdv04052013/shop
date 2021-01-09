<?php
		include "connect.php";
	 	$sql = "select * from song, artist where song.artist_id = artist.id ";
         if( isset($_GET['search']) ){
            $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
            $sql = "select * from song, artist where song.artist_id = artist.id and song.name='$name' or artist.artist_name= '$name' ";
         }
	 	$result = $con->query($sql);



?>

<!-- list product -->


<div class="container">
		<div class="row mt-4">
			<h2 class="list-product-title">MV Hot</h2>
			<div class="list-product-subtitle">
				<p>All the hottest MV today</p>
			</div>
			<div class="product-group">
				<div class="row">
					<?php
					while($row = mysqli_fetch_array($result))
					{
					?>
					<div class="col-md-3 col-sm-6 col-12">
						<div class="card card-product mb-3">
							<img class="card-img-top" src="images/<?php  echo $row['image'];?>">
							<div class="card-body">
								<h5 class="card-title"><?php echo $row['name'];?></h5>
								<p class="card-text">Artist: <?php  echo $row['artist_name'];?></p>
								<p class="card-price">Price: $<?php echo $row['price'];?></p>
								<audio id='audio_1' controls style="width: 220px;" autoplay="0" autostart="0">
									<source src='images/<?php echo $row['sound'];?>' />
								</audio>
								<button class="btn btn-primary">Listen</button>
								<button class="btn btn-danger" style="float:right;"> Add to Cart</button>
							</div>
						</div>
					</div>	
					<?php  } ?>		
				</div>
			</div>
		</div>
		
		

</div>
<!-- end list product -->
