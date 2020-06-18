<?php
include 'config.php';
$mov_lang=$_POST["mov_Language"]
$mal_name = $_POST["movie_name"];
$mal_cat = $_POST["movie_category"];
$mal_poster = $_POST["movie_poster"];
$mal_year = $_POST["movie_year"];
$mal_size = $_POST[""];
$mal_rating = $_POST["movie_rating"];
$mal_file = $_POST[""];
$mal_modify = $_POST[""];


#movie_category
foreach($_POST['movie_category'] as $ck=>$cv) {


 }


$m_insertsql = "INSERT INTO `tb_malayalam`(`mal_id`, `mal_name`, `mal_cat`, `mal_poster`, `mal_year`, `mal_size`, `mal_rating`, `mal_file`, `mal_modify`) VALUES (,,,,,,,,)";


?>