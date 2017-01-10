<?php
    $comic_id = 297;
    // comic_id = 297だと進撃の巨人
    $story_id = 88;
    // story_id = 88だと12月に発売されたヤンジャンの掲載分
    require_once("phpQuery-onefile.php");
    $results = array();
    $page = 1;
    while(1 == 1){
        $url =  'http://mangamatome.net/manga/'.$comic_id.'/'.$story_id.'/'.$page;
        $html = file_get_contents($url);
        $doc = phpQuery::newDocument($html);
        if (!$doc["#main-image"] -> attr('src')) break;
        $results[] = $doc["#main-image"] -> attr('src');
        $page += 1;
        if ($page == 100) {
            //var_dump("loop");
            break;
        }
    }
?>

<?php foreach($results as $result): ?>
<img src="<?php echo $result;?>" style="width:400px;height:550px;">
<br><br>
<?php endforeach; ?>
