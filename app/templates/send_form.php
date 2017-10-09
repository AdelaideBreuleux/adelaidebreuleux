<!-- call bootstrap -->
<link href="pages/js/bootstrap.min.css" rel="stylesheet">
<link href="pages/css/style.css" rel="stylesheet">


<?php
session_start();//on démarre la session
// $errors = [];
$errors = array(); // on crée une vérif de champs
if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {// on verifie l'existence du champ et d'un contenu
    $errors ['name'] = "vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {// on verifie existence de la clé
    $errors ['mail'] = "vous n'avez pas renseigné votre email";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors ['message'] = "vous n'avez pas renseigné votre message";
}
if(array_key_exists('antispam', $_POST)) {// on place un petit filet anti robots spammers
    $errors ['antispam'] = "Vous êtes un robots spammer";
}
//On check les infos transmises lors de la validation
if(!empty($errors)){ // si erreur on renvoie vers la page précédente
    $_SESSION['errors'] = $errors;//on stocke les erreurs
    $_SESSION['inputs'] = $_POST;
    header('Location: contact.php');
}else{
    $_SESSION['success'] = 1;
    $headers  = 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\n";
    $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
    $to = 'adelaide.breuleux@gmail.com';
    $subject = 'Message envoyé par ' . htmlspecialchars($_POST['name']);
    $message_content = '
  <table>
  <tr>
  <td><b>Auteur :</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b>Message :</b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';
    mail($to, $subject, $message_content, $headers);
    header('Location: ../index.php?page=contact');
}
