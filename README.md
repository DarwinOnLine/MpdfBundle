MpdfBundle
==========

[![Latest Stable Version](https://poser.pugx.org/dol/mpdf-bundle/v/stable.png)](https://packagist.org/packages/dol/mpdf-bundle) [![Total Downloads](https://poser.pugx.org/dol/mpdf-bundle/downloads.png)](https://packagist.org/packages/dol/mpdf-bundle) [![License](https://poser.pugx.org/dol/mpdf-bundle/license.png)](https://packagist.org/packages/dol/mpdf-bundle) [![Build Status](https://scrutinizer-ci.com/g/DarwinOnLine/MpdfBundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/DarwinOnLine/MpdfBundle/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DarwinOnLine/MpdfBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/DarwinOnLine/MpdfBundle/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/DarwinOnLine/MpdfBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/DarwinOnLine/MpdfBundle/?branch=master)
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FDarwinOnLine%2FMpdfBundle.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2FDarwinOnLine%2FMpdfBundle?ref=badge_shield)

This bundle integrates the [mPDF library](https://mpdf.github.io) in your Symfony project.

**Versions and compatibilities:**

- [![Build Status](https://secure.travis-ci.org/DarwinOnLine/MpdfBundle.png?branch=master)](http://travis-ci.org/DarwinOnLine/MpdfBundle) `Master`.
- [![Build Status](https://secure.travis-ci.org/DarwinOnLine/MpdfBundle.png?branch=v1.0)](http://travis-ci.org/DarwinOnLine/MpdfBundle) `V 1.0`.

Installation
------------

### Applications that use Symfony Flex

#### One step ! Download the Bundle

Open a command console, enter your project directory and execute:

```console
composer require dol/mpdf-bundle
```

### Applications that don't use Symfony Flex

#### 1. Download the Bundle

Open a command console, enter your project directory and execute:

```console
composer require dol/mpdf-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### 2. Enable the Bundle

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new DoL\MpdfBundle\DoLMpdfBundle(),
        ];
        
        // ...
    }
    
    // ...
}
```

Usage
-----

TODO : Usage

Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [GitHub issue tracker](https://github.com/DarwinOnLine/MpdfBundle/issues).

When reporting a bug, it may be a good idea to reproduce it in a basic project
built using the [Symfony Standard Edition](https://github.com/symfony/symfony-standard)
to allow developers of the bundle to reproduce the issue by simply cloning it
and following some steps.

License
-------

[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FDarwinOnLine%2FMpdfBundle.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2FDarwinOnLine%2FMpdfBundle?ref=badge_large)
