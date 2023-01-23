$(document).ready(function() {
    //first form
    var inp1 = $("#inp1"),
        show = $(".fa-eye"),
        hide = $(".fa-eye-slash");
    show.show();
    hide.hide();
    show.click(function () {
       inp1.attr("type","text");
       show.hide();
       hide.show(); 
     });
     hide.click(function () {
       inp1.attr("type","password");
       show.show();
       hide.hide();
     });
  
    //end first form
    //second form
    var pass = $("#inp2"),
        check = $("#inp3"),
        lab = $("#label");
    check.checked = false;
    check.click(function() {
      if (check.checked === false) {
      check.checked = true;  
      pass.attr("type","text");
      lab.text("Hide Password");  
    } else {
      check.checked = false;  
      pass.attr("type","password");
      lab.text("Show Password");
    }
    });
    // end second form
    // third form
    var inp4 = $("#inp4"),
        btn = $("#btn");
    btn.click(function (e) {
      btn.toggleClass("show-hide");
      if(btn.hasClass("show-hide") === true){
        inp4.attr("type","text");
        btn.text("Hide Password");
        
      } else {
        inp4.attr("type","password");
        btn.text("Show Password");
      }
      e.preventDefault();
    });
    //end third form
   
   });  