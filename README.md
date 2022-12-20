# Cyber-Blog
## Projeto de estudo de php mvc

Para a utilização desse projeto se faz necessario algumas tecnologias, dentre elas:

* PHP 7.2^
* MariaDB ou MySQL
* Composer
* Git

O projeto está em desenvolvimento e qualquer alteração pode acarretar em erros, aguarde a versão final.

#Configuração

O arquivo de configuração fica na pasta **app\config**, contendo o aquivo **config.php** e uma subpasta chamada de **env** contendo o 
aquivo final de configuração para ambiente local, qa e produção.

## config.php

Faz uma validação através de uma variavel para verificar qual aquivo será utilizado.

Mude o valor da variavel **$prod** para true se quiser carregar o aquivo de configuração de prod, mas caso queira usar o aquivo de configurações locais, basta manter os valores da variaveis para false