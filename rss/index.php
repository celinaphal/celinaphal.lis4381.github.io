<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = "utf-8">
        <title> Using RSS Feeds</title>
        <link rel="icon" href="favicon.ico">

    </head>
    <body>
        <?php
		
        $html="";
        $publisher = "Huffington Post";
        $url = "https://www.huffpost.com/section/front-page/feed?x=1";

        $html .='<p>' . $publisher . '<p>';
        $html .= $url;

        $rss = simplexml_load_file($url);
        $count = 0;
        $html .= '<ul>';

        foreach($rss -> channel -> item as $item)
        {
            $count++;
            if($count>10)
            {
                break; 
            }
            $html .= '<li><a href="'.htmlspecialchars($item->link).'">'.htmlspecialchars($item->title).'</a><br/>';
            $html .= htmlspecialchars($item->description).'<br />';
            $html .= htmlspecialchars($item->pubDate).'</li><br />';
        }
        $html .='</ul>';

        print $html;
        ?>
    </body>
    </html>