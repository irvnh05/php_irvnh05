<?php
	session_start();
    $_SESSION['value'] = $_POST['value'];
?>

<pre>
<?php

for($i=1; $i <=$_SESSION['baris']; $i++){
      echo "<p>";
      for($j=1; $j<=$_SESSION['kolom']; $j++){
        
        echo "<label> $i.$j: ";
        echo "</label> ";
        
      }
}
?>
</pre>