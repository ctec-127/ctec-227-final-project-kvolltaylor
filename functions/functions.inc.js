function displayResults(data){
	var output = '';
	var p = "<p>"; // paragraph tag
	var cp = "</p>"; // closing paragraph tag
	var s = "<span class='text-secondary'>"; // span for api content descriptors
	var cs = "</span>"; // closing span tag
	var dr = "<div class='row'>"; // div for creating a row
	var cd = "</div>"; // closing div

	// each quote
	for (var i=0 ; i < data.thought.length ; i++){
        output += p + data.thought[i].quote + cp;
    }

return output;

} // end function