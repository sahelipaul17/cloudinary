<?php
    require "vendor/autoload.php";
    require "config-cloud.php";
    $cloudinary_upload_present="yavprazj/mh/upload";
    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $image = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
       
       
        //CLOUDINARY_URL=cloudinary://864192912635788:u4X08Ki6VIIbNWQ4U2IZKQcHZlc@dfmstrhvq
       $result = \Cloudinary\Uploader::upload($file_tmp , array("public_id" => $cloudinary_upload_present , "overwrite" => TRUE, "eager_async" => TRUE, 
       "eager_notification_url" => "https://mysite.example.com/notify_endpoint", "resource_type" => "image"));
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload API</title>
    <style type="text/css">
        img{width: 200px; height: 200px; margin-right:50px;}
     </style>   
</head>
<body>
   <form method="post" enctype="multipart/form-data">
     <input type="text" name="name" required="" placeholder="Name">
     <input type="text" name="name" required="" placeholder="id">
     
     <input type="file" name="file">
     <input type="submit" name="save" value="Save">
   </form>
    <hr>
    
    <?php echo cl_image_tag("j1fycfriio3myltgtcik.jpg");?>
    <?php echo cl_image_tag("uo6kwdnq8a1vlmuh4jnz.jpg");?>
    
   
</body>
</html>