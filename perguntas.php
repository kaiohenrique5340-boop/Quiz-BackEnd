<?php

$perguntas = [
  [
    "enunciado" => "Qual dos seguintes símbolos é usado para declarar uma variável em PHP?",
    "respostas" => array(
      "A" => "#",
      "B" => "$",
      "C" => "@",
      "D" => "%",
      "E" => "&"
    ),
    "gabarito" => "B"
  ],
  [
    "enunciado" => "Qual é a saída do seguinte código?\n\n$x = 5;\n$y = 3;\necho $x + $y;",
    "respostas" => array(
      "A" => "8",
      "B" => "$x + $y",
      "C" => "5 + 3",
      "D" => "53",
      "E" => "Erro"
    ),
    "gabarito" => "A"
  ],
  [
    "enunciado" => "Como você inicia um bloco de código PHP?",
    "respostas" => array(
      "A" => "<php>",
      "B" => "<?php",
      "C" => "<?",
      "D" => "<?php echo",
      "E" => "<!php>"
    ),
    "gabarito" => "B"
  ],
  [
    "enunciado" => "Qual dos seguintes tipos de dados não é um tipo de dado escalar em PHP?",
    "respostas" => array(
      "A" => "String",
      "B" => "Integer",
      "C" => "Boolean",
      "D" => "Array",
      "E" => "Float"
    ),
    "gabarito" => "D"
  ],
  [
    "enunciado" => "Qual operador é usado para concatenação de strings em PHP?",
    "respostas" => array(
      "A" => "+",
      "B" => "-",
      "C" => "*",
      "D" => ".",
      "E" => "/"
    ),
    "gabarito" => "D"
  ],
  [
    "enunciado" => "Qual palavra-chave é usada para definir uma constante em PHP?",
    "respostas" => array(
      "A" => "constant",
      "B" => "const",
      "C" => "define",
      "D" => "static",
      "E" => "final"
    ),
    "gabarito" => "C"
  ],
  [
    "enunciado" => "Qual é a forma correta de escrever um comentário de uma única linha em PHP?",
    "respostas" => array(
      "A" => "// Meu comentário",
      "B" => "",
      "C" => "/* Meu comentário */",
      "D" => "<' Meu comentário",
      "E" => "/* Meu comentário"
    ),
    "gabarito" => "A"
  ],
  [
    "enunciado" => "O que o operador '===' faz em PHP?",
    "respostas" => array(
      "A" => "Compara apenas o valor.",
      "B" => "Compara o valor e o tipo de dados.",
      "C" => "Compara se os objetos são idênticos.",
      "D" => "Atribui um valor.",
      "E" => "Nenhuma das anteriores."
    ),
    "gabarito" => "B"
  ],
  [
    "enunciado" => "Qual é o loop mais adequado para percorrer um array com chaves e valores?",
    "respostas" => array(
      "A" => "for",
      "B" => "while",
      "C" => "do...while",
      "D" => "foreach",
      "E" => "loop"
    ),
    "gabarito" => "D"
  ],
  [
    "enunciado" => "Qual dos seguintes é um operador de atribuição?",
    "respostas" => array(
      "A" => "==",
      "B" => "===",
      "C" => "=",
      "D" => "!",
      "E" => "<>"
    ),
    "gabarito" => "C"
  ],
  [
    "enunciado" => "Qual função é usada para exibir saídas em PHP?",
    "respostas" => array(
      "A" => "print",
      "B" => "write",
      "C" => "output",
      "D" => "show",
      "E" => "display"
    ),
    "gabarito" => "A"
  ],
  [
    "enunciado" => "Se você tiver o seguinte código: \n\n$x = 10;\nif ($x > 5) {\n  echo 'Olá';\n} else {\n  echo 'Tchau';\n}",
    "respostas" => array(
      "A" => "Olá",
      "B" => "Tchau",
      "C" => "OláTchau",
      "D" => "Erro",
      "E" => "Nenhuma"
    ),
    "gabarito" => "A"
  ],
  [
    "enunciado" => "Qual é a saída do seguinte código?\n\n$x = 5;\necho ++$x;",
    "respostas" => array(
      "A" => "5",
      "B" => "6",
      "C" => "4",
      "D" => "7",
      "E" => "Erro"
    ),
    "gabarito" => "B"
  ],
  [
    "enunciado" => "Como você define uma função em PHP?",
    "respostas" => array(
      "A" => "function nome_da_funcao()",
      "B" => "define function nome_da_funcao()",
      "C" => "function = nome_da_funcao()",
      "D" => "nome_da_funcao()",
      "E" => "def nome_da_funcao():"
    ),
    "gabarito" => "A"
  ],
  [
    "enunciado" => "Qual é a forma correta de incluir um arquivo em PHP?",
    "respostas" => array(
      "A" => "include('arquivo.php');",
      "B" => "import 'arquivo.php';",
      "C" => "load 'arquivo.php';",
      "D" => "require_once 'arquivo.php';",
      "E" => "A e D estão corretas."
    ),
    "gabarito" => "E"
  ],
  [
    "enunciado" => "Qual dos seguintes operadores lógicos representa 'OU'?",
    "respostas" => array(
      "A" => "&&",
      "B" => "||",
      "C" => "!",
      "D" => "<>",
      "E" => "&"
    ),
    "gabarito" => "B"
  ],
  [
    "enunciado" => "O que a função `count()` faz em PHP?",
    "respostas" => array(
      "A" => "Conta o número de caracteres em uma string.",
      "B" => "Conta o número de elementos em um array.",
      "C" => "Conta de 1 a 10.",
      "D" => "Conta o número de palavras em uma string.",
      "E" => "Nenhuma das anteriores."
    ),
    "gabarito" => "B"
  ],
  [
    "enunciado" => "Qual a saída do seguinte código?\n\n$a = 'Olá ';\n$a .= 'Mundo';\necho $a;",
    "respostas" => array(
      "A" => "Olá",
      "B" => "Mundo",
      "C" => "Olá Mundo",
      "D" => "Olá + Mundo",
      "E" => "Erro"
    ),
    "gabarito" => "C"
  ],
  [
    "enunciado" => "Qual das seguintes estruturas de controle de fluxo é usada para executar um bloco de código repetidamente enquanto uma condição for verdadeira?",
    "respostas" => array(
      "A" => "if",
      "B" => "else",
      "C" => "while",
      "D" => "switch",
      "E" => "function"
    ),
    "gabarito" => "C"
  ],
  [
    "enunciado" => "Qual dos seguintes é um tipo de dado numérico?",
    "respostas" => array(
      "A" => "Boolean",
      "B" => "String",
      "C" => "Float",
      "D" => "Object",
      "E" => "Array"
    ),
    "gabarito" => "C"
  ]
];

?>