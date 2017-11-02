<ul class="nav">
    <li><a href="index.php?theme=accueil&action=accueil">Accueil</a></li>
	<li><a href="index.php?theme=experience&action=experience">Expériences</a></li>
	<li><a href="index.php?theme=formation&action=formation">Formation</a></li>
	<li><a href="index.php?theme=info&action=infos">Informations diverses</a></li>
	<li><a href="index.php?theme=contact&action=contact">Contact</a></li>
	<?php if(ROLE != 'visiteur') { ?> <li><a href="index.php?theme=users&action=utilisateurs">Utilisateurs</a></li> <?php } ?>
</ul>