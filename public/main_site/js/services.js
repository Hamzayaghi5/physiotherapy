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


      function why_choose_us() {
         $("#why_choose_us").html("");
         var services_value="";
      $.ajax({
     type: "GET",
     url: '/api/pages',
     data: "check",
     success: function(response){
        var pages=response.pages;
        console.log(pages);
        for(var i = 0, length1 = pages.length; i < length1; i++){
        services_value+="<li><a href='/main"+pages[i].link+"' class='drop-text'>"+pages[i].name+"</a></li>";
        }
        services_value+="<li><a href='/testimonials' class='drop-text'>Testimonials</a></li>";
        

                $("#why_choose_us").html(services_value);
     }
});
  }



        function what_we_treat() {
         $("#what_we_treat").html("");
         var services_value="";
      $.ajax({
     type: "GET",
     url: '/api/what_we_treat',
     data: "check",
     success: function(response){
        var pages=response.pages;
        console.log(pages);
        for(var i = 0, length1 = pages.length; i < length1; i++){
        services_value+="<li><a href='/main"+pages[i].link+"' class='drop-text'>"+pages[i].name+"</a></li>";
        }

                $("#what_we_treat").html(services_value);
     }
});
  }


  