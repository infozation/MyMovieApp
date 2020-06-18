<?php
include "header.php";
include "dash.php";
?>
<div class="col s12 l10">
    
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Test 1</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab col s3" id="select_tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12" style="height: 500px;">Test 1</div>
    <div id="test2" class="col s12" style="height: 500px;">Test 2</div>
    <div id="test3" class="col s12" style="height: 500px;">Test 3</div>
    <div id="test4" class="col s12" style="height: 500px;">Test 4</div>
  </div>   
</div>
<script type="text/javascript">
	
  var instance = M.Tabs.init(el, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.tabs').tabs('select_tab','tab_id');
  });
</script>