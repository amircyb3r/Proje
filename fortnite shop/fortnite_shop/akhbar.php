<?php
require_once 'header.php' ;

$sql = "SELECT * FROM akhbars";
$result = mysqli_query($link,$sql);
?>
           
         <!-- ***************************************************************************************** -->
         <br>
         <br>
         <br>
         <?php
while ($row=mysqli_fetch_assoc($result)){

?>
         <div class="x">
           
        <img src="<?= ($row['ax_khabar'])? $row['ax_khabar']:''  ?>" alt="" width="700px" height="500x">
        </a>
        </div>
        <br>
        <br>
        <br>
        <div class="matn">
        <p>
        <?php echo $row['tozih'];   ?>
        </p>
        </div>




        <br>
         <br>
         <br>





        <?php
}
?>
















          <!-- ***************************************************************************************** -->

        
          <?php
require_once 'footer.php' ;
?>



