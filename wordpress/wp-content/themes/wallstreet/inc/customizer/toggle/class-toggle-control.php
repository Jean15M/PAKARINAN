<?php
/**
 * Customizer Control: toggle.
 */
// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}
if(class_exists( 'WP_Customize_Control' )) {
    if (!class_exists('Wallstreet_Toggle_Control')) {

        /**
         * Toggle control (modified checkbox).
         */
        class Wallstreet_Toggle_Control extends WP_Customize_Control {

            public $type = 'toggle';
            public $tooltip = '';

            public function to_json() {
                parent::to_json();

                if (isset($this->default)) {
                    $this->json['default'] = $this->default;
                } else {
                    $this->json['default'] = $this->setting->default;
                }

                $this->json['value'] = $this->value();
                $this->json['link'] = $this->get_link();
                $this->json['id'] = $this->id;
                $this->json['tooltip'] = $this->tooltip;

                $this->json['inputAttrs'] = '';
                foreach ($this->input_attrs as $attr => $value) {
                    $this->json['inputAttrs'] .= $attr . '="' . esc_attr($value) . '" ';
                }
            }

            public function enqueue() {
                wp_enqueue_style('wallstreet-toggle-css', WALLSTREET_TEMPLATE_DIR_URI . '/inc/customizer/toggle/toggle.css', null);
                wp_enqueue_script('wallstreet-toggle-js', WALLSTREET_TEMPLATE_DIR_URI . '/inc/customizer/toggle/toggle.js', array('jquery'), false, true); //for toggle        
            }

            protected function content_template() {
                ?>
                <# if ( data.tooltip ) { #>
                <a href="#" class="tooltip hint--left" data-hint="{{ data.tooltip }}"><span class='dashicons dashicons-info'></span></a>
                <# } #>
                <label for="toggle_{{ data.id }}">
                    <span class="customize-control-title">
                        {{{ data.label }}}
                    </span>
                    <# if ( data.description ) { #>
                    <span class="description customize-control-description">{{{ data.description }}}</span>
                    <# } #>
                    <input {{{ data.inputAttrs }}} name="toggle_{{ data.id }}" id="toggle_{{ data.id }}" type="checkbox" value="{{ data.value }}" {{{ data.link }}}<# if ( '1' == data.value ) { #> checked<# } #> hidden />
                    <span class="switch" style="margin-top:7px;"></span>
                </label>
                <?php
            }

        }

    }
}