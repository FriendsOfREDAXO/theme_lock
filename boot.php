<?php
if (rex::isBackend())
{ 
   rex_extension::register('PACKAGES_INCLUDED', static function (rex_extension_point $ep) {
    rex::setProperty('theme', 'light');
   }, rex_extension::EARLY);  
}
