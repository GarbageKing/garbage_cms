<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Admin Panel';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-admin">
   <div class="row">   
     <div class="col-xs-12">
         <div class="row">
             <div class="col-md-3">
                 <ul>
                <li><a href="../category">Categories</a></li>
                <li><a href="../post">Posts</a></li>
                <li><a href="../user">Users</a></li>
                <li><a href="image_upload">Upload an image</a></li>
                 </ul>
            </div>
        </div>
     </div>
    </div>
</div>
