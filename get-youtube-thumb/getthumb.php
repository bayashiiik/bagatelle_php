<!-- Get Youtube thumbnail url -->
function ytThumb($id) {
  $base = "https://img.youtube.com/vi/";
  $fnames = [
    "maxres",
    "sd",
    "hq",
    "mq",
    ""
  ];
  foreach($fnames as $fname){
    $url = $base.$id."/".$fname."default.jpg";
    if($get_contents = @file_get_contents($url)) {
      echo $url;
      break;
    }
  }
}