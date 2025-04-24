<?php

// Allow svg file tyoe upload from Media Upload
function carl_upload_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'carl_upload_mime_types');


// Resize image using img thumb
if ( !( function_exists('carl_imgsize') ) ) :
  // Use of phpthumb -- Resize your image appearing on a site
  function carl_imgsize($w, $h, $src, $fr=1) {
    if ($w != 0 && $h == 0):
      return DK_THEME_LIBS_URL ."/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;q=100";

    elseif ($w == 0 && $h != 0):
      return DK_THEME_LIBS_URL ."/imgthumb/phpThumb.php?src=" . $src . "&amp;h=" . $h . "&amp;q=100";

    else:
      if($fr==0):
        return DK_THEME_LIBS_URL ."/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;h=" . $h . "&amp;q=100&bg=ffffff&amp;far=1";
      else:
        return DK_THEME_LIBS_URL ."/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;h=" . $h . "&amp;q=100&amp;zc=T";
      endif;
    endif;
  }
endif;