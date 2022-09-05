<?PHP

// echo 'Hihihihi'.'<br>';

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "https://www.google.com/");

// curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

// $output = curl_exec($ch);

// echo $output;

// curl_close($ch);

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "https://github.com/search?q=react");

// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output = curl_exec($ch);

// echo $output;

// curl_close($ch);

$data=array(

    "name" => "Lei",

    "msg" => "Are you OK?"

    );

 

    $ch = curl_init(); 

 

    curl_setopt($ch, CURLOPT_URL, "http://www.google.com"); 

    curl_setopt($ch, CURLOPT_POST, 1);

    //The number of seconds to wait while trying to connect. Use 0 to wait indefinitely.

    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60); 

    curl_setopt($ch, CURLOPT_POSTFIELDS , http_build_query($data));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

 

    $output = curl_exec($ch); 

 

    echo $output;

 

    curl_close($ch);     

?>