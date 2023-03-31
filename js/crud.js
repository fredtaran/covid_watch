$(function(){
    populateNationality();
    $("form").on("submit", function(event) {
        event.preventDefault();
        let formdata = $(this).serializeArray();
        if(this.checkValidity() === false){
            $.each($('input',this),function(i){
                //clear error style
                $(this).removeClass('is-invalid');
                //if empty then style error and focus on the first invalid input
                if($.trim($(this).val()) == ''){
                    $(this).addClass('is-invalid');
                    if(i == 0){
                        $(this).focus();
                    }
                }
            });
        }else{
            var err = [];
            if($('#contact_no').val().search(/(09)[0-9]{9}/) === -1){err.push('INVALID CONTACT NUMBER');}
            if(parseFloat($('#body_temp').val()) < 20 || parseFloat($('#body_temp').val()) > 50){err.push('INVALID BODY TEMP');}
            if(err.length > 0){
                Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    html: err.join("<br>")
                });
            }else{
                Swal.fire({
                    title: 'Confirm',
                    text: "Add patient log",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: "POST",
                            url: GLOBAL.url + "api/add_record.php",
                            data: formdata,
                            success: function(result, textStatus, jqXHR) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Thank you for filling out the Health Declaration Form',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                clearFields();
                            },
                            error: function(result, jqXHR, textStatus, errorThrown) {
                                Swal.fire({
                                    icon: 'error',
                                    title: "An unexpected error has been encountered",
                                    text: 'Please refresh the page and try again. Thank you.'
                                })
                            }
                        });
                    }
                });
            }

        }
    });
});

function clearFields() {
    $("input:not([type=radio])").each(function(i) {
        if($(this).attr("name") != "csrf_token") {
            $(this).val("");
        }
    });

    // $("#gender").prop('selectedIndex', 0);
}

function populateNationality(){
    $.ajax({
        method: "GET",
        url: GLOBAL.url + "api/getnationality.php",
        success: function (result, textStatus, jqXHR) {
            console.log(textStatus + ": " + jqXHR.status);
            console.log(result)
            var opt = '';
            $.each(result.data,function(i,e){
                opt += '<option value="'+e.nationality+'" '+(e.nationality.toLowerCase() == 'filipino'?'selected':'')+'>'+e.nationality+'</option>';
            });
            $('#nationality').html(opt);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + jqXHR.status + " " + errorThrown);
        },
    });
}