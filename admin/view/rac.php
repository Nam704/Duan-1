<tr>
    <?php
                                               
                                                if (showimgsp($_GET['id']) > 0) { 
                                                 $images = $listimgsp;
                                                ?>
    <div class="gallery">
        <h4>All Images</h4>
        <?php foreach ($images as $image) { ?>
        <img src="../upload/<?= $image['img_name'] ?>">
        <?php } ?>
    </div>
    <?php } ?>
</tr>