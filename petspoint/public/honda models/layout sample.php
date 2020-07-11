<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			.footer{ 
			background-color:green;
			text-align:center;
			color:white;
			}
			.lo a {color:white;
			padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
				}
        </style>
    </head>
    <body>
		
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
					<img src="http://trace.pk/uploads/listing_assets/5897af565077c.jpg">
                </div>

                <div class="links">
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact us</a>
                    <a href="#">Depatrtments</a>
                </div>
            </div>
        </div>
		@yield('content');
		
		<div class="footer">
		<h2>FOOTER</h2>
			<div class="lo">
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact us</a>
                    <a href="#">Products</a>
             </div>		
        </div>
		</body>
		</html>