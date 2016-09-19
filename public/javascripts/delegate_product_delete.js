$(document).ready(function() {
	/*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=product_delete]', function(event) {
        /*
        * Set fields that need to be updated for form submission
        */
        var token = $("meta[name=csrf-token]").attr("content")
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
		$form.append(
			$("<input name=\"_token\" value=\""+token+"\">")
		);
		$form.submit();
	});
});
