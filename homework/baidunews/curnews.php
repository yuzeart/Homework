<?php 
  header("Content-type:application/json; charset=utf-8");
  require_once('db.php');

  if($link){
  	$newsid = $_GET['newsid'];

    mysqli_query($link,"SET NAMES utf-8");
  	$sql = "SELECT * FROM 'news' WHERE 'id' = {$newsid}";

  	$result = mysqli_query($link,$sql);
    $senddata = array();

    while($row = mysqli_fetch_asso($result)){
          aarray_push($senddata,array(
            "id"=>$row['id'],
            "newstype"=>$row['newstype'],
            "newstitle"=>$row['newstitle'],
            "newsimg"=>$row['newsimg'],
            "newstime"=>$row['newstime'],
            "newssrc"=>$row['newssrc']
            ));
    }
    echo json_encode($senddata);
  }

    mysqli_close()






?>