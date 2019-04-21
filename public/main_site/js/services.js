    function services() {
         $("#services").html("");
         var services_value="";
      $.ajax({
     type: "GET",
     url: '/api/services',
     data: "check",
     success: function(response){
        var services=response.services;
        console.log(services);
        for(var i = 0, length1 = services.length; i < length1; i++){
        services_value+="<li><a href='/service_single/"+services[i].id+"' class='drop-text'>"+services[i].title+"</a></li>";
        }

                $("#services").html(services_value);
     }
});
  }