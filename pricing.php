<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="projectcss.css">

    <title>Heartlight Portraits</title>
  </head>
  <body>

    <nav class="navbar fixed-top navbar-light bg-light">
          <a class="navbar-brand" href="#">Heartlight Portraits</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="http://ryan1.centralus.cloudapp.azure.com/project4/index.html">Home</a>
        <a class="nav-item nav-link" href="http://ryan1.centralus.cloudapp.azure.com/project4/portfolio.html">Portfolio</a>
        <a class="nav-item nav-link active" href="http://ryan1.centralus.cloudapp.azure.com/project4/pricing.php">Pricing<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="http://ryan1.centralus.cloudapp.azure.com/project4/contact.html">Contact</a>
        <a class="nav-item nav-link" href="http://ryan1.centralus.cloudapp.azure.com/project4/about.html">About</a>
      </div>
    </div>
  </nav>

  <h1>Pricing</h1>

    <div>
      <p style="text-align:center;">
        <img src="Alligator.jpg" alt="Alligator" width="300" height="300">
      </p>
    </div>

<?php

$dbhost='localhost';
$dbuser='raw430';
$dbpass='Raw092079###';
$dbname='portraits';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!conn)
{
  die('failure to connect' .mysqli_connect_error());
}

$sql='SELECT * FROM pricing_information';
$query=mysqli_query($conn,$sql);

  if(!$query)
  {
    die ('error' . mysqli_error($conn));
  }

  echo "
  <table class='table'>
  <tr>
  <th>PortraitSizes</th>
  <th>PortraitPrices</th>
  <th>EstimatedTimeFrame</th>
  </tr>";

  while ($row = mysqli_fetch_array($query))
  {
    echo ' <tr>
    <td>' .$row['PortraitSizes'].'</td>
    <td>' .$row['PortraitPrices'].'</td>
    <td>' .$row['EstimatedTimeFrame'] .'</td>
    </tr>';
  }

  echo "</table>";

?>

<p style="text-align:center;">
  <img src="logo.jpg" alt="Logo" width="350" height="100">
</p>

<footer>
  <ul>
      <li style="display:inline-block;">
        <a target="_blank" title="follow me on facebook" href="https://www.facebook.com/heartlightpastelmemories/"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a>
      </li>
      <li style="display:inline-block;">
        <a target="_blank" title="Gmail" href="mailto:dianalynn6363@gmail.com"><img src="email icon.png" border=0></a>
      </li>
  </ul>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
