tcpdf.php#121: require_once()
ClassLoader.php#444: include(.\vendor\tecnickcom\tcpdf\tcpdf.php)
ClassLoader.php#322: Composer\Autoload\includeFile(string 'D:\\xampp\\phpMyAdmin\\vendor\\composer/../tecnickcom/tcpdf/tcpdf.php')
Composer\Autoload\ClassLoader->loadClass(string 'TCPDF')
ExportPdf.php#25: class_exists(string 'TCPDF')
Plugins.php#107: include_once(.\libraries\classes\Plugins\Export\ExportPdf.php)
Export.php#692: PhpMyAdmin\Plugins::getPlugins(
string 'export',
string 'libraries/classes/Plugins/Export/',
array,
)
tbl_export.php#109: PhpMyAdmin\Display\Export->getDisplay(
string 'table',
string 'classfoxproject',
string 'registration',
string 'SELECT * FROM `registration` ',
integer 0,
integer 0,
string '',
)