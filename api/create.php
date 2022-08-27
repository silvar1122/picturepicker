<?php   
    header('Access-Control-Allow-Origin:*');
    header('Content-Type:applcation/json');
    header('Access-Control-Allow-Methods: POST');
    header ('Access-Control-Allow-Headers:Access-Control-Allow-Origin,Content-Type, Access-Control-Allow-Methods,Authorization,X-Requested-With');
    
    require_once('../initialize.php');

    $pictures=new Picture($conn);

    //getData
    $result=file_get_contents('php://input');
    if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

        if(empty($errors)==true) {
            move_uploaded_file($file_tmp,"Uploads/".$file_name);
           
            $data=json_decode($result);
    
    
            $pictures->title=$_GET['image_name'];
            $pictures->url="https://pickpicker.herokuapp.com/api/Uploads".$file_name."/".$_GET['image_name'];
        
            if($pictures->create()){
                echo json_encode(array('message'=>'data successfully added'));
            }
            else{
                echo json_encode(array('message'=>'failed to add data'));
            }
        
            
          
         }else{
            print_r($errors);
         }
      
    }
    