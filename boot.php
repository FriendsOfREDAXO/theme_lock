<?php
if (rex::isBackend())
{ 
   rex_extension::register('PACKAGES_INCLUDED', static function (rex_extension_point $ep) {
   rex::setProperty('theme', 'light');
   // CKE5 fix   
   rex_view::setJsProperty('cke5theme', 'light');   
   }, rex_extension::EARLY);  
}
