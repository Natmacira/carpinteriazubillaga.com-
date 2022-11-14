<section id="contacto" class="contact-section">
<?php
if (isset($success)) {
	if ($success) {
		echo '<br><h2 style="text-align: center;margin: 50px auto 30px;">Gracias, hemos recibido tu consulta, en breve te estaremos contactando</h2>';
	} else {
		echo '<br><h2 style="text-align: center;margin: 50px auto 30px;">Parece que ha habido un error. Vuelve a intentarlo más tarde</h2>';
	}
} else {
	?>
	<p>HOLA, escribinos tu consulta</p>
	<form method="post">
		<div>
			<label>Nombre<input type="text" name="nombre" id="nombre" placeholder="Nombre" required></label>
			<label>Mail<input type="mail" placeholder="Mail" id="mail" name="mail" required></label>
		</div>
		<textarea name="consulta" id="consulta" cols="30" rows="10" placeholder="Consulta" required></textarea>
		<button>enviar</button>
	</form>
	<?php
}
?>
</section>