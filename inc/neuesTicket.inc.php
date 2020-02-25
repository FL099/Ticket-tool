<?php
?>
<h1>Ticket hinzufügen</h1><br>
<div class="container" id="overview">
    <div class="row">
        <form action="index.php?section=overview" method="post">
            <div class="form-row">
                <div class="form-group col-md-10">
                    <label for="titel">Titel/ Kurzzusammenfassung*</label>
                    <input type="text" class="form-control" id="titel" placeholder="Totalausfall" required>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Genauere Beschreibung:</label>
                <input type="text" class="form-control" id="description" placeholder="Nichts geht mehr!">
            </div>
            <div class="form-group">
                <label for="project">Projekt</label>
                <select id="project" class="form-control" disabled>
                    <option>Sie haben nicht die Befugnis</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                    <label for="category">Kategorie*</label>
                    <select id="category" class="form-control" required>
                        <option selected>Auswählen...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-10">
                    <label for="assign">Zuweisen</label>
                    <select id="assign" class="form-control" required>
                        <option selected>Auswählen...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <label for="customFile">Zusatzinfos</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Screenshot o.ä hochladen</label>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Über Änderungen benachrichtigen
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Erstellen</button>
        </form>
    </div>
</div>
