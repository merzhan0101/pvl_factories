<?php
require_once "connect.php";

/*Выборка всего контента*/
function getAllFactories(){

    global $mysqli;
    connectDB();
    
    $result=$mysqli->query("SELECT * FROM `factories` ORDER BY `id` DESC");
    
    closeDB();
    return resultToArray($result);
}
/*Выбор одного для article.php*/
function getFactory($id){
    global $mysqli;
    connectDB();
    
    $result=$mysqli->query("SELECT * FROM `factories` WHERE `id` =$id");
    
    closeDB();
    return $result->fetch_assoc();
}
// Взять всех вакансий
function getAllVakants(){
    global $mysqli;
    connectDB();
    
    $result=$mysqli->query("SELECT v.*, f.name AS factory_name, f.img AS factory_img
                            FROM `vakants` v
                            INNER JOIN `factories` f ON f.id = v.id_factory
                            ORDER BY v.id DESC");
    
    closeDB();
    return resultToArray($result);
}

// Взятие одного ваканта
function getOneVakant($id){
    global $mysqli;
    connectDB();
    
    $result=$mysqli->query("SELECT v.*, 
                            f.name AS factory_name, 
                            f.img AS factory_img, 
                            f.email AS factory_email,
                            f.adress AS factory_adress,
                            f.tels AS factory_tels,
                            f.web_site AS factory_web_site,
                            f.url_map AS factory_url_map
                            FROM `vakants` v
                            INNER JOIN `factories` f ON f.id = v.id_factory
                            WHERE v.id = '$id'
                            ORDER BY v.id DESC");
    
    closeDB();
    return $result->fetch_assoc();
}

// Взять 5 вакансий
function getVakantsLimit($num){
    global $mysqli;
    connectDB();
    
    $result=$mysqli->query("SELECT v.*, f.name AS factory_name, f.img AS factory_img
                            FROM `vakants` v
                            INNER JOIN `factories` f ON f.id = v.id_factory
                            ORDER BY v.id DESC LIMIT $num");
    closeDB();
    return resultToArray($result);
}

// Взять ваканты только от одной Предприятия
function getVakantOFFactory($id){
    global $mysqli;
    connectDB();
    
    $result=$mysqli->query("SELECT v.*, f.name AS factory_name
                            FROM `vakants` v
                            INNER JOIN `factories` f ON f.id = v.id_factory
                            WHERE f.id = '$id'
                            ORDER BY v.id DESC");
    closeDB();
    return resultToArray($result);
}

/*Функция для возвращения массива*/
function resultToArray($result){
    $array=array();
    while(($row=$result->fetch_assoc())!=false)
        $array[]=$row;
    return $array;
}
?>