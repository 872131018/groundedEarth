$(document).ready(function()
{
  $(document).on('click', function(event)
  {
    var color = '';

    $(".circle").css("height", "60px");
    $(".circle").css("width", "60px");
    switch(event.target.id)
    {
      case 'circle1':
        $("#circle1").css("height", "90px");
        $("#circle1").css("width", "90px");
        color = "green";
        $('#feathers').attr("fill", color);
        break;
      case 'circle2':
        $("#circle2").css("height", "90px");
        $("#circle2").css("width", "90px");
        color = "red";
        $('#feathers').attr("fill", color);
        break;
      case 'circle3':
        $("#circle3").css("height", "90px");
        $("#circle3").css("width", "90px");
        color = "blue";
        $('#feathers').attr("fill", color);
        break;
      default:
        break;
    }

    var parents = $(event.target).parents();
    for(var parent in parents)
    {
      $parent = $(parents[parent]);
      if(typeof $parent.attr("id") != 'undefined')
      {
        console.log(color)
        switch($parent.attr("id"))
        {
          case 'feathers':
            $('#feathers').attr("fill", color);
            break
          default:
            break;
        }
        break;
      }
    }
  });
});
