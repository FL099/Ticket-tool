<?php
    $db = new mysqli("10.0.0.33:3306", "flo", "olf", "ticketsystem");
    if(mysqli_connect_errno()==0) {
        if ($_GET["section"] == "all") {
            $sql = 'SELECT grdat.ticketid, grdat.heading, grdat.text, grdat.categoryname, userdata.firstname
                FROM (SELECT tickets.ticketid, tickets.heading, categories.categoryname , tickets.text , tickets.assignedto
                FROM ticketsystem.tickets
                INNER JOIN ticketsystem.categories on ticketsystem.tickets.category = ticketsystem.categories.category) as grdat
                left JOIN ticketsystem.userdata on grdat.assignedto = ticketsystem.userdata.userid;';
        } elseif ($_GET["section"] == "mine") {
            $sql = "SELECT usdat.ticketid, usdat.heading, categories.categoryname , usdat.text
                FROM (SELECT ticketid, heading, category, text, assignedto
                FROM ticketsystem.tickets
                WHERE assignedto = '1') as usdat
                INNER JOIN ticketsystem.categories on usdat.category = ticketsystem.categories.category;"; //TODO: '1' auf $_SESSION['user'] ändern
        } elseif ($_GET["section"] == "add"){
            $sql = "INSERT INTO ticketsystem.tickets (ticketid, heading, text, category, creator, edited, editedby, assignedto)
                    VALUES (".$_POST['tnum'].", ".$_POST['titel'].", ".$_POST['description'].",".$_POST['category'].", ".$_SESSION['user'].", '".date('yyyy-mm-dd')."', ".$_SESSION['user'].", ".$_POST['assign'].")";
        } else{

            return;
        }
        $ergebnis = $db->prepare($sql);
        $ergebnis->execute();
        if ($_GET["section"] == "all") {
            $ergebnis->bind_result($tnum, $titel, $text, $category, $zugewiesen);
            while ($ergebnis->fetch()) {
                echo "<tr><th>" . $tnum . "</th><td>" . $titel . "</td><td>" . $text . "</td><td>" . $category . "</td><td>" . $zugewiesen . "</td></tr>";
            }
        }elseif ($_GET["section"] == "mine"){
            $ergebnis->bind_result($tnum, $titel, $text, $category);
            while ($ergebnis->fetch()) {
                echo "<tr><th>" . $tnum . "</th><td>" . $titel . "</td><td>" . $text . "</td><td>" . $category . "</td></tr>";
            }
        }
    }
    else{
        echo'Die Datenbank konnte nicht erreicht werden. Folgender Fehler trat auf:'.mysqli_connect_errno().':'.mysqli_connect_error();
    }
    $db->close(); //Datenbankverbindung schließen
    $_POST["cat"];