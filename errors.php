<?php
/**
 * Created by PhpStorm.
 * User: Uv
 * Date: 11/27/2018
 * Time: 7:41 PM
 */
  if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>
