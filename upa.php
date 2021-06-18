<!DOCTYPE HTML>
<html>
<?php include 'header.php'?>
			<?php
				$id = $_GET['id'];
				$db = new Database();
				$db = $db->conectar();
				
			?>
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<?php 
									$res = $db->query("SELECT * FROM UPA where id = '$id';");
									while($upa = $res->fetch_assoc()){ 
									$idEndereco = $upa['fk_id_endereco'];
									?> 
										<section>
											<h3>UPA - <?php echo $upa['nome']; ?></h3>
											<img src="images/upas/upabrotas.png">
											<?php
												$res1 = $db->query("SELECT * FROM endereco WHERE id = '$idEndereco'");
												while($endereco = $res1->fetch_assoc()){ ?>
											<p>Endereço: <?php echo $endereco['rua']; ?>, CEP: <?php echo $endereco['cep']; ?></p>
												<?php } ?>
											<p>Horario de funcionamento: <span style="color: green;">Aberto <?php echo $upa['horario_funcionamento']; ?> horas</span></p>
											<footer>
												<a href="add-relato.php?id=<?php echo $id; ?>" class="button icon solid fa-info-circle">Relatar uma experiência</a>
											</footer>
										</section>
									<?php } ?> 

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>Situação médias das ultimas 24 horas: </h2>

											<div class="row">
												<div class="col-lg-4">
													Quantidade média de pessoas: 
												</div>
												<div class="col-lg-4">
													Tempo médio de espera: 
												</div>
												<div class="col-lg-4">
													Quantidade de relatos: 
												</div>
											</div>

											<br>

											<h3>Relatos:</h3>
											<div class="row">
												<div class="col-lg-12">
													<?php
													$res = $db->query("SELECT * FROM relato where fk_id_upa = '$id'");
													while($relato = $res->fetch_assoc()){ ?>
													<h4><?php echo $relato['titulo']; ?> </h4> 
													<span><?php echo $relato['texto']; ?></span>
													<br>
													<i>Relato feito por: <?php echo $relato['nome']; ?></i>
													<?php } ?>
													<br>
												</div>
											</div>

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

			<?php include 'footer.php'; ?>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>