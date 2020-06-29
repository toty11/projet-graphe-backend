<?php
$bdd = new PDO('mysql:host=localhost;port=3308;dbname=dbgraphe', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function getNotes($matiere){
    try{
        global $bdd;
        $response = $bdd->query("SELECT * from notes WHERE matiere = '".$matiere."'");
        $data = $response->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    return json_encode($data);
}

function getNotesEtudiant($matiere, $id){
    try{
        global $bdd;
        $response = $bdd->query("SELECT * from notes WHERE matiere = '".$matiere."' AND id_etudiant = ".$id);
        $data = $response->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    return json_encode($data);
}

function getEtudiants(){
    try{
        global $bdd;
        $response = $bdd->query("SELECT * from etudiant");
        $data = $response->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    return json_encode($data);
}