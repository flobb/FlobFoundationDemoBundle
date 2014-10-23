# [Flob Foundation Demo Bundle](https://github.com/florianbelhomme/FlobFoundationDemoBundle)

By [Florian Belhomme](http://florianbelhomme.com)

See [FlobFoundationBundle](https://github.com/florianbelhomme/FlobFoundationBundle) for more infos and issues.

## Install

`composer.json`:

```JSON
{
    ...
    "require": {
        ...
        "flob/foundation-demo-bundle" : "~2.0"
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
            new Flob\Bundle\FoundationBundle\FlobFoundationBundle(),
            new Flob\Bundle\FoundationDemoBundle\FlobFoundationDemoBundle(),
            ...
        );
    }
}
```

`app/config/routing.yml`
```YAML
demo:
    resource: "@FlobFoundationDemoBundle/Resources/config/routing.yml"
    prefix:   /foundation
```

Then go to /foundation/

## License

- This bundle is licensed under the [MIT License](http://opensource.org/licenses/MIT)
