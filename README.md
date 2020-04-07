# UssdMenu
[![Packagist Version](https://img.shields.io/packagist/v/cybersai/ussd-menu?style=for-the-badge)](https://packagist.org/packages/cybersai/ussd-menu)
[![Travis (.com)](https://img.shields.io/travis/cybersai/ussd-menu?style=for-the-badge)](https://travis-ci.com/cybersai/ussd-menu)
[![GitHub repo size](https://img.shields.io/github/repo-size/cybersai/ussd-menu?style=for-the-badge)](https://github.com/CyberSai/ussd-menu)
![GitHub](https://img.shields.io/github/license/cybersai/ussd-menu?style=for-the-badge)

A bare Ussd Menu Object Oriented Builder for common use cases.

No Real Documentation for now, but for now you can [read the tests](https://github.com/cybersai/ussd-menu/blob/master/tests/UssdMenuTest.php).
```php
include 'vendor/autoload.php';

use Cybersai\UssdMenu\UssdMenu;

echo UssdMenu::title('Welcome to AppName') // create a new instance with a title
    ->space(2) // append double space
    ->list(['Airtime', 'Data', 'Utility', 'Contact Us']) // list array using default options
    ->space(2) // append double space
    ->text('Powered by AppName'); // show text;
```
```text
// Output
Welcome to AppName

1.Airtime
2.Data
3.Utility
4.Contact Us

Powered by AppName
```

## Installation
`composer require cybersai/ussd-menu`