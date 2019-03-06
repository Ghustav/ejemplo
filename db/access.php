<?php
  $mod_ejemplo_capabilities = array(
    'mod/assignment:grade' => array(
      'captype' => 'write',
      'contextlevel' => CONTEXT_MODULE,
      'legacy' => array(
        'teacher' => CAP_ALLOW,
        'editingteacher' => CAP_ALLOW,
        'admin' => CAP_ALLOW
      )
    )
  );
?>
