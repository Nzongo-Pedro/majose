<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à nossa plataforma!</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #f7f7f7;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .header {
            text-align: center;
            background: #e23594;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            color: white;
            margin-bottom: 20px;

        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            font-weight: normal;
        }

        .content {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #000;
        }

        .content p {
            margin-bottom: 20px;
            line-height: 1.6;
            font-size: 16px;
            color: #333333;
        }

        .content .password {
            font-weight: bold;
            color: #e23594;
            background-color: #f0f0f0;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #777777;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }

        .footer a {
            color: #e23594;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .button {
            display: inline-block;
            background-color: #e23594;
            color: #fff !important;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #d0248a;

        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>Bem-vindo, {{ $user->name }}!</h1>
        </div>

        <div class="content">
            <p>Estamos felizes em ter você conosco! Sua conta foi criada com sucesso e você pode acessar nosso sistema a
                qualquer momento.</p>

            <p><strong>Informações de acesso:</strong></p>
            <p><strong>E-mail:</strong> {{ $user->email }}</p>
            <p><strong>Senha:</strong> <span class="password">{{ $password }}</span></p>

            <p>Por motivos de segurança, recomendamos que você altere sua senha após o primeiro acesso.</p>

            <a href="{{ route('home') }}" class="button">Acessar minha conta</a>
            <p>Se você tiver alguma dúvida ou precisar de assistência, não hesite em entrar em contato conosco.</p>
            <p>Agradecemos por escolher nossa plataforma!</p>
            <p>Atenciosamente,</p>
            <p>A equipe da nossa plataforma</p>
        </div>

        <div class="footer">
            <p>Se você não se registrou, ignore este e-mail.</p>
            <p>&copy; {{ date('Y') }} Nossa Plataforma | Todos os direitos reservados.</p>
        </div>
    </div>

</body>

</html>