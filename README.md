# Laravel Metatags

Quickly add metatags to your application with this package.

Metatags don't appear on the page itself, but only in the page's code. Metatags are little content descriptors that help tell search engines what a web page is about.

This packages can help you or the users of your application to manage those meta tags.
### Usage
Models with the _metataggable_ trait have a morphMany relationship with the _Metatag_ model which is included in this package. So you can return a collection instance of this relationship just like other relationships in Laravel to return all the tags.
```php
$post->metatags
```

But the collection that is returned is a custom `MetatagCollection` with a few extra methods for your convenience. The below code example outputs the actual HTML required for the metatags to function.
```php
$post->metatags->toHTML()
```
This outputs (depending on the number of tags you added):
```HTML
<title>My title</title>
<meta name="description" content="My meta description">
<meta name="keywords" content="My, meta, keywords">
```

As you can see in the example above the 'meta' with a name of _title_ will not return a `<meta>`tag but an actual `<title>` tag. This way search engines and other interpreters will pick up on the title you specify.

### Installation
Include the package in your application

```composer require elevate-digital\laravel-metatags```

Make sure the `ElevateDigital\Metatags\MetatagsServiceProvider::class,
` is included in your providers array in your apps config.

You can publish the migration with:
```php artisan vendor:publish --provider="ElevateDigital\Metatags\MetaTagsServiceProvider" --tag="migrations"```

Create the Metatags table with:
```php artisan migrate```

You can then add the Metataggable trait on your models, and start using its functions.

```php
use ElevateDigital\Metatags\Metataggable;

class Post extends Model
{

    use Metataggable;
```
