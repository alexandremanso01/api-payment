# Api de Pagamento do Mercado Pago


## Pré-requisitos



PHP >= 7.4

Mysql >= 5.4


## Clone o Projeto no diretorio raiz do servidor de Hospedagem


<pre class="line-numbers language-php" tabindex="0">          <code id="code_1" class="language-php">
gh repo clone alexandremanso01/api-payment</span></code></pre>



Siga os seguintes passos antes de começar a sua integração:


### 1. Acesse uma conta

Para começar a integração, é necessário ter uma conta do Mercado Pago ou do Mercado Livre.

Você pode [entrar](https://www.mercadolivre.com/jms/mlb/lgz/msl/login/H4sIAAAAAAAEAzWNQU7EMBAE_9Jnk0hIe8BHPmJNnHFisDPWeIIXrfbvKAKOre6qfqDIlo9g343hwfdWcswGh1bIkmgNeYVHbXDo2fgvluWakFJlY-3wj0u08frOSfRSJSqd4UCn7SEVGfC_X3DIPfDdWA8qYfDylflq_4lN4LGbte7neYwxVdZIqzTaZIpSp0Vn-jhXmms-dnqJchiF19vbDU-HRN2CKcVPeNOTnz_j_vCy4wAAAA/user) em uma conta já existente ou criar uma nova conta do zero.


### 2. Instale o SDK do Mercado Pago

Instale o SDK oficial do Mercado Pago para simplificar a integração com as nossas APIs.

Para instalar o SDK, você deve executar o seguinte código na linha de comandos do seu terminal usando o [Composer](https://getcomposer.org/download):

<pre class="line-numbers language-php" tabindex="0">          <code id="code_1" class="language-php">
php composer<span class="token operator">.</span>phar <span class="token keyword">require</span> <span class="token string double-quoted-string">"mercadopago/dx-php"</span></code></pre>



### 3. Obtenha suas credenciais

As credenciais são chaves únicas que fornecemos para que você possa configurar as suas integrações.

Para encontrá-las, veja a [seção de Credenciais](https://www.mercadopago.com.br/developers/pt/docs/checkout-pro/additional-content/credentials) no seu [Dashboard](https://www.mercadopago.com.br/developers/pt/docs/checkout-pro/additional-content/dashboard/introduction)👍


### 4. Configure o arquivo .env

Renomeie o arquivo .env.example para .env e configure as variaveis de acordo com as credenciais do servidor de banco de dados e as credenciais criadas no painel do Mercado Pago



# Webhooks - Atualizações de status de pagamento

O Webhooks (também conhecido como retorno de chamada web) é um método simples que facilita com que um app ou sistema forneça informações em tempo real sempre que um evento acontece, ou seja, é um modo de receber dados entre dois sistemas de forma passiva através de um `HTTP POST`.

Configure Webhooks para que ocorra as notificações de atualização de status de pagamento no sistema [Dashboard](https://www.mercadopago.com.br/developers/pt/docs/checkout-pro/additional-content/dashboard/introduction).
