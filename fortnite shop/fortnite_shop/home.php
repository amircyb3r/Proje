
<?php

require_once 'header.php' ;
$sql = "SELECT * FROM mahsols";
$result = mysqli_query($link,$sql);
?>
        

            
        <!-- ************************************************************************************** -->
<?php
while ($row=mysqli_fetch_assoc($result)){

?>
<div class="main">
            <div class="mahsol">

                <div class="qhab">
                    <img src="<?= ($row['ax'])? $row['ax']:''  ?>">
                    <div class="n"><?php echo $row['name'];   ?></div>
                    <div class="details">
                        <div class="s">
                        قیمت:<?= $row['price']; ?>
                        </div>
                    </div>
                    <a class="buy" href="buy.php"<?= $row['id'];  ?>>خرید</a>
                </div>

                
            </div>
            
            <!-- ***************************************************************************************** -->
        </div>
        <?php
}
?>
        <?php
require_once 'footer.php' ;
?>