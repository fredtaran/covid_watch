var infodata = {};
$(function(){
    $.ajax({
        method: "GET",
        url: GLOBAL.url + "api/dashboarddata.php",
        success: function (result, textStatus, jqXHR) {
            console.log(textStatus + ": " + jqXHR.status);
            console.log(result)
            var encounter = [];
            var vaccinated = [];
            var fever = [];
            var adult = [];
            var minor = [];
            var foreigner = [];
            var male = [];
            var female = [];
            infodata = {};
            $.each(result.data,function(i,e){
                if(parseInt(e.encounter) == 1){
                    encounter.push(e);
                }
                if(parseInt(e.vacinated) == 1){
                    vaccinated.push(e);
                }
                if(parseInt(e.diagnose) == 1){
                    fever.push(e);
                }
                if(parseInt(e.p_age) > 20){
                    adult.push(e);
                }
                if(parseInt(e.p_age) < 21){
                    minor.push(e);
                }
                if(e.nationality.toLowerCase() != "filipino"){
                    foreigner.push(e);
                }
                if(parseInt(e.p_gender) == 1){
                    male.push(e);
                }
                if(parseInt(e.p_gender) == 2){
                    female.push(e);
                }
            });
            infodata['encounter'] = encounter;
            infodata['vaccinated'] = vaccinated;
            infodata['fever'] = fever;
            infodata['adult'] = adult;
            infodata['minor'] = minor;
            infodata['foreigner'] = foreigner;
            infodata['male'] = male;
            infodata['female'] = female;

            $('#encounter').text(encounter.length);
            $('#vaccinated').text(vaccinated.length);
            $('#fever').text(fever.length);
            $('#adult').text(adult.length);
            $('#minor').text(minor.length);
            $('#foreigner').text(foreigner.length);
            $('#male').text(male.length);
            $('#female').text(female.length);

        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + jqXHR.status + " " + errorThrown);
        },
    });

    $('.dbmore').click(function(){
        let dtype = $(this).data('type');
        var tr = [];
        $.each(infodata[dtype], function(i,e){
            tr.push({rcnt:(i+1),p_name:e.p_name,p_age:e.p_age,p_gender:(e.p_gender == 1?'Male':'Female'),p_num:e.p_num,p_temp:e.p_temp,nationality:e.nationality,diagnose:(e.diagnose == 1?'Yes':'No'),encounter:(e.encounter == 1?'Yes':'No'),vacinated:(e.vacinated == 1?'Yes':'No')});
        });
        $('#modaltitle').text($(this).data('title'));
        $('#totalpatient').text(infodata[dtype].length);
        $('#moreinfo').modal('show');
        $("#jqgrid_tbl").jsGrid({
            height: '100%',
            width: "100%",
    
            sorting: true,
            paging: true,
    
            data: tr,
            rownumbers: true,
            fields: [
                { name: "rcnt", title:'#', type: "number", width: 5 },
                { name: "p_name", title:'Name', type: "text", width: 30 },
                { name: "p_age", title:'Age', type: "number", width: 5 },
                { name: "p_gender", title:'Gender', type: "text", width: 5},
                { name: "p_num", title:'Contact No.', type: "text", width: 15 },
                { name: "p_temp", title:'Body Temp', type: "number", width: 10 },
                { name: "nationality", title:'Nationality', type: "text", width: 15 },
                { name: "diagnose", title:'Diagnose', type: "text", width: 5 },
                { name: "encounter", title:'Encounter', type: "text", width: 5 },
                { name: "vacinated", title:'Vaccinated', type: "text", width: 5 }
            ]
        });
        
        
    });
});