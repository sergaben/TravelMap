<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css" integrity="sha256-itWEYdFWzZPBG78bJOOiQIn06QCgN/F0wMDcC4nOhxY=" crossorigin="anonymous" />

        <link type="text/css" rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div id="sideNavigation" class="sidenav" style="width:0%;">
            <a>My Projects</a>
            <a>About me</a>
            <a>More options</a>
        </div>
        <span id="rightarrow" onclick="toggleState()" class="openNav"> <i id="arrow" class="right"></i></span>

        <div id="mainContent">
            <div id="Modal-Instructions" class ="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Right click for select the country that you want to highlight</p> 
                    <p>    Right click again to unselect the country</p>
                </div>
            </div>

            <object id='map' class="worldMap"></object>
            <div id="legend" class="legend">
                <h3>
                    Legend
                </h3>
                <div id="visitedCountry" class="visitedCountry"><label class="inline">Visited countries</label></div>
                <div id="unvisitedCountry" class="unvisitedCountry"><label class="inline">Unvisited countries</label></div>
                <div id="wantToVisitCountry" class="wantToVisitCountry"><label class="inline">Want to visit countries</label></div>
            </div>
        </div>
        <script> 
            // Variables for the manipulation of the DOM
            var sideNavigation = document.getElementById("sideNavigation");
            var mainContent = document.getElementById("mainContent");
            var rightArrow = document.getElementById("rightarrow");
            var arrow = document.getElementById("arrow");
            // Function that will close and open the side navigation menu
            function toggleState(){
                if($("#sideNavigation").width() === 0)
                {
                    sideNavigation.style.width = "250px";
                    mainContent.style.marginLeft = "250px";
                    rightArrow.style.marginLeft = "268px";
                    $("#arrow").removeClass('right');
                    $("#arrow").addClass('left');
                }else{
                    sideNavigation.style.width = "0";
                    mainContent.style.marginLeft = "0";
                    rightArrow.style.marginLeft = "0";
                    $("#arrow").removeClass('left');
                    $("#arrow").addClass('right');
                }
            }

        </script>
        <script src="scripts/raphael.min.js"></script>
        <script src="scripts/raphael-svg-import.js"></script>
        <script src="scripts/world.js"></script>
        <script src="scripts/scripts.js"></script>
    </body>
</html>