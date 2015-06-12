$(document).ready( function() {
  var request = $.ajax({
    url:"../api/availability.json"
  });

  request.done(function(data){

    // console.log(data);
    var avail_level = data.availability;
    // console.log(avail_level);

    switch (avail_level){
      case 3:
        btn_class = "btn btn-success";
        btn_text = "Wide Open!";
        ava_text = "30+ hrs/week";
        break;

      case 2:
        btn_class = "btn btn-primary";
        btn_text = "Open!";
        ava_text = "12-20 hrs/week";
        break;

      case 1:
        btn_class = "btn btn-warning";
        btn_text = "Limited";
        ava_text = "4-12 hrs/week";
        break;

      case 0:
        btn_class = "btn btn-danger";
        btn_text = "None";
        ava_text = "I'm swamped, sorry :(";
        break;
      }

      // console.log(btn_class + ' ' + btn_text + ' ' + ava_text);
      $('#avail_button').hide().delay(1000).html(btn_text).attr("class", btn_class).slideDown();
      $('#avail_text').hide().delay(2000).html(ava_text).fadeIn();
  });

});
