<?php include('header.php'); 
?>
<div id="divInfoNewsMainWrap"><!--divInfoNewsMainWrap-->
    <div id="divInfoNewsMain">
	<?php 
				if(isset($_GET['vijestid'])){
					$idOdabranaVijest = $_GET['vijestid'];
				}
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "skola";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				//Edit vijest
				if(isset($_POST['spremi'])){
					$id = $_POST['txt1'];
					$naziv = $_POST['txt2'];
					$opis = $_POST['txt3'];
					$sql = "UPDATE ljeto2021 SET id_vijest='$id', naziv_vijest='$naziv', opis_vijest='$opis' WHERE id_vijest = $idOdabranaVijest";
					if ($conn->query($sql) === TRUE) {
					  echo "New record created successfully";
					} else {
					  echo "Error: " . $sql . "<br>" . $conn->error;
					}
				}
				//Select vijest
				$sql2 = "SELECT id_vijest, naziv_vijest, opis_vijest FROM ljeto2021 WHERE id_vijest = $idOdabranaVijest";
				$result = $conn->query($sql2);
				$vijest = $result->fetch_assoc();
				$conn->close();
			 ?>
			 	<div class="gridCol3"> <!--MAIN DISPLAYED NEWS-->
				 <div id="divInfoNewsCol1">
        			<img src="https://www.mccourier.com/wp-content/uploads/2021/01/Smart-Agriculture-Market-780x470.jpg" alt="">
        		</div>
				<div id="divInfoNewsCol2">
					<h2> <?php echo $vijest['naziv_vijest']; ?> </h2>
					<p> <?php echo $vijest['opis_vijest']; ?> </p>
					<a href="index.php?vijestid=<?php echo $vijest['id_vijest']; ?>&obrisi=da">Delete News</a>
				</div>
			</div>
			<div style="clear: both;"></div>
    </div><!--Main Displayed News END-->
</div><!--divInfoNewsMainWrap END-->
<div id="divNewsEditForm"><!--divNewsEditForm-->
    <h1 class="SectionTitle1">News update form</h1>
            <form id="obrazac1" method="post" action="">
                <p>
                    <label for="txt1">News ID</label>
                    <input id="txt1" name="txt1" type="text" value="<?php echo $vijest['id_vijest']; ?>"onfocus="if(this.value != ' ') this.value = ''">
                </p>
                <p>
                    <label for="txt2">News Title</label>
                    <input id="txt2" name="txt2" type="text" value="<?php echo $vijest['naziv_vijest']; ?>"onfocus="if(this.value != ' ') this.value = ''">
                </p>
                <p>
                    <label for="txt3">News Paragraph</label>
                    <textarea id="txt3" name="txt3" type="text" value="<?php echo $vijest['opis_vijest']; ?>" onfocus="if(this.value != ' ') this.value = ''"></textarea>
                </p>
                <p>
					<input type="submit" name="spremi" id="spremi" value="Spremi"><input type="reset" name="delete" id="delete" value="Obriši">
				</p>
            </form>
</div><!--divNewsEditFormEND-->
<?php include('footer.php'); ?>