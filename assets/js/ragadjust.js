ragadjust = function (s, method) {

	if (document.querySelectorAll) {

		var eles = document.querySelectorAll(s),
				elescount = eles.length,

				smallwords = /(\s|^)(([a-zA-Z-_(]{1,2}('|’)*[a-zA-Z-_,;]{0,1}?\s)+)/gi, // words with 3 or less characters

				dashes = /([-–—])\s/gi,

				emphasis = /(<(strong|em|b|i)>)(([^\s]+\s*){2,3})?(<\/(strong|em|b|i)>)/gi;

		while (elescount-- > 0) {

			var ele = eles[elescount],
					elehtml = ele.innerHTML;

			if (method == 'small-words' || method == 'all')

				// replace small words
				elehtml = elehtml.replace(smallwords, function(contents, p1, p2) {
		        return p1 + p2.replace(/\s/g, '&#160;');
		    });

		  if (method == 'dashes' || method == 'all')

		  	// replace small words
		  	elehtml = elehtml.replace(dashes, function(contents) {
		        return contents.replace(/\s/g, '&#160;');
		    });

			if (method == 'emphasis' || method == 'all')

				// emphasized text
				elehtml = elehtml.replace(emphasis, function(contents, p1, p2, p3, p4, p5) {
				        return p1 + p3.replace(/\s/gi, '&#160;') + p5;
				    });

			ele.innerHTML = elehtml;

		}

	}

};
