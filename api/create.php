<?php   
    header('Access-Control-Allow-Origin:*');
    header('Content-Type:applcation/json');
    header('Access-Control-Allow-Methods: POST');
    header ('Access-Control-Allow-Headers:Access-Control-Allow-Origin,Content-Type, Access-Control-Allow-Methods,Authorization,X-Requested-With');
    
    require_once('../initialize.php');

    $pictures=new Picture($conn);

    //getData
    $result=file_get_contents('php://input');
    $data=json_decode($result);
    
    
    $pictures->title=$data->title;
    $pictures->url=$data->url;

    if($pictures->create()){
        echo json_encode(array('message'=>'data successfully added'));
    }
    else{
        echo json_encode(array('message'=>'failed to add data'));
    }

    
    