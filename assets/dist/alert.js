var flash = $('#flash').data('flash');
if (flash) {
	Swal.fire({
		icon: 'info',
		title: 'info',	
		text: 'Data sudah pernah di proses.',
	})
}

var flash = $('#login').data('flash');
if (flash) {
	Swal.fire({
		icon: 'warning',
		title: 'Please insert your account',
		showConfirmButton: false,
		timer: 1500
	})
}



$(document).on('click','#btn-hapus', function(e) {
	e.preventDefault();

	var link = $(this).attr('href')
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "Data Akan dihapus",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location  = link; 
		}
	})
})