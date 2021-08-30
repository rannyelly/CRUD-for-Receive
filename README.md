# CRUD em PHP - Objeto Orientado
Crud em MVC e PHP puro

### Objetivo: 

>Desenvolver um sistema CRUD simples em PHP (sem frameworks) e MySQL para o cadastro de devedores e dívidas.

### Detalhes:

>A base de dados dos devedores e dívidas contém as seguintes informações:

1. Nome
2. CPF/CNPJ
3. Data de Nascimento
4. Descrição do título
5. Valor
6. Data de vencimento
7. Updated

### Regras: 

>As regras abaixo foram seguidas ao cadastrar/editar um devedor:

1. Não devem haver devedores com o mesmo CPF/CNPJ
2. O valor das dívidas não podem ser zerados nem negativos
3. Nas dívidas, o preço deve ser formatado no padrão brasileiro (R$ 1.050,10).


### Detalhes sobre o programa:

1.  init.php são os arquivos de configurações do sistema de cobrança
2.  diretório "view" é onde fica todas as telas do sistema
3.  diretório "controller" é onde fica fica as funcionalidades do sistema que interragem com o banco de dados
4.  diretório "model" é onde fica os arquivos de conexão com o banco de dados

No diretório "view" existem 3 páginas principais: editar.php, cadastro.php e index.php. a página head e menu são os escopos do HTML e Menu do sistemas respectivamente.

No diretório "controller" estão os arquivos PHP que executam as funcionalidades do sistema.

No diretório "model" estão os arquivos de conexão com o Banco de Dados

O arquivo script.sql é o scrip em sql que cria o banco e a tabela.
