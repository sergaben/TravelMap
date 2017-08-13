// AJAX call for requesting the SVG object and transform it in raphael's format
jQuery(document).ready(function(){
    jQuery.ajax({
        type: "GET",
        url: "worldHigh.svg",
        dataType: "xml",
        success: function(svgXML) {
            var paper = Raphael('map', 1000, 750);
            var newSet = paper.importSVG(svgXML); 
            var paths = $("#map").children('svg').children('path');
            //console.log(paths);
            // Change the stroke of all the countries to black
            paths.css({stroke:"black"});
            paths.attr('class','default');
            // creates an array from the HTMLcollection
            paths =[].slice.call(paths);
            //binds each paths to the right button of the mouse
            //colors the clicked country with red meaning that want to visit.
            paths.forEach(function(entry){
                $(entry).on("contextmenu",function(e){
                    
                    var currentClass = entry.getAttribute('class');
                    
                    var targetClass;
                    if(currentClass === 'default'){
                        targetClass = 'thirdColor';
                    }else if(currentClass ==='colored'){
                        targetClass = 'default';
                    }else{
                        targetClass = 'default';
                    }
                    entry.setAttribute('class', targetClass);
                    return false;
                });


            });
            // Loop for going through each of the path and change the filling of each 
            // when the user left clicks
            for(var i=0;i<paths.length;i++){
                //Toggle the colors between blue and red
                //turquoise2 not travelled
                //blue visited
                paths[i].onclick = function(){
                    var currentClass = $(this).attr('class');  
                    var targetClass;
                    if(currentClass === 'default'){
                        targetClass = 'coloured';
                    }else if(currentClass ==='thirdColor'){
                        targetClass = 'default';
                    }else{
                        targetClass = 'default';
                    }
                    $(this).attr('class','').attr('class',targetClass);
                }
            }
        }
    });
});

