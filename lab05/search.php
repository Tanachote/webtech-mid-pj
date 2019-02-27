<?php

if (isset($_GET['search'])) {
    $isfirst = true;
    $search = $_GET['search'];
    $sql = "SELECT * FROM idol_table WHERE ";

    if (isset($_GET['name'])) {
        $sql .= getLikeQuery('name', $isfirst);
        $isfirst = false;
    }

    if (isset($_GET['lastname'])) {
        $sql .= getLikeQuery('lastname', $isfirst);
        $isfirst = false;
    }

    if (isset($_GET['nickname'])) {
        $sql .= getLikeQuery('nickname', $isfirst);
        $isfirst = false;
    }

    if (isset($_GET['dob'])) {
        $sql .= getLikeQuery('dob', $isfirst);
        $isfirst = false;
    }

    if (isset($_GET['height'])) {
        $sql .= getLikeQuery('height', $isfirst);
        $isfirst = false;
    }

    if (isset($_GET['province'])) {
        $sql .= getLikeQuery('province', $isfirst);
        $isfirst = false;
    }

    if (isset($_GET['blood_group'])) {
        $sql .= getLikeQuery('blood_group', $isfirst);
        $isfirst = false;
    }


    if (isset($_GET['group_name'])) {
        $sql .= getLikeQuery('group_name', $isfirst);
        $isfirst = false;
    }

    if ($isfirst) {
        $sql .= "name LIKE :search
            OR lastname LIKE :search
            OR nickname LIKE :search
            OR dob LIKE :search
            OR height LIKE :search
            OR province LIKE :search
            OR blood_group LIKE :search
            OR group_name LIKE :search";
    }

    $query = $conn->prepare($sql);
    $query->bindValue(':search', '%'.$search.'%');
} else {
    $query = $conn->prepare('SELECT * FROM idol_table');
}
unset($_SERVER['QUERY_STRING']);

function getLikeQuery($field, $isfirst)
{
    $str = "";
    if (!$isfirst) $str .= "OR ";
    $str .= $field." LIKE :search ";
    return $str;
}

$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);