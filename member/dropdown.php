<?php require_once('backend/condb.php');

	$query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
	$result_type =mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
		// echo($query_type);
        // exit()
 ?> 
 
 
  <section class="box_search_shop p-3 p-md-5 bg-light container shadow-sm">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="fas fa-bed fa-4x "></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <div class="dropdown">
  <button class=" btn btn-dark btn-flat dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ประเภทสินค้า
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="index.php">ทั้งหมด</a>
  <?php foreach ($result_type as $row )  { ?>
  <a class="dropdown-item" href="index.php?act=showbytype&type_id=<?php echo $row['type_id'];?>">
          <?php echo $row["type_name"]; ?></a>
          
	<?php } ?>
  </div>
</div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  </section>
    