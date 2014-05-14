<?php

function thr_twig_get_variables($url, $section) {

  $url = "http://qa.hollywoodreporter.com/thr-api" . $url;

  // Access Unpublished Content if on editor-only server
  if ($_SERVER['SERVER_ADDR'] == "1.2.3.4") {
    $url = "http://qa.hollywoodreporter.com/editor-api" . $url . "?token=faslht5alerigq234ihtgrqoihiht143";
  }

  $json = file_get_contents($url);
  $page = json_decode($json);

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
        "associated_articles" => $page->article->associated_articles,
        "prevnext" => $page->article->prevnext,
        "meta_tags" => $page->article->meta->tags,
        "taxonomy" => $page->article->meta->taxonomy,
      );
      break;

  }

  return $variables;

}

?>