<?php
include "config.php";
include "header.php";
?>
<div id="demo-content">
 

    <div id="loader-wrapper">
      <div id="loader"></div>
     <!--- <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div> -->
    </div>
    <div id="content">
<?php  include "dash.php"; ?>

<div class="col s12 m4 l3">

	<div style="margin: 10px">
		<div class="row">
			<div class="card">
	    <div class="card-image waves-effect waves-block waves-light">
	      <div id="DBCount" style="height: 300px; width: 100%;"></div>
	    </div>
	    <div class="card-content">
	      <span class="card-title activator grey-text text-darken-4">Memory Allocation<i class="material-icons right">more_vert</i></span>
	      <p><a href="#">This is a link</a></p>
	    </div>
	    <div class="card-reveal">
	      <span class="card-title grey-text text-darken-4">Database Memory Allocation<i class="material-icons right">close</i></span>
	      <?php

			function get_dir_size($dir_name){
	        $dir_size =0;
	           if (is_dir($dir_name)) {
	               if ($dh = opendir($dir_name)) {
	                  while (($file = readdir($dh)) !== false) {
	                        if($file !="." && $file != ".."){
	                              if(is_file($dir_name."/".$file)){
	                                   $dir_size += filesize($dir_name."/".$file);
	                             }
	                             /* check for any new directory inside this directory */
	                             if(is_dir($dir_name."/".$file)){
	                                $dir_size +=  get_dir_size($dir_name."/".$file);
	                              }
	                           }
	                     }
	             }
	       	}
			closedir($dh);
			return $dir_size;
			}

			$dir_name = "D:/xampp/htdocs/myMovieApp/";
			/* 1048576 bytes == 1MB */
			$total_size= round((get_dir_size($dir_name) / 1048576),2) ;
			print "Directory $dir_name , Application size : $total_size MB";
			?>
	    </div>
	  </div>
</div>

</div>

	
</div>
<div class="col s12 m4 l3">

<div style="margin: 10px">
	<div class="row">
		<div class="card">
	    <div class="card-image waves-effect waves-block waves-light">
	      <div id="MovieCount" style="height: 400px; width: 100%;"></div>
	    </div>
	    <div class="card-content">
	      <span class="card-title activator grey-text text-darken-4">Movies<i class="material-icons right">more_vert</i></span>
	      <p><a href="#">This is a link</a></p>
	    </div>
	    <div class="card-reveal">
	      <span class="card-title grey-text text-darken-4">Movie Size <i class="material-icons right">close</i></span>
	      <?php

			print "Directory $dir_name , Application size : $total_size MB";
			?>
	    </div>
	  </div>
	</div>
</div>
</div><!--first Row div (from dash.php)-->
	</div> <!-- Loader content -->
</body>
</html>



<script type="text/javascript">
		$(function () {
			var chart = new CanvasJS.Chart("MovieCount", {
				title: {
					text: "MyMovieApp Contains files "
				},
				exportFileName: "CanvasJS Chart",
				exportEnabled: true,
				animationEnabled: true,
				legend: {
					verticalAlign: "bottom",
					horizontalAlign: "center"
				},
				data: [
				{
					type: "pie",
					showInLegend: true,
					toolTipContent: "{legendText}: <strong>{y}%</strong>",
					indexLabel: "{label} {y}%",
					dataPoints: [
						{ y: 30, legendText: "Health", exploded: true, label: "Health" },
						{ y: 25, legendText: "Finance", label: "Finance" },
						{ y: 18, legendText: "Career", label: "Career" },
						{ y: 15, legendText: "Education", label: "Education" },
						{ y: 5, legendText: "Family", label: "Family" },
						{ y: 7, legendText: "Real Estate", label: "Real Estate" }
					]
				}
				]
			});
			chart.render();
		});

		$(function () {
			var chart = new CanvasJS.Chart("DBCount", {
				title: {
					text: "Database Memory Allocation",
					horizontalAlign: "right"
				},
				axisX: {
					tickThickness: 0,
					interval: 1,
					intervalType: "year"
				},
				animationEnabled: true,
				toolTip: {
					shared: true
				},
				axisY: {
					lineThickness: 0,
					tickThickness: 0,
					interval: 20
				},
				legend: {
					verticalAlign: "center",
					horizontalAlign: "left"
				},

				data: [
				{
					name: "Real-Time",
					showInLegend: true,
					type: "stackedColumn100",
					color: "#009B6D ",
					indexLabel: "{y}",
					dataPoints: [
					{ x: new Date(2009, 0), y: 30 },
					{ x: new Date(2010, 0), y: 40 },
					{ x: new Date(2011, 0), y: 50 },
					{ x: new Date(2012, 0), y: 60 },
					{ x: new Date(2013, 0), y: 40 },
					{ x: new Date(2014, 0), y: 50 }
					]
				},
				{
					name: "Web Browsing",
					showInLegend: true,
					type: "stackedColumn100",
					color: "#0084D9 ",
					indexLabel: "{y}",
					dataPoints: [
					{ x: new Date(2009, 0), y: 40 },
					{ x: new Date(2010, 0), y: 28 },
					{ x: new Date(2011, 0), y: 18 },
					{ x: new Date(2012, 0), y: 18 },
					{ x: new Date(2013, 0), y: 18 },
					{ x: new Date(2014, 0), y: 18 }
					]
				},
				{
					name: "File Sharing",
					showInLegend: true,
					type: "stackedColumn100",
					color: "#4992D9 ",
					indexLabel: "{y}",
					dataPoints: [
					{ x: new Date(2009, 0), y: 15 },
					{ x: new Date(2010, 0), y: 15 },
					{ x: new Date(2011, 0), y: 12 },
					{ x: new Date(2012, 0), y: 10 },
					{ x: new Date(2013, 0), y: 12 },
					{ x: new Date(2014, 0), y: 10 }
					]
				},
				{
					name: "Other",
					showInLegend: true,
					type: "stackedColumn100",
					color: "#7ADAF2 ",
					indexLabel: "{y}",
					dataPoints: [
					{ x: new Date(2009, 0), y: 15 },
					{ x: new Date(2010, 0), y: 17 },
					{ x: new Date(2011, 0), y: 20 },
					{ x: new Date(2012, 0), y: 18 },
					{ x: new Date(2013, 0), y: 20 },
					{ x: new Date(2014, 0), y: 17 }
					]
				}

				]
			});

			chart.render();
		});

	</script>