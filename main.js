console.log("test");

//showing/hiding search form in navigation on click

$(document).ready(function(){
    $("#search-icon").click(function(){

        $("#search-icon").hide();
        $("#nav-search-form").show();
    

    });

    $(document).mouseup(function(e) {
    var container = $("#nav-search-form");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.hide();
        $("#search-icon").show();
    }
  });
});