$(document).ready(function() {
	/*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=product_submit]', function(event) {
		/*
		* Set fields that need to be updated for form submission
		*/
		var token = $("meta[name=csrf-token]").attr("content")
		/*
		* These values must be set for server to function
		*/
		var $form = $('form')
		$form.append(
			$("<input type=\"hidden\" name=\"_token\" value=\""+token+"\">")
		);
		$form.append(
			$("<input type=\"hidden\" name=\"_method\" value=\"POST\">")
		);
		/*
		* Submit the form
		*/
		$form.submit()
	});
});
