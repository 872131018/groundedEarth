$(document).ready(function()
{
  /*
  * Init the slick slider in the design selector
  */
  $('.slider').slick();
  /*
  * Track the color that was clicked on as a Global
  */
  color = '';
  /*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=color]', function(event)
  {
    /*
    * Isolate element that was clicked on
    */
    var $target = $(event.target);
    /*
    * Select color that was clicked on
    */
    color = $target.data("color");
    /*
    * Reset the size of the circles to neutral state
    */
    $(".circle").css("height", "60px");
    $(".circle").css("width", "60px");
    /*
    * Add a selection indicator to the selected element
    */
    $target.css("height", "90px");
    $target.css("width", "90px");
  });
  /*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=design]', function(event)
  {
    /*
    * Isolate element that was clicked on
    */
    var $target = $(event.target);
    /*
    * Get design that was clicked on
    */
    var design = $target.attr("src").replace("/thumbnails", "/svgs").replace(".png", ".svg");
    /*
    * Pull design up from the Server
    */
    $.get(design, function(response, status)
    {
      if(status == "success")
  		{
        /*
        * Convert to object and add data selector
        */
        var $svg = $(response).find("svg");
        $svg.attr("data-delegate", "svg")
        /*
        * Set size of svg for final display
        */
        $svg.attr("width", "400px");
        $svg.attr("height", "400px");
        /*
        * Add the svg to the page
        */
        $("#svgContainer").html($(response).find("svg"));
      }
      else
      {
          console.log("Server responded with error");
          console.log(reponse);
      }
    });
  });
  /*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=svg]', function(event)
  {
    /*
    * Isolate element that was clicked on
    */
    var $target = $(event.target);
    /*
    * Climb up the dom tree for an id
    */
    var parents = $target.parents();
    for(var $parent in parents)
    {
      $parent = $(parents[$parent]);
      /*
      * Only selectable layers should have an id
      */
      if(typeof $parent.attr("id") != 'undefined')
      {
        $parent.attr("fill", color);
        break;
      }
    }
  });
});
