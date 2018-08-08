<?php
    @include('header.php');
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
?>

<h1>
    <?php echo $fname ?>
    <?php echo $lname ?>
</h1>