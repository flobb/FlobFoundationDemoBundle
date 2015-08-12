# [Flob Foundation Demo Bundle](https://github.com/florianbelhomme/FlobFoundationDemoBundle)

By [Florian Belhomme](http://florianbelhomme.com)

Show the possibility of [FlobFoundationBundle](https://github.com/florianbelhomme/FlobFoundationBundle).
See [FlobFoundationBundle](https://github.com/florianbelhomme/FlobFoundationBundle) for more infos and issues.

## Usage

`composer.json`:

```JSON
{
    ...
    "require": {
        ...
        "florianbelhomme/flob-foundation-demo-bundle" : "~2.0.0"
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
        $bundles = [
            ...
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            
            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
            
            new Flob\Bundle\FoundationBundle\FlobFoundationBundle(),
            new Flob\Bundle\FoundationDemoBundle\FlobFoundationDemoBundle(),
            ...
        ];
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
