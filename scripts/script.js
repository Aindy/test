
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      let forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      let validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();


$(document).ready(function(){


    //disabled btn submit on start
    let $btnsub = $('#btnsub');
        $btnsub.prop('disabled', true);

    //ajax check for else in doc.php on start
    let id = $("select.dis").val();
    $.ajax({
        type: "POST",
        url: "selecttown.php",
        data: {id: id},
        success: function(data){
            $("span.town").html(data);
        }
    });

    $("select.dis").change(function(){
        let id = $("select.dis").val();
        //repost ajax after chanche
        $.ajax({
            type: "POST",
            url: "selecttown.php",
            data: {id: id},
            success: function(data){
                $("span.town").html(data);
            }
        });
    });
    
    
    //check checkbox and disable btn
    let $t = $('.check');
    $t.on('change', function() {
     let cnt = 0;
     for (var j = 0; j <= $t.length - 1; j++) {
        if ($t.eq(j).is(':checked')) {
          cnt++;
        }
     }
     checkatto(cnt);
     forsubmit(flagcheck, flagtime);
    }); 

    let flagtime,
        flagcheck;
    function timeatto(a){
      return(flagtime = a);
    }
    function checkatto(a){
      return(flagcheck = a);
    }

    function forsubmit(a,b){
      let $btn = $('#btnsub');
      if (a == 2 && b) {
       $btn.prop('disabled', false);
      } else {
       $btn.prop('disabled', true);
      }
    }

    // $('#athour').addClass("is-invalid");
    // $('#tohour').addClass("is-invalid");
    //check two times select 
    $('.time')
    .change(function() {
      let time1 = $('#athour').val();
      let time2 = $('#tohour').val();
      // let $btn = $('#btnsub');
      if((time2 - time1) > 2 || (time2 - time1) < 1 && (time2 - time1) > -22){
        timeatto(false);
        $('#athour').removeClass("is-valid").addClass("is-invalid");
        $('#tohour').removeClass("is-valid").addClass("is-invalid");
        console.log('time is not ok');
        console.log(time2 - time1);
        // console.log(flag);
        forsubmit(flagcheck, flagtime);
      }else{
        // $('#athour').toggleClass( "is_invalid" );
        timeatto(true);
        $('#athour').removeClass("is-invalid").addClass("is-valid");
        $('#tohour').removeClass("is-invalid").addClass("is-valid");
          console.log('time is ok');
          console.log(time2 - time1);
          // console.log(flag);
          forsubmit(flagcheck, flagtime);
      }  
    })
    .change();



//sending report for admin about code
    $("#checkcode").click(function(){
      let code = $("#code").val();
      //repost ajax after chanche
      $.ajax({
          type: "POST",
          url: "code_verify.php",
          data: {code: code},
          success: function(data){
              $("span.codereply").html(data);
          }
      });
  });


  $(".admin-enter").click(function(){
    let log = $("#login").val();
    let pass = $("#password").val();
    //repost ajax after chanche
    $.ajax({
        type: "POST",
        url: "check_admin.php",
        data: {login: log,
               password: pass
              },
        success: function(data){
            // $('.content_admin').fadeOut(100);
            if(data.indexOf('success') >= 0) {
              window.location = 'check_code.php';
            } else {
              $("span.invalid-admin").html(data);
            }
            
        }
    });
});



$('.content_btn').click(function(){
  $('.content_block').slideToggle(300, function(){
      $('.content_btn').slideToggle(500);	
      $('.remember_btn').slideToggle(500);			
  });     
  return false;
});
$('.remember_btn').click(function(){
  $('.content_remember').slideToggle(300, function(){
      $('.remember_btn').slideToggle(300);
      $('.content_btn').slideToggle(300);					
  });     
  return false;
});


      //mask for phone input
      $("#phone").mask("(999) 999-9999");
      $("#phone2").mask("(999) 999-9999");
      $("#serie").mask("9999");
      $("#numberpass").mask("999999");
      $("#serie2").mask("9999");
      $("#numberpass2").mask("999999");

});

