<!DOCTYPE html>

<?php
$username = "root";
$password = "";
?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/914f58546c.js" crossorigin="anonymous"></script>
    <title>Booking | Admin </title>
    <link rel = "icon" href = "https://freepngimg.com/download/popcorn/23057-2-popcorn-transparent-image.png">
</head>
<body style="background: rgb(255, 194, 195);">
	<nav class="navbar navbar-dark" style="background:rgb(232, 0, 0);">
		<div class="container">
			<a class="navbar-brand"><i class="fas fa-comment-dollar mr-3"></i>Booking</a>
			<ul class="nav navbar-nav navbar-right">
				<li style="font-weight: bold;"><a style = "pointer-events: none; cursor : default;" href="#">Administrator</a></li>
			</ul>
		</div>	
	</nav>

	<div class = "container" style="margin-top: 30px">
        <?php

            $servername = "localhost";
            $dbname = "dbms";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // SQL Query
            $sql = 'SELECT * FROM customer';

            if($result = $conn->query($sql)){

                // Defining the table

                echo '<table class="table table-striped sortable">';
                echo '<tr>';
                echo '<th scope="col">#</th>';
                echo '<th scope="col">First name</th>';
                echo '<th scope="col">Last name</th>';
                echo '<th scope="col">Email</th>';
                echo '<th scope="col">Movie</th>';
                echo '<th scope="col">No of Tickets</th>';
                echo '</tr>';
                
                // Echo the data

                echo '<tbody>';
                $num = 1;
                while($row = $result->fetch_assoc()){
                    $statem = '<tr><td>' . $num . '</td><td>' . $row["f_name"] . '</td><td>' . $row['l_name'] . '</td><td>' . $row['email'] . '</td><td>' . $row['movie_id'] . '</td><td>' . $row['no_tickets'] . '</td></tr>';
                    echo $statem;
                    $num += 1;
                }

                echo '</tbody>';

                $result->free();
            }                   

            $conn->close();

            echo '</table>';


        ?>               
	</div>

</body>
</html>