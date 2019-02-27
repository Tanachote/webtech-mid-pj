<?php

include 'database.php';

$fileErr = $nameErr = $lastnameErr = $nicknameErr = $dobErr = $heightErr = $provinceErr = $blood_groupErr = $group_nameErr ="";
$name = $lastname = $nickname = $dob = $height = $province = $blood_group = $group_name = "";

$validate = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $validate = false;
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-zA-Z ]+$/i', $name)) {
            $nameErr = "Only letters and white space allowed";
            $name = "";
            $validate = false;
        }
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Lastname is required";
        $validate = false;
    } else {
        $lastname = test_input($_POST["lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-zA-Z ]+$/i', $lastname)) {
            $lastnameErr = "Only letters and white space allowed";
            $lastname = "";
            $validate = false;
        }
    }

    if (empty($_POST["nickname"])) {
        $nicknameErr = "Nickname is required";
        $validate = false;
    } else {
        $lastname = test_input($_POST["nickname"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-zA-Z ]+$/i', $lastname)) {
            $nicknameErr = "Only letters and white space allowed";
            $nickname = "";
            $validate = false;
        }
    }

    if (empty($_POST["dob"])) {
        $dobErr = "Date of Birth is required";
        $validate = false;
    } else {
        $dob = test_input($_POST["dob"]);
        // check if name only contains letters and whitespace
        // if (!preg_match('/^[a-zA-Z ]+$/i', $dob)) {
        //     $dobErr = "Only letters and white space allowed";
        //     $dob = "";
        //     $validate = false;
        // }
    }

    if (empty($_POST["height"])) {
        $heightErr = "height is required";
        $validate = false;
    } else {
        $height = test_input($_POST["height"]);
        // check if name only contains letters and whitespace
        // if (!preg_match('/^[a-zA-Z ]+$/i', $height)) {
        //     $heightErr = "Only letters and white space allowed";
        //     $height = "";
        //     $validate = false;
        // }
    }

    if (empty($_POST["province"])) {
        $provinceErr = "province is required";
        $validate = false;
    } else {
        $province = test_input($_POST["province"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-zA-Z ]+$/i', $province)) {
            $provinceErr = "Only letters and white space allowed";
            $province = "";
            $validate = false;
        }
    }

    if (empty($_POST["blood_group"])) {
        $blood_groupErr = "blood group is required";
        $validate = false;
    } else {
        $blood_group = test_input($_POST["blood_group"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-zA-Z ]+$/i', $blood_group)) {
            $blood_groupErr = "Only letters and white space allowed";
            $blood_group = "";
            $validate = false;
        }
    }

    if (empty($_POST["group_name"])) {
        $group_nameErr = "group name is required";
        $validate = false;
    } else {
        $group_name = test_input($_POST["group_name"]);
        // check if name only contains letters and whitespace
        // if (!preg_match('/^[a-zA-Z ]+$/i', $group_name)) {
        //     $group_nameErr = "Only letters and white space allowed";
        //     $group_name = "";
        //     $validate = false;
        // }
    }

    if ($validate) {
        $sql = "INSERT INTO idol_table (name, lastname, nickname, dob, height, province, blood_group, group_name)
        VALUES ('".$name."', '".$lastname."', '".$nickname."', '".$dob."', '".$height."', '".$province."', '".$blood_group."', '".$group_name."')";
        $conn->exec($sql);

        header("Location: ./index.php");
    }
}

$conn = null;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}