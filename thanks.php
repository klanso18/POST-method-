<?php
if (isset($_POST['submit'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    
    echo 'Merci ' . $prenom . ' ' . $nom . ' de nous avoir contacté à propos de ' . "$sujet"."<br>";
    echo 'Un de nos conseillers vous contactera soit à l adresse ' . $email . ' ou par téléphone au ' . $tel . ' dans les plus brefs délais pour traiter votre demande :'."<br>";
    echo $message; 
}
