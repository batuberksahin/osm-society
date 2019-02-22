<?php

class Controller
{
    static public function list()
    {
        $db = new JSONdb;
        $db->setFile(__DIR__ . '/../db.json');
        $data = $db->getData();

        require_once "partials/header.php";
        require "view/list.php";
        require_once "partials/footer.php";
    }

    static public function add()
    {
        require_once "partials/header.php";
        require "view/add.php";
        require_once "partials/footer.php";
    }

    static public function detail()
    {
        $db = new JSONdb;
        $db->setFile(__DIR__ . '/../db.json');
        $data = $db->getData();

        $data = array_reverse($data);

        $detail = $data[$_GET['id']];

        if(empty($detail)) { header('Location: .'); die(); }

        require_once "partials/header.php";
        require "view/detail.php";
        require_once "partials/footer.php";        
    }

}

?>