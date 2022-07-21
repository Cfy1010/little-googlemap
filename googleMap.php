<?php
if (isset($_POST["rechercher"]))
{
  $organismes = $_POST["organismes"];
  $organismes = str_replace("", "+", $organismes);
  ?>

  <iframe src="https://maps.google.com/maps?q=<?php echo $organismes; ?>&output=embed" frameborder="10" width="90%" height="700"></iframe>

<?php
}

if(isset($_POST['soumettre les coordonnées'])) {
  $latitude = $_POST["latitude"];
  $longitude = $_POST["longitude"];
  ?>

<iframe src="https://maps.google.com/maps?q=<?php echo $latitude; ?>, <?php echo $longitude ?> &output=embed" frameborder="10" width="90%" height="700"></iframe>

  <?php

}



?>

<form action="" method="POST">
  <p>
    <input type="text" name="organismes" placeholder="les organismes">
  </p>

  <input type="submit" name="rechercher">
</form>

<form action="" method="POST">
  <p>
    <input type="text" name="latitude" placeholder="la latitude">
  </p>
  <p>
    <input type="text" name="longitude" placeholder="la longitude">
  </p>

  <input type="submit" name="soumettre les coordonnées">
</form>