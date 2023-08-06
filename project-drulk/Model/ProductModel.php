<?php

require __DIR__.'/DBUtils.php';

class ProductModel {

    public function getItems() {
        $pdo = DBUtils::getDB();
        $result = $pdo->query('select * from product');
        return $result->fetchAll();
    }
}