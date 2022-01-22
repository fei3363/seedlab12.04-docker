Welcome to the footer editor! Please type in the contents and click the save button.
<?php
$footercontents = elgg_get_plugin_setting('footercontents', 'edit_footer');
    echo elgg_view('input/plaintext', array(

        'name'  => 'params[footercontents]',

        'value' => $footercontents,

    ));
?>
