$(document).ready(function() {

	$("#order-form").submit(function() {
		$.ajax({
			type: "POST",
			url: "./php/mail.php",
			data: $(this).serialize(),
            success: function (msg) {
                if (msg == 'neok') {
                	alert("Вы не нажали на рекапчу")
				} else {
                	alert("Спасибо за заявку! Скоро мы с вами свяжемся.")
				}
            }
		})
			// .done(function() {
			// $(this).find("input").val("");
			// alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			// $("#order-form").trigger("reset");
		// });
		return false;
	});

});