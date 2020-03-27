<?php

include 'includes/db.inc.html.php';


try
{
    $sql = 'SELECT * FROM content WHERE id=1';
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    $error = 'Error fetching content. Do not worry: you are still amazing. Here is the error: ' . $e->getMessage();
    include 'includes/error.html.php';
    exit();
}
while ($row = $result->fetch())
{
    $content[] = array(
        'title' => $row['title'],
        'body' => $row['description'],
        'image' => $row['image']
    );
}
include 'home/home.html.php';
