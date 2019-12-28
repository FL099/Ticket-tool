<?php
#TODO: irgendwie Graphen dynamisch erzeugen lassen und dann je nach Einstellungen des Users einbinden
$graphen = array("img/graph2.jfif", "img/graph.png", "img/graph.png", "img/graph2.jfif");
?>
<h1>Ihre Übersicht:</h1>
    <div class="container" id="overview">
		<div class="row">
			<div class="card col-5 bg-dark" >
				<img src="<?php $graphen[0]?>" class="card-img-top" alt="..." style="height:250px;">
	    			<a href="#">
		          		<div class="card-body">
				    		<h5 class="card-title text-white">Erledigte Projekte diese Woche</h5>
				  		</div>
					</a>
            </div>
			<div class="card col-5 bg-dark">
				<img src="<?php $graphen[1]?>" class="card-img-top" alt="..." style="height:250px;">
    			<a href="#">
		  		    <div class="card-body">
	            		<h5 class="card-title text-white">Card title</h5>
		      		</div>
		  		</a>
            </div>
        </div>
		<div class="row">
			<div class="card col-5 bg-dark">
				<img src="<?php $graphen[2]?>" class="card-img-top" alt="..." style="height:250px;">
				<a href="#">
    		  		<div class="card-body">
	    	    		<h5 class="card-title text-white">Card title</h5>
			  		</div>
                </a>
            </div>
    		<div class="card col-5 bg-dark" >
				<img src="<?php $graphen[3]?>" class="card-img-top" alt="..." style="height:250px;">
					<a href="#">
				  		<div class="card-body">
				    		<h5 class="card-title text-white">Erledigte Projekte diese Woche</h5>
				  		</div>
					</a>
			</div>
		</div>
	</div>
