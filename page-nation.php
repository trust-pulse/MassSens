<?php


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

?>