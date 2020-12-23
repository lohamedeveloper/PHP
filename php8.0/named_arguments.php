<?php

$string = "<a href='test'>Test</a>";
echo "\nPHP 7\n";
echo htmlspecialchars($string, ENT_COMPAT | ENT_HTML401, 'UTF-8', false)."\n"; //&lt;a href='test'&gt;Test&lt;/a&gt;
echo htmlspecialchars($string, ENT_QUOTES); //&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

echo "\n\nPHP 8\n";

echo htmlspecialchars($string, double_encode: false);
