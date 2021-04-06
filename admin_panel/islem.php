<?php
$url = 'jetpin.com.tr';
$googlePagespeedData = file_get_contents("https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=http://" . $url . "&key=AIzaSyCPRy5p-HjAuAJAv26Z-GMBZ-fOD54Klsg");
$googlePagespeedData = json_decode($googlePagespeedData, true);
/*
echo '<pre>';
print_r($googlePagespeedData);
echo '</pre>';*/


$screenshot = $googlePagespeedData['lighthouseResult']['audits']['final-screenshot']['details']['data'];
echo $screenshot;
/*
echo "<img src=\"$screenshot\" />";
