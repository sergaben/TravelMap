$(document).ready(function(){
    var modal = document.getElementById("Modal-Instructions");

    var span = document.getElementsByClassName("Close")[0];
    
    modal.style.display = "block";
    
    span.onclick = function(){
        modal.style.display = "none";
    }   
});