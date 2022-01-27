#language: pt
Funcionalidade: Validar a soma de 2 números
    Como P.O
    Quero validar se a soma dos números estão corretas

    Regras:
        - A soma precisa sempre bater com alguns cenários especificos

    Cenário: Apresentar erro de números negativos
        Quando tentar passar os números "2" "-3"
        Então se eu validar será negativo e retornará a mensagem de erro "Não pode ter números negativos"
