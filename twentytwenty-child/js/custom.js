

jQuery( document ).on( "ready", function() { 
var acc = document.getElementsByClassName("accordion_button");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
  	
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    
    if (panel.style.display === "block") {

      panel.style.display = "none";
    } else {
      panel.style.display = "block";
      


      }
    })
    
  };



  

});


// count animation


new WOW().init();

