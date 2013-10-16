<ul class="cate">
	<?php foreach($categorias as $lista): ?>
		<li>
			<a href="javascript:getSearchCatResults(<?php echo $lista->id?>)">
				<img src="/uploads/categoria/<?php echo $lista->logo?>" alt="<?php echo $lista->nombre?> business tag" />
			</a>
			<a href="javascript:getSearchCatResults(<?php echo $lista->id?>)" class="link"> <?php echo utf8_decode($lista->nombre)?> </a>
		</li>
	<?php endforeach; ?>
</ul>