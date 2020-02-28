var callback = {
		call: function( _mix_function, _obj_params, _obj_event ) {
			console.log('callback.call()');

			if ( _mix_function === null ) return false;

			_mix_function = jQuery.isArray(_mix_function) ? _mix_function : [_mix_function];

			jQuery.each(_mix_function, function(key, _str_function){
				if ( _str_function.indexOf('.') !== -1 ) {
					_str_function = _str_function.split('.');

					if( typeof window[_str_function[0]][_str_function[1]] === 'undefined') {
						showMsgBox('Callback function not found.', 'warning');
						return false;
					}

					if (window[_str_function[0]] && typeof(window[_str_function[0]][_str_function[1]]) === "function") {
						// -- execute the callback, passing parameters as necessary
						window[_str_function[0]][_str_function[1]](_obj_params, _obj_event);
					}

				}
				else {
					if( typeof window[_str_function] === 'undefined') {
						if ( console ) console.log(_str_function);

						myAPP.showMsgBox('Callback function not found.', 'warning');
						return false;
					}

					if (window[_str_function] && typeof(window[_str_function]) === "function") {

						// -- execute the callback, passing parameters as necessary
						window[_str_function](_obj_params, _obj_event);
					}

				}

			});

		}
};
