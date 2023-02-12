<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Exo 8</title>
</head>

<body>

    <form action="#" method="post">
        <fieldset>
            <legend>Adresse client</legend>
            <div>
                <label for="surname">Nom :</label>
                <input type="text" id="surname" name="surname" placeholder="Indiquer votre nom"
                    value=<?php echo $_POST["surname"] ?? ''?>>
            </div><br />
            <div>
                <label for="name">Prénom:</label>
                <input type="text" id="name" name="name" placeholder="Indiquer votre prénom"
                    value=<?php echo $_POST["name"] ?? ''?>>
            </div><br />
            <div>
                <label for="age">Âge :</label>
                <input type="text" id="age" name="age" placeholder="Indiquer votre âge"
                    value=<?php echo $_POST["age"] ?? ''?>></input>
            </div><br />
            <div>
                <button type="submit">Soumettre</button>
            </div>
        </fieldset>
    </form>
    </table>

    <?php

    $surname = $_POST["surname"] ?? null;
    $name = $_POST["name"] ?? null;
    $age = $_POST["age"] ?? null;

    $errors = array();
 

    if (!$surname || !$name || !$age) 
    {   
        // all range validation 
        $error="Merci de remplir tous les champs du formulaire";
        $errors[] = $error;    
    }

    if (strlen($surname)<5)
    {
        $error = "Le  nom doit comporter plus de 5 lettres";
        $errors[] = $error;   
    }
    if (!preg_match("/^[A-Z][a-z]+$/", $surname))
    {
        $error = "Le  nom doit commencer par une majuscule!";
        $errors[] = $error;
    }
       
    if (!empty($name) && strlen($name)<5)
    {
        $error = "Le prénom doit comporter plus de 5 lettres!";
        $errors[] = $error; 
    }
    if (!empty($name) && !preg_match("/^[A-Z][a-z]+$/", $name)){
        $error = "Le  prénom doit commencer par une majuscule!";
        $errors[] = $error;
    }
    
    if (!is_numeric($age) || $age < 0 || $age > 100) { 
        $error = "L'âge doit être une valeur numérique comprise entre 0 et 100";
        $errors[] = $error;
    }

    if (empty($errors)) 
    {
        foreach($_POST as $key=>$value){      
            echo"<br/><table><tr><td> $key: </td><td> $value </td></tr></table>"; 
        }
    }
    else {
     // boucle pour afficher l'erreur ou les erreurs multiples
     foreach($errors as $error){
     echo $error . '<br>';
     }
}

?>

</body>

</html>