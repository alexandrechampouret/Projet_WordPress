<?php
defined('ABSPATH') or die('No script kiddies please!!');
if ( !empty($_POST[ 'attachments' ]) ) {

    foreach ( $_POST[ 'attachments' ] as $attachment ) {
        $gallery_item_key = $this->generate_random_string(15);
        $field_name_prefix = "gallery_details[gallery_items][eg_item_$gallery_item_key]";
        ?>
        <div class="eg-each-gallery-item" data-gallery-item-key="<?php echo 'eg_item_' . $gallery_item_key; ?>">
            <div class="eg-gallery-image-preview">
                <div class="eg-gallery-item-actions-wrap">
                    <a href="javascript:void(0)" class="eg-move-item"><span><?php _e('Move', 'everest-gallery-lite'); ?></span></a>
                    <a href="javascript:void(0)" class="eg-settings-item"><span><?php _e('Settings', 'everest-gallery-lite'); ?></span></a>
                    <a href="javascript:void(0)" class="eg-copy-item"><span><?php _e('Copy', 'everest-gallery-lite'); ?></span></a>
                    <a href="javascript:void(0)" class="eg-delete-item"><span><?php _e('Delete', 'everest-gallery-lite'); ?></span></a>
                </div>
                <img src="<?php echo esc_attr($attachment[ 'sizes' ][ 'full' ][ 'url' ]); ?>"/>
            </div>
            <div class="eg-gallery-item-detail-wrap" style="display:none;">
                <div class="eg-overlay"></div>
                <div class="eg-gallery-item-detail-fields">
                    <h4><?php _e('Item Details', 'everest-gallery-lite'); ?><span class="dashicons dashicons-no eg-close-popup"></span></h4>
                    <div class="eg-field-wrap">
                        <label><?php _e('Item Title', 'everest-gallery-lite'); ?></label>
                        <div class="eg-field">
                            <input type="text" class="eg-gallery-form-field" name="<?php echo esc_attr($field_name_prefix . '[item_title]'); ?>" value="<?php echo ucfirst($attachment[ 'title' ]); ?>"/>
                        </div>
                    </div>
                    <div class="eg-field-wrap">
                        <label><?php _e('Item Caption', 'everest-gallery-lite'); ?></label>
                        <div class="eg-field">
                            <textarea class="eg-gallery-form-field" name="<?php echo esc_attr($field_name_prefix . '[item_caption]'); ?>"><?php echo esc_attr($attachment[ 'caption' ]); ?></textarea>
                        </div>
                    </div>
                    <div class="eg-field-wrap">
                        <label><?php _e('Item Link', 'everest-gallery-lite'); ?></label>
                        <div class="eg-field">
                            <input type="text" class="eg-gallery-form-field" name="<?php echo esc_attr($field_name_prefix . '[item_link]'); ?>" value="<?php echo esc_attr($attachment[ 'link' ]); ?>"/>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="eg-gallery-form-field" name="<?php echo esc_attr($field_name_prefix . '[attachment_id]'); ?>" value="<?php echo esc_attr($attachment[ 'id' ]); ?>"/>
                <input type="hidden" class="eg-gallery-form-field" name="<?php echo $field_name_prefix . '[gallery_item_type]'; ?>" value="image"/>
                <?php // $this->print_array($attachment);  ?>
            </div>
        </div>
        <?php
    }
}
//$this->print_array( $_POST );
