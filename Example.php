<?php

	//PeopleBrowsr API
	
	/*
	Application id and applicaiton key
	these are supplied to you by PeopleBrowsr
	
	All PeopleBrowsr API requests use consistent parameters in making their requests.
	
	Time Period: The time period parameters require that exactly 2 of the three possible 
	parameters be submitted. Possible choices are 'first', 'last' (both of which denote 
	dates in any one of various formats. See https://developer.peoplebrowsr.com/pbapi/), and count
	which denotes how many time increments the request should span. This defaults to days.
	Therefore a value of 30 will denote a time span of 30 days.
	
	source: Denotes the network from which the results should be pulled. blogs, facebook, twitter are all options
	for this parameter.
	
	term: The term or terms that should serve as the key for the search.
	
	Optional Parameters:
		period: defines the time span of the count parameter. This value is designated in seconds. period=86400 denotes one day.
		limit: places a cap on the number of returned results
		number: Specifies number of items in non-histogram queries. If the parameter &number=10, the query will only return 10 data points. 
		reverse: When set to reverse=true, this will reverse the order of the histograms, charts.
	*/

	//include the object that will handle the connection to the peoplebrowsr API	
	include_once('PeopleBrowsr.php');

	//create an instance of the API handler using the applicaiton id and the application key
	$PBObject = new PeopleBrowsr('[APP ID]','[APP KEY]');

	//create an associative array of the necessary parameters that will be submitted through the API
	$params = array('last'=>'yesterday','term'=>'pepsi', 'source'=>'twitter', 'count'=>30);

	//call the execute function passing in the API method name, and the list of parameters created
	$result = $PBObject->execute('atnamecloud',$params);

	//perform whatever manipulations are called for on the data. Here I am simply printing the results to the screen
	print_r($result);
	
	//Kred API
	/*
	All Kred API requests use consistent parameters in making their requests.
	For this library.

	Application id and applicaiton key
	these are supplied to you by PeopleBrowsr	
		
	source: Denotes the network from which the results should be pulled. blogs, facebook, twitter are all options
	for this parameter.
	
	term: The term or terms that should serve as the key for the search.
	*/	
	
	//include the object that will handle the connection to the Kred API	
	include_once('Kred.php');

	//create an instance of the API handler using the applicaiton id and the application key
	$KObject = new PeopleBrowsr('[APP ID]','[APP KEY]');

	//create an associative array of the necessary parameters that will be submitted through the API
	$params = array('term'=>'pepsi', 'source'=>'twitter');

	//call the execute function passing in the API method name, and the list of parameters created
	$result = $KObject->execute('Kred',$params);

	//perform whatever manipulations are called for on the data. Here I am simply printing the results to the screen
	print_r($result);	
?>
