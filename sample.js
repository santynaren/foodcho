$(document).ready(function(){
    var city_name = $("#city_select").val();
       $('input.typeahead').typeahead({
           name: 'typeahead',
           remote:'search.php?key=%QUERY&city='+city_name+'',
           limit : 10
       });
   
   });