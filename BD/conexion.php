
<div id="liveblog-messages">
</div>
<script type="text/template" id="liveblog-form-template">
	<fieldset class="liveblog-actions">
		<legend>
			<ul>

				<li class="active entry"><a href="#">{{entry_tab_label}}</a></li>
				<li>&bull;</li>
				<li class="preview"><a href="#"><?php _e( 'Preview', 'liveblog' ); ?></a></li>
			</ul>
		</legend>

			<div class="liveblog-edit-entry">
			<legend>
			<div class="options-post">	

					<select name="liveblog-form-evento" class="liveblog-form-evento">
						<option value="">Selecciona Evento</option>
						<option value="EMPIEZA EL PARTIDO" >EMPIEZA EL PARTIDO</option>
						<option value="TARJETA AMARILLA" >TARJETA AMARILLA</option>
						<option value="TARJETA ROJA" >TARJETA ROJA</option>
						<option value="CAMBIO">CAMBIO</option>
						<option value="JUGADOR LESIONADO">JUGADOR LESIONADO</option>
						<option value="EMPIEZA 2do TIEMPO">EMPIEZA 2do TIEMPO</option>
						<option value="TIRO AL ARCO">TIRO AL ARCO</option>
						<option value="GOL">GOL</option>
						<option value="CORNER">CORNER</option>
						<option value="TIRO LIBRE">TIRO LIBRE</option>
						<option value="PENAL">PENAL</option>
						<option value="OFF SIDE">OFF SIDE</option>
					</select>
					

					
					<input placeholder="Minuto Suceso" type="text" class="liveblog-form-minuto" name="liveblog-form-minuto" value="{{mienvento}}">
					
					
					
				</div>
			</legend>
				
				<div>
						
						
						<span class="liveblog-submit-spinner"></span>
						<input type="button" class="liveblog-form-entry-submit button" value="{{submit_label}}" />
						<a href="#" class="cancel">Cancel</a>
					</div>
				</div>
			<div class="liveblog-preview">
			</div>
	</fieldset>
</script>
