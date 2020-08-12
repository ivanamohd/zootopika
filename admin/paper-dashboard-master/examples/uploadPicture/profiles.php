<?php
  $conn = mysqli_connect("localhost", "web38", "web38", "zootopikadb");
  $results = mysqli_query($conn, "SELECT * FROM users");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4" style="margin-top: 30px;">
        <a href="form.php" class="btn btn-success">New profile</a>
        <br>
        <br>
        <table class="table table-bordered">
          <thead>
            <th>Image</th>
            <th>Bio</th>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td> <img src="<?php echo 'images/' . $user['profile_image'] ?>" width="90" height="90" alt=""> </td>
                <td> <?php echo $user['bio']; ?> </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>