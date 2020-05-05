function remove_hastags($sting, $echo=1){
  $re = '/\#([\p{L}\p{N}]+)/iu';
  $result = preg_replace($re, '', $sting);
  if($echo):
    echo $result;
  else:
    return $result;
  endif;
}
