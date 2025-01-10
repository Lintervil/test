ФОТОГАЛЕРЕЯ +просморт
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>

<div class="gallery">
 <h4><b>Фотогалерея</b></h4>
        <?php foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photoId): ?>
            <?php 
            $file = CFile::GetFileArray($photoId);
            if ($file): ?>
                <div class="gallery-item">
                    <a href="<?= $file['SRC'] ?>" data-lightbox="gallery" data-title="<?= $file['DESCRIPTION'] ?>">
                        <img src="<?= $file['SRC'] ?>" alt="<?= $file['DESCRIPTION'] ?>" />
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

display: flex;
    flex-wrap: wrap;
}

.gallery-item {
    margin: 5px;
}

.gallery-item img {
    max-width: 25%;
    height: auto;
    border: 1px solid #ccc;
    border-radius: 4px;
}
