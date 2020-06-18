<?php
include "header.php";
include "dash.php";
include "config.php";

?>

<div class="col s12 m3">
	<div class="card div-padding div-margin" style="padding-bottom: 20px;">
		<form action="movie_single_insertion.php" method="" enctype="">
		<div class="card-title">
		<h5 >Upload Movie</h5>
		</div>
		<div class="input-field">
			<input type="text" name="movie_name" id="movie_name">
			<label for="movie_name">Movie Name</label>
		</div>
		<div class="row">
		<div class="input-field col s12 m6">
			<input type="text" name="movie_year" id="movie_year" >
			<label for="movie_year">Year</label>
		</div>
		<div class="input-field col s12 m6">
			<input type="text" name="movie_rating" id="movie_rating">
			<label for="movie_rating">Rating</label>
		</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m6">
			<input type="text" name="movie_size" id="movie_size">
			<label for="movie_size">Movie Size</label>
		</div>
		<div class="file-field input-field col s12 m6">
		    <div class="btn">
		    	<span>Stamp</span>
		       	<input type="file" id="imgInp" name="movie_poster">
		    </div>
		    <div class="file-path-wrapper">
		        <input class="file-path validate" type="text" placeholder="Movie Poster">
		    </div> 
		</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
			<input type="text" name="movie_path" id="movie_path">
			<label for="movie_path">File Path</label>
		</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m6">
			    <select multiple class="text-black" name="movie_category[]" size="4">
			      <option value="" disabled selected>Categories</option>
			      <?php
					categories();
			      ?>
			    </select>
			    <label>Select Categories (4)</label>
			 </div>
			 <div class="input-field col s12 m6">
	    	<select name="mov_Language">
		      <option value="" disabled selected>Choose Language</option>
		      <option value="tb_english">English</option>
		      <option value="tb_malayalam">Malayalam</option>
		      <option value="tb_tamil">Tamil</option>
		      <option value="tb_others">Other</option>
	    	</select>
	    	<label>Language</label>
	  	</div>
		</div>

		<button type="submit" class="btn-floating halfway-fab waves-effect 	waves-light red"><i class="material-icons">file_upload</i></button>
		</form>
	</div><!-- inner col s12 m7 (card col m5 div-padding div-margin)-->
</div><!--col s12 m4-->


<div class="col s12 m4">
<div class="card div-padding div-margin" style="padding-bottom: 20px;">
		<div class="card-title">
		<h5 >Scan Files</h5>
		</div>
		<div class="input-field">
			<input type="text" name="" id="movie_path_scan">
			<label for="movie_path_scan">Drive Path</label>
		</div>
		<div class="row">
		<div class="input-field col s12">
	    	<select>
		      <option value="" disabled selected>Choose DB Table</option>
		     <?php selectTable();?>
		      <!--<option value="1">English</option>
		      <option value="2">Malayalam</option>
		      <option value="3">Tamil</option>
		      <option value="3">Other</option>-->
	    	</select>
	    	<label>Database table in select</label>
	  	</div>

		</div>
	<button type="submit" class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="bottom" data-tooltip="Insert"><i class="material-icons">cloud_upload</i></button>
</div><!-- inner col s12 m7 (card col m5 div-padding div-margin)-->

<div class="card div-padding div-margin" style="padding-bottom: 20px;">
		<div class="card-title">
		<h5 >Scan Files</h5>
		</div>
		<div class="input-field">
			<input type="text" name="" id="movie_path_scan">
			<label for="movie_path_scan">Drive Path</label>
		</div>
		<div class="row">
		<div class="input-field col s12">
	    	<select>
		      <option value="" disabled selected>Choose DB Table</option>
		     <?php selectTable();?>
		      <!--<option value="1">English</option>
		      <option value="2">Malayalam</option>
		      <option value="3">Tamil</option>
		      <option value="3">Other</option>-->
	    	</select>
	    	<label>Database table in select</label>
	  	</div>

		</div>
	<button type="submit" class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="bottom" data-tooltip="Insert"><i class="material-icons">cloud_upload</i></button>
</div><!-- inner col s12 m7 (card col m5 div-padding div-margin)-->
</div>



<div class="col s12 m2">
    <div class="card">
	    <div class="card-image waves-effect waves-block waves-light  responsive-img">
	      <img class="activator  responsive-img" src="custom/image/default-poster.jpg" alt="your image" height="500" width="" id="blah">
	    </div>
	    <div class="card-content">
	      <span class="card-title activator grey-text text-darken-4">Preview Poster<i class="material-icons right">more_vert</i></span>
	      <p>image size 816x1200</p>
	    </div>
	    <div class="card-reveal">
	      <span class="card-title grey-text text-darken-4">Poster details<i class="material-icons right">close</i></span>
	      <p>Here is some more information about this product that is only revealed once clicked on.</p>
	      <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Crop Image</a>

	    </div>
  	</div>

