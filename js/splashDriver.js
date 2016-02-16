$(document).ready(function()
{
  $(document).on('click', function(event)
  {
    switch(event.target.id)
    {
      case 'customize':
        $form = $('<form>', {
          action: window.location.href+"splash/editor"
        });
        $form.submit();
        break;
      default:
        break;
    }
  });
});
