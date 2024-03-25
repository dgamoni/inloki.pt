<?php 

$images = get_field('inloki_galeria');

// echo'<pre>';
//     var_dump($images);
// echo'<pre>';

if( $images ): ?>
    <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

            <?php 
            $count = 1;
            $image_class = '';
            $params = array( 'height' => 349 );
            foreach( $images as $image ): 
                if($count == 1):
                    $image_class = 'bigimage';
                else:
                    $image_class = 'notvisible';
                endif;
                ?>
                <figure class="<?php echo $image_class; ?>" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                      <a href="<?php echo $image['url']; ?>" itemprop="contentUrl" data-size="<?php echo $image['width']; ?>x<?php echo $image['height']; ?>">
                          <img src="<?php echo bfi_thumb( $image['url'], $params ); ?>" itemprop="thumbnail" alt="<?php echo $image['alt']; ?>" />
                      </a>
                </figure>
            <?php 
            $count++;
            endforeach; ?>

    </div>
<?php endif; ?>