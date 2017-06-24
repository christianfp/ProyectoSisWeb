<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/dropdown.min.css">
	<script src="semantic/dist/semantic.min.js"></script>
  <script src="semantic/dist/components/dropdown.min.js"></script>
  <script src="semantic/examples/assets/library/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.js"></script>
  <link rel="stylesheet" href="Semantic/style.css">


<body>
	<div class="ui segment">
	<table class="ui table">
			  <tbody>
			   <?php foreach($this->model->ListarUser() as $r): ?>
			    <tr>
			      <td class="collapsing">
			      	<center>
			      		<h4 class="ui center aligned header"><?php echo $r->title; ?></h4>
			      	</center>			 
			      	<div class="field">
						<textarea readonly style="overflow:hidden" rows="5" cols="230" ><?php echo $r->content; ?>
						</textarea>
						<br>
						<a href="?c=noticia&a=mostrarNoticia&id=<?php echo $r->id; ?>">See More...</a>
					</div>

			       </td>
			    </tr>
			    <?php endforeach; ?>
			  </tbody>
	</table>
	</div>
</body>