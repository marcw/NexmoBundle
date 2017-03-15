# Nexmo Bundle

A simple bundle integration the [Nexmo PHP client library](https://github.com/Nexmo/nexmo-php/).

## Installation

`composer require marcw/nexmo-bundle`

Add in your `AppKernel.php` file:

`new MarcW\Bundle\NexmoBundle\MarcWNexmoBundle(),`

## Configuration

Add in your `config.yml` file:

```yaml
marcw_nexmo:
    api_key: <your nexmo api key>
    api_secret: <your nexmo api secret>
```

## Usage

Access the Nexmo client as a service this way:

```php
$client = $container->get('marcw.nexmo.client');
```

## Contributions

Yes, please.

## License

This software is licensed under the MIT license.

