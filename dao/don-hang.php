<?php
require_once 'pdo.php';

function list_don_hang(){
    $sql = "SELECT *FROM `thong_tin_don_hang` ";
    return pdo_query($sql);
}



