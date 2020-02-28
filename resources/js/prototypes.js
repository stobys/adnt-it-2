// -- pads left
String.prototype.lpad = function(padString, length) {
	var str = this;
    while (str.length < length)
    {
        str = padString + str;
    }

    return str;
}

// -- pads right
String.prototype.rpad = function(padString, length) {
	var str = this;
    while (str.length < length)
    {
        str = str + padString;
    }

    return str;
}

$.fn.filterByData = function (prop, val) {
    var $self = this;
    if (typeof val === 'undefined') {
        return $self.filter(
            function () { return typeof $(this).data(prop) !== 'undefined'; }
        );
    }
    return $self.filter(
        function () { return $(this).data(prop) == val; }
    );
};

