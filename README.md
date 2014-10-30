# [Flob Foundation Demo Bundle](https://github.com/florianbelhomme/FlobFoundationDemoBundle)

By [Florian Belhomme](http://florianbelhomme.com)

Show the possibility of [FlobFoundationBundle](https://github.com/florianbelhomme/FlobFoundationBundle).
See [FlobFoundationBundle](https://github.com/florianbelhomme/FlobFoundationBundle) for more infos and issues.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/db9a0fbc-7b82-4e8d-9c7c-d8b84d21c6d3/small.png)](https://insight.sensiolabs.com/projects/db9a0fbc-7b82-4e8d-9c7c-d8b84d21c6d3)

## Usage

`composer.json`:

```JSON
{
    ...
    "require": {
        ...
        "florianbelhomme/flob-foundation-demo-bundle" : "~2.0"
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
            
            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
            
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
    prefix:   /
```

Then go to /

## License

- This bundle is licensed under the [MIT License](http://opensource.org/licenses/MIT)
