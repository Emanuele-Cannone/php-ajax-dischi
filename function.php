<!-- Stampare a schermo i dischi musicali solo con l’utilizzo di PHP.
Al caricamento della pagina si dovranno visualizzare tutti i dischi. -->

<?php 

include_once 'database.php';


foreach ($dischi as $element) {
    $name .= '<p>'.$element['name'].'</p>';
    $image .= '<p>'.$element['image'].'</p>';
    
}