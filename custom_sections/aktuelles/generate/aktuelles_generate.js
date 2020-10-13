$(document).ready(function() {
	
	init = (function() {
		
		$('#dl_main').click(function() {
			
			// Set date for post
			var dateString = getItemDate;
			$('.date').text(dateString);
			
			// Get all the Parts of the slider item 
			var itemString = $('.item_container').html();

			// Set date for file
			var date = getDate;
			download( `${date}.html`, itemString);
		});
	})();
	
	download = function(filename, text) {

		var element = document.createElement('a');
		element.setAttribute('href', 'data:text/html;charset=utf-8,' + encodeURIComponent(text));
		element.setAttribute('download', filename);
	  
		element.style.display = 'none';
		document.body.appendChild(element);
	  
		element.click();
	  
		document.body.removeChild(element);
	};
	

	// download('hello.txt','blabla');

	initButtons = (function() {
		var oTexts = []; 
		var jsonString = '';
	
		$('#button_text').click(function() {
			var text = $.trim($(this).prev('textarea').val());
			$('.item p').text(text);
		});
		$('#button_h1').click(function() {
			var text = $.trim($(this).prev('textarea').val());
			$('.item h4').text(text);

		});
		$('#button_date').click(function() {		
		var date = getItemDate;
		$('.date').text(date);
			// var text = $.trim($(this).prev('textarea').val());
			// $('.item .date').text(text);
		})
	})();

	// function = makeDate() {
	// 	const t = new Date();
	// 	const date = ('0' + t.getDate()).slice(-2);
	// 	const month = ('0' + (t.getMonth() + 1)).slice(-2);
	// 	const year = t.getFullYear();
	// 	const hours = ('0' + t.getHours()).slice(-2);
	// 	const minutes = ('0' + t.getMinutes()).slice(-2);
	// 	const seconds = ('0' + t.getSeconds()).slice(-2);
	// 	const time = `${date}/${month}/${year}, ${hours}:${minutes}:${seconds}`;
	// 	const datestring = `${year}`+month+date;
	// 	return datestring;

		
	// };

	getDate = (function() {
		const t = new Date();
		const date = ('0' + t.getDate()).slice(-2);
		const month = ('0' + (t.getMonth() + 1)).slice(-2);
		const year = t.getFullYear();
		const hours = ('0' + t.getHours()).slice(-2);
		const minutes = ('0' + t.getMinutes()).slice(-2);
		const seconds = ('0' + t.getSeconds()).slice(-2);
		const time = `${date}/${month}/${year}, ${hours}:${minutes}:${seconds}`;
		const datestring = `${year}`+month+date;
		return datestring;
	})();
	
	getItemDate = (function() {

			date = new Date;

			var monthNames = [
			  "Januar", "Februar", "Maerz",
			  "April", "Mai", "Juni", "Juli",
			  "August", "September", "Oktober",
			  "November", "Dezember"
			];
		  
			var day = date.getDate();
			var monthIndex = date.getMonth();
			var year = date.getFullYear();
		  
			return day + ' ' + monthNames[monthIndex] + ' ' + year;
		  
	})();


	initButtons;
	console.log(init);
	/*collect data from inputs fields*/
})