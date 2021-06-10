<?php declare(strict_types = 1);
/**
 * @author      Mohammed Moussaoui
 * @copyright   Copyright (c) Mohammed Moussaoui. All rights reserved.
 * @license     MIT License. For full license information see LICENSE file in the project root.
 * @link        https://github.com/DevNet-Framework
 */

namespace DevNet\Extensions;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        $prettyName = explode('/', $package->getPrettyName());
        $name       = array_pop($prettyName);

        return 'vendor/devnet/templates/'.$name;
    }

    public function supports($packageType)
    {
        return  $packageType == 'devnet-template';
    }
}
