<?php

function find_all_subjects()
{
    global $db;

    $sql = 'SELECT * FROM subjects '; // space required or trouble shooting
    $sql .= 'ORDER BY position ASC';
    // echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_all_pages()
{
    global $db;

    $sql = 'SELECT * FROM pages '; // space required or trouble shooting
    $sql .= 'ORDER BY position ASC';
    // echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}
