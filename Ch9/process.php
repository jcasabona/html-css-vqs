<h1>GET Data</h1>
<?php 

if ( ! empty( $_GET ) ) {
    echo "<pre>";
    var_dump( $_GET );
    echo "</pre>";
}
?>

<h1>POST Data</h1>
<?php
if ( ! empty( $_POST ) ) {
    echo "<pre>";
    var_dump( $_POST );
    echo "</pre>";
}
