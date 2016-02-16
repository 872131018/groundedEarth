$(document).ready(function()
{
  /*
  * Init the slick slider in the design selector
  */
  $('.lazy').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });
  /*
  * Track the color that was clicked on as a Global
  */
  color = '';
  /*
  * Delegate all clicks to the document
  */
  $(document).on('click', function(event)
  {
    /*
    * Isolate element that was clicked on
    */
    var $target = $(event.target);
    /*
    * Determine general course of action based on class
    */
    if($target.hasClass("circle"))
    {
      /*
      * Reset the size of the circles to neutral state
      */
      $(".circle").css("height", "60px");
      $(".circle").css("width", "60px");
      /*
      * Switch on id to set color
      */
      switch($target.attr("id"))
      {
        case 'circle1':
          color = "green";
          break;
        case 'circle2':
          color = "red";
          break;
        case 'circle3':
          color = "blue";
          break;
        default:
          break;
      }
      /*
      * Add a selection indicator to the selected element
      */
      $target.css("height", "90px");
      $target.css("width", "90px");
    }
    else
    {
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
    }
  });
});
