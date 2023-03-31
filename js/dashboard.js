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
});