<?php

include  '../includes/db.inc.html.php';

    try
    {
        $tour = 'SELECT title, description, duration, transportation, food, price, image FROM tours';
        $tourResults = $pdo->query($tour);
    }
    catch (PDOException $e)
    {
        $error = 'Error fetching jokes: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    //ForEach loop for tour items
    foreach ($tourResults as $row)
    {
        $tourItems[] = array(
            'title' => $row['title'],
            'description' => $row['description'],
            'duration' => $row['duration'],
            'transportation' => $row['transportation'],
            'food' => $row['food'],
            'price' => $row['price'],
            'image' => $row['image']
        );
    }

    include 'tours.html.php';

?>


