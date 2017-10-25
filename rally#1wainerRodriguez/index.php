<?php
$message = "";
if(!empty($_REQUEST['status'])) {
  switch($_REQUEST['status']) {
    case 'success':
    $message = 'User was added succesfully';
    break;
    case 'error':
    $message = 'There was a problem inserting the user';
    break;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="msg">
      <?php echo $message; ?>
    </div>
    <form action="signup.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">cédula</label>
        <input type="text" class="form-control" id="" name="cedula" placeholder="Your username">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">nombre</label>
        <input type="text" class="form-control" id="" name="nombre" placeholder="Your Name">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">apellidos</label>
        <input type="text" class="form-control" id="" name="apellidos" placeholder="Your LastName">
      </div>
      <div class="form-group">
        <?php
        include 'conexion.php';
        if ($con->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM carrera";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
          ?>
          <select name="carreraxs">
            <option value="">Select City</option>
            <?php
            while($row = $result->fetch_assoc()) {
              ?>
              <option value="<?=$row['id_carrera']?>"><?=$row['carrera']?></option>
              <?
            }
          } ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script>
  </script>
</body>
</html>