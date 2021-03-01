<!-- Stampare a schermo i dischi musicali solo con l’utilizzo di PHP.
Al caricamento della pagina si dovranno visualizzare tutti i dischi. -->

<?php 




foreach ($dischi as $element => $ciao) {
    $name .= '<p>'.$ciao['name'].'</p>';
    $image .= '<img src="' .$ciao['image'] .'"' .'alt="">';
    
}