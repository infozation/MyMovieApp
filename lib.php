<?php

/**

class ClassName 
{
	public $table;
	public $tbid;
	public $tbIdField;
	public $field;

	function getItem(this->$table,this->$tbId,this->$tbIdField,this->$field)
	{
		
			}
}
 
**/
//$conn = mysqli_connect("localhost","root","","movies_db");

function currentDT($fm){
// $fm(formate)
if($fm=="Y-M-D"){
	echo date('Y-M-D');
}elseif($fm=="Y-m-d"){
echo date('Y-m-d');
}elseif($fm=="Ymd"){
	echo date("Ymd");
}elseif ($fm=="h-i-s"){
	echo date('h-i-s');
}
}

function siteInfo($siteField){
include "config.php";

	$getNameSql = "SELECT * FROM siteinfo";
	$getNameResult=mysqli_query($conn,$getNameSql);
	while($getNameRow=mysqli_fetch_array($getNameResult)){
		$siteInfo = $getNameRow[$siteField]; 
		echo $siteInfo;
	}
}
function getField($table,$tbId,$tbIdField,$field){
include "config.php";

	$getNameSql = "SELECT * FROM $table WHERE $tbIdField ='$tbId' ";
	$getNameResult=mysqli_query($conn,$getNameSql);
	while($getNameRow=mysqli_fetch_array($getNameResult)){
		$movName = $getNameRow[$field]; 
		echo preg_replace('{[-_:".<>|]}'," ",$movName);
	}
}
function getFieldLink($table,$tbId,$tbIdField,$fieldLink){
include "config.php";

	$getLinkSql = "SELECT * FROM $table WHERE $tbIdField ='$tbId' ";
	$getLinkResult=mysqli_query($conn,$getLinkSql);
	while($getLinkRow=mysqli_fetch_array($getLinkResult)){
		echo $getLinkRow[$fieldLink]; 
	}
}
function getPoster($table,$tbId,$tbIdField,$fieldLink){
include "config.php";

	$getLinkSql = "SELECT * FROM $table WHERE $tbIdField ='$tbId' ";
	$getLinkResult=mysqli_query($conn,$getLinkSql);
	while($getLinkRow=mysqli_fetch_array($getLinkResult)){
		if($getLinkRow[$fieldLink]==NULL)
				{?>
					<img src="custom/image/default-poster.jpg" class="responsive-img">
				<?php
				}else{
					?>
					<img src="<?php echo $getLinkRow[$fieldLink]; ?>" class="responsive-img">
					<?php
				}
	}
}
function getFieldAll($table,$tbId,$tbIdField,$field){

	$conn=mysql_connect("localhost","root","","movies_db");
	$query="SELECT * FROM $table WHERE $tbIdField ='$tbId' ";
	$result=mysql_query($conn,$query) or die("Query ($query) sucks!");
	$fields=mysql_num_fields($result);
	echo $fields;
	echo "<table>\n<tr>";
	for ($i=0; $i <= $fields; $i++) //Table Header
		{ print "<th>".mysql_field_name($result, $i)."</th>"; }
		echo "</tr>\n";
		while ($row = mysql_fetch_row($result)) { //Table body
			echo "<tr>";
    		for ($f=0; $f < $fields; $f++) {
    		echo "<td>$row->$f</td>"; }
		echo "</tr>\n";}
	echo "</table><p>";
}

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
function addMovieDetails($movie_id){

//adminUpadate
//userUpade
$m_id = str_split($movie_id, 3);

 if($m_id[0] == "eng"){
 	$my_tb = "tb_english";
 }elseif ($m_id[0] == "mal") {
 	$my_tb = "tb_malayalam";
 }elseif ($m_id[0] == "hin"){
 	$my_tb = "tb_hindi";
 }else{
 	$message = 'Somthin Wrong...';

    echo "<script> 
    window.alert('".$message."');window.location='addMovieDetails.php'
    </script>";
 }

				 include 'config.php';
					$mov_lang=$_POST["mov_Language"];
					$mov_name = $_POST["mov_name"];
					$mov_cat = $_POST["mov_category"];
					$mov_poster = $_POST["mov_poster"];
					$mov_year = $_POST["mov_year"];
					$mov_size = $_POST["mov_size"];
					$mov_rating = $_POST["mov_rating"];
					$mov_file = $_POST[""];
					$mov_modify = $_POST[""];

				 



$insert_m_sql = "UPDATE `$my_tb` SET ( $m_id[0]_name='$mov_name', $m_id[0]_cat='$mov_cat', $m_id[0]_poster='$mov_poster', $m_id[0]_year='$mov_year', $m_id[0]_size='$mov_size', $m_id[0]_rating='$mov_rating', $m_id[0]_file='$mov_file', $m_id[0]_modify ='$mov_modify')";

$m_update_Return='updation error';
(!mysqli_query($conn,$insert_m_sql)) ? $m_update_Return
 : 'success';

}
?>