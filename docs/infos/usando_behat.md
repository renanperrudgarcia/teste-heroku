# Biblioteca para auxiliar no BDD com o PHP

Sempre que precisar incluir novas funções dos cenários, basta rodar o :
- composer behat
> Ele irá incluir nos Contexts os novos cenários a serem testados.
> Ele vai pergnutar em qual Context você quer incluir.

Para rodar e testar:
- composer bdd

Para adicionar novos Contexts, deve incluir no arquivo de configuração localizado na raiz do projeto:
> behat.yml

