<?php 


include("DataBaseConnection.php");


if(!$link){
	exit;
}


$sql = "SELECT * FROM hotels";
$result = $link->query($sql);
if ($result->num_rows > 0)
{	
	while($row = $result->fetch_assoc())
	{
?>
	<ul>
		
		<li>
			<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
			<form enctype="multipart/form-data" action="../Action_Scripts/UploadFiles.php" method="POST">
		    	<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
			    
			    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
			    <p><?php  echo $row["name"]  ?></p>
			    <!-- Название элемента input определяет имя в массиве $_FILES -->
			    Отправить этот файл: <input name="userfile" type="file" />
			    <input type="submit" value="Отправить файл" />
			</form>
		</li>

	</ul>
<?php 

	}
}
?>




