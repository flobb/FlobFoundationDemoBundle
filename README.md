# [Foundation Demo Bundle](https://github.com/florianbelhomme/FoundationBundle)

By [Florian Belhomme](http://florianbelhomme.com)

See [FoundationBundle](https://github.com/florianbelhomme/FoundationBundle) for more infos and issues.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/db9a0fbc-7b82-4e8d-9c7c-d8b84d21c6d3/small.png)](https://insight.sensiolabs.com/projects/db9a0fbc-7b82-4e8d-9c7c-d8b84d21c6d3)

## Install

`composer.json`:

```JSON
{
    ...
    "require": {
        ...
        "florianbelhomme/foundation-demo-bundle" : "~1.0"
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
