<?php
function regClient($clientFirstname, $clientLastname, $clientEmail, $clientPassword){
    $db = acmeConnect();
    $sql = 'INSERT INTO clients (clientFirstname, clientLastname, '
            . 'clientEmail, clientPassword) Values (:firstname, :lastname, '
            . ':email, :password)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':firstname', $clientFirstname, PDO::PARAM_STR);
    $stmt->bindValue(':lastname', $clientLastname, PDO::PARAM_STR);
    $stmt->bindValue(':email', $clientEmail, PDO::PARAM_STR);
    $stmt->bindValue(':password', $clientPassword, PDO::PARAM_STR);
    
    $stmt->execute();
    
    $rowsChanged = $stmt->rowCount();
    
    $stmt->closeCursor();
    
    return $rowsChanged;
}
