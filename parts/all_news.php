<div class="row">
	<div class="col-md-8">
		<b><?php echo $key->Get_title();?></b>
	</div>
	<div align="right" class="col-md-4">
		<b><?php echo $key->Get_author();?></b>
	<?php if(!empty($del)){?>
		... <a href="?page=del&id=<?php echo $key->Get_id();?>">удалить</a> ... 
	<?php	}?>
	</div>
</div>
<div class="row" id="news">
	<div class="col-md-12">
		<?php echo $key -> Get_text_small();?>
		<a href="?page=read_more&id=<?php echo $key->Get_id();?>"><h5 align="right"><span class="label label-default">Читать дальше</span></h5></a>
	</div>
</div>