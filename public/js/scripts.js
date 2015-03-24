jQuery(document).ready(function($){
	// $('#registrationCompleteModal').modal(options);

    // $('#flash-overlay-modal').modal();
    $('#registrationCompleteModal').modal();
	$('select').select2();

	screenHeight = $( window ).height();

	//provide age
	$('#age').click(function(){
		var birthdate = $('#birthdate').val();
		 $(this).val(getAge(birthdate));
	});

	$('#spouse_age').click(function(){
		var birthdate = $('#spouse_birthdate').val();
		 $(this).val(getAge(birthdate));
	});


	//put placeholder to date
	$('.special-date').each(function() {
   		var el = this, type = $(el).attr('type');
	    if ($(el).val() == '') $(el).attr('type', 'text');
	    $(el).focus(function() {
	        $(el).attr('type', type);
	        el.click();
	    });
	    $(el).blur(function() {
	        if ($(el).val() == '') $(el).attr('type', 'text');
	    });
	});

	$('.special-date').datepicker({
		format: 'yyyy-mm-dd' ,
		viewMode: 2
	});

	$('#home_province').change(function(){
		$.get("{{ url('city_dropdown')}}", 
			{ option: $(this).val() }, 
			function(data) {
				var model = $('#home_city');
				model.empty();

				$.each(data, function(index, element) {
		            model.append("<option value='"+ element.id +"'>" + element.name + "</option>");
		        });
			});
	});

});


function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}