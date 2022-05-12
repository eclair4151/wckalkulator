<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<tr class="<?php echo esc_html($view->css_class); ?>">
    <td class="label">
        <?php echo wp_kses($view->hint, \WCKalkulator\Sanitizer::allowed_html()); ?>
        <label for="<?php echo esc_html($view->id); ?>">
            <?php echo esc_html($view->title); ?>
        </label>
    </td>
    <td class="value">
        <?php foreach ($view->options_name as $i => $opt_name) : ?>
            <?php $id = $view->id . '-' . $i; ?>
            <div><label for="<?php echo esc_html($id); ?>">
                    <input type="radio" name="<?php echo esc_html($view->name); ?>"
                           id="<?php echo esc_html($id); ?>" <?php echo esc_html($view->required); ?>
                           class="attached enabled"
                           value="<?php echo esc_html($opt_name); ?>" <?php checked($view->value, $opt_name); ?>>
                    <?php echo esc_html($view->options_title[$i]); ?>
                    <img src="<?php echo wp_get_attachment_image_url($view->options_image[$i]); ?>" alt="<?php echo esc_html($view->options_title[$i]); ?>" />
                </label>
            </div>
        <?php endforeach; ?>
    </td>
</tr>