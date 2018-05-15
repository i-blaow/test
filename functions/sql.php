<?php
function Sql_connect(){                     // Подключение к БД
    $result = mysql_connect('localhost', 'root', '');
    if ($result != false) {
        $result = mysql_select_db('test2');
        if (false == $result) {
            die('Ошибка подключения к ДБ');
        }
    } else {
        die('Ошибка подключения к БД');
    }
}

function Sql_query($sql){                   // Запрос и возврат данных из БД
    Sql_connect();
    $res = mysql_query($sql);

    $ret = [];
    while($row = mysql_fetch_assoc($res)) {
        if (false != $row) {
            $ret[] = $row;
        }
    }
    return $ret;
}

function Sql_exec($sql){                    // Выполнение запроса к БД (INSERT, UPDATE, DELETE ...)
    Sql_connect();
    mysql_query($sql);
}