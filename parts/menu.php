<?php
foreach ($select as $key){ 
?>
	<button type="button" class="btn btn-default">
		<a href="?page=<?php echo $key -> get_links();?>"><?php echo $key->get_parts();?></a>
	</button>
<?php
}