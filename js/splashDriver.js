$(document).ready(function()
{
  $(document).on('click', function(event)
  {
    switch(event.target.id)
    {
      case 'customize':
        $form = $('<form>', {
          action: window.location.href+"index.php/splash/editor"
        });
        $form.submit();
        break;
      default:
        break;
    }
  });
});
