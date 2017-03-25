<html>
<body>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Hello SourceTree";
<<<<<<< HEAD
  echo "New NAJA";
=======
>>>>>>> 08055c4a22c1485a2f7e769e325e01920c761b3f
  echo "Connected successfully";
  ?>

</body>
</html>
