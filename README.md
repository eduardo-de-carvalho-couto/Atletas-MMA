# Bem vindo(a) ao projeto Atletas MMA

Neste projeto é feito a listagem de Categorias de peso, Lutadores dessas respectivas categorias e suas lutas.

## Habilidades

Nesse projeto, utilizei as seguintes funcionalidades do Laravel:
- Relacionamentos One To Many
- Relacionamentos Many To Many
- Criação de form request para validação
- Transações
- Service Container para injeção de dependências
- Laravel breeze
- Autenticação

### Sobre os relacionamentos

Entre Categoria e Lutador, é feito um relacionamento One To Many. Já entre Lutador e Luta, para que o registro de uma luta seja feito simultaneamente para os dois lutadores, é feito Many to Many.

## Usuário visitante

![ezgif com-gif-maker](https://user-images.githubusercontent.com/101133249/187682568-b233b485-0f05-4d6e-8e9c-486660773014.gif)

## Usuário autenticado

![ezgif com-gif-maker (1)](https://user-images.githubusercontent.com/101133249/187684087-18950048-d22f-41db-a0ef-9ba576d5973d.gif)

## Para rodar o projeto, utilize o laravel sail:

1. Clone o repositório
```
git clone https://github.com/eduardo-de-carvalho-couto/Atletas-MMA.git
```
2. Dê require do laravel sail
```
composer require laravel/sail --dev
```
3. Instale o laravel sail
```
php artisan sail:install
```
4. Suba o ambiente com o laravel sail
```.
/vendor/bin/sail up
```
Qualquer dúvida, consulte a documentação do laravel:
https://laravel.com/docs/9.x/sail#installing-sail-into-existing-applications


