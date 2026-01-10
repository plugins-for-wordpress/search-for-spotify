(function($) {

	"use strict";
	
	kirilkirkovSpotifySearchInit();

	function kirilkirkovSpotifySearchInit() {
		const info_btns = document.querySelectorAll('.show-info');
		let info_box = document.getElementsByClassName('spotify-search-info')[0];

		// listen click info modal
		info_btns.forEach(el => el.addEventListener('click', event => {
			info_box.style.visibility = 'visible';
			info_box.style.opacity = 1;
			document.getElementsByClassName('info-box')[0].innerHTML = el.getAttribute("data-info");
		}));

		// close info modal
		jQuery('.ft-modal-close').on('click', function() {
			info_box.style.visibility = 'hidden';
			info_box.style.opacity = 0;
		});

		// shortcode select
		jQuery(".shortcode div").on('mouseup', function() {
			let sel, range;
			let el = jQuery(this)[0];
			if (window.getSelection && document.createRange) { //Browser compatibility
			sel = window.getSelection();
			if(sel.toString() == ''){ //no text selection
				window.setTimeout(function(){
					range = document.createRange(); //range object
					range.selectNodeContents(el); //sets Range
					sel.removeAllRanges(); //remove all ranges from selection
					sel.addRange(range);//add Range to a Selection.
				},1);
			}
			}else if (document.selection) { //older ie
				sel = document.selection.createRange();
				if(sel.text == ''){ //no text selection
					range = document.body.createTextRange();//Creates TextRange object
					range.moveToElementText(el);//sets Range
					range.select(); //make selection.
				}
			}
		});

		// if uncheck default styles remove features to it
		jQuery('.spotify_search_default_styles').change(function(e) {
			if(!jQuery(this).is(":checked")) {
				// Keep backward compatibility with old class name
				jQuery('.spotify_search_default_styles_features').removeAttr('checked');
			}
		});

		// URL Parameters management
		function updateUrlParamsInput() {
			let params = [];
			jQuery('.spotify-url-param-row').each(function() {
				let key = jQuery(this).find('.spotify-param-key').val().trim();
				let value = jQuery(this).find('.spotify-param-value').val().trim();
				if (key !== '') {
					params.push({ key: key, value: value });
				}
			});
			jQuery('#spotify-url-params-input').val(JSON.stringify(params));
		}

		// Add new parameter row
		jQuery('#spotify-add-param').on('click', function() {
			let row = jQuery('<div class="spotify-url-param-row" style="display: flex; gap: 10px; margin-bottom: 10px; align-items: center;">' +
				'<input type="text" class="spotify-param-key" placeholder="Parameter key" value="" style="flex: 1; padding: 5px;">' +
				'<span>=</span>' +
				'<input type="text" class="spotify-param-value" placeholder="Parameter value" value="" style="flex: 1; padding: 5px;">' +
				'<button type="button" class="button spotify-remove-param" style="padding: 5px 10px;">Remove</button>' +
				'</div>');
			jQuery('#spotify-url-params-container').append(row);
			updateUrlParamsInput();
		});

		// Remove parameter row
		jQuery(document).on('click', '.spotify-remove-param', function() {
			jQuery(this).closest('.spotify-url-param-row').remove();
			updateUrlParamsInput();
		});

		// Update hidden input on change
		jQuery(document).on('input', '.spotify-param-key, .spotify-param-value', function() {
			updateUrlParamsInput();
		});

		// Update hidden input before form submit
		jQuery('form').on('submit', function() {
			updateUrlParamsInput();
		});
	}
})(jQuery);