$(document).ready(function () {
    $("#search").keyup(function () {
        var city_name = $("#city_select").val();
        var key = $("#search").val();
        dataset = "city_name=" + city_name + "&key=" + key;
        $.ajax({
            type: 'POST',
            url: 'search.php',
            data: dataSet,
            success: function (data) {
              console.log(data);




            }
        });
    });

});