</div>
<div class="row"><!--DB Movies Table -->
	<div class="col offset-m2 s12 m9 ">



	<div class="card">
		<div style="padding-bottom: 5px;">
		<nav class="blue-grey darken-4 grey-text text-darken-1">
		    <div class="nav-wrapper">
		      <form>
		        <div class="input-field">
		          <input id="search" type="search" required>
		          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
		          <i class="material-icons">close</i>
		        </div>
		      </form>
		    </div>
	  	</nav>
	  </div>
		<div class="col m3 s6">
			<div class="input-field">
	    	<select>
	      	<option value="" disabled selected>Choose your option</option>
	      	<option value="1">Option 1</option>
	      	<option value="2">Option 2</option>
	      	<option value="3">Option 3</option>
	    	</select>
	    	<label class="grey-text text-darken-4">Materialize Select</label>
	  		</div>
		</div>
		<div class="col m3 s6">
			<div class="input-field">
	    	<select multiple>
	      	<option value="" disabled selected>Choose your option</option>
	      	<option value="1">Option 1</option>
	      	<option value="2">Option 2</option>
	      	<option value="3">Option 3</option>
	    	</select>
	    	<label>Materialize Multiple Select</label>
	  		</div>
		</div>
		<div class="col m3 s12">
			<div class="input-field">
	    	<select>
	      	<option value="" disabled selected>Choose your option</option>
	      	<option value="1">Option 1</option>
	      	<option value="2">Option 2</option>
	      	<option value="3">Option 3</option>
	    	</select>
	    	<label>Materialize Select</label>
	  		</div>
		</div>
		<div class="col ">
			<div class="input-field">
	    	<button class="waves-effect waves-light btn-large">Sunmit</button>
	  		</div>
		</div>
	</div><!--search tab -->






		<div class="card">
			<table >
			<tr>
				<th>Poster</th>
				<th>Movie</th>
				<th>Edit/Update</th>
			</tr>
		</table>
		
		<div  class="scrollbar" id="scrollbarEdit">
			<table class="highlight">
				<?php
		$get_list="SELECT * FROM test ORDER BY test_id DESC";
		$listReslut = mysqli_query($conn,$get_list);
		while ($listRow=mysqli_fetch_array($listReslut)) {
		# code...
		?>
			<tr>
				<td class="center" width="50">
					<?php
					if ($listRow["test_poster"] == NULL) {
					?>
					<img src="custom/image/default-poster.jpg" alt="" class="" width="50" height="50">
					<?php
					}else{
						?>
						<img src="<?php echo $listRow["test_poster"]; ?>" alt="" class="" width="50" height="50">
					<?php
					}
					?>
				</td>
				<td>
					<?php echo $listRow["test_name"]; ?>
				</td>
				<td width="80" class="center">
					<a class="modal-trigger" href="addMovieDetails.php?movId=<?php echo $listRow["test_id"]; ?>"><i class="material-icons">edit</i></a>
				</td>
			</tr>
	
  
			<?php
			}
			?>
		</table>
		</div>
		</div><!--card-->
	</div><!-- col s12 m12 -->
	</div><!--2nd row-->
 <!-- Modal Structure Image Croping -->

  <div id="modal1" class="modal modal-fixed-footer" style="scroll-behavior: smooth; overflow: scroll;">
    <div class="modal-content video-container">
      <h4>Picture Cropper</h4>
      <object class="" width="100%" height="500px" data="custom/Cropper/img-crop.html" allowfullscreen></object>
      
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

	       
	<?php

function categories(){
$conn=mysqli_connect("localhost","root","","movies_db");

$sltCat = "SELECT * FROM tb_categories";
$sltCatResult =mysqli_query($conn,$sltCat);
while ($rowCat = mysqli_fetch_array($sltCatResult)) {
	?>
	<option value="<?php echo $rowCat['cat_id']; ?>"> <?php echo $rowCat["cat_name"]; ?> </option>
	<?php
}
}

	function selectTable(){
	$connt=mysqli_connect("localhost","root","","movies_db");
$sqltb = "SHOW TABLES FROM movies_db";
$res = mysqli_query($connt, $sqltb);
    $table = array();
    while($row = mysqli_fetch_array($res)){
  
    ?>
    	<option value="<?php echo $table[] = $row[0];?>"> <?php echo $table[] = $row['0'];?></option>
    <?php

	}
}
	?>


  <script type="text/javascript">
//preview img Poster upload
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imgInp").change(function() {
  readURL(this);
});
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);
  });
$(document).ready(function() {
    $("#skill_input").autocomplete({
        source: "autocomplete.php",
    });
});
 
  </script>
  <?php
function category(){
	include "config.php";
	$catsql="SELECT * FROM tb_category";
	$catResult =mysqli_query($conn,$catsql);
	while ($catrow=mysqli_fetch_array($catResult)) {
		echo "<br><option value='".$catrow["cat_name"]."'>".$catrow["cat_name"]."</option>";
	}
}
  ?>