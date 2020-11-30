<? php 
usa  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ Exception ;

requiere  'PHPMailer /Exception.php' ;
requiere  'PHPMailer /PHPMailer.php' ;
requiere  'PHPMailer /SMTP.php' ;

// La instanciación y el paso de `true` habilita excepciones 
$ mail = new  PHPMailer ( true );

try {
    $ correo-> SMTPOptions = matriz (
		'ssl' => matriz (
		'verify_peer' => falso,
		'verify_peer_name' => falso,
		'allow_self_signed' => verdadero
		)
	);
     // Configuración del servidor 
    $ mail -> SMTPDebug = SMTP :: 0 ;                      // Habilita la salida de depuración detallada 
    $ mail -> isSMTP ();                                            // Enviar usando SMTP 
    $ mail -> Host        = 'smtp.gmail.com' ;                    // Configure el servidor SMTP para enviar a través de 
    $ mail -> SMTPAuth    = true ;                                   // Habilita la autenticación SMTP 
    $correo -> Nombre de usuario    = 'testparaclass@gmail.com' ;                     // Nombre 
    de usuario SMTP $ mail -> Contraseña    = 'Para2020' ;                               // Contraseña SMTP 
    $ electrónico -> SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS ;         // Habilite el cifrado TLS; `PHPMailer :: ENCRYPTION_SMTPS` alentó 
    $ mail -> Port        = 587 ;                                    // Puerto TCP para conectarse, use 465 para `PHPMailer :: ENCRYPTION_SMTPS` arriba

    // Destinatarios 
    $ mail -> setFrom ( 'testparaclass@gmail.com' , 'Admin' );
    $ correo -> addAddress ( 'testparaclass@gmail.com');     // Agregar un destinatario 
    
    // Contenido 
    $ correo -> isHTML ( verdadero );                                  // Establecer el formato de correo electrónico en HTML 
    $ mail -> Asunto = 'TEST' ;
    $ mail -> Body     = 'TEST</b>' ;
    $ mail -> AltBody = 'tes' ;

    $ correo -> enviar ();
    echo  'Mensaje enviado' ;
} catch ( Exception  $ e ) {
     echo  "No se pudo enviar el mensaje. Error de correo: {$ mail-> ErrorInfo}" ;
}