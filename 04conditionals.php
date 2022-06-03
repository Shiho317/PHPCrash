<?php
  $age = 20;

  if($age >= 18){
    echo "You are old enough to vote";
  }else{
    echo "You are not old enough to vote";
  };

  $t = date("H");
  echo $t;

  if($t < 12) {
    echo "good morning";
  }else{
    echo "good evening";
  };

  $posts = ['First Post'];

  if(empty($posts)){
    echo 'No post';
  }else{
    echo $posts[0];
  };

  echo !empty($posts) ? $posts[0] : 'No Posts';

?>