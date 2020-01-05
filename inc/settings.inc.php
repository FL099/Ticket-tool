<?php
?>
<h1>Einstellungen</h1>
<div class="container" id="overview">
	<div class="row">
		<div class="col-10">
            <form action="index.php">
                <div class="form-group">
                    <label for="project">Projekteinstellungen</label>
                    <select id="project" class="form-control" disabled>
                        <option>Sie haben nicht die Befugnis</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="color">Akzentfarbe*</label>
                        <select id="color" class="form-control" required>
                            <option selected>Auswählen...</option>
                            <option>red</option>
                            <option>blue</option>
                            <option>cyan</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="assign">Benachrichtigung bei mir neu zugewiesenen Tickets</label>
                        <select id="assign" class="form-control" required>
                            <option selected>Auswählen...</option>
                            <option>email Benachrichtigung</option>
                            <option>popup Benachrichtigung</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <label for="profilepic">Zusatzinfos</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="profilepic">
                    <label class="custom-file-label" for="profilepic">neues Profilbild hochladen</label>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Über Änderungen benachrichtigen
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Apply</button>
            </form>
		</div>
	</div>
</div>