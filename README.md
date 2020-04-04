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

echo UssdMenu::from('Raw Text') // Create a new Instance with that string
    ->lineBreak(2) // Append Double linebreak
    ->line('Here comes a list') // Append new text with linebreak
    ->listing(['Superman', 'Batman', 'IronMan']) // List array using default options
    ->lineBreak() // Append a linebreak
    ->text('Bye'); // Finally Append text;
```
```text
// Output
Raw Text

Here comes a list
1.Superman
2.Batman
3.IronMan
Bye
```

## Installation
`composer require cybersai/ussd-menu`
