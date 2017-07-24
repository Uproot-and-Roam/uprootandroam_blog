<?php
namespace Concrete\Package\NewThemePackage;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package {

    protected $pkgHandle = 'new_theme_package'; //Change to the file directory name, Example: mischief_package
    protected $appVersionRequired = '8.1.0';
    protected $pkgVersion = '1.0';

    public function getPackageDescription() {
        return t("New Theme Package."); //Example "Mischief Studios Theme Package"
    }

    public function getPackageName() {
        return t("New Theme Package"); //Example Mischief Studios
    }

    public function install() {
        $pkg = parent::install();
        Theme::add('new_theme', $pkg); //Change to the name of the theme, Example: mischief (should be the folder of the theme)
    }

    public function uninstall() {
        $pkg = parent::uninstall();
    }
}