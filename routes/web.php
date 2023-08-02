<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 
    '   <html>
            <head>
                <style> 
                    body{
                        font: normal 30pt Arial;
                        background: #cccccc
                    }
                    
                    section{
                        background: white;
                        width: 500px;
                        margin: auto;
                        margin-top: 350px;
                        text-align: center;
                        border-radius: 10px;
                    }
                </style>
            </head>
            <body>
                <section>
                    <div id="txt" onmouseover="trocar()" onmouseout="padrao()"> Passe o mouse!
                    </div>
                </section>

                <script>
                    function trocar(){
                        var txt = document.getElementById("txt")
                        txt.innerHTML = "Olá, mundo!"
                    }
                    function padrao(){
                        txt.innerHTML = "Passe o mouse!"
                    }
                </script>
            </body>
        </html>';
}); 
