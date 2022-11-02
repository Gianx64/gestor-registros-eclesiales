<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('informacion') == 'eliminar')
	<script>
		Swal.fire(
			'Eliminado',
			'El registro ha sido borrado.',
			'success'
		)
	</script>
@endif

<script>
	$('.swal-delete').submit(function(e) {
		e.preventDefault();
		Swal.fire({
			title: '¿Eliminar?',
			text : "Realizar esto no es reversible.",
			icon : 'warning',
			showCancelButton  : true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor : '#d33',
			confirmButtonText : 'Borrar',
			cancelButtonText  : 'Cancelar'
		}).then((result) => {
			if (result.value) { this.submit(); }
		})
	});
</script>