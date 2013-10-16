<form id="user_com" class="shadow" action="javascript:createReview()">
	<textarea id="revContent">	</textarea>
	<div id="calificar">
		<p>
			Mi calificación del sitio es:
		</p>
		
		<ul class="star-rating">
		  <!--<br />
			Average Rating: 0<br />
			Each Star Width: 20px;<br />
			Set width to: 0 * 20 = 0px<br />
		  --><p></p>
			<li style="width:0px;" title="Currently 0 out of 5 Stars" class="current-rating">Currently 0 out of 5 Stars</li>
			<li><a class="one-star" title="Rate this 1 star out of 5"  onclick="calific = 1">It deserves 1 star :(</a></li>
			<li><a class="two-stars" title="Rate this 2 stars out of 5"  onclick="calific = 2">It deserves 2 stars :|</a></li>
			<li><a class="three-stars" title="Rate this 3 stars out of 5" onclick="calific = 3">It deserves 3 stars ;)</a></li>
			<li><a class="four-stars" title="Rate this 4 stars out of 5"  onclick="calific = 4">It deserves 4 stars :}</a></li>
			<li><a class="five-stars" title="Rate this 5 stars out of 5"  onclick="calific = 5">It deserves 5 stars! 8)</a></li>
			</ul>
	</div>
	<a href="javascript:createReview()" class="submit">Publicar</a>
</form>

<script type="text/javascript">

var calific = 0;


function createReview(){
	loadNewComment('<?php echo $sitioid?>',calific, document.getElementById("revContent").value, "/empresarial/createReview", "allReviews");
}

</script>