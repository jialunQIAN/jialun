<?php
class DBUtils
{
    /**
     * @return DBUtils
     */
    public static function getDB() {
        $dsn = "sqlite:../dbs/products.db";
        $pdo = new PDO($dsn);
        return $pdo;
    }

    public function createTableAndInitData() {
        $createTableSql = <<<EOF
        create table product(
            id integer autoincrement PRIMARY KEY,
            `name` varchar(32) not null,
            description varchar(200) not null
        );
EOF;
        $dsn = "sqlite:../dbs/products.db";
        $pdo = new PDO($dsn);
        $pdo->exec($createTableSql);
    }
}

