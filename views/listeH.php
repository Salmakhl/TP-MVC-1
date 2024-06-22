
<?php 
require_once 'model/hotel.php';
$requet=liste_hotel();
$data= $requet-> fetchAll(PDO::FETCH_ASSOC);

ob_start();
 ?> 
<body style="background-color:beige; margin:100px;">
    <button class="btn" ><a href="test.php">Ajouter</a></button>
    <table cellspacing="0" style="padding-top:100px" >
        <tr>
            <td class="head" >Hotel</td>
            <td class="head">Numero</td>
            <td class="head">Adresse</td>
            <td class="head"  >Etoile</td>
            <td class="head">operation</td>

           
        </tr>
        <?php foreach ($data   as $x):?>
        <tr>
            <td><?php echo $x['id_hotel']?></td>
            <td><?php echo $x['titre']?></td>
            <td><?php echo $x['adresse']?></td>

            <td><span  >
                    <?php 
                        $b=$x['nbre_etoile'];                        
                        if ($b<3){
                            echo "<span style='background-color:red;'>$b</span>";
                        }if ($b<5 and $b>=3){
                            echo "<span style='background-color:yellow;'>$b</span>";
                        }if($b>=5) {
                            echo "<span style='background-color:green;'>$b</span>";

                        }
                    ?>
                </span>
            </td>
            <td style="display:flex; flex-direction:row;">
                <button class='btn1'><a href="MODIFIER.php?id_hotel=<?php echo $x['id_hotel']?> " >Modifier</a></button>
                <button class='btn2'><a href="supprimer.php?id_hotel=<?php echo $x['id_hotel']?> ">supprimer</a></button>
            </td>

           

        </tr>
        <?php endforeach; ?>

        </table>
  

<?php $content = ob_get_clean();
include_once 'views/layout.php';
?>
</body>

