<?php

function thr_twig_get_variables($url, $section) {

  $url = "http://qa.hollywoodreporter.com/thr-api" . $url;

  // Access Unpublished Content if on editor-only server
  if ($_SERVER['SERVER_ADDR'] == "1.2.3.4") {
    $url = "http://qa.hollywoodreporter.com/editor-api" . $url . "?token=faslht5alerigq234ihtgrqoihiht143";
  }

  $json = file_get_contents($url);
  $page = json_decode($json);

    $test = array(
      "622323" => array(
      "title" => "Simon Cowell's 'Britain's Got Talent' Continues to Dominate Saturday U.K. Ratings",
      "link" => "http://www.hollywoodreporter.com/news/britains-got-talent-dominates-ratings-701152",
      "filepath" => "http://www.hollywoodreporter.com/sites/default/files/imagecache/recommended_thumb/2014/04/simon_cowell_0.jpg",
    ),
      "88754" => array(
        "title" => "2Simon Cowell's 'Britain's Got Talent' Continues to Dominate Saturday U.K. Ratings",
        "link" => "2http://www.hollywoodreporter.com/news/britains-got-talent-dominates-ratings-701152",
        "filepath" => "2http://www.hollywoodreporter.com/sites/default/files/imagecache/recommended_thumb/2014/04/simon_cowell_0.jpg",
      ),
    );


  $variables = array();

  switch ($section) {



    case "news":
      $variables = array(
        "title" => $page->article->title,
        "image" => $page->article->image,
        "caption" => $page->article->caption,
        "body" => $page->article->body,
        "deck" => $page->article->deck,
        "author" => $page->article->author,
        "byline" => $page->article->byline,
        "associated_articles" => get_object_vars($page->associated_articles),
        "prevnext" => $page->prevnext,
        "meta_tags" => $page->meta->tags,
        "taxonomy" => $page->meta->taxonomy,
      );
      break;

  }

  return $variables;

}

?>