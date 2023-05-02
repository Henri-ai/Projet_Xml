<?php
define('CHOICE', ['International', 'National', 'Écologie', 'Culture', 'Économie']);
define('ARRAY_ARTICLE', ['6', '9', '12']);



// $selectedArticle = filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];
// if (empty($_POST['choice'])) {
//     echo "Aucune checkbox thème n'a été cochée";
// } else {
//     foreach ($_POST['choice'] as $valeur1) {
//         echo "La checkbox choice $valeur1 a été cochée<br>";
//     }
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // pour que les conditions s'active a l'envoi du formulaire
    //vérification de l'existence des 2 paramètres. Dans ce cas, on écrit les cookies.

    //création des cookie choice et select, durée 1 semaine.

    $nbArticle = intval(filter_input(INPUT_POST, 'nbArticle', FILTER_SANITIZE_NUMBER_INT));
    if (in_array($nbArticle, ARRAY_ARTICLE) == false) { // in_array ->  Indique si une valeur appartient à un tableau
        $error['nbArticle'] = 'Le nombre articles choisi n\'est pas valide!';
    } else {
        setcookie('nbArticle', $nbArticle, (time() + 7 * 24 * 3600), '/');
    }


    // Sans le / le cookie n'est valide que dans le dossier et les sous-dossiers ou il a été déclaré.


    $choice = filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    var_dump($choice);
    if (empty($choice)) {
        $error['choice'] = 'Aucune checkbox thème n\'a été cochée';
        // if (in_array($choice, CHOICE) == false) {
        //     $error['choice'] = 'Choix invalide.';}
    } else {
        foreach ($choice as $value) {
            if ($value < 1 || $value > count(CHOICE)) {
                $error['choice'] = 'Erreur choix';
            } else {
                setcookie('choice', json_encode($choice), (time() + 7 * 24 * 3600), '/');
            }
        }
    }
}

include __DIR__ . '/../views/templates/header.php';

include __DIR__ . '/../views/preferences.php';

include __DIR__ . '/../views/templates/footer.php';
