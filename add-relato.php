<?php include 'header.php'; ?>
			<?php
				$id = $_GET['id'];
			?>
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">
							<h2>Relatar experiência na UPA - $titulo </h2>
							<form method="post" action="model/addRelato.php">
								<div class="form-group">
									<input type="text" placeholder="Seu nome " name="nome"> <br>
									<input type="text" placeholder="Titulo " name="titulo"> <br>
									<input type="text" placeholder="Quantidade de pessoas aproximadamente " name="qntPessoas"> <br>
									<input type="text" placeholder="Quanto tempo você levou até conseguir atendimento? " name="tempoAtendimento"> <br>
									<textarea placeholder="Descreva sua experiência: " name="texto"></textarea> <br>
									<input type="hidden" name="fk_id_upa" value="<?php echo $id; ?>">
									<button type="submit" class="btn btn-primary">Enviar relato</button>
								</div>
							</form>


						</div>
					</div>
				</div>
				
				<?php include 'footer.php'; ?>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>