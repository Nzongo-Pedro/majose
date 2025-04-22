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
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .header {
            text-align: center;
            color: #4CAF50;
        }

        .header h1 {
            font-size: 24px;
        }

        .content {
            font-size: 16px;
            color: #333333;
            line-height: 1.6;
        }

        .content p {
            margin-bottom: 20px;
        }

        .content .password {
            font-weight: bold;
            font-size: 18px;
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 4px;
            display: inline-block;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #999999;
        }

        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white !important;
            padding: 12px 20px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #45a049;
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

            <a href="{{ $url }}" class="button">Acessar minha conta</a>
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