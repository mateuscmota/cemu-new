<?php include 'header.php' ?>
			<?php
				$db = new Database();
				$db = $db->conectar();
				$res = $db->query("SELECT * FROM UPA");
			?>
			<!-- Header -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium">
								<h2>SELECIONE UMA UPA</h2>
								<div class="form-group">
									<select id="select" style="width: 100%;">
										<option>Selecione uma UPA...</option>
										<?php while($upa = $res->fetch_assoc()){?> 
											<option value="<?php echo $upa['id']; ?>"><?php echo $upa['nome']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-5 col-12-medium">
								<ul>
									<li><a href="#" class="sobreEssaUpa button large icon solid fa-arrow-circle-right">Sobre essa upa</a></li>
									<li><a href="#" class="relatarAlgo button alt large icon solid fa-question-circle">Relatar algo</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<!-- Boxes -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/img1.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Sobre o nosso projeto</h2>
												<p>Para que serve o CEMU?</p>
											</header>
											<p>Como Esta Minha Upa é um projeto que visa facilitar a vida de pessoas que precisam de atendimento em unidades de pronto atendimentos (UPA)</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/img2.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2>E como funciona?</h2>
												<p>Como faço utilizar o sistema?</p>
											</header>
											<p>Primeiro você deve escolher uma UPA no menu acima e você será encaminhado para uma pagina onde mostrarão relatos nas ultimas 24 horas do estado dessa UPA</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/img3.png" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Como posso ajudar?</h2>
												<p>Quero deixar um relato, como faço?</p>
											</header>
											<p>Isso é muito fácil! Basta selecionar uma UPA e clicar em "Relatar situação" e escrever a sua experiência, logo após isso outros usuários poderão ler seu relato</p>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

				<!-- Footer -->
				<?php include 'footer.php'; ?>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				var id;
				var original_link = "upa.php";
				$('#select').on('change', function(){
				    $('.sobreEssaUpa').attr('href', original_link);
				    id = $(this).val();
				    var new_href = $('.button').attr('href') + '?id=' + id;
				    $('.sobreEssaUpa').attr('href', new_href);
				});


			</script>
	</body>
</html>