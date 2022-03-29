<?php
session_start();

$_SESSION['baris'] = $_POST['baris'];
$_SESSION['kolom'] = $_POST['kolom'];
?>

<form method="POST" action="soal1c.php">
<?php
for($i=1; $i <=$_POST['baris']; $i++){
      echo "<p>";
      for($j=1; $j<=$_POST['kolom']; $j++){
        
        echo "<label> $i.$j:  ";
        echo '<input type="text" name="value" ';
        echo "</label> ";
        
      }
}
?>
	<br><br>
	<input type="submit" value="next">

</form>


