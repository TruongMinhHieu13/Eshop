<?php

namespace App\Http\Controllers;


class BaseController extends Controller
{
    public function sendResponse($result, $message, $view)
    { ?>

    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin 2 - Dashboard</title>


        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    </head>

    <body class="font-sans antialiased" id="page-top">
    </body>

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script>Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )</script>
    </html>

<?php  
        return redirect('/dashboard/san-pham');
    }

    public function sendError($error, $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        return response()->json($response, $code);
    }
}
