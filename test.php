<?php
$fmt = datefmt_create(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    
);
echo 'Le premier format affiché est ' . datefmt_format($fmt, 0);