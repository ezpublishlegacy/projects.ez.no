<?php

// require './extension/ezprojects/classes/github_feed_consumer.php';
// require './extension/ezprojects/classes/github_feed_url.php';

try
{
    $url = new githubFeedUrl( "https://github.com/ezsystems/ezpublish/" );
    $consumer = new githubFeedConsumer( $url );
    // $commitLog = $consumer->getCommitLog( 1324076400 /* 2011-12-17 */ );
    $commitLog = $consumer->getCommitLog();

    foreach ( $commitLog as $commit )
    {
        echo (new DateTime( "@" . $commit['published'] ) )->format( "Y/m/d H:i" )
             . " " . $commit['author']->name . "\n";
    }
}
catch ( Exception $e)
{
    var_dump( $e->getMessage() );
}





?>