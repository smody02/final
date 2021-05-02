<?php include('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta content="charset=utf-8" />
<title>Connect Test Home</title>
</head>
<body>
    
    <div>
		<?php  if (isset($_SESSION['user'])) : ?>
			<strong><?php echo $_SESSION['user']['username']; ?></strong>

			<small>
				<a href="index.php?logout='1'" style="color:#FF0000;">logout</a>
			</small>

		<?php endif ?>
        
        <?php  if (!isset($_SESSION['user'])) : ?>
			
			<small>
				<a href="login.php" style="color:#FF0000;">login</a>
			</small>

		<?php endif ?>
	</div>
    
    <form method="POST" action="index.php">
        <p> Event Name: <input type="text" name="name"> </p>
        <p> Event Location: <input type="text" name="location"> </p>
        <p> Event Description: <input type="text" name="description"> </p>
        <p> Event Day: <input type="number" name="day"> </p>
        <p> Event Month: <input type="number" name="month"> </p>
        <p> Event Year: <input type="number" name="year"> </p>
        <p> Event Start Time Hour: <input type="number" name="start_hour"> </p>
        <p> Event Start Time Minute: <input type="number" name="start_min"> </p>
        <p> Event End Time Hour: <input type="number" name="end_hour"> </p>
        <p> Event End Time Minute: <input type="number" name="end_min"> </p>
        <p> <input type = "submit" value = "Make Event" name="event_btn"/> </p>
    </form>
    
    <div>
        <?php
            printEvent();
        ?>
    </div>
    
</body>

</html>
