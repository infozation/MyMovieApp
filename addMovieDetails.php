<?php
include "config.php";
include 'header.php';
include 'lib.php';
$movId=$_GET["movId"];
?>
<div class="navbar-fixed">
<nav class="blue-grey darken-4">
	<a href="index.php" class="brand-logo"><?php siteInfo("site_name");?></a>
	<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>	
</nav>
</div>
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  
<form method="POST" >
<div class="container">
<div style="float: right;font-size: 11px; color: white;"></div>
	<div class="container" style="margin-bottom: 40px;:">
		<div class="container center ">
			<div class="row" style="margin-top: 15px;">
				<div class="col s6 m6 offset-s3 offset-m3">
					<div class="card">
						<div class="card-image">
							<?php
								$sqlposter = "SELECT * FROM test WHERE test_id='$movId'";
								$posterrslt=mysqli_query($conn,$sqlposter);
								while ($rowPoster=mysqli_fetch_array($posterrslt)) {
								
							if($rowPoster["test_poster"]==NULL)
							{?>
								<img src="custom/image/default-poster.jpg" class="responsive-img">
							<?php
							}else{
								?>
								<img src="<?php echo $rowPoster["test_poster"]; ?>" class="responsive-img">
								<?php
							}} ?>
						</div>
					</div>
				</div>
			</div>

					<div class="row center">
						<div class="">
							<div class="input-field col s12">
				          	<input value=" <?php getField('test',$movId,'test_id','test_name'); ?> "id="name" type="text" class="validate grey-text text-lighten-4">
				          	<label for="name">Movie Name</label>
				        	</div>
						</div>
					</div>
					<div class="row center">
						<div class="">
							<div class="input-field col s12">
				          	<input id="size" type="text" class="validate grey-text text-lighten-4">
				          	<label for="size">Size</label>
				        	</div>
						</div>
					</div>
					<div class="row center">
						<div class="">
							<div class="input-field col s12">
				          	<input value="<?php getField("test",$movId,"test_id","test_path");?>" id="path" type="text" class="validate grey-text text-lighten-4">
				          	<label for="path">Path</label>
				        	</div>
						</div>
					</div>
					<div class="row center">
						<div class="">
							<div class="input-field col s12">
				          	<input id="director" type="text" class="validate grey-text text-lighten-4">
				          	<label for="director">Director</label>
				        	</div>
						</div>
					</div>
					<div class="row center">
						<div class="">
							<div class="input-field col s12">
				          	<input id="actor" type="text" class="validate grey-text text-lighten-4">
				          	<label for="actor">Male Actor</label>
				        	</div>
						</div>
					</div>
					<div class="row center">
						<div class="">
							<div class="input-field col s12">
				          	<input id="FemaleActor" type="text" class="validate grey-text text-lighten-4">
				          	<label for="FemaleActor">Female Actor</label>
				        	</div>
						</div>
					</div>
					<div class="row center">
						<div class="">
							<div class="input-field col s12">
				          	<input id="Producer" type="text" class="validate grey-text text-lighten-4">
				          	<label for="Producer">Producer</label>
				        	</div>
						</div>
					</div>
					<div class="file-field input-field col s12 m6">
					    <div class="btn">
					    	<span>Stamp</span>
					       	<input type="file" id="imgInp" name="movie_poster">
					    </div>
					    <div class="file-path-wrapper">
					        <input class="file-path validate grey-text text-lighten-4" type="text" value="<?php getField("test",$movId,"test_id","test_poster");?>">
					    </div> 
					</div>
					<div class="row">
						<button class="btn-large waves-effect waves-light" type="submit" name="action">Submit
		    			<i class="material-icons right">send</i>
		  				</button>				
					</div>
		</div>
	</div>
</div>
</form>
<script type="text/javascript">
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
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });

</script>