<?php

// Define a class named 'persona'
class persona {
    // Declare a public property named 'nombre' which can be accessed and modified from outside the class
    public $nombre;

    // Declare a method named 'asignarNombre' which accepts one argument
    public function asignarNombre($nuevoNombre) {
        // Assign the value of 'nuevoNombre' to the 'nombre' property of the current object instance
        $this->nombre = $nuevoNombre;
    }

    // Declare another method named 'imprimirNombre'
    public function imprimirNombre() {
        // Print a string that says "Hola, soy " followed by the value of the 'nombre' property of the current object instance
        echo "Hola, soy " . $this->nombre;
    }
}

// Create a new object instance of the 'persona' class and assign it to the variable 'objetoAlumno'
$objetoAlumno = new persona();

// Call the 'asignarNombre' method of the 'objetoAlumno' object and provide "Alex" as the argument
$objetoAlumno->asignarNombre("Alex");

// Call the 'imprimirNombre' method of the 'objetoAlumno' object. Note that this method does not need an argument, but it's incorrectly called with "Alex".
$objetoAlumno->imprimirNombre("Alex"); // This should be corrected to: $objetoAlumno->imprimirNombre();

// Print the value of the 'nombre' property of the 'objetoAlumno' object
echo $objetoAlumno->nombre;
