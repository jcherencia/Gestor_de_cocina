$(document).ready(function() {
				$.fn.wizard.logging = true;
				var wizard = $('#some-wizard').wizard({
					keyboard : false,
					contentHeight : 400,
					contentWidth : 700,
					backdrop: 'static',
					theme:'complement-1-b'
				});
				
						
				// wizard.on('closed', function() {
				// 	wizard.reset();
				// });

				// wizard.on("reset", function() {
				// 	wizard.modal.find(':input').val('').removeAttr('disabled');
				// 	wizard.modal.find('.form-group').removeClass('has-error').removeClass('has-succes');
				// 	wizard.modal.find('#fqdn').data('is-valid', 0).data('lookup', 0);
				// });

				// wizard.on("submit", function(wizard) {
				// 	var submit = {
				// 		"hostname": $("#new-server-fqdn").val()
				// 	};
					
				// 	this.log('seralize()');
				// 	this.log(this.serialize());
				// 	this.log('serializeArray()');
				// 	this.log(this.serializeArray());
			
				// 	setTimeout(function() {
				// 		wizard.trigger("success");
				// 		wizard.hideButtons();
				// 		wizard._submitting = false;
				// 		wizard.showSubmitCard("success");
				// 		wizard.updateProgressBar(0);
				// 	}, 2000);
				// });
				
				// wizard.el.find(".wizard-success .im-done").click(function() {
				// 	wizard.hide();
				// 	setTimeout(function() {
				// 		wizard.reset();	
				// 	}, 250);
					
				// });
			
				// wizard.el.find(".wizard-success .create-another-server").click(function() {
				// 	wizard.reset();
				// });
			
				
				$('#open-wizard').click(function(e) {
					e.preventDefault();
					wizard.show();
				});
			});