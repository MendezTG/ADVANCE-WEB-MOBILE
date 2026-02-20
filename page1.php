<?php

$user_url = "https://jsonplaceholder.typicode.com/users/1";
$user_resonse = file_get_contents($user_url);
$user_json = json_decode($user_resonse);

$album_url = "https://jsonplaceholder.typicode.com/albums?userId=1";
$album_response = file_get_contents($album_url);
$album_json = json_decode($album_response);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USer and Albums</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="return">
	<a href="project.html">
    RETURN TO LAB WORK & PROJECTS
	</a>
    </div>
    <div> 
        <h1> JSONPLACEHOLDER DEMO </h1>
        <p> Page 1: User and Albums
    </div>
    <div> 
        <h2>USER PROFILE</h2>
        <div> 
            <p>Name: <?php echo $user_json->name; ?></p>
            <p>Username: <?php echo $user_json->username; ?></p>
            <p>Email: <?php echo $user_json->email; ?></p>
            <p>Phone: <?php echo $user_json->phone; ?></p>
            <p>Address: <?php
                        echo $user_json->address->street , ', ' .
                            $user_json->address->suite , '<br>' .
                            $user_json->address->city , ', ' .
                            $user_json->address->zipcode; ?></p>
            <p>Company: <?php echo $user_json->company->name; ?></p>
        </div>
    </div>

</body>
</html>