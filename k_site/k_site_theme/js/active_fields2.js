function checkParams2() {
    var name2 = $('#k_form_site_name2').val();
    var email2 = $('#k_form_site_email2').val();
    var phone2 = $('#k_form_site_number2').val();

    if(name2.length != 0 && email2.length != 0 && phone2.length != 0) {
        $('#k_form_site_button2').removeAttr('disabled');
    } else {
        $('#k_form_site_button2').attr('disabled', 'disabled');
    }
}
