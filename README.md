# UssdMenu

A bare Ussd Menu Object Oriented Builder for common use cases.

No Real Documentaion for now, but for now you can [read the tests](https://github.com/cybersai/ussd-menu/blob/master/tests/UssdMenuTest.php).
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
Here comes a list
1.Superman
2.Batman
3.IronMan
Bye
```

## Installation
`composer require cybersai/ussd-menu`
