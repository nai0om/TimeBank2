/* Author:

*/

$(document).ready( function () {
  	$(function() {
			$(".datepicker" ).datepicker({
										dateFormat: 'dd-mm-yy',
										isBE: true,
                    autoConversionField: true

											 });
	});
	
	

});

// parse a date in dd-mm-yyyy hh:mm:ss format
function parseDate(input) 
{
  var parts = input.match(/(\d+)/g);
  // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
  return new Date(parts[2], parts[1]-1, parts[0]); // months are 0-based
}

// parse a date in dd-mm-yyyy hh:mm:ss format
function collectedDateTime(input) 
{
  var parts = input.match(/(\d+)/g);
  // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
  return new Date(parts[2], parts[1]-1 , parts[0], parts[3],  parts[4],  parts[5]);
}

// parse a date in dd-mm-yyyy hh:mm:ss format
function parseTime(input) 
{

  var parts = input.match(/(\d+)/g);
  // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
  return new Date(parts[0]*60*60*1000 + parts[1]*60*1000  + parts[2]*10000 ); // months are 0-based
}

function CountDays(DayOfWeek, start, end)
{
	var ts = new Date(end - start);                       // Total duration
	var count = Math.floor((ts/(1000*60*60*24)) / 7);   // Number of whole weeks
	var remainder = ((ts/(1000*60*60*24)) % 7);         // Number of remaining days
	var sinceLastDay = (end.getDay() - DayOfWeek);   // Number of days since last [day]
	if (sinceLastDay < 0) sinceLastDay += 7;         // Adjust for negative days since last [day]

	// If the days in excess of an even week are greater than or equal to the number days since the last [day], then count this one, too.
	if (remainder >= sinceLastDay) count++;          

	return count;
}

