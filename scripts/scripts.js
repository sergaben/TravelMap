//Function to show the modal the document is ready.
$(document).ready(function(){
    var modal = document.getElementById("Modal-Instructions");

    var span = document.getElementsByClassName("close")[0];
    
    modal.style.display = "block";
    
    span.onclick = function(){
        modal.style.display = "none";
    }
    
});




