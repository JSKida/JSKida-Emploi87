<!-- ﻿### COPYRIGHT XLASH 2014 ###

### Tous droits réservés ###
### Auteur : Kida Jean-Sébastien ###
### Contact : js.kida@gmail.com ### -->



    <?php



                /* load flux 1 */
               
                try{
		echo '<ul>';
		if(!@$fluxrss=simplexml_load_file('http://rss.jobsearch.monster.com/rssquery.ashx?rad_units=km&cy=FR&pp=25&sort=rv.di.dt&geo=Limousin%2c20%2c%2c%2c721&baseurl=offre-emploi.monster.fr')){
			throw new Exception('Flux introuvable');
		}		
		if(empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
			throw new Exception('Flux invalide');
			
		/* désactive l'affichage des en-têtes de flux
                 * echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
				<p>'.(string)$fluxrss->channel->description.'</p>'; */
		
		$i = 0;
		$nb_affichage = 50;
		
		foreach($fluxrss->channel->item as $item){
			echo '<a href="'.(string)$item->link.'">'.(string)$item->title.'</a> <i>publié le '.(string)date('d/m/Y à G\hi',strtotime($item->pubDate)).'</i><br><br>';
			if(++$i>=$nb_affichage)
				break;
		}
		echo '</ul>';
                
                /* load flux 2 */
               
                    if(!@$fluxrss=simplexml_load_file('http://www.apec.fr/fluxRss/XML/OffresCadre_R713.xml')){
			throw new Exception('Flux introuvable');
		}		
		if(empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
			throw new Exception('Flux invalide');
			
		/* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
				<p>'.(string)$fluxrss->channel->description.'</p>'; */
		
		$i = 0;
		$nb_affichage = 50;
		echo '<ul>';
		foreach($fluxrss->channel->item as $item){
			echo '<a href="'.(string)$item->link.'">'.(string)$item->title.'</a> <i>publié le '.(string)date('d/m/Y à G\hi',strtotime($item->pubDate)).'</i><br><br>';
			if(++$i>=$nb_affichage)
				break;
		}
		echo '</ul>';
                
                /* load flux 3 */
               
                if(!@$fluxrss=simplexml_load_file('http://www.keljob.com/recherche-rss/limousin/haute-vienne/_/N-6aqZ6xfZ6u9Z6qc?nbJobPage=15')){
			throw new Exception('Flux introuvable');
		}		
		if(empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
			throw new Exception('Flux invalide');
			
		/* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
				<p>'.(string)$fluxrss->channel->description.'</p>'; */
		
		$i = 0;
		$nb_affichage = 50;
		echo '<ul>';
		foreach($fluxrss->channel->item as $item){
			echo '<a href="'.(string)$item->link.'">'.(string)$item->title.'</a> <i>publié le '.(string)date('d/m/Y à G\hi',strtotime($item->pubDate)).'</i><br><br>';
			if(++$i>=$nb_affichage)
				break;
		}
		echo '</ul>';
                
                 /* load flux 4 */
               
                if(!@$fluxrss=simplexml_load_file('http://www.agglo-limoges.fr/fr/recrutement-rss.xml')){
			throw new Exception('Flux introuvable');
		}		
		if(empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
			throw new Exception('Flux invalide');
			
		/* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
				<p>'.(string)$fluxrss->channel->description.'</p>'; */
		
		$i = 0;
		$nb_affichage = 50;
		echo '<ul>';
		foreach($fluxrss->channel->item as $item){
			echo '<a href="'.(string)$item->link.'">'.(string)$item->title.'</a> <i>publié le '.(string)date('d/m/Y à G\hi',strtotime($item->pubDate)).'</i><br><br>';
			if(++$i>=$nb_affichage)
				break;
		}
		echo '</ul>';
                
                /* load flux 5 */
               
                if(!@$fluxrss=simplexml_load_file('http://www.cg87.fr/fileadmin/rss/rss_emploi.php')){
			throw new Exception('Flux introuvable');
		}		
		if(empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
			throw new Exception('Flux invalide');
			
		/* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
				<p>'.(string)$fluxrss->channel->description.'</p>'; */
		
		$i = 0;
		$nb_affichage = 50;
		echo '<ul>';
		foreach($fluxrss->channel->item as $item){
			echo '<a href="'.(string)$item->link.'">'.(string)$item->title.'</a> <i>publié le '.(string)date('d/m/Y à G\hi',strtotime($item->pubDate)).'</i><br><br>';
			if(++$i>=$nb_affichage)
				break;
		}
		echo '</ul>';
                
                ?><html><center><style>
                p {
                color: red;
                font-size: 18px;
                border-bottom: 2px;
                }
                        </style><p>──── MISSION INTERIM ADECCO LIMOUSIN ─────</p></b></center><br></html><?php
                
                /* load flux adecco */
                
                if(!@$fluxrss=simplexml_load_file('http://www.adecco.fr/Services/RssJobVacancies.ashx?region=15')){
			throw new Exception('Flux introuvable');
		}		
		if(empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
			throw new Exception('Flux invalide');
			
		/* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
				<p>'.(string)$fluxrss->channel->description.'</p>'; */
		
		$i = 0;
		$nb_affichage = 50;
		echo '<ul>';
		foreach($fluxrss->channel->item as $item){
			echo '<a href="'.(string)$item->link.'">'.(string)$item->title.'</a> <i>publié le '.(string)date('d/m/Y à G\hi',strtotime($item->pubDate)).'</i><br><br>';
			if(++$i>=$nb_affichage)
				break;
		}
		echo '</ul>';
                
                
                 ?><html><center><style>
                p {
                color: red;
                font-size: 18px;
                border-bottom: 2px;
                }
                     </style><p>──── MISSION INTERIM .. SUITE .. ─────</p></b></center><br></html><?php
                
                /* load flux adecco */
                
                if(!@$fluxrss=simplexml_load_file('http://rss.optioncarriere.com/rss?s=interim&l=Limoges&lid=72872')){
			throw new Exception('Flux introuvable');
		}		
		if(empty($fluxrss->channel->title) || empty($fluxrss->channel->description) || empty($fluxrss->channel->item->title))
			throw new Exception('Flux invalide');
			
		/* echo '<h3>'.(string)$fluxrss->channel->title.'</h3>
				<p>'.(string)$fluxrss->channel->description.'</p>'; */
		
		$i = 0;
		$nb_affichage = 50;
		echo '<ul>';
		foreach($fluxrss->channel->item as $item){
			echo '<a href="'.(string)$item->link.'">'.(string)$item->title.'</a> <i>publié le '.(string)date('d/m/Y à G\hi',strtotime($item->pubDate)).'</i><br><br>';
			if(++$i>=$nb_affichage)
				break;
		}
		echo '</ul>';
        	}
                catch(Exception $e){
		echo $e->getMessage();

                }
                
                
    ?>

              
               
                
                
