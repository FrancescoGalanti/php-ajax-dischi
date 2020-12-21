<?php ?>


<?php 
    
    require __DIR__ . "/../partial/database.php";
    

    //ternary function that determines if the author query is empty
    $artist = empty($_GET["artist"]) ? false : $_GET["artist"];
    //filtered album
    $albums = [];
    // default setting that return all the element inside the arry
    if($artist == false || $artist == "all"){
        $albums = $database;
    }else{
        // iteration of the array in order to get the element inside of it
        foreach($database as $element){
            // conditional that filter the custom index "author" with the get variable $author
            if($element["author"] == $artist){
                $albums[] = $element;
            }
        }
    }


    // array of artist

    $artists = [];
    // iteration of an array
    foreach($database as $element){
        // conditional that determines if there is already an author to avoid repitition 
        if(! in_array($element["author"], $artists )){
            // pushing of the element
            $artists[] = $element["author"];
        }
    }


    // double array

    $response = [
        "albums" => $albums,
        "artists" => $artists
    ];


    header("Content-Type: application/json");
   
    echo  json_encode($response); 
    

    
    


?>

