function checkParams() {
    var name = $('#k_form_site_name').val();
    var email = $('#k_form_site_email').val();
    var phone = $('#k_form_site_number').val();

    if(name.length != 0 && email.length != 0 && phone.length != 0) {
        $('#k_form_site_button').removeAttr('disabled');
    } else {
        $('#k_form_site_button').attr('disabled', 'disabled');
    }
}
