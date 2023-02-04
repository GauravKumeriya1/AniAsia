<?php

include('../_config.php');

header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";

$json = file_get_contents("$api/getOngoingSeries");
$json = json_decode($json, true);
foreach($json as $getOngoingSeries) 
{  
    echo "<url>";
    echo "<loc>https://{$_SERVER['SERVER_NAME']}".$getOngoingSeries['animeId']."</loc>";
    echo "<changefreq>daily</changefreq>";
    echo "<priority>0.8000</priority>";
    echo "</url>";
}

echo "</urlset>";

?>