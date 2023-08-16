<?php

namespace Source\Models;

use Source\Core\Connect;

class Book
{
    public function selectAll ()
    {
        $query = "SELECT * FROM books";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

    public function selectByCategory (string $categoryName)
    {
        $query = "SELECT books.* 
        from books 
        join categories on categories.id = books.categoria_id 
        where categories.name like '{$categoryName}'";

        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }
}