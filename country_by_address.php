// This extracts the Country from any type of address string

// ADDRESS STRING
$address = "Whatever STreet 28, 3999, City, Country";

// Google GEO API - make sure it is activatd
$api = "API-GOES-HERE";

// Call the API
$response = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$address."&key=".$api); 

// Decode the response into an array
$json = json_decode($response, true);

// Depending on the Address, Location the returned array has a different size 
// So the index of the country is always different 
// Fast solution is to count it and adapt the array query index later

$count = count($json["results"][0]["address_components"]);

if($count == 5):
 $country = $json["results"][0]["address_components"][3]['long_name'];
elseif($count == 6): 
  $country = $json["results"][0]["address_components"][4]['long_name'];
elseif($count == 3): 
    $country = $json["results"][0]["address_components"][1]['long_name'];
elseif($count == 7): 
  $country = $json["results"][0]["address_components"][5]['long_name'];
elseif($count == 8): 
  $country = $json["results"][0]["address_components"][6]['long_name'];
elseif($count == 9): 
  $country = $json["results"][0]["address_components"][6]['long_name'];
elseif($count == 10): 
  $country = $json["results"][0]["address_components"][7]['long_name'];
else:
  $country = 0;
endif;

echo $country; 

