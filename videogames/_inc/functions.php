<?php 

function isEmail($email) {
    // Utilisation de filter_var pour valider l'adresse e-mail
    $valid = filter_var($email, FILTER_VALIDATE_EMAIL);
    
    // Renvoie true si l'adresse e-mail est valide, false sinon
    return $valid !== false;
}

function isLong($str) {
    // Utilisation de strlen pour obtenir la longueur de la chaîne
    $length = strlen($str);
    
    // Renvoie true si la longueur de la chaîne est supérieure ou égale à 10, false sinon
    return $length >= 10;
}

function processContactForm(){

    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $submissionDate = new DateTime("@$_SERVER[REQUEST_TIME]");
    $formattedDate = $submissionDate->format('Y-m-d H:i:s');

    if(isEmail($email) == true && islong($subject) == true && islong($message) == true){

        echo "nom: $firstname $name email: ' $email ', sujet: ' $subject ' message: ' $message ' date: ' $formattedDate '";

    }

    else{

        echo "formulaire incorrect";

    }

    function connexion():PDO
    {
        $connexion = new PDO('mysql:host=127.0.0.1; dbname=videogames', 'root','', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]);
        return $connexion; 
    }


    function GetAllGames(){

        // $sql = 'SELECT * FROM game';
        // $ps = $sql->execute();
    }

    
    
}

?>