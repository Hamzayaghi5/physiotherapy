  function social() {
    $("#twitter1").html("");
    // $("#instagram").html("");_
    $("#youtube").html("");
    $("#address").html("");
    $("#email").html("");
    $("#phone").html("");
    $("#phone1").html("");
    $("#email1").html("");
    $("#address1").html("");
      $.ajax({
     type: "GET",
     url: '/api/contact',
     data: "check",
     success: function(response){
        var contact=response.contact;
        console.log(contact);

        $("#facebook").attr("href","http://"+contact.facebook);
        $("#twitter").attr("href","http://"+ contact.twitter);
        $("#instagram").attr("href","http://"+ contact.instagram);
        $("#twitter1").html('<p id="twitter1"><span class="fab fa-twitter"></span>'+contact.twitter+'</p>');
        // $("#instagram").html('<p><span class="fab fa-instagram"></span>'+contact.instagram+'</p>');

        $("#youtube").html('<p><span class="fab fa-youtube mb-5"></span>'+contact.youtube+'</p>');

        $("#address").html(' <i class="fas fa-map-marker-alt"></i><span style="font-weight:bold;">Address: </span>'+contact.address);

        $("#email").html('<i class="fa fa-envelope-open" aria-hidden="true"></i> <a href="mailto:'+contact.email+'">'+contact.email+'</a>');

        $("#phone").html(' <i class="fa fa-phone" aria-hidden="true"></i>'+contact.phone);

        $("#phone1").html('<p style="font-size: 14px;" id="phone1">'+contact.phone+'</p>');

        $("#email1").html('Email :<a href="mailto:'+contact.email+'">'+contact.email+'</a>');

        $("#address1").html('<p style="font-size: 14px;" id="address1">'+contact.address+'</p>');


        


       


     }
});
  }

