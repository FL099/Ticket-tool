<?php
    $db = new mysqli("10.0.0.33:3306", "FloConn", "Floconn99#19", "ticketsystem");
    if(mysqli_connect_errno()==0) {
        $sql= 'SELECT userdata.firstname, userdata.lastname, userdata.telephone, userdata.email, users.firstday
                FROM ticketsystem.users
                INNER JOIN ticketsystem.userdata on ticketsystem.users.UserID = ticketsystem.userdata.userid ;';
        $ergebnis= $db->prepare( $sql);
        $ergebnis->execute();
        $ergebnis->bind_result( $fname, $lname);
        while($ergebnis->fetch()) {
            echo "<tr><td>".$fname."</td><td>".$lname."</td>";}}
    else{
        echo'Die Datenbank konnte nicht erreicht werden. Folgender Fehler trat auf:'.mysqli_connect_errno().':'.mysqli_connect_error();
    }
    $db->close(); //Datenbankverbindungschließen