  <div class="row">
   <nav class="blue-grey darken-4">
   	<div class="nav-wrapper">
      <a href="#!" class="brand-logo"><i class="material-icons">whatshot</i>Logo</a>
       <a href="#" data-target="slide-out1" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Notification">notifications</i></a></li>
        <li><a href="../testing%202/index.php" target="_blank"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Site">remove_red_eye</i></a></li>
        <li><a href="index.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Refresh">refresh</i></a></li>
        <li><a href="#" onclick="myFunction()"><i class="material-icons tooltipped" data-position="left" data-tooltip="Profile" >account_circle</i></a></li>
      </ul>
    </div>
  
</nav>
<!--Admin Profile float div-->
 <div id="myProfile" class="z-depth-3">
    <div class="col m2 profile-box">
      <div class="card small center">
        <div class="user-view">
	      <div class="profile-content">
	        <a href="#user"><img class="card-image circle responsive-img user-img z-depth-3" src="custom/poster/abin.jpg" width="120" height="120"></a>
	      </div>
	      <a href="#name" ><span class="black-text name" style="font-size:11px; color: #f4511e;">edit</span></a><br>
	      <a href="#name" ><span class="black-text name">ABIN REMESH</span></a>
	      <br>
	      <a href="#email"><span class="black-text">adminsupport@gmail.com</span></a>
	    </div>
      </div>
    </div>
  </div>

<!-- Profile left-side nav-->
<ul id="slide-out1" class="sidenav">
	<li><div class="user-view">
	      <div class="background">
	        <img src="custom/image/background1.jpg">
	      </div>
	      <a href="#user"><img class="circle" src="custom/poster/abin.jpg"></a>
	      <a href="#name"><span class="white-text name">Admin</span></a>
	      <a href="#email"><span class="white-text email">adminsupport@gmail.com</span></a>
	    </div>
	</li>
    <li><a href="#!"><i class="material-icons">cloud</i>Cloud</a></li>
    <li><a href="#!">Scevice</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Dashboard</a></li>
    <li><a href="../testing%202/index.php" target="_blank"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Site">remove_red_eye</i>Site</a></li>
    <li><a class="waves-effect" href="user_management.php">User Management</a></li>
  </ul>

<!-- side Navigation-->

  
      <div class="col s12 m2 sid-rig-border">
	     <div class="collection sid-bar">
	     	<a class="collection-item blue-grey darken-4" href="index.php"><h4>Dashboard</h4></a>
	        <a href="#!" class="collection-item ">Search</a>
	        <a href="#!" class="collection-item "><span class="new badge">7</span>Movie Reviews</a>
	        <a href="#!" class="collection-item dropdown-trigger" data-target='dropdown1'>Service<i class="material-icons right">arrow_drop_down</i></a>
	         <a href="#!" class="collection-item ">About</a>
	         <a href="page.php" class="collection-item ">Page</a>
	         <a href="#!" class="collection-item dropdown-trigger" data-target='dropdown2'>Miscellaneous<i class="material-icons right">arrow_drop_down</i></a>
	         <a href="#!" class="collection-item "></a>
			<ul class="collapsible">
		    <li>
		      <div class="collapsible-header"><i class="material-icons">place</i>User Management</div>
		      <div class="collapsible-body blue-grey lighten-5"><span>Lorem ipsum dolor sit amet.</span></div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">person</i>Second</div>
		      <div class="collapsible-body blue-grey lighten-5"><span>Lorem ipsum dolor sit amet.</span></div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">perm_data_setting</i>Third</div>
		      <div class="collapsible-body blue-grey lighten-5"><span>Lorem ipsum dolor sit amet.</span></div>
		    </li>
		  </ul>
	 </div>
  </div>
<!-- Dropdown Structure SERVICE -->
  <ul id='dropdown1' class='dropdown-content'>
    <li disabled><a href="#!"> Service<i class="material-icons">arrow_drop_up</i></a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="service_add.php"><i class="material-icons">add_box</i>upload</a></li>
    <li><a href="#!"><i class="material-icons">edit</i>update link</a></li>
    <li><a href="#!"><i class="material-icons">insert_drive_file</i>add description</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>cloud</a></li>
  </ul>
<!-- Dropdown Structure MISCELLANEOUS-->
  <ul id='dropdown2' class='dropdown-content'>
    <li disabled><a href="#!"> Miscellaneous<i class="material-icons">arrow_drop_up</i></a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="view_db_table.php"><i class="material-icons">view_list</i>view db table</a></li>
    <li><a href="#!"><i class="material-icons">edit</i>update link</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>cloud</a></li>
  </ul>
      
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myProfile");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems,options);
  });

  // Or with jQuery
  $(document).ready(function(){
 $('.dropdown-trigger').dropdown();
 });
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();

  });
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tap-target');
    var instances = M.TapTarget.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.tap-target').tapTarget();
  });
          
  
</script>