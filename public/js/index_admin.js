$(document).ready(function() {
  /*
  * Initialize masonry image grid
  */
  $('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 200
  });
  /*
  * Dropzone init with config options
  */
  Dropzone.options.dropzone = {
    init: function() {
      this.on("sending", function(file, xhr, form) {
        var token = $("meta[name=csrf-token]").attr("content")
        form.append("_token", token)
        form.append("_method", "PUT")
      });
      this.on("success", function(file, response) {
        console.log(response);
      });
    }
  };
});
