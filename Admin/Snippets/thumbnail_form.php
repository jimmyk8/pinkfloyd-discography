<?php
<form method="post" action="" class="list col-lg-4 container-fluid">
    <p>
        <select name="pix" id="pix">
            <option value="">Select an image</option>
            <?php
            $files = new FilesystemIterator('./../public/images');
            $images = new RegexIterator($files, '/\.(?:jpg|png|gif)$/i');
            foreach ($images as $image) {
                $filename = $image->getFilename();
                ?>
                <option value="<?= $folder . $filename; ?>"><?= $filename; ?></option>
            <?php } ?>
        </select>
    </p>
    <p>
        <input type="submit" name="create" value="Create Thumbnail">
    </p>
</form
<?
