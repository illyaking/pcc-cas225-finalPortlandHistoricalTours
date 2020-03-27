<?php

include  '../includes/db.inc.html.php';

        // Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['tour']))
  {
      $tour = $_POST['tour'];
      $myfname = $_POST['myfname'];
      $mylname = $_POST['mylname'];
      $myemail = $_POST['myemail'];
      $myphone = $_POST['myphone'];
      $mydate = $_POST['mydate'];
      $mygroup= $_POST['mygroup'];
      $mycomments = $_POST['mycomments'];
    try {
      $sql = 'INSERT INTO reservations SET
        tour = :tour,
        fname = :fname,
        lname = :lname,
        email = :email,
        phone = :phone,
        date = :date,
        participants = :participants,
        allergies = :allergies';

      $s = $pdo->prepare($sql);
      $s->bindValue(':tour', $tour);
      $s->bindValue(':fname', $myfname);
      $s->bindValue(':lname', $mylname);
      $s->bindValue(':email', $myemail);
      $s->bindValue(':phone', $myphone);
      $s->bindValue(':date', $mydate);
      $s->bindValue(':participants', $mygroup);
      $s->bindValue(':allergies', $mycomments);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted reservation: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
      include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
    
  }

//honey pot field
	$honeypot = $_POST['myfname'];

	//check if the honeypot field is filled out. If not, send a mail.
	if( empty( ! $honeypot ) ){
	    include '../includes/error.html.php';
	}
		
else {
  include 'reservations.html.php';
}

?>
