@extends('layouts.basico')
<!-- extendemos el layout basico, por lo tanto no  hay que aniadirle toda la estructura del Html -->

@section('contenido')
    <h1>Hola {{ $nombre }} {{ $apellido }}
    <!-- es como abrir un php con el echo de abajo-->
    <!-- <?php echo $nombre; ?> -->

    </h1>

@endsection
