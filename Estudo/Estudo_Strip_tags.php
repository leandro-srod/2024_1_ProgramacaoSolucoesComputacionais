<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text @</a><?php echo "Codigo PHP" />';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>');

// A partir do PHP 7.4.0 a linha acima pode ser escrita como:
// echo strip_tags($text, ['p', 'a']);
?>