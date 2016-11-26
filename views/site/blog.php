<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-blog">
   <div class="row">   
      <?php foreach ($posts as $post){
          
          echo '<div class="post col-md-6">';
          echo '<h2>'.$post->title.'</h2>';
          echo '<img style="width: 50%; height:auto;" src="../'.$post->pre_image.'" class="post-img"/>';
          echo '<div class="post-content">'.$post->content.'</div>';
          echo '<p>'.$post->publish_date.'</p>';
          echo '</div>';
      }
          ?>
    </div>
</div>
