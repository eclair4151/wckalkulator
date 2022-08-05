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
            <?php if (isset($view->show_required_asterisk) && $view->show_required_asterisk) : ?>
                <span class="required-asterisk">*</span>
            <?php endif; ?>
        </label>
    </td>
    <?php echo wp_kses_post(apply_filters('wck_field_td', '<td class="value">', $view->field_type)); ?>
        <input type="hidden" name="<?php echo esc_html($view->name); ?>" value="">
        <input type="checkbox" id="<?php echo esc_html($view->id); ?>" class="attached enabled" name="<?php echo esc_html($view->name); ?>" value="1" <?php checked($view->checked); ?> <?php echo esc_html($view->required); ?>>
        <label for="<?php echo esc_html($view->id); ?>" class="inline"><?php _e('Yes', 'wc-kalkulator'); ?></label>
    </td>
</tr>