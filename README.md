

## Laravel Project

In this project, we will use simplesoftwareio/simple-qrcode package to generate simple, text, numeric and image qr code in laravel 8 app.

## 1-Installing qrcode Generator Package

Code :
```
composer require simplesoftwareio/simple-qrcode
```
## 2-Configure qrcode Generator Package

Here In this step,we will configure the simplesoftwareio/simple-qrcode package in laravel 8 app. So, Open the providers/config/app.php file and register the provider and aliases for milon/qrcode.

Code :
```
'providers' => [
    ....
    SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class
],
  
'aliases' => [
    ....
    'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class
]
```

## 3-Create Routes
In this step,we will add the qr code generation routes in web.php file, which is located inside routes directory:
Code :
```
use App\Http\Controllers\QrCodeGeneratorController;
Route::get('/qr-code', [QrCodeGeneratorController::class, 'index']);
```
## 4-Creating QrCode Controller


Now this step,we will create generate QrCode controller file by using the following command.
Code :
```
php artisan make:controller QrCodeGeneratorController
```
After navigate to app/http/controllers and open QrCodeGeneratorController.php file. And add the simple QrCode generation code into it.

Code :
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QrCodeGeneratorController extends Controller
{
    public function index()
    {
      return view('qrCode');
    }
}
```

## 6-Create Blade View

In this last step , create qr-generator blade view file inside resources/views directory. And then add the following code into it.

Code :
```
<!DOCTYPE html>
<html>
<head>
  <title>Laravel 8 Qr Code Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row text-center mt-5">
      <div class="col-md-6">
        <h4>Simple Qr Code</h4>
        {!! QrCode::size(250)->generate('Nicesnippets.com') !!}
      </div>
      <div class="col-md-6">
        <h4>Color Qr Code</h4>
        {!! QrCode::size(250)->backgroundColor(255,55,0)->generate('Nicesnippets.com') !!}
      </div>
    </div> 
  </div> 
</body>
</html>
```
Now we are ready to run our custom validation rules example so run bellow command for quick run:

Code :
```
php artisan serve
```
Now you can open bellow URL on your browser:

Code :
```
http://localhost:8000/qr-code
```
