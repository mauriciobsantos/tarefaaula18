

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>
</head>
<body>
    <ol>
        <li>
            <p>1. Utilizando um for, imprimir os números de 1 a 100</p>
            <div>
                <?php 
                    for($i=1 ; $i<=100; $i++){
                        echo($i.',');
                    }
                ?>
            </div>
        </li>
        <li>
            <p>2. Modificar o exercício anterior para que, em vez de parar no número 100, pare
em um número gerado aleatoriamente entre 0 e 100.</p>
                    <div>
                        <?php 
                            for($i=1; $i<= mt_rand(0, 100); $i++){
                                echo($i.',');
                            }
                        ?>
                    </div>
        </li>    

        <li>
        <p>3. Mostrar a tabela de multiplicação do 2 utilizando um for</p>

        <div>
            <table>
                <?php  
                    for($i=1 ; $i<=10 ; $i++){
                        echo('<tr>');
                        echo(' <td>');
                        echo(2 .' x ' . $i .' = '. (2*$i) );
                        echo('</td>');
                        echo('</tr>');

                    }
                ?>
            </table>
        </div>
        </li>  

        <li>
            <p>4. Utilizando um while, fazer um programa que lance uma moeda (escolhendo
um número aleatório que pode ser 0 ou 1) até tirar 5 vezes cara (o número 1).
Ao terminar, imprimir o número de lançamentos da moeda até tirar 5 vezes
cara</p>
            <div>
                    <?php 
                    $contagem = 0;
                    
                    $n_arremessos = 0;
                        while ($contagem !=5){

                            $result = mt_rand(0,1);
                            $n_arremessos++;

                            if($result == 1){
                                $contagem++;
                            } else{
                                $contagem = 0;
                            }

                          }
                          echo("lançou a moeda $n_arremessos vezes até conseguir 5 caras ");

                    ?>
            </div>
        </li> 
        <li>
            <p>5. Utilizando um do/while, realizar um programa que lance a moeda até tirar
cara (o número 1). No final do programa, imprimir quantos lançamentos da
moeda forem necessários.</p>
            <div>
                    <?php 
                    do{
                        $result = mt_rand(0,1);
                        $n_arremessos++;
                    }                     
                    while($result !=1);
                                                     
                    
                        echo("deu cara depois de $n_arremessos vezes");
                    ?>
            </div>
        </li>  

        <li>
            <p>Definir um array com 5 strings que sejam nomes. Percorrer esse array para
imprimir todos os nomes na tela.
a. Resolver este problema com um for.
b. Resolver este problema com while.
c. Resolver este problema com um do/while.
        </p>

        <div>
            <?php
            $nomes = [
                'Sergio',
                'Thomaz',
                'Fernando',
                'Ana Livia',
                'Marcuso'
            ];
            for($i = 0 ; $i< count($nomes) ; $i++){
                echo($nomes[$i]. '<br');

            }

            echo('--<br>');
            $i = 0;
            while($i < count($nomes)){
                echo($nomes[$i]. '<br');
                $i++;
            }

                echo('-- IMprimindo ao contrario <br>');
                $i= count ($nomes) - 1;
            do {
                echo($nomes[$i]. '<br>');
                $i--;
                
            }while($i >= 0);
            echo($i);
            ?>
        </div>
        </li>

        <li>
        
        7. Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array
para imprimir todos os números. A execução deve terminar se algum dos
números encontrados for 5 (a mensagem impressa deve ser “Encontramos um
5!”).
a. Resolver este problema com um for.
b. Resolver este problema com um while.
c. Resolver este problema com um do/while.

        <div>
        <?php 
        $numeros = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9'
    ];            
        for($i = 0 ; $i< count($numeros) ; $i++){

        }
        echo ('--<br>');

        $i=0; 
        while($i < count($numeros) - 1){
            $i++;
        }
        echo($numeros[$i]. '<br>');
        ?>
        
        </div>
        </li> 

        <li>
        <p>Utilizando a função “Range”(http://php.net/manual/en/function.range.php),
criar um intervalo de letras (de a até o), imprimir um valor que diga “Na posição
[index], está o valor [value]”, em que [value] será substituído por cada valor do
array e [index] representa o índice.
</p>

        <pre>
        <?php 
        $letras = range('a','o');
        print_r($letras);
        ?>
        </pre>
        <div>
        <?php  
        foreach($letras as $posicao =>$letras){
            echo "Na posição $posicao, está o valor $letras<br> " ;

        }

        ?>
        </div>
        </li>  
    </ol>
</body>
</html>