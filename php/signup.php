<?php
  //echo "tuly";
  include_once "config.php";
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
  if(!empty($name)  && !empty($email) && !empty($password) &&!empty($cpassword)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT * FROM regi WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "$email - This email already exist!";
        }
        else{
            if(isset($_FILES['image'])){
                //echo"pic caice";
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];
                
                $img_explode = explode('.',$img_name);
                $img_ext = end($img_explode);
                $extensions = ['jpeg', 'png', 'jpg','PNG','JPG','JPEG'];
                if(in_array($img_ext, $extensions) === true){
                    //echo"jpg asce";
                    $time = time();
                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name,"image/".$new_img_name)){
                        $ran_id = rand(time(), 100000000);
                        $status = "Active now";
                        $encrypt_pass = md5($password);
                        $sql2 = mysqli_query($conn, "INSERT INTO regi (unique_id, name, email, password, img, status)
                        VALUES ({$ran_id}, '{$name}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");
                        if($sql2){
                           $sql3=mysqli_query($conn, "SELECT *FROM regi WHERE email = '{$email}'");
                           if(mysqli_num_rows($sql3) > 0){
                            $row= mysqli_fetch_assoc($sql3);
                            $_SESSION['unique_id'] = $row['unique_id'];
                            echo "success";
                        }
                        }
                        else{
                            echo"something went wrong";
                        }
                }
            }
                else{
                    echo"plz select an image jpeg pnj type";
                }
            }
            else{
                echo"plz select an image";
            }
        }
    }
    else{
        echo"$email - this is not valid email";
    }
  }
  else{
     echo"all are required";
  }
?>