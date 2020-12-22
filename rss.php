<?php
include 'includes/config.php';

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
}

$query = "SELECT topic_id, topic_title, topic_time FROM cS8856_topics WHERE forum_id=3 AND topic_id != 378 ORDER BY topic_time DESC LIMIT 20";
if ($result = mysqli_query($link, $query)) {
	while ($line = mysqli_fetch_assoc($result)) {
		$return[] = $line;
	}
	mysqli_free_result($result);
}
mysqli_close($link);

$now = date("D, d M Y H:i:s T");

$output = '<?xml version="1.0" encoding="UTF-8"?>

<rss version="2.0">
	<channel>
		<title>Universal Media Server News</title>
		<link>http://www.universalmediaserver.com/rss/</link>
		<description>The official news feed for Universal Media Server</description>
		<language>en</language>
		<pubDate>'.$now.'</pubDate>
		<lastBuildDate>'.$now.'</lastBuildDate>
		<docs>http://www.universalmediaserver.com/</docs>
';

foreach ($return as $line) {
	$output .= "
		<item>
			<title>".htmlentities($line['topic_title'])."</title>
			<link>http://www.universalmediaserver.com/forum/viewtopic.php?f=8&amp;t=".$line['topic_id']."</link>
			<description><a href=\"http://www.universalmediaserver.com/forum/viewtopic.php?f=8&amp;t=".$line['topic_id']."\">Click to see more</a></description>
			<guid>".$line['topic_id']."</guid>
			<pubDate>".date('D, d M Y H:i:s T', $line['topic_time'])."</pubDate>
		</item>
	";
}
$output .= "
	</channel>
</rss>";
header('Content-type: text/xml');
echo $output;
?>