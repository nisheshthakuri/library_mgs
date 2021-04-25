<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Read form</title>

		
    </head>

    <body>
        
        <!-- HEADER -->
    
            
<table border="3"> 
    <tr>
      
        <th>Full Name</th>
        <th>Middle Name</th>
        <th>Last name</th>
        <th> Student ID</th>
        <th>Course</th>
        <th>Email</th>
        <th>Gender</th>
           
    </tr>

<?php
   $con = mysqli_connect('localhost:3307','root','');
   mysqli_select_db($con,'classfoxproject');
  
    $q= "SELECT * FROM registration" ;
    $result_set= mysqli_query($con, $q);
     while($row = mysqli_fetch_array($result_set, MYSQLI_ASSOC))
       {
        ?>

        <tr>
            <td> <?php echo $row['fname']; ?> </td>
            <td> <?php echo $row['Mname']; ?> </td>
         <td> <?php echo $row['lname']; ?> </td>
            <td> <?php echo $row['Stdid']; ?> </td>
            <td> <?php echo $row['Course']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['Gender']; ?> </td>
          </tr>
          
        <?php
      
    }
?>
</table>
    </body>
</html>