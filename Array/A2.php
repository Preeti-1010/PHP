<?php 

	$color = array('Red', 'Green', 'Yellow');
	foreach( $color as $col){

		echo $col . " "; 
	}

	$sort = sort($color);?>
	<ul>
	<?php foreach ($color as $c) {?>
		<li> <?php echo $c; ?></li>
 <?php }?>
    </ul>
