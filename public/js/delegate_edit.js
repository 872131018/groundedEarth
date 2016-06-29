$(document).ready(function() {
	/*
  * Delegate all clicks to the document
  */
  $(document).on('click', '[data-delegate=edit]', function(event) {
		/*
		* Grab data of the relevant product from siblings
		*/
		var $row = $(event.target).parent()
		var name = $row.siblings('[data-field=name]').html()
		$('input[name=name]').val(name)
		var type = $row.siblings('[data-field=type]').html()
		$('input[name=type]').val(type)
		var link = $row.siblings('[data-field=link]').html()
		$('input[name=link]').val(link)
		var image = $row.siblings('[data-field=image]').html()
		$('input[name=image]').val(image)
		var price = $row.siblings('[data-field=price]').html()
		$('input[name=price]').val(price)
		/*
		* Set fields that need to be updated for form submission
		*/
		var product_id = $(event.target).data("id")
		var token = $("meta[name=csrf-token]").attr("content")
		/*
		* These values must be set for server to function
		*/
		var $form = $('form')
		$form.append(
			$("<input type=\"hidden\" name=\"id\" value=\""+product_id+"\">")
		);
		/*
		* Change button characteristis to refect new role
		*/
		$("button[data-delegate=add]").html("Submit Changes")
		$("button[data-delegate=add]").removeClass("btn-success")
		$("button[data-delegate=add]").addClass("btn-primary")
		/*
		* Swap the buttn functionality
		*/
		$("button[data-delegate=add]").attr("data-delegate", "submit")
		/*
		* Submit new data on next click
		*/
	});
});
