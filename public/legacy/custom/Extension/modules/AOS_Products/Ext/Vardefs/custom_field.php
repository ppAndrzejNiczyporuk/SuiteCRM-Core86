<?php
$dictionary['AOS_Products']['fields']['price']['default']='1';           
$dictionary['AOS_Products']['fields']['type']['default']='Service';
$dictionary['AOS_Products']['fields']['part_number']['validation']=[
    'type' => 'callback',
       'callback' => 'function(formname,nameIndex){if($("#" + nameIndex).val()!=843){add_error_style(formname,nameIndex,"Only 843 is allowed!"); return false;}; return true;}', 
 ];
//NOT WORKING  
$dictionary['AOS_Products']['fields']['cost']['logic']=[
    'display'=>[
       'key' => 'displayType',
       'modes' => ['detail', 'edit', 'create'],
       'params' => [
           'fieldDependencies' => [
               'part_number',
           ],
           'targetDisplayType' => 'none',
           'activeOnFields' =>  ['part_number' => [ '999']]
       ]
    ]
];


 

 ?>