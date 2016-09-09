$(document).ready(function() {
	/*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=file_delete]', function(event) {
		/*
		* Set fields that need to be updated for form submission
		*/
		var name = $(event.target).data("name")
		var token = $("meta[name=csrf-token]").attr("content")
		/*
		* These values must be set for server to function
		*/
		var $form = $('form')
		$form.append(
			$("<input type=\"hidden\" name=\"name\" value=\""+name+"\">")
		);
		$form.append(
			$("<input type=\"hidden\" name=\"_token\" value=\""+token+"\">")
		);
		$form.append(
			$("<input type=\"hidden\" name=\"_method\" value=\"DELETE\">")
		);
		/*
		* Submit name to bring up records
		*/
		$form.submit()
	});
});
