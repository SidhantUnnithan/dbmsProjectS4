# DBMS Project for Semester 4
Movie Booking System using PHP and MySQL
<br/>
<br/>
## Configuration
Navigate to `dbmsProject.php` and `dbmsAdmin.php` and set the appropriate values in the php snippet at the top.
```
<?php

$username = "username";
$password = "password";

?>
```
<br/>

## Working
`index.html` contains all the movie names. Clicking on the "**Book**" button takes the user to the `dbmsProject.php` page where the user can proceed to book the pages. Clicking on the "**admin**" button however takes the user to `dbmsAdmin.php` page where the administrator can view the details of all the customers who bought tickets.
</br>
</br>
`dbmsProject.php` contains the booking form for the user. On clicking the "**Submit**" button the data entered by the user will be inserted into the database and then they'll be taken to `dbmsThankYou.html`.
</br>
</br>
`dbmsAdmin.php` is the administrator page where the administrator can view all the details of the customers who bought tickets. The records are sorted latest to earliest by default.


## Team

- Sidhant Unnithan - 89, CSE B