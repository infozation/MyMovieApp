<?php
include "header.php";
include "config.php";
include "dash.php";
?>
<div class="col s12 m7 div-padding">
	<div class="row card">
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
		<div class="col">
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
		<div class="col">
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
		<div class="col">
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
	</div>
	
	<div class="row">
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

		




	</div><!--2nd row-->
</div>

<div class="col s12 m3">
 <div class="row">
    <div class="col">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"> Movie Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
     
  <div class="row">
  	<div class="col">
    <h6 class="header">Horizontal Card</h6>
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://lorempixel.com/100/190/nature/6">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
  </div>

 </div>
</div>
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
</script>
<!-- Modal Structure -->
  <div id="modalEdit" class="modal scrollbar divTopstyle">
  	<div style="background:#e0e0e0; width: 100%;padding: 5px;">
      <h4 class="card-title">Modal Header</h4>
      </div>

    <div class="modal-content">
       <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="col s8">
        	<div class="input-field col m12">
        		<input id="first_nameone" type="text" class="validate">
          <label for="first_nameone">Firstone Name</label>
        	</div>
        	<div class="input-field col m12">
        		<input id="first_nametwo" type="text" class="validate">
          <label for="first_nametwo">Firsttwo Name</label>
        	</div>
        	<div class="input-field col m12">
        		<input id="first_namethree" type="text" class="validate">
          <label for="first_namethree">Firstthree Name</label>
        	</div>
        	<div class="input-field col s12">
          <input id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
          
        </div>
        <div class="input-field col s3">
        	<div class="card-image waves-effect waves-block waves-light responsive-img" style="border:1px solid #e0e0e0 ;">
	      <img class="responsive-img" id="blah" src="custom/image/default-poster.jpg" alt="your image" height="200" width="">
	      	</div>
	      <div class="file-field input-field">
		      <div class="btn">
		        <span>File</span>
		        <input type="file" id="imgInp">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		    </div>
        </div>
      </div>
     
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
    </form>
  </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat blue-grey darken-4 grey-text text-lighten-5">Update</a>
    </div>
  </div>
  <?php
        	if(isset($_GET["movId"])){
        		$movId=$_GET["movId"];
        		$getMovSql="SELECT test_name,test_path,test_poster FROM test WHERE test_id='$movId'";
				$movRes=mysqli_query($conn,$getMovSql);

				$movRow=mysqli_fetch_assoc($movRes);
				$movName= $movRow["test_name"];
				$movPath= $movRow["test_path"];
				$movPoster= $movRow["test_poster"];
        	

          	echo "<script>alert('dg')<script>";
          }
          	?>