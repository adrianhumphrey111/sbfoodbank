//Stub for reverse_geocode
function reverse_geocode(address){
	//Right now we aren't actually doing the reverse geocoding
	//Ideally we would be caching some of these so we don't overload the Google server 
	var answer = {lat: 33.8121+Math.random(),
				  lng: -117.9190+(Math.random()*1)};

	return answer;
}



$ = jQuery.noConflict();
$(function(){
});
