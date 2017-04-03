<?php
require( dirname( __FILE__ ) . '/../src/application/views/header.phtml' );
require( dirname( __FILE__ ) . '/../src/application/views/page.phtml' );
require( dirname( __FILE__ ) . '/../src/application/views/footer.phtml' );

//set caching header
header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)
