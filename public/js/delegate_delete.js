$(document).ready(function() {
	/*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=delete]', function(event) {
    /*
    * Build a form to submit
    */
		var $form = $("<form action="+window.location.href+" method=POST></form>")
		var target_id = $(event.target).data("id")
		$form.append(
			$("<input type=\"hidden\" name=\"id\" value=\""+target_id+"\">")
		);
		$form.append(
			$("<input name=\"_method\" value=\"DELETE\">")
		);
		var token = $("meta[name=\"csrf-token\"]").attr("content")
		$form.append(
			$("<input name=\"_token\" value=\""+token+"\">")
		);
		$form.submit();
	});
});
