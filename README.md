# Geop Laravel Components
### Tools
 - Tailwind CSS
 - Alpine JS
 - Livewire
 - Laravel
 
### Model with Timestamps

```php
$products = Product::whereDate('created_at', '2018-01-31')->get(); 
$products = Product::whereMonth('created_at', '12')->get(); 
$products = Product::whereDay('created_at', '31')->get(); 
$products = Product::whereYear('created_at', date('Y'))->get(); 
$products = Product::whereTime('created_at', '=', '14:13:58')->get();
```

> This will be the library of my components

<img src="https://images.unsplash.com/photo-1589409514187-c21d14df0d04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
