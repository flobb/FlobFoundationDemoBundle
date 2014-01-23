# [Foundation Demo Bundle](https://github.com/florianbelhomme/FoundationBundle)

By [Florian Belhomme](http://florianbelhomme.com)

See [FoundationBundle](https://github.com/florianbelhomme/FoundationBundle)

## Install

`composer.json`:

```JSON
{
    ...
    "require": {
        ...
        "florianbelhomme/foundation-demo-bundle" : ">=1.0.1"
        ...
    }
    ...
}
```

`app/AppKernel.php`:

```PHP
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            ...
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new FlorianBelhomme\Bundle\FoundationBundle\FlorianBelhommeFoundationBundle(),
            new FlorianBelhomme\Bundle\FoundationDemoBundle\FlorianBelhommeFoundationDemoBundle(),
            ...
        );
    }
}
```

`app/config/routing.yml`
```YAML
demo:
    resource: "@FlorianBelhommeFoundationDemoBundle/Resources/config/routing.yml"
    prefix:   /foundation
```

Then go to /foundation/

## License

- This bundle is licensed under the [MIT License](http://opensource.org/licenses/MIT)
