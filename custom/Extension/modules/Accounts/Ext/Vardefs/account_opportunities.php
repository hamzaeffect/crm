<?php

$dictionary['Account']['relationships']['account_opportunities'] = array(
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'my_account_id',
    'relationship_type' => 'one-to-many',
    );

?>