<?
include "config.php3";
$q= $db_stand->query("select sent from standstats");
$counter = $q->field(0,"sent");
$countdown = 3000-$counter;

$ar = date("Y",time());
$h = 21;
$m = 0;
$s = 0;
$d = 15;
$mth = 1;
$year = $ar; // makes year equal to the current year

$ds_until = (int)((mktime ($h,$m,$s,$mth,$d,$ar) -
time(void))/86400);

$hs_until = (int)((mktime ($h,$m,$s,$mth,$d,$ar) -
time(void))/3600);
$h_offset = $hs_until;
$hs_until -= $ds_until * 24;

$ms_until = (int)((mktime ($h,$m,$s,$mth,$d,$ar) -
time(void))/60);
$m_offset = $ms_until;
$ms_until -= $h_offset * 60;

$ss_until = (int)((mktime ($h,$m,$s,$mth,$d,$ar) -
time(void))/1);
$ss_until -= $m_offset * 60;
$before_after = "until";

$factor = 1;
$before_since = (int)((mktime ($h,$m,$s,$mth,$d,$ar) -
time(void))/1);
if ($before_since<0)
{
   $factor = -1;
   $before_after = "since";
}

//output the countdown

print ($countdown." more consultation  submissions needed and only
" . ($ds_until * $factor) . " days, " . ($factor * $hs_until) . "
hours, " . ($ms_until * $factor) . " minutes and
" . ($factor * $ss_until) . " seconds until David Blunkett stands up
and claims that the UK likes the idea of ID cards");
?>

