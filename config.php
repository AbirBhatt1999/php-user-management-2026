<?php
  // error_reporting(0);

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ptk_project";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // print_r($conn);exit();
  session_start();
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // else{
  // 	echo 'Connected!';
  // }

  // $sql = "SELECT * FROM pt_user";
  // $result = $conn->query($sql);
  // $value = $result->fetch_assoc();
  // if ($result->num_rows > 0) {
  //   $key = 0;
  //   echo '<table>
  //     <tr>
  //       <th>Sl No.</th>
  //       <th>Full Name</th>
  //       <th>Email</th>
  //       <th>Phone Number</th>
  //       <th>Username</th>
  //       <th>Address</th>
  //       <th>Country</th>
  //       <th>Gender</th>
  //       <th>Subjects</th>
  //       <th>Profile Picture</th>
  //       <th>Profile Picture</th>
  //       <th>Profile Picture</th>
  //     </tr>';
  //   while($value = $result->fetch_assoc()) {
  //     $key++;
  //     echo'<tr>
  //       <td>'.$key.'</td>
  //       <td>'.$value['first_name'].' '.$value['last_name'].'</td>
  //       <td>'.$value['email'].'</td>
  //       <td></td>
  //       <td></td>
  //       <td></td>
  //       <td></td>
  //       <td></td>
  //       <td></td>
  //       <td></td>
  //       <td></td>
  //       <td></td>
  //     </tr>';
  //   }
  //   echo '</table>';
  // }






  // require_once('config.php');

  // if(isset($_SESSION['userlogin'])) {}
  // else{
  //   header('location: login.php');
  // }

  

  // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //     $insert = true;
  //     // if(isset($_POST['submit_form'])) {
  //     if($insert) {

  //       $sql = "INSERT INTO pt_user (first_name, last_name, phone, email, password, gender, subject, address, state, city, zip, country, profile_pic, dob, status, price)
  //       VALUES ('John', 'Abc', '7070707070', 'john7@gmail.com', '', 'male', '', 'test address', 'stt', 'cty', '70001', 'US', '', '', '1', '12')";

  //     if ($conn->query($sql) === TRUE) {
  //       echo "<script>alert('Form submitted successfully');</script>";
  //     } else {
  //       echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . ");</script>";
  //     }
  //   }
  // }

  // $.ajax({
  //           type: "POST",
  //           url: url,
  //           data: {userSearchKey: strnm, csrf_token_apm: CONFIG.myCsrfHash},
  //           success: function (data) {
              
  //           }
  //       });

?>