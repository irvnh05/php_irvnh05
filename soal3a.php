<!-- <?php 
include 'config.php';
?> -->
 
<h3>Laporan Hobi</h3>
 
<form action="soal3a.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<!-- search by nama hobi -->
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Hobi</th>
        <th>Jumlah Person</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
        $data = mysqli_query($conn, "SELECT hobi, COUNT(hobi) AS jumlah FROM hobi where hobi like '%".$cari."%'  GROUP BY hobi ");				
	}else{	
        $data = mysqli_query($conn, "SELECT * FROM hobi");
    }
    
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['hobi']; ?></td>
        <td><?php echo $d['jumlah']; ?></td>
	</tr>
	<?php } ?>
    
</table>