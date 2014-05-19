<?php

function thr_twig_get_variables($url, $section) {

  $url = "http://qa.hollywoodreporter.com/thr-api" . $url;

  // Access Unpublished Content if on editor-only server
  if ($_SERVER['SERVER_ADDR'] == "1.2.3.4.5.6.7.8.9.0") {
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
        "associated_articles" => get_object_vars($page->associated_articles),
        "related_photo_galleries" => get_object_vars($page->related_photo_galleries),
        "prevnext" => $page->prevnext,
        "meta_tags" => $page->meta->tags,
        "taxonomy_links" => $page->meta->taxonomy_links,
      );
      break;

  }

  // add main navigation menu
  $menu_url = "http://qa.hollywoodreporter.com/thr-api/menu";
  $menu_json = file_get_contents($menu_url);
  $menu_code = json_decode($menu_json);
  foreach ($menu_code->menu as $key => $value) {
    foreach ($value as $v => $child) {
        $sub['title'] = $value->title;
        $sub['path'] = $value->path;
        $sub[$v] = get_object_vars($child);
    }
    $menu[$key] = $sub;
  }

  $variables['menu'] = $menu;

  return $variables;

}


?>