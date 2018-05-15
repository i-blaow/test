<?php
require_once __DIR__ . '/../functions/sql.php';
function Article_getAll(){                  // Выборка всех статей
    $sql = 'SELECT * FROM articles';
    return Sql_query($sql);
}

function Article_getOne($id){            // Выборка одной статьи
    if(!empty($id)) {
    $sql = 'SELECT * FROM articles WHERE id=' . $id;
    return Sql_query($sql)[0];
    } else {
        return 'Ошибка! Статья не выбрана';
    }
}

function Article_insert($data)          // Добавление новой статьи
{
    if (!empty($data)) {
        $sql = 'INSERT INTO articles (title, text) VALUES (\'' . $data['title'] . '\', \'' . $data['text'] . '\')';
        Sql_exec($sql);
        header('Location: http://test/index.php');
    } else {
        return 'Ошибка! Статья должна содержать название и содержание';
    }
}

function Article_delete($id)            // Удаление статьи
{
    if (!empty($id)) {
        $sql = 'DELETE FROM articles WHERE id=' . $id;
        Sql_exec($sql);
        header('Location: http://test/index.php');
    } else {
        return 'Ошибка! Статья для удаления не выбрана';
    }
}

function Article_edit($id, $data)        // Изменение статьи
{
    if (!empty($id) && !empty($data)) {
        $sql = 'UPDATE articles SET title=\'' . $data['title'] . '\', text=\'' . $data['text'] . '\' WHERE id=' . $id;
        Sql_exec($sql);
        header('Location: http://test/index.php');
    }
    elseif (!empty($id) && empty($data)) {
        return 'Ошибка! Статья должна содержать название и содержание';
    }
    elseif (empty($id) && !empty($data)) {
        return 'Ошибка! Статья для редактирования не выбрана';
    }
}