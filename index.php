<?php 
    
    include 'database.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
</head>
<body>
    

    <?php foreach ($dischi as $element) { ?>
        

        <div class="etichette">

            <h2><?php echo $element['name']?></h2>
            <img src="<?php echo $element['image'] ?>" alt="">

        </div>




    <?php }?>
    


</body>
</html>