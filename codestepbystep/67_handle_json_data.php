<!--  #67 Handle JSON data -->
  <?php
  $user=[[
    "name"=>"anil",
    "age"=>22,
    "sal"=>2324,
    "loc"=>"pune"
  ],[
    "a"=>1,
    "b"=>2,
    "c"=>3,
  ]
  ];
  
  echo " encode: array to json <br> "; 
  $userjson=json_encode($user);
  echo "$userjson";
  echo "<hr>";

echo " decode : json to array <br> ";
$dataArray=json_decode($userjson,true);
print_r($dataArray);
  
  
  ?>