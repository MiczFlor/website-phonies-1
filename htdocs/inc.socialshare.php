    <!-- Social Share -->
    
    <meta name="description" content="<?php print $l['description']; ?>">
    <meta name="keywords" content="<?php print $l['keywords']; ?>">
    <meta name="author" content="<?php print $l['author']; ?>">
    
    <!-- Facebook OpenGraph developers.facebook.com/docs/reference/opengraph/ -->
    <meta property="og:type" content="<?php print $l['type']; ?>"/>
    <meta property="og:title" content="<?php print $l['title']; ?>"/>
    <meta property="og:description" content="<?php print $l['description']; ?>"/>
    <meta property="og:url" content="<?php print $l['url']; ?>"/>
    <meta property="og:image" content="<?php print $l['imageUrl']; ?>"/>
    
    <!--meta property="og:site_name" content="Phoniebox" /-->
    
    <!-- Twitter domain approval https://cards-dev.twitter.com/validator -->
    <!-- For twitter, content is usually summary_large_image as shown -->
    <meta name="twitter:card" content="<?php print $l['twitterCard']; ?>"/>
    <meta name="twitter:title" content="<?php print $l['title']; ?>"/>
    <meta name="twitter:description" content="<?php print $l['description']; ?>"/>
    <meta name="twitter:url" content="<?php print $l['url']; ?>"/>
    <meta name="twitter:image" content="<?php print $l['imageUrl']; ?>"/>
    <meta name="twitter:creator" content="<?php print $l['twitterCreator']; ?>"/>
    
    <!-- Shema.org microdata -->
    <meta itemprop="name" content="<?php print $l['title']; ?>"/>
    <meta itemprop="description" content="<?php print $l['description']; ?>"/>
    <meta itemprop="image" content="<?php print $l['imageUrl']; ?>"/>
    