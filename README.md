# QR-Code-Generator-on-Laravel
QR Code Generator Laravel | Create QR Code using Laravel

## Some Essentials Need to be done.

Install library named 'simple-qrcode'

    $ composer require simplesoftwareio/simple-qrcode 

Paste the following code in your 'providers/config/app.php' file

        'providers' => [
        ....
        SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class
        ],
        
        'aliases' => [
            ....
            'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class
        ]

