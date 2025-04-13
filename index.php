<?php
 include 'confige.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CRUD Operation- 1 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>

  <!-- ======= Navbar ======= -->

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Logo </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Features </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Electronics</a></li>
            <li><a class="dropdown-item" href="#">Fashion & Design </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Others</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

 <!-- ======= Navbar End ======= -->




<div class="container">
<h5> Students List Below : </h5>
    <table class="table">
  <thead>
    <tr>
      <th scope="col"> SI </th>
      <th scope="col"> Name </th>
      <th scope="col"> Role </th>
      <th scope="col"> Class </th>
      <th scope="col"> Phone </th>
      <th scope="col"> Email </th>
      <th scope="col"> Address </th>
      <th scope="col"> Action </th>
    </tr>
  </thead>
  <tbody>


<?php

$query = 'SELECT * FROM list_of_students';
$list_of_students = mysqli_query ($connection, $query);

$serialNumber = 1;

while ($row = mysqli_fetch_assoc ($list_of_students)) {
    $id = $row['id'];
    $Name = $row['Name'];
    $Role = $row['Role'];
    $Class = $row['Class'];
    $Phone = $row['Phone'];
    $Email = $row['Email'];
    $Address = $row['Address'];

echo 
'<tr>
      <th scope="row"> '.$serialNumber.'</th>
      <td>'.$Name.'</td>
      <td>'.$Role.'</td>
      <td> '.$Class.'</td>
      <td> '.$Phone.'</td>
      <td> '.$Email.' </td>
      <td>'.$Address.'</td>
      <td>
      <a href="#" class="btn btn-primary"> Edit </a>
      <a href="#" class="btn btn-danger"> Delete </a>
      </td>
    </tr>

<tr>
      <th scope="row">1</th>
      <td>Shamim Miah</td>
      <td>5</td>
      <td> 10 (Ten) </td>
      <td> 01952-123654 </td>
      <td> shamim@gmail.com </td>
      <td>Dhanmondi, Dhaka</td>
      <td>
      <a href="#" class="btn btn-primary"> Edit </a>
      <a href="#" class="btn btn-danger"> Delete </a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ismail Miah</td>
      <td>6</td>
      <td> 10 (Ten) </td>
      <td> 01852-100654 </td>
      <td> ismail@gmail.com </td>
      <td>Rangpur Sadar, Rangpur</td>
      <td>
      <a href="#" class="btn btn-primary"> Edit </a>
      <a href="#" class="btn btn-danger"> Delete </a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Saiful Islam</td>
      <td>7</td>
      <td> 10 (Ten) </td>
      <td> 01652-123150 </td>
      <td> saifulislam@gmail.com </td>
      <td>Brahmanbaria sadar, Brahmanbaria</td>

      <td>
      <a href="#" class="btn btn-primary"> Edit </a>
      <a href="#" class="btn btn-danger"> Delete </a>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Rafuqul Islam</td>
      <td>8</td>
      <td> 10 (Ten) </td>
      <td> 01952-563210 </td>
      <td> rafiqulislam@gmail.com </td>
      <td>Bandarban</td>

      <td>
      <a href="#" class="btn btn-primary"> Edit </a>
      <a href="#" class="btn btn-danger"> Delete </a>
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Saikat Islam</td>
      <td>9</td>
      <td> 10 (Ten) </td>
      <td> 01352-125054 </td>
      <td> saikatislam@gmail.com </td>
      <td>Panchghar</td>

      <td>
      <a href="#" class="btn btn-primary"> Edit </a>
      <a href="#" class="btn btn-danger"> Delete </a>
      </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Mim Sarkar</td>
      <td>10</td>
      <td> 10 (Ten) </td>
      <td> 01752-050625 </td>
      <td> mimsarkar@gmail.com </td>
      <td>Khulna</td>

      <td>
      <a href="#" class="btn btn-primary"> Edit </a>
      <a href="#" class="btn btn-danger"> Delete </a>
      </td>
    </tr>';

    $serialNumber ++;


}

?>

   
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>