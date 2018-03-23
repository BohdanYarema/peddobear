<?php
/**
 * Created by PhpStorm.
 * User: bohdan
 * Date: 22.03.2018
 * Time: 10:31
 */
?>

<a class="add" data-id="1"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="2"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="3"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="4"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="5"  data-count="2" href="javascript:void(0);">Add</a>
<a class="add" data-id="6"  data-count="2" href="javascript:void(0);">Add</a>
<br>
<a class="add" data-id="1"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="2"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="3"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="4"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="5"  data-count="4" href="javascript:void(0);">Add</a>
<a class="add" data-id="6"  data-count="4" href="javascript:void(0);">Add</a>
<br>
<a class="delete" data-id="1"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="2"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="3"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="4"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="5"  data-count="2" href="javascript:void(0);">delete</a>
<a class="delete" data-id="6"  data-count="2" href="javascript:void(0);">delete</a>
<br>
<a class="delete" data-id="1"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="2"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="3"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="4"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="5"  data-count="4" href="javascript:void(0);">delete</a>
<a class="delete" data-id="6"  data-count="4" href="javascript:void(0);">delete</a>
<br>




<?php \yii\widgets\Pjax::begin([
    'id' => 'list-pjax',
    'linkSelector' => false
]); ?>

<p class="price">
    <?php print_r($cart);?>
</p>

<?php \yii\widgets\Pjax::end()?>



