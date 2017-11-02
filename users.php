<?php
function listeUsers($where='') {
    return fetchAll('users',$where);
}

// ajouter un utilisateur
function ajouterUsers($data) {
    insert('users', $data);
}

// supprimer des utilisateurs
function supprimerUsers($data) {
    // suppression des enregistrements
    foreach ($data as $id) {
        delete('users', "id = '$id'");
    }
}


// modifier les utilisateurs
function modifierUsers($donnees) {
    foreach ($donnees as $id => $data) {
        update('users', $data, "id = '$id'");
    }    
}