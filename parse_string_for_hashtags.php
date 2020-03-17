// VIA https://stackoverflow.com/questions/3060601/retrieve-all-hashtags-from-a-tweet-in-a-php-function

function getHashtags($string) {  
    $hashtags= FALSE;  
    preg_match_all("/(#\w+)/u", $string, $matches);  
    if ($matches) {
        $hashtagsArray = array_count_values($matches[0]);
        $hashtags = array_keys($hashtagsArray);
    }
    return $hashtags;
}
