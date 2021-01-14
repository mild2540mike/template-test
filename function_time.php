<?php
    function set_time($datetime_string) {
      date_default_timezone_set('Asia/Bangkok');
      $ts = strtotime($datetime_string);
      $now = strtotime('now');
      if(!$ts || $ts > $now) {
        return false;
      }

      $diff = $now - $ts;

      $second = 1;
      $minute = 60 * $second;
      $hour = 60 * $minute;
      $day = 24 * $hour;
      $yesterday = 48 * $hour;
      $month = 30 * $day;
      $year = 365 * $day;
      $ago = "";

      if($diff >= $year) {
        $ago = round($diff/$year) . " year ago";
      }
      else if($diff >= $month) {
        $ago = round($diff/$month) . " month ago";
      }
      else if($diff > $yesterday) {
        $ago = round($diff/$day) . " day ago";
      }
      else if($diff <= $yesterday && $diff > $day) {
        $ago = " yesterday";
      }
      else if($diff >= $hour) {
        $ago = round($diff/$hour) . " hour ago";
      }
      else if($diff >= $minute) {
        $ago = round($diff/$minute) . " minute ago";
      }
      else if($diff >= 5*$second) {
        $ago = round($diff/$year) . " second ago";
      }
      else {
        $ago = " a moment ago";
      }

      return $ago;
      }

      $postDisplay = array();
      $authorJson = file_get_contents("https://maqe.github.io/json/authors.json");
      $postJson = file_get_contents("https://maqe.github.io/json/posts.json");
      $resultAuthor  = json_decode($authorJson);
      $resultPost  = json_decode($postJson);

      foreach($resultPost as $objPost) {
        foreach ($resultAuthor as $objAuthor) {
          if ($objPost->author_id == $objAuthor->id)
          {
            $object = (object) [

              'id' => $objPost->author_id,
              'title' => $objPost->title,
              'body' => $objPost->body,
              'image_url' => $objPost->image_url,
              'create_at' => $objPost->created_at,
              'author_id' => $objAuthor->id,
              'name' => $objAuthor->name,
              'role'=> $objAuthor->role,
              'place' => $objAuthor->place,
              'avatar_url' =>  $objAuthor->avatar_url
            ];
            array_push($postDisplay, $object);
            break;
          }
        }
      }
    ?>
