<center>
	<h1>Niveles de <?php echo $especialidad ?></h1>
</center>


<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-nivel1-tab" data-toggle="pill" href="#pills-nivel1" role="tab" aria-controls="pills-nivel1" aria-selected="true">Nivel 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-nivel2-tab" data-toggle="pill" href="#pills-nivel2" role="tab" aria-controls="pills-nivel2" aria-selected="false">Nivel 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-nivel3-tab" data-toggle="pill" href="#pills-nivel3" role="tab" aria-controls="pills-nivel3" aria-selected="false">Nivel 3</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade" id="pills-nivel1" role="tabpanel" aria-labelledby="pills-nivel1-tab">
  	<?php if($nivel1[0]['grupo_usuario'] == '') {?>
  		<center><h3>Sin grupo</h3></center>
  	<?php }else{ ?>
			<div class="row">
				<?php for ($i=0; $i < $nivel1[0]['grupo_usuario'] ; $i++) { ?>
					<div class="col-md-3">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Grupo <?php echo $i+1 ?></h3>
						</div>
						<div class="panel-body text-center">
							<?php if($especialidad == 'PHP') {?>
							<a href="<?php echo base_url('grupo/'.$especialidad.'/'.'1'.'/'.$i)?>"><img src="<?php echo base_url()?>/assets/img/defecto/php.png" height="50px" width="80px" alt=""></a>
						<?php }else{ ?>
							<a href=""><img src="<?php echo base_url()?>/assets/img/defecto/java.png" height="80px" width="80px" alt=""></a>
						<?php } ?>
						</div>
					</div>
					</div>
				<?php } ?>
			</div>
  	<?php } ?>
  </div>
  <div class="tab-pane fade" id="pills-nivel2" role="tabpanel" aria-labelledby="pills-nivel2-tab">
  	<?php if($nivel2[0]['grupo_usuario'] == '') {?>
  		<center><h3>Sin grupo</h3></center>
  	<?php }else{ ?>
			<div class="row">
				<?php for ($i=0; $i < $nivel2[0]['grupo_usuario'] ; $i++) { ?>
					<div class="col-md-3">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Grupo <?php echo $i+1 ?></h3>
						</div>
						<div class="panel-body text-center">
							<?php if($especialidad == 'PHP') {?>
							<a href=""><img src="<?php echo base_url()?>/assets/img/defecto/php.png" height="50px" width="80px" alt=""></a>
						<?php }else{ ?>
							<a href=""><img src="<?php echo base_url()?>/assets/img/defecto/java.png" height="80px" width="80px" alt=""></a>
						<?php } ?>
						</div>
					</div>
					</div>
				<?php } ?>
			</div>
  	<?php } ?>
  </div>
  <div class="tab-pane fade" id="pills-nivel3" role="tabpanel" aria-labelledby="pills-nivel3-tab">
  	<?php if($nivel3[0]['grupo_usuario'] == '') {?>
  		<center><h3>Sin grupo</h3></center>
  	<?php }else{ ?>
			<div class="row">
				<?php for ($i=0; $i < $nivel3[0]['grupo_usuario'] ; $i++) { ?>
					<div class="col-md-3">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Grupo <?php echo $i+1 ?></h3>
						</div>
						<div class="panel-body text-center">
							<?php if($especialidad == 'PHP') {?>
							<a href=""><img src="<?php echo base_url()?>/assets/img/defecto/php.png" height="50px" width="80px" alt=""></a>
						<?php }else{ ?>
							<a href=""><img src="<?php echo base_url()?>/assets/img/defecto/java.png" height="80px" width="80px" alt=""></a>
						<?php } ?>
						</div>
					</div>
					</div>
				<?php } ?>
			</div>
  	<?php } ?>
  </div>
</div>
