<?php

namespace WCKalkulator\Fields;

use WCKalkulator\View;

/**
 * Class ColorswatchesField
 * @package WCKalkulator
 */
class ColorswatchesField extends SelectField
{
    protected $parameters = array("type", "name", "title", "hint", "options_name", "options_title", "options_image", "css_class", "required", "default_value");
    protected $default_data = array("css_class" => "", "required" => false, "default_value" => "", "hint" => "");
    protected $type = "colorswatches";
    
    /**
     * Output HTML for fields at backend.
     * @param $value
     * @return string
     */
    public function admin_fields($value = '')
    {
        $this->admin_title = __("Color Swatches", "wc-kalkulator");
        return View::render('fields/admin/' . $this->type);
    }
    
    /**
     * Output HTML for User's cart nad order meta
     * @param $value
     * @return string
     */
    public function render_for_cart($value = '')
    {
        $value = $this->get_option_title($value);
        
        return View::render('fields/cart', array(
            'title' => $this->data['title'],
            'colorswatch' => $value
        ));
    }
}