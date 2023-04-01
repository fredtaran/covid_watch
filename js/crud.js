var pdata = [];
$(function(){
    populateTable();
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
                    text: "Save patient log",
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
                                formDefault();
                                populateTable();
                                $('#pform').modal('hide');
                            },
                            error: function(result, jqXHR, textStatus, errorThrown) {
                                Swal.fire({
                                    icon: 'error',
                                    title: "An unexpected error has been encountered",
                                    text: result.responseJSON
                                });
                            }
                        });
                    }
                });
            }

        }
    });
    //action button click
    $('#tbl').on('click','.action',function(){
        let $tr = $(this).parent().parent();
        let action = $(this).data('action');
        let index = $tr.data('index');
        let d = pdata[index];
        let pid = d.id;
        
        if(action == 'delete'){
            let pname = d.p_name;
            Swal.fire({
                title: 'Confirm',
                text: "Delete "+pname+" log?",
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
                        data: {action:'delete',pid:pid,csrf_token:$('#csrf_token').val()},
                        success: function(result, textStatus, jqXHR) {
                            Swal.fire({
                                icon: 'success',
                                title: pname+' log deleted successfully',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            populateTable();
                        },
                        error: function(result, jqXHR, textStatus, errorThrown) {
                            Swal.fire({
                                icon: 'error',
                                title: "An unexpected error has been encountered",
                                text: result.responseJSON
                            });
                        }
                    });
                }
            });
        }else{
            $('#pform').modal('show');
            $('#action').val('edit');
            $('#pid').val(d.id);
            $('#name').val(d.p_name);
            $('input[name=gender][value='+d.p_gender+']').click();
            $('#age').val(d.p_age);
            $('#contact_no').val(d.p_num);
            $('#body_temp').val(d.p_temp);
            $('input[name=diagnose][value='+d.diagnose+']').click();
            $('input[name=encounter][value='+d.encounter+']').click();
            $('input[name=vacinated][value='+d.vacinated+']').click();
        }
    });

    $('#addform').click(function(){
        $('#pform').modal('show');
    });
    $('#cancel').click(function(){
        $('#action').val('add');
        $('#pform').modal('hide');
    });
});

function formDefault() {
    // $("input:not([type=radio])").each(function(i) {
    //     if($(this).attr("name") != "csrf_token") {
    //         $(this).val("");
    //     }
    // });
    
    // $('input[name=gender]')[0].click();
    // $('input[name=diagnose]')[1].click();
    // $('input[name=encounter]')[1].click();
    // $('input[name=vacinated]')[0].click();
    $('#cancel').click();
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

function populateTable(){
    $.ajax({
        method: "GET",
        url: GLOBAL.url + "api/dashboarddata.php",
        success: function (result, textStatus, jqXHR) {
            console.log(textStatus + ": " + jqXHR.status);
            console.log(result)
            var tr = '';
            $.each(result.data,function(i,e){
                pdata[i] = e;
                tr += '<tr data-index="'+i+'">'+
                    '<td align="center">'+(i+1)+'</td>'+
                    '<td align="center"><button type="button" class="btn btn-warning btn-sm action mr-2" data-action="edit"><i class="fas fa-edit"></i></button>'+
                    '<button type="button" class="btn btn-danger btn-sm action" data-action="delete"><i class="fas fa-trash-alt"></i></button></td>'+
                    '<td>'+e.p_name+'</td>'+
                    '<td align="center">'+e.p_age+'</td>'+
                    '<td align="center">'+(e.p_gender == 1?'Male':'Female')+'</td>'+
                    '<td align="center">'+e.p_num+'</td>'+
                    '<td align="center">'+e.p_temp+'</td>'+
                    '<td align="center">'+e.nationality.toUpperCase()+'</td>'+
                    '<td align="center">'+(e.diagnose == 1?'Yes':'No')+'</td>'+
                    '<td align="center">'+(e.encounter == 1?'Yes':'No')+'</td>'+
                    '<td align="center">'+(e.vacinated == 1?'Yes':'No')+'</td>'+
                '</tr>';
            });
            $('#tbl tbody').html(tr);
            $('#total_log').text(result.data.length);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + jqXHR.status + " " + errorThrown);
        },
    });
}