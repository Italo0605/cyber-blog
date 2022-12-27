<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% block title %}{% endblock %}</title>
    <link rel="shortcut icon" href="{{BASE}}assets/image/logo/favicon.ico" type="image/x-icon">
    <link rel="preload stylesheet" href="{{BASE}}assets/css/style.css" as="style">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="preload stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" as="style">
    <!-- sessão extra para o footer-->
    {% block header %}{% endblock %}

</head>
<body>
    <!-- inclui o cabeçalho da página -->
    {% include('/partials/header.twig.php') %} 

    <!-- Bloco de corpo -->
    {% block body %}{% endblock %}

    <!--  -inclui o rodapé da pagina -->
    {% include('/partials/footer.twig.php') %}

    <input type="hidden" id="txtBase" value ="{{ BASE }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <script src="{{BASE}}public/assets/js/script.js"></script>
    <!-- sessão extra para o footer-->
    {% block footer %}{% endblock %}
</body>
</html>