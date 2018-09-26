1. Create an empty array:

$data = [];

2. Create a new record for array:

$message = array(
          "id" => 10, 
          "title" => 'the title', 
          "content" => 'the contnt'
          );

3. Push array

array_push($data, $message);

echo $data[0]->id

foreach($data as $record):
  echo $record->id;
endforeach;
