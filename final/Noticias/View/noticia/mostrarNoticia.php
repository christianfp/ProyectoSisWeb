<body>	
	<center>
		<div class="segment">
	      <h1> <?php echo $pvd->title; ?></h1>
	    </div>
	    <div class="segment">
			<textarea readonly style="overflow:hidden" rows="15" cols="230" ><?php echo $pvd->content; ?></textarea>
		</div>
		<div class="segment">
	      <h4> <?php echo $pvd->autor; ?></h4>
	    </div>
	<br>
	<div>
		<a class="ui blue button" href="?c=noticia&a=Noticia">
		    <i class="newspaper icon"></i>Show All</a>
	</div>
	</center>


</body>

  


