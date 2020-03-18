<?php

namespace DbData;



class MassPost {

    private $_db;
    
    public function __construct() {
        try {
            $this->_db = new \PDO(DSN,DB_USERNAME,DB_PASSWORD);
            $this->_db->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        }catch (\PDOExeption $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function getAll() {

            // GETで現在のページ数を取得する（未入力の場合は1を挿入）
            if (isset($_GET['page'])) {
                $page = (int)$_GET['page'];
            } else {
                $page = 1;
            }

            // スタートのポジションを計算する
            if ($page > 1) {
                // 例：２ページ目の場合は、『(2 × 10) - 10 = 10』
                $start = ($page * 9) - 9;
            } else {
                $start = 0;
            }

        $stmt = $this->_db->query("SELECT * FROM massdata order by id limit {$start},9");
        return $stmt->fetchAll(\PDO::FETCH_OBJ); 


    }
}