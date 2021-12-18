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
            <div class="greet gap">
                <h3>
                    Halo,
                    <span>
                        Muhammad Fahmi Alwan
                    </span>
                </h3>
            </div>
            <div class="gap text-secondary-color">
                <p>Kami sudah menerima permohonan pembuatan akun kamu,</p>
                <p>Harap konfirmasi akun kamu dengan menekan tombol dibawah ini</p>
            </div>
            <div class="btn gap">
                <a href="{{route('verifyAccount',$token)}}">
                    <button type="button"
                        class="btn inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-color focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-color">
                        Verifikasi Akun
                    </button>
                </a>
            </div>
            <div class="gap">
                <p class="text-secondary-color">Atau copy/paste tautan dibawah berikut ke browser kamu: {{$token}}</p>
                <a class="text-blue-500 underline"
                    href="{{route('verifyAccount',$token)}}">{{route('verifyAccount',$token)}}</a>
            </div>
            <div class="gap text-secondary-color">
                <p>
                    Email ini hanya untuk tujuan verifikasi, jika anda memiliki pertanyaan silahkan menuju
                    <span>
                        <a href="/bantuan">Halaman Bantuan</a>
                    </span>
                </p>
            </div>
            <div class="gap">
                <p class="text-secondary-color">Terima kasih!</p>
                <p class="text-primary-color">Tim Kynesia Foundation</p>
            </div>
            <div class="footer gap text-secondary-color">
                <p>Yayasan Kynesia Untuk Indonesia</p>
                <p>Jalan Situ Batu C-18 Bandung 40265</p>
                <p class="text-primary-color" href="">tim@kynesia.id</p>
                <p>+62 811 221 2692</p>
            </div>
        </div>
    </section>
</body>

</html>