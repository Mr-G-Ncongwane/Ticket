<?php
function db_connect(){
    //Connecting to the database
    $Host='localhost'; //database hosted on a local server: 127.0.0.1 / localhost
    $uName='root'; //log in details, username: root
    $uPass='';// No password set
    $database='roxxy'; //Database name is Roxxy
    //using try catch method to handle the errors when connecting to the database


    try{
    return new PDO('mysql:host='.$Host.';dbname='.$database.';charset=utf8',$uName,$uPass);

    }catch (PDOexception $e){
exit ("Unable to connect to the Database");
    }
}

// Template header, feel free to customize this
function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link href="styles.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>
        <body>
        <nav class="navtop">
            <div>
                <h1>Ticketing System</h1>
                <a href="index.php"><i class="fas fa-ticket-alt"></i>Tickets</a>
            </div>
        </nav>
    EOT;
    }
     
    // Template footer
function template_footer() {
    echo <<<EOT
        </body>
    </html>
    EOT;
    }
?>