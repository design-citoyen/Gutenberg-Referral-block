
//Add new block type
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a referral block.
        acf_register_block_type(array(
            'name'              => 'referral',
            'title'             => __('Referral'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/testimonial/referral.php',
            'category'          => 'formatting',
            'icon'              => 'starEmpty',
            'keywords'          => array( 'referral', 'link' ),
        ));
    }
}
