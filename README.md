===============
GalleriaFactory
===============

```php
THIS IS IN BETA DO NOT USE IT AT THE MOMENT... ;)
```

**Galleria** is a *CakePHP* plugin which provides an additional factory for the **Cake Toolkit** (CTK), adding configurable objects for the galleria.io javascript gallery.
THis allows to build with objects a picture gallery based on the available functionality of galleria.io

Requirements
------------

* CakePHP 2+
* PHP 5.3+
* Cake Toolkit (https://github.com/jameswatts/cake-toolkit)
* Jquery (http://jquery.com/)

Installation
------------

To use the plugin simply include it in your application's "app/Plugin" directory, and load it in the "app/Config/bootstrap.php" file.

```php
CakePlugin::load('GalleriaFactory');
```

The above code is *not* required if you're already using ```CakePlugin::loadAll()``` to load all plugins.

Implementation
--------------

Once the plugin is available it's ready to use in your **CTK** Views, or with the **Factory** helper included with the **Cake Toolkit**. To include the **Galleria** factory in a View just add the factory to your *$factories* collection, for example:

```php
public $factories = array('GalleriaFactory.Galleria');
```

With the factory now available you can call it in your View, and build your gallery using the galleria js plugin via an object-oriented interface.


Support
-------

For support, bugs and feature requests, please use the [issues](https://github.com/netstyler/GalleriaFactory/issues) section of this repository.

Licence
-------

Copyright 2013 Falk Romano (World-Architects / CakeStyler). All rights reserved.

Licensed under the MIT License. Redistributions of the source code included in this repository must retain the copyright notice found in each file.

Acknowledgements
----------------

Thanks to [James Watts](https://github.com/jameswatts) and [everyone](https://github.com/cakephp/cakephp/contributors) who has contributed to [CakePHP](http://cakephp.org), helping make this framework what it is today.