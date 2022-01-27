#language: pt
Funcionalidade: Validar quantidade de letras
    Como P.O
    Quero validar se existem mais de 2 caracteres na descrição

    Regras:
        - Descrição precisa ter pelo menos 2 letras

    Cenário: Apresentar erro de quantidade minima de caracteres
        Quando tentar passar na descricao "P"
        Então se validar vou receber a seguinte mensagem de erro "Descrição precisa ter pelo menos 2 letras"

    Cenário: Sucesso na validação
        Quando tentar passar na descricao "PHP"
        Então se validar vou receber a seguinte mensagem de sucesso "Validado com sucesso"
