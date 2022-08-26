<?php   
    header('Access-Control-Allow-Origin:*');
    header('Content-Type:applcation/json');
    
    require_once('../initialize.php');

    $pictures=new Picture($conn);
    $result=$pictures->read();

    // if($result){
    //     echo json_encode(array('message'=>'data found'));
    // }
    // else{
    //     echo json_encode(array('message'=>'no data found'));
    // }
     $num=$result->get_result();

    if($num){
        $data = $num->fetch_all(MYSQLI_ASSOC);
        $pic_arr=array();
        $pic_arr['data']=array();

       echo json_encode($data);

        
    }
    else{
        echo json_encode(array('message '=>'no post found'));
    }