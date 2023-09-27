<?php
    $meta = get_post_meta( $post->ID );
    #var_dump($meta);
?>
<table class="form-table mv-slider-metabox"> 
    <tr>
        <th>
            <label for="mv_slider_link_text">Link Text</label>
        </th>
        <td>
            <input 
                type="text" 
                name="mv_slider_link_text" 
                id="mv_slider_link_text" 
                class="regular-text link-text"
                value="<?php echo ( isset($meta['mv_slider_link_text'][0]) )? esc_html($meta['mv_slider_link_text'][0]) : ''; ?>"
                required
            >
        </td>
    </tr>
    <tr>
        <th>
            <label for="mv_slider_link_url">Link URL</label>
        </th>
        <td>
            <input 
                type="url" 
                name="mv_slider_link_url" 
                id="mv_slider_link_url" 
                class="regular-text link-url"
                value="<?php echo ( isset($meta['mv_slider_link_url'][0]) )? esc_html($meta['mv_slider_link_url'][0]) : ''; ?>"
                required
            >
        </td>
    </tr>               
</table>