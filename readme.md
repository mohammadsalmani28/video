# Video Generator
Video Generator is a package for laravel. This package created for generate embed code in your project.
thanks for using my package!


## Installation

### Step 1 

Run following command in root directory of your project:

```bash
composer require mohammadsalmani28/video
```

### Step 2 : Add Provider

Now you have to add this line in 'app.php' located in 'config' directory of your laravel project in the providers array:

```php
Mohammadsalmani28\Video\VideoServiceProvider::class,
```

Done :)

### Usage:

This package should be used in your view files.

| Code | Description |
| --- | --- |
| ``` @video('service_name', 'video_url') ``` | Generate and return embed code |

Examples:

```bash
@video('aparat', 'https://www.aparat.com/v/8vam2') 
```
```bash
@video('youtube', 'https://www.youtube.com/watch?v=ImtZ5yENzgE') 
```
```bash
@video('tamasha', 'https://tamasha.com/v/0keJL') 
```
```bash
@video('namasha', 'https://www.namasha.com/v/vEePZkl5') 
```
```bash
@video('vimeo', 'https://vimeo.com/151390908') 
```

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
