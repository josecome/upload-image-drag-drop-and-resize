<?php 
function save($a, $b) {
    try {
        $f = fopen( $b, 'wb' ); 
        $d = explode( ',', $a );
        fwrite( $f, base64_decode( $d[ 1 ] ) );
        fclose( $f ); 
        return "Image saved!"; 
    }catch(Exception $e) {
        return "Error ocurred!";
    }

}

echo save($_POST['file'], 'uploaded_images/' . $_POST['name']);

?>