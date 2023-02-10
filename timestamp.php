<?php
function get_tt_id_timestamp(int $tt_id) : int {
  return intval(substr(decbin($tt_id), 0, 31), 2);
}

// id of a video of katyperry
// https://www.tiktok.com/@katyperry/video/7127889434929794347

$ts = get_tt_id_timestamp(7127889434929794347);
echo $ts;
echo "\n";

$dt_object = date("Y-m-d H:i:s", $ts);
echo "dt_object= " . $dt_object . "\n";
?>
