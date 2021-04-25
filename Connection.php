<?php
     $dbhost = "localhost:3307";
     $dbuser = "root";
     $dbpass = "";
     $dbname = "classfoxproject";
     $fname="";
     $Mname="";
     $lname="";
     $Stdid="";
     $Course="";
     $email = "";
     $Gender= "";
     $errors = array();
     // connect to db;
    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
     die("Failed to connect!");
    }

     //if the register button is clicked
     if(isset($_POST['save'])) {
     	$fname=$_POST['fname'];
          $Mname=$_POST['Mname'];
          $lname=$_POST['lname'];
          $Stdid=$_POST['Stdid'];
          $Course=$_POST['Course'];
     	$email=$_POST['email'];
     	$Gender=$_POST['Gender'];
         
     	//form validation
     if(empty($fname)){
               array_push($errors, "first name is required");
          }
     	 if(empty($lname)){
               array_push($errors, "last name is required");
          }
           if(empty($Stdid)){
               array_push($errors, "Student ID is required");
          }
           if(empty($Course)){
               array_push($errors, "Course is required");
          }
     	if(empty($email)){
     		array_push($errors, "Email is required");
     	}
     	if(empty($Gender)){
     		array_push($errors, "Gender is required");
     	}
     	//if there are no errors,save user to db
     	if(count($errors)==0){
  
  $sql = "INSERT INTO registration(fname,Mname,lname,Stdid,Course,email,Gender) VALUES('$fname','$Mname','$lname','$Stdid','$Course','$email','$Gender')";
                header('location: registration.php');
     		mysqli_query($con,$sql);
               $_SESSION['username'] = $username;
               $_SESSION['success'] = "You are now logged in";
               header('location:home1.php');
     	}
     }
     
     //login users
    /* if (isset($_POST['login'])){
          if(isset($_POST['username']) && !empty($_POST['username'])){
               if(isset($_POST['password']) && !empty($_POST['password'])){
                $username=$_POST['username'];
                $pass=$_POST['password'];
                $sql2="SELECT * FROM tbl_user WHERE username='$username'";
                $res=mysqli_query($con,$sql2);
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                         $password=['confirm_password'];
                         $dpassword=$row['password'];
                         $npassword=md5($password,$pass);
                         if($dpassword=$npassword){
                              echo "<script>alert('Login Successfully')</script>";
                         }
                         else{
                              echo "<script>alert('Password is wrong')</script>";
                         }
                    }
                }
                else{
                    echo "<script>alert('username is wrong')</script>";
                }
               }
               else{
                   echo "<script>alert('please insert password to continue')</script>";
               }
          }
          else{
              echo "<script>alert('please insert username')</script>";          }
     }


     //logout
     if (isset($_GET['logout'])){
          session_destroy();
          unset($_SESSION['username']);
          header('location: login.php');
     }
*/
?>