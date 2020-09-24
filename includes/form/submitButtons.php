<div class="split">
    <input type="submit" value="Previous" name="previous" <?php if ($_SESSION['page'] < 1) echo 'disabled'; ?>>
    <input type="submit" value="<?php echo ($_SESSION['page'] === count($pages) - 1 ? 'Submit' :  'Next'); ?>" name="next">
</div>