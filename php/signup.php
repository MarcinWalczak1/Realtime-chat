<?php 
session_start();
include_once "config.php";
$name = mysqli_real_escape_string($conn, $_POST['name']);

$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
// $image = mysqli_real_escape_string($conn, $_POST['']);

//check user email valid or not
if(!empty($name) && !empty($lname) && !empty($email) &&!empty($password)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "$email - Ten email już istnieje!";

        }else{
            //check user upload file or not
            if(isset($_FILES['image'])){
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                //check img file like jpg png
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
                $extensions = ['png', 'jpeg', 'jpg'];
                if(in_array($img_ext, $extensions) === true){
                    $time = time();
                    $new_img_name = $time.$img_name;

                    if(move_uploaded_file($tmp_name, "images/".$new_img_name)){// user upload img move to folder successfully
                        $status = "Aktywny teraz";
                        $random_id = rand(time(), 1000000); //creating random id for user

                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, name, last_name, email, password, img, status ) VALUES ('{$random_id}', '{$name}', '{$lname}','{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                        if($sql2){
                            $sql3 = mysqli_query($conn, "SELECT * FROM users where email = '{$email}'");
                            if(mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "Success";
                            }
                        }


                    }

                }else{
                    echo "Dopuszczalny format pliku to: jpeg, jpg, png";
                }
            }else{
                echo "Proszę o dodanie zdjęcia!";
            }
        }
    }
}else{
    echo "Wszystkie pola są wymagane!";
}

?>