<!DOCTYPE html> 
<html lang="pt-br"> 
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icone/pdf.ico">    
    <title>Documento PDF</title>
    <!--css-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!--icones-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <meta name="description" content="Gera PDF online de forma gratuita.">
    <meta name="keywords" content="Gerar PDF, pdf">
</head>
<body>
    <main>
        <div class="conteudo">
            <h1>Gerar Documento PDF <i class="reload bi bi-arrow-clockwise" onclick="window.location.reload()"></i></h1>

            <p>O nome que você escolher para o seu arquivo, será salvo no diretório (pasta) Download em formato <b>.pdf</b></p>

            <form action="gerar-pdf.php" method="POST">
                <label for="assunto">Nome para o arquivo:</label>
                <input type="text" name="titulo" require><br>

                <label for="ipdf">Conteúdo:</label>
                <textarea id="ipdf" name="ipdf" placeholder="Digite seu texto aqui" require></textarea><br>

                <label>Escolha a formatação:</label>
                <label>
                    <input type="radio" name="formato" value="html" checked> HTML (Precisa colar seu texto com os elementos HTML)
                </label> 

                <label>
                    <input type="radio" name="formato" value="nl2br"> nl2br (O resultado será igual ao digitado ou colado)
                </label><br>

                <input type="submit" value="Gerar PDF" name="enviarDocumento">
                <input type="button" value="Limpar Campos" onclick="limparCampos()">
            </form>

            <section>
                <article>
                    <h2>Modelos para te orientar, e testar as diferenças.</h2>

                    <p>Logo abaixo encontrará os dois modelos do que foi explicado acima entre parênteses.</p>
                    
                    <p>Copie clicando no icone <i class="fa-regular fa-copy"></i>, volte, cole, e depois selecione a opção desejada para clicar em 'Gerar PDF'.</p>
                </article>    

                <div class="exemploLeft">
                    <h3>Modelo em HTML</h3>
                    
                    <div class="codigo c1">
                        <button class="copyTexto" onclick="copyC1()"><i class="fa-regular fa-copy"></i></button>
                        &lt;!DOCTYPE html&gt;<br>
                        &lt;html lang="pt-br"&gt;<br>
                        &lt;head&gt;<br>
                        &nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;<br>
                        &nbsp;&nbsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br>
                        &nbsp;&nbsp;&lt;title&gt;Documento&lt;/title&gt;<br>
                        &lt;/head&gt;<br>
                        &lt;body&gt;<br>
                        &nbsp;&nbsp;&lt;h1&gt;Vou gerar PDF&lt;/h1&gt;<br><br>
                            
                        &nbsp;&nbsp;&lt;p&gt;“Mas o que se gloriar, glorie-se nisto: em entender, e em me conhecer, que eu sou o Senhor, que faço benevolência, juízo e justiça na terra; porque destas coisas me agrado”, diz o Senhor. Jeremias 9.24&lt;/p&gt;<br><br>
                        &lt;/body&gt;<br>
                        &lt;/html&gt;
                    </div>
                </div>

                <div class="exemploRight">
                    <h3>Modelo para usar a opção <b>nl2br</b></h3>

                    <p>Note as quebras de linhas no próximo exemplo. Caso não queira espaçameto entre os parágrafos é só não pular a linha.</p>

                    <p>Não esqueça de selecionar a opção <b>nl2br</b> no formulário acima, antes de você gerar o PDF.</p>
                    
                    <div class="codigo c2">
                        <button class="copyTexto" onclick="copyC2()"><i class="fa-regular fa-copy"></i></button>
                        <h2>PHP | Função nl2br()</h2>

                        <p>O nl2br() é uma função embutida no PHP e é usado para inserir tags de quebra de HTML no lugar de todas as novas linhas em uma string. Em editores de texto normais, a nova linha geralmente é denotada por qualquer um dos seguintes.</p>

                            \ n \ r<br>
                            \ r \ n<br>
                            \ n<br>
                            \ r

                        <p>Onde, \ n sugere que o cursor seja movido para a próxima linha e \ r diz ao cursor para ser movido para o início da linha. Esta função pega strings que podem conter novas linhas e retorna uma string alterada inserindo a tag br antes de todas as novas sequências de caracteres de linha. Por ser uma linguagem de marcação, o HTML não entende a seqüência de caracteres da nova linha, é aqui que a Função encontra sua utilização.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        function limparCampos() {
            document.querySelector('form').reset();
        }
        function limparCampos() {
            document.querySelector('form').reset();
        }
    </script>

    <script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>