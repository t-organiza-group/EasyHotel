const $form = $('#suscribeForm');

const $formGroup = $form.find(".form-group");
const $formControl = $formGroup.find(".form-control");

$form.submit(function(ev){

	ev.preventDefault();
	const error = Math.random() > 0.5;

	$formGroup.removeClass().addClass('form-group');
	$formControl.removeClass().addClass('form-control');
	//$formGroup.addClass( error ? 'is-invalid' : 'is-valid' );
	$formControl.addClass( error ? 'is-invalid' : 'is-valid' );
	$formGroup.find('.invalid-feedback, .valid-feedback').remove();

	var el;
	if(error){
		el = $('<div>', { html: 'Ha ocurrido un error' });
		el.addClass('invalid-feedback');
	}else{
		el = $('<div>', { html: 'Te enviaremos todas las novedades' });
		el.addClass('valid-feedback');
	}
	
	$formGroup.append(el);
});