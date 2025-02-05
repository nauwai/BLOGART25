<?php 
require_once 'header.php';
sql_connect();
//var_dump($_SESSION);
?>

<h1>Bienvenue <?php echo $_SESSION['pseudo']?></h1>
<p style="color: #4cae4c"><?php echo $_SESSION['flash']['danger']?></p>
<?php require_once 'footer.php'; ?>