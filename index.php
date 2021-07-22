<?php include('header.php'); 
if(isset($_GET['spremi'])){
	//echo '<pre>';
	//print_r($_POST);
	//echo '</pre>';
	$name = $_GET['name'];
	$email = $_GET['mail'];
	$phone = $_GET['phone'];
    $msg = $_GET['message'];
}
?>
<div id="divInfoNewsMainWrap"><!--divInfoNewsMainWrap-->
    <div id="divInfoNewsMain">
        <div id="divInfoNewsCol1">
        <img src="https://www.mccourier.com/wp-content/uploads/2021/01/Smart-Agriculture-Market-780x470.jpg" alt="">
        </div>
        <div id="divInfoNewsCol2">
        <h2>Today's news</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quae quis tempora quia maxime, ipsum atque eum reiciendis minus nam magni, excepturi neque modi nostrum. Architecto quos perspiciatis molestias autem.</p>
        </div>
        <div id="divNewsButton">
        <a href="vijest.php?vijestid=19">See more</a>
        </div>
    </div>
</div><!--divInfoNewsMainWrap END-->
<div id="divMainTabsWrap"><!--divMainTabs-->
    <h3>Categories</h3>
    <div id="tabs">
  <ul>
    <li><a href="#fragment-1"><span>Technology</span></a></li>
    <li><a href="#fragment-2"><span>Soil</span></a></li>
    <li><a href="#fragment-3"><span>Operations</span></a></li>
  </ul>
  <div id="fragment-1">
    <img src="Images/Technology1.jpg" alt="">
    <img src="Images/Technology2.jpg" alt="">
    <img src="Images/Technology3.jpg" alt="">
  </div>
  <div id="fragment-2">
    <img src="Images/Soil1.jpg" alt="">
    <img src="Images/Soil2.jpg" alt="">
    <img src="Images/Soil3.jpg" alt="">
  </div>
  <div id="fragment-3">
    <img src="Images/Operation2.jpg" alt="">
    <img src="Images/Operation3.jpg" alt="">
    <img src="Images/Operation1.jpg" alt="">
  </div>
</div>
 
<script>
    j12("#tabs").tabs();
</script> 

</div><!--divMainTabsEND-->
<div id="divMainNewsWrap"><!--divMainNews-->
<?php 
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
        // Delete vijest
	    if(isset($_GET['vijestid'])&&isset($_GET['obrisi'])){
	    $idOdabranaVijest = $_GET['vijestid'];
	    $sqlObrisi = "DELETE FROM ljeto2021 WHERE id_vijest=$idOdabranaVijest";
	    if ($conn->query($sqlObrisi) === TRUE) {
	    echo "Vijest obrisana";
	    } else {
		     echo "Error: " . $sqlObrisi . "<br>" . $conn->error;
	    }
        // Save vijest
	    }
	    if(isset($_POST['spremi'])){
	        $id = $_POST['txt1'];
		    $naslov = $_POST['txt2'];
		    $opis = $_POST['txt3'];
		    $sql = "INSERT INTO ljeto2021 (id_vijest,naziv_vijest,opis_vijest)
		    VALUES ('$id', '$naslov', '$opis')"; 
		    if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
	    } else {
			echo "Error: " . $sql . "<br>" . $conn->error;
	    }
     }
    ?>
    <div id="divMainNews">
        <h2>Top three news</h2>
        <?php 
				//Select News
				$sql2 = "SELECT id_vijest, naziv_vijest, opis_vijest FROM ljeto2021";
				$result = $conn->query($sql2);
				$i = 1;
				while($row = $result->fetch_assoc()):
					//echo '<pre>';
					//print_r($row);
					//echo '</pre>';
			 ?>
			 	<div class="gridCol3 <?php if($i%3==0) echo 'gridLastItem'; ?>">
				<h2><?php echo $row['naziv_vijest']; ?></h2>
				<p maxlength="30"><?php echo $row['opis_vijest']; ?></p>
				<a href="vijest.php?vijestid=<?php echo $row['id_vijest']; ?>">Read more</a>
			</div>
			<?php
				$i++; endwhile;
			 	$conn->close();
			 ?>
			<div style="clear: both;"></div>
		</div>
    </div><!--divMainNewsEND-->
<div id="divInsertFormWrap"><!--divInserForm-->
    <div id="divInsertForm">
        <div id="divInsertFormCol1">
            <img src="https://blog.jtiot.com/hs-fs/hubfs/Celluar%20connectivity%20for%20agriculture.png?width=1871&name=Celluar%20connectivity%20for%20agriculture.png" alt="">
        </div>
        <?php 
			if(isset($_GET['spremi'])){
				//Ispis podataka u datoteku
				$mojaDatoteka = fopen("inc/mojipodaci.txt", "w") or die("Unable to open file!");
				$unos = "Vaši podaci su: \n -".$name."\n - ".$email."\n - ".$phone."\n - ".$msg." ";
				fwrite($mojaDatoteka, $unos);
				fclose($mojaDatoteka);
				
                //Slanje podataka na email
				/*$to = "pavle905@gmail.com,".$email;
				$poruka= "Vaše ime je: ".$ime."\n";
				$poruka.= "Vaš email je: ".$email."\n";
				$poruka.= "Vaša poruka je: ".$opis."\n";
				mail($to,"Neki naslov maila",$poruka);*/
			}
		?>
        <form id="divInsertFormCol2" method="get" action="">
            <h2>Contact <span>us!</span></h2>
            <p id="InsertFormInputStyle1">
                <input id="name" name="name" minlength="2" type="text" placeholder="Your Name" >
            </p>
            <p id="InsertFormInputStyle1">
                <input id="mail" name="mail" type="email" placeholder="Email" >
            </p>
            <p id="InsertFormInputStyle1">
                <input id="phone" name="phone" type="number" minlength="7" placeholder="Phone" >
            </p>
            <p>
                <textarea id="message" name="message"placeholder="Message"></textarea>
            </p>
            <div id="divInsertBtn">
                <p><input type="submit" name="spremi" id="spremi" value="SEND"></p>
            </div>
        </form>
    </div>
</div><!--divInserFormEND-->
<script>
j31("#divInsertFormCol2").validate()
</script>

<?php include('footer.php'); ?>