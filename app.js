$(document).ready(function () {
    $("#search_option").hide();
    $("#search").keyup(function () {
        var city_name = $("#city_select").val();
        var key = $("#search").val();
        if(key!=""){
        dataSet = "city_name=" + city_name + "&key=" + key;
        $.ajax({
            type: 'POST',
            url: 'search.php',
            data: dataSet,
            success: function (html) {
           
           $("#search_option").toggle().html(html);




            }
        });
    }
    else{
        $("#search").val("");

    }
    });
    $("#submit").click(function(){
        var city_name = $("#city_select").val();
        var key = $("#search").val();
       
        location.href="http://localhost/zomato/hotel_list.php?key="+key+"&city_name="+city_name;

    });

});