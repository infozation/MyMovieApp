<!DOCTYPE html>
<html>
<head>
	<title>myMovieApp</title>
	<!--Import online jquery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="stylesheet" href="custom/loader/css/normalize.css">
      <link rel="stylesheet" href="custom/loader/css/main.css">
      <script src="custom/loader/js/vendor/modernizr-2.6.2.min.js"></script>
      <script src="custom/charts/canvasjs.min.js"></script>
      <script src="custom/charts/jquery.canvasjs.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<!--<link rel="stylesheet" type="text/css" href="custom/layout/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="custom/layout/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="custom/layout/bootstrap-grid.css.map">
Import custom style.css-->
	<link rel="stylesheet" type="text/css" href="custom/css/admin-custom-style.css">
  
<script  src="custom/loader/js/main.js" ></script>
	
	<style type="text/css">
    /* fallback */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/materialicons/v48/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
}
.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
}

.sid-bar{
border: none;
color: #212121;
}
.sid-bar a:hover{
 color:   #212121;

}
.sid-rig-border{
height: 100%;
  border-right: solid #263238 5px;
}
.div-padding{
   padding: 10px;

}
.div-margin{
   margin: 10px;
}
#myProfile{
  display: none;

}
#myProfile .profile-box{
  z-index:2;
    position: absolute;
  right: 0px;
}

.profile-content{
 align-items: center; 
padding-top: 15px;
}
.user-img{

}
.scrollbar{
  height: 500px;
  overflow-y: scroll;
  overflow-x:hidden;
  }

#modalEdit::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #F5F5F5;
}

#modalEdit::-webkit-scrollbar
{
  width: 10px;
  background-color: #F5F5F5;
}

#modalEdit::-webkit-scrollbar-thumb
{
  background-color: #0ae;
  
  background-image: -webkit-gradient(linear, 0 0, 0 100%,
                     color-stop(.5, rgba(255, 255, 255, .2)),
             color-stop(.5, transparent), to(transparent));
}
/* style repection*/
#scrollbarEdit::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #F5F5F5;
}

#scrollbarEdit::-webkit-scrollbar
{
  width: 10px;
  background-color: #F5F5F5;
}

#scrollbarEdit::-webkit-scrollbar-thumb
{
  background-color: #0ae;
  
  background-image: -webkit-gradient(linear, 0 0, 0 100%,
                     color-stop(.5, rgba(255, 255, 255, .2)),
             color-stop(.5, transparent), to(transparent));
}
.divTopstyle{
  border-top: 5px solid #42a5f5;
}
/* LOADER */
.back-link a {
    color: #4ca340;
    text-decoration: none; 
    border-bottom: 1px #4ca340 solid;
  }
  .back-link a:hover,
  .back-link a:focus {
    color: #408536; 
    text-decoration: none;
    border-bottom: 1px #408536 solid;
  }
  h1 {
    height: 100%;
    /* The html and body elements cannot have any padding or margin. */
    margin: 0;
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
    font-size: 32px;
    margin-bottom: 3px;
  }
  .entry-header {
    text-align: left;
    margin: 0 auto 50px auto;
    width: 80%;
        max-width: 978px;
    position: relative;
    z-index: 10001;
  }
  #demo-content {
   width: 100%;

  }

</style>
</head>
<body class="demo blue-grey darken-3">

