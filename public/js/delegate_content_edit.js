$(document).ready(function() {
	/*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=content_edit]', function(event) {
		/*
		* Grab data of the relevant product from siblings
		*/
		var $row = $(event.target).parent()
		var name = $row.siblings('[data-field=name]').html()
		$('input[name=name]').val(name)
		var copy = $row.siblings('[data-field=copy]').html()
		$('input[name=copy]').val(copy)
		/*
		* Set fields that need to be updated for form submission
		*/
		var content_id = $(event.target).data("id")
		var token = $("meta[name=csrf-token]").attr("content")
		/*
		* These values must be set for server to function
		*/
		var $form = $('form')
		$form.append(
			$("<input type=\"hidden\" name=\"id\" value=\""+content_id+"\">")
		);
		/*
		* Change button characteristis to refect new role
		*/
		$("button[data-delegate=content_add]").html("Submit Changes")
		$("button[data-delegate=content_add]").removeClass("btn-success")
		$("button[data-delegate=content_add]").addClass("btn-primary")
		/*
		* Swap the button functionality
		*/
		$("button[data-delegate=content_add]").attr("data-delegate", "content_submit")
	});
});
