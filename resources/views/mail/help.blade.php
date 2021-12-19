<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .container {
            margin-left: 0.625rem;
            margin-right: 0.625rem;
        }

        .content {
            max-width: 640px;
            margin-left: auto;
            margin-right: auto;
        }

        .gap {
            margin-top: 0.625rem;
            margin-bottom: 0.625rem;
        }

        .logo {
            margin-left: auto;
            margin-right: auto;
        }

        .greet {
            font-size: 1.25rem;
            line-height: 1.75;
            color: #13B0BE;
        }

        .text-secondary-color {
            color: #1E335F;
        }

        .text-primary-color {
            color: #13B0BE;
        }

        .btn {
            display: inline-flex;
            justify-content: center;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
            border-width: 1px;
            border-color: transparent;
            font-size: 0.875rem;
            line-height: 1.25rem;
            color: white;
            background-color: #13B0BE;
            border-radius: 0.375rem;
            cursor: pointer;
        }

        .footer {
            border-top: 1px;
            border-color: lightgrey;
        }
    </style>
</head>

<body>
    <section class="container mx-2.5 md:mx-24">
        <div class="content max-w-screen-sm mx-auto flex flex-col gap-4">
            <div>
                <img src="https://lh3.googleusercontent.com/pw/ACtC-3fONPubYXUIrNLEWV7N1XBP_sDwrI3RtuphY5kTV6z-Gl1Vb49bpV8QHtnDwMLjrtaZGlfiSb6aMx6mA19A7jEoKvuhnRTQrFOogEbYHHRK67Q01aobPVcZKEiH6DWnn-EhsT8iS7nnYmD6hgK9eSMN=w339-h114-no?authuser=0"
                    alt="Logo-kynesia-foundation">
            </div>
            <div class="gap text-secondary-color">
                <p>Name Pengirim : {{$name}}</p>
                <p>Email Pengirim : {{$sender}}</p>
                <p>Content : {{$content}}</p>
            </div>
        </div>
    </section>
</body>

</html>