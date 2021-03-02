<?php 
    
    include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/style.css?v=<?php echo time(); ?>">
    <title>php-ajax-dischi</title>
</head>
<body>
    
    <header>
        <div class="logo">
            <img src="img/logo.jpg" alt="logo">
        </div>
    </header>

    <main>

        <div class="box">
        <?php foreach ($dischi as $element) { ?>

            <div class="etichetta">
                
                <h2><?php echo $element['name']?></h2>
                <img src="<?php echo $element['image']; ?>" alt="">
                
            </div>
            
        <?php }?>
        </div>

    </main>

    <footer></footer>
    

</body>
</html>