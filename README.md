# Projeto-CRUD-php
 CRUD significa Create (Criar), Read (Ler), Update (Atualizar) e Delete (Deletar) e é uma operação básica em muitas aplicações web. 
 Aqui vai uma explicação de como configurar um CRUD em sua máquina.
 ![xamppTela](https://user-images.githubusercontent.com/98466287/228083368-cfb6fe47-9ac6-4880-8902-aefed40fd73d.png)
Para começar, você precisará instalar um servidor web local em seu computador. Uma opção é o XAMPP, que inclui o servidor Apache, o PHP e o MySQL. Baixe e instale o XAMPP e inicie o servidor Apache e o MySQL.
![xamppTela2](https://user-images.githubusercontent.com/98466287/228083707-a6949fcd-99be-4952-9d9f-3bb092de3d63.png)
Clique em "Start" no Apache e no MySql para poder ativar eles para o seu CRUD.


![telaMySql](https://user-images.githubusercontent.com/98466287/228084668-456fc1e2-7253-4acd-be72-c2c1389f2cb9.png)
Em seguida, você irá precisar instalar o sistema de gerenciamento de banco de dados (SGBD) para poder criar sua base da dados para o seu CRUD.
Você pode instalar clicando no canto inferior direito em "Download" na mesma linha de "Windows (x86, 64-bit), ZIP Archive".

![telaMySql2](https://user-images.githubusercontent.com/98466287/228085190-7b5636c1-467a-4ccf-91da-af2dd049245f.png)
Com o banco de dados aberto, você irá criar a sua base da dados;
Criar as tabelas que irá usar para poder vincular com a sua linguagem de programação.

![exemplodatabase](https://user-images.githubusercontent.com/98466287/228085669-3832c99b-8a96-426c-adf3-daeb73135f22.png)
Acima está um exemplo de base de dados que você pode criar para o seu projeto CRUD.

![visualstudioEx](https://user-images.githubusercontent.com/98466287/228086052-086d45cb-4120-4594-b7fe-02d6013c5017.png)
Você também irá precisar instalar o Visual Studio Code, para poder escrever os seus códigos para ser usado no CRUD.
Acima você pode instalar o Visual Studio Code conforme a máquina que usar.

Logo após todos esses passos, você irá abrir o seu Visual Studio Code e criar as devidas pastas e arquivos para o seu CRUD;
Como por exemplo, "CREATE.PHP", "READ.PHP", "UPDATE.PHP" e "DELETE.PHP".

No arquivo CREATE.PHP, você criará um formulário para inserir novos dados na tabela do banco de dados. No arquivo READ.PHP, você exibirá os dados da tabela em uma tabela HTML. No arquivo UPDATE.PHP, você permitirá a edição dos dados da tabela. No arquivo DELETE.PHP, você permitirá que os dados da tabela sejam excluídos.

Em cada arquivo PHP, você precisará se conectar ao banco de dados MySQL. Isso pode ser feito usando a função mysqli_connect(). Você precisará passar as informações de login para a função mysqli_connect() para se conectar ao banco de dados.

![codigoexemplo](https://user-images.githubusercontent.com/98466287/228087238-d32d0afa-ab9a-4a55-8ef7-2f781684ceaa.png)
Acima está um exemplo de como ficaria a sua conexão com o banco de dados.

Na linha 3, onde está a variável "$conexao", o que está entre aspas você irá colocar respectivamente como, IP, USUARIO e sua SENHA.


Agora que você está conectado ao banco de dados, pode implementar as operações CRUD em cada arquivo PHP. Para criar dados, você usará a função mysqli_query() para inserir novos dados na tabela. Para ler dados, você usará a função mysqli_query() para selecionar os dados da tabela e, em seguida, exibirá os dados em uma tabela HTML. Para atualizar dados, você usará a função mysqli_query() para atualizar os dados da tabela. Para excluir dados, você usará a função mysqli_query() para excluir os dados da tabela.

![exemplodequeryphp](https://user-images.githubusercontent.com/98466287/228087818-7a6dd1fc-16d4-4acb-bb30-85ff7c2ffe3b.png)
Na imagem acima está um exemplo de query para deletar os dados que você desejar do seu banco de dados, usando o arquivo "DELETAR.PHP".

Agora que a aplicação está completa, você pode testá-la para garantir que ela esteja funcionando corretamente. Abra cada arquivo PHP em seu navegador e teste as operações CRUD para garantir que elas estejam funcionando corretamente.

![crudcompleto](https://user-images.githubusercontent.com/98466287/228088183-5a9a1749-bf10-4d13-8427-7ed66596137a.png)
Esta imagem acima é um exemplo de um CRUD completo.


