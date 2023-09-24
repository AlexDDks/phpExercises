<?php
    // Data sent using the GET method is transmitted via the URL
    // Check if any data has been sent using the GET method
    if ($_GET) {    
        // Retrieve the value from the 'nombre' parameter sent via GET
        $nombre = $_GET['nombre'];
        
        // Display a greeting with the provided name
        echo "Hola " . $nombre;
    }
