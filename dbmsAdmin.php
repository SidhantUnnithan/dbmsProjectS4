<!DOCTYPE html>
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
		<table class="table table-striped">
		    <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Email</th>
                <th scope="col">Movie</th>
                <th scope="col">No of Tickets</th>
                <th scope="col">Time</th>

                </tr>
            </thead>
            <tbody>
                <script language="PHP">
                    $servername = "localhost";
                    $username = "root";
                    $password = "password";
                    $dbname = "dbms";
                    
                    if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
                        echo 'We don\'t have mysqli!!!';
                    } else {
                        echo 'Phew we have it!<br>';
                    }                
                    $conn = new mysqli($servername, $username, $password, $dbname);
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT f_name, l_name, email_id, movie_id, no_of_tickets FROM customer";
	                $result = $conn->query($sql);
                    
                    $n = 1;
                    if ($result->num_rows > 0) {
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                                <tr>
                                    <th scope="row"><?php echo($n) ?></th>
                                        <td><?php echo($row["f_name"]) ?></td>
                                        <td><?php echo($row["l_name"]) ?></td>
                                        <td><?php echo($row["email_id"]) ?></td>
                                        <td><?php echo($row["movie_id"]) ?></td>
                                        <td><?php echo($row["no_of_tickets"]) ?></td>
                                        <td>21:30</td>
                                </tr>
                            $n = $n + 1;
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                </script>                   
                    
            </tbody>    
		</table>
	</div>

</body>
</html>