<?php

$fileErr = $imgErr = $nameErr = $lastnameErr = $emailErr = "";
$name = $lastname = $email = "";
$balance = 0;
$target_img = './storages/imgs/user.png';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "./storages/";
    $target_file = $target_dir . 'csv/' . basename($_FILES["fileToUpload"]["name"]);
    $target_img = $target_dir . 'imgs/' . basename($_FILES["img"]["name"]) ?? 'user.png';
    $uploadOk = 1;
    $csvFileType = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
    $imgFileType = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);

    // exit;
    // // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //     if($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //         $uploadOk = 0;
    //     }
    // }

    // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }

    // Allow certain file formats
    if($csvFileType != "csv") {
        $fileErr = "Sorry, only CSV file are allowed.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg" && $imgFileType != "gif" ) {
        $imgErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $row = 1;
            if (($handle = fopen($target_file, "r")) !== FALSE) {
                $income = 0;
                $outcome = 0;
                while (($data = fgetcsv($handle)) !== FALSE) {
                    $activity = $data[0];
                    $money = $data[1];
        
                    if ($activity == "activity") continue;
        
                    if ($activity == "income") {
                        $income += (double) $money;
                    }
        
                    else if ($activity == "outcome") {
                        $outcome += (double) $money;
                    }
        
                }
                fclose($handle);
                $balance = (double) $income - $outcome;
            }
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }

        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_img)) {
            // echo "The file ". basename($_FILES["img"]["name"]). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your image.";
        }
    }

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-zA-Z ]+$/i', $name)) {
            $nameErr = "Only letters and white space allowed";
            $name = "";
        }
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Lastname is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-zA-Z ]+$/i', $lastname)) {
            $lastnameErr = "Only letters and white space allowed";
            $lastname = "";
        }
      }

      

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $email = "";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}