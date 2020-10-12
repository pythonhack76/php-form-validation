<?php

// Error messages
$nameEmptyErr = "";
$emailEmptyErr = "";
$educationEmptyErr = "";
$genderEmptyErr = "";
$hobyEmptyErr = "";
$commentEmptyErr = "";
$nameErr = "";
$emailErr = "";

if (isset($_POST["submit"])) {
    // Set form variables
    $name           = checkInput($_POST["name"]);
    $email          = checkInput($_POST["email"]);
    $education      = checkInput($_POST["education"]);
    $gender         = checkInput($_POST["gender"]);
    $hoby           = $_POST["hoby"];
    $comment        = checkInput($_POST["comment"]);

    // Name validation
    if (empty($name)) {
        $nameEmptyErr = '<div class="error">
                Il campo nome non deve essere lasciato vuoto.
            </div>';
    } // Allow letters and white space 
    else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = '<div class="error">
                Solo lettere e spazi bianchi sono permessi.
            </div>';
    } else {
        echo $name . '<br>';
    }

    // Email validation
    if (empty($email)) {
        $emailEmptyErr = '<div class="error">
               Il campo email non deve essere vuoto.
            </div>';
    } // E-mail format validation
    else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $emailErr = '<div class="error">
                    Questo formato per il campo email non va bene
            </div>';
    } else {
        echo $email . '<br>';
    }


    // Select option validation
    if (empty($education)) {
        $educationEmptyErr = '<div class="error">
                Raccontaci sulla tua educazione.
            </div>';
    } else {
        echo $education . '<br>';
    }


    // Radio button validation
    if (empty($gender)) {
        $genderEmptyErr = '<div class="error">
                Specifica il tuo genere.
            </div>';
    } else {
        echo $gender . '<br>';
    }


    // Checkbox validation
    if (!empty($hoby)) {
        foreach ($_POST['hoby'] as $val) {
            echo $val . '<br>';
        }
    } else {
        $hobyEmptyErr = '<div class="error">
             Quali sono i tuoi hobbies.
            </div>';
    }

    // Text-area validation
    if (empty($comment)) {
        $commentEmptyErr = '<div class="error">
                Campo richiesto.
            </div>';
    } else {
        echo $comment . '<br>';
    }
}

function checkInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
