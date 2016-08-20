<?php
$manifest = array(
    'name' => 'semlot_forms',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'Leon.V.Nikitin@pravmail.ru',
    'description' => 'Формы для semlot.',
    'is_uninstallable' => true,
    'published_date' => '2016-08-20',
    'type' => 'module',
    'version' => '1.2.0',
);
$installdefs = array(
    'id' => 'semlot_forms',
    'copy' => array(
        array(
            'from' => '<basepath>/source/copy',
            'to' => '.'
        ),
    ),

);
