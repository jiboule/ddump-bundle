DDump
=====

dump and optionnaly exit

- Also install the great [The DebugBundle of Symfony](https://github.com/tchwork/debug-bundle)

Installation
------------

Instal trough composer :

in the composer.json file :

    {
        "require": {
            "jiboule/ddump-bundle": "0.0.*@dev"
        }
    }
    
You can after that run a composer install
    
Next, enable the bundle in the Kernel, in dev or test environment :

```php
public function registerBundles()
{
    $bundles[] = new \Jiboule\DDumpBundle\JibouleDDumpBundle();
}
```

Usage
-----

In a controller, to simply dump a variable :

```php
d($var);
```

to dump and die :

```php
dd($var);
```

to use the [The DebugBundle of Symfony](https://github.com/tchwork/debug-bundle) dump function and die :

```php
ddump($var);
```