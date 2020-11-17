   <!DOCTYPE html>
   <html>
     <head>
       <title>setting up database</title>
    </head>
    <body>
      <h3> Setting up...</h3>
    <?php 
      require_once 'functions.php';
// tabla para usuarios.
      createtable('Usuario',
                  'user VARCHAR(16),
                   pass VARCHAR(16),
                   INDEX(user(6))');
//  tabla de mercancia
      createtable('VentaMERCH',
                  'pedido VARCHAR (30),
                   talla VARCHAR (5),
                   precio VARCHAR (4)');
//  tabla de susbcripción
      createtable('sub',
                  'nombre VARCHAR(16),
                   mes VARCHAR(12),
                   pago VARCHAR(5),
                   categoria VARCHAR(8),
                   coach VARCHAR(10),
                   tarjeta VARCHAR(16)');

   ?>

       <br>...done.
     </body>
   </html>
    
