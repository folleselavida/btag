<div id = "allReviews">
	
	<?php if (count($coment[0])<1){
		?>
		<p>A�n no se han realizado reviews sobre �ste sitio. S� el primero!</p>
		<?php 
		
	}
	else{
	foreach($coment as $i => $com):?>
		<div class="coments">
			<div class="perfil noBorder">
				<img src="/images/tags/<?php echo $com["calificacion"]?>s.png" alt=" Calificaci�n a <?php echo $com["calificacion"]?>" class="tag2" />
				<a href="<?php echo url_for('perfil', array("nombre"=>$com["sfGuardUser"]["first_name"], 'id' => $com["id"] ) ) ?>" class="img">
					<img src="/uploads/usuarios/<?php echo $com["usuario"]["foto"]?>" alt=" Review de <?php echo $com["usuario"]["ciudad"]?>"  />
				</a>
				<p>
					<?php echo $com["usuario"]["sfGuardUser"]["first_name"]?> <br/>
					<?php echo $com["usuario"]["ciudad"].", ".$com["usuario"]["pais"]?> <br/>
					<?php echo 6?> Reviews
				</p>
			</div>
			<div class="text_review2">
				<div class="header_coment">
					<h3>
						<?php $v = explode(" ",$com["created_at"]); echo $v[0]?>
					</h3>
					
					<div class="adds">
						<div>
							2 check-ins aqu�
						</div>
					</div>
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Firidian.co&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
				</div>
				<?php echo html_entity_decode($com["texto"])?>
				<div class="footer_coment">
					<div class="calificacion">
						<div class="bt_cal">
							<a href="">
								Gracioso
							</a>
							<p>
								(100)
							</p>
						</div>
						<div class="bt_cal">
							<a href="">
								Util
							</a>
							<p>
								(45)
							</p>
						</div>
						<div class="bt_cal">
							<a href="">
								Divertido
							</a>
							<p>
								(87)
							</p>
						</div>
					</div>
					<a href="javascript: showDueno(<?php echo ($i +1) ?>) " class="link_dueno">comentario del due�o [+]</a>
					<?php include_partial('banner/owner_com', array('id' => ($i +1) ) )?>
			</div>
		</div>	
	<?php endforeach;
	
	}?>	
	
	<a id="ver_com" class="ver_mas" href="">ver mas</a>
	</div>
