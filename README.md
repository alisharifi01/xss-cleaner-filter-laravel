Laravel XSS FILTER
===========

This package add ana dditional filter to prevent xss attack.

### Installation

Require the package in `composer.json`:

```json
"ali-sharifi/xss-cleaner-filter": "dev-master"
```

Then in your project root directory run : 

```php
	composer update
```
Then, include the following in the array on service providers in `config/app.php`:

```php
"ali-sharifi/xss-cleaner-filter": "dev-master" ,
```

### Usage

You can clean your input HTML code from Xss attacks using xss filter : 

```php
<?php

Route::post('/',array('before' => 'xss',function(){
		//
}));

