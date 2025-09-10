# Calculadora de IMC (Atividade de Gerência de Configuração)

Este repositório contém uma aplicação simples em PHP para calcular o IMC (Índice de Massa Corporal). O projeto foi desenvolvido como atividade da disciplina de Gerência de Configuração do curso de Engenharia de Software.

A aplicação segue uma organização mínima em camadas (Controller, Model e View) e utiliza o autoload do Composer (PSR-4).

## Funcionalidades
- Formulário para inserir peso (kg) e altura (m).
- Cálculo automático do IMC.
- Exibição da classificação do IMC (Abaixo do peso, Peso adequado, Sobrepeso, Obesidades I–III).
- Estilização básica por CSS com classes específicas por faixa de IMC.

## Estrutura do Projeto
```
.
├── composer.json
├── composer.lock
├── src
│   ├── App
│   │   ├── Controllers
│   │   │   └── ImcController.php
│   │   ├── Models
│   │   │   └── Imc.php
│   │   └── Views
│   │       ├── css
│   │       │   └── style.css
│   │       └── imc-form.php
│   └── index.php
└── vendor/ (gerado pelo Composer)
```

- Ponto de entrada: `src/index.php`
- Namespace base: `TiagoPopOs\Php\App`

## Requisitos
- PHP 8.1+ (recomendado)
- Composer (para instalar dependências e autoload)

## Como executar o projeto
Você pode rodar com o servidor embutido do PHP, apontando o diretório `src` como raiz (document root):

1) Clonar o repositório
```
git clone https://github.com/TiagoLemosNeitzke/atividade_07.git
cd atividade_07
```

2) Instalar o autoload do Composer
```
composer install
```

3) Subir o servidor embutido do PHP usando `src` como document root
```
php -S localhost:8000 -t src
```

4) Acessar no navegador
Abra: http://localhost:8000/index.php

Pronto! Preencha o formulário com seu peso (kg) e altura (m) e visualize o resultado e a classificação do seu IMC.

## Observações
- O formulário envia uma requisição POST para `index.php`, que instancia o `ImcController`, realiza o cálculo e renderiza a view `imc-form.php` com os dados calculados.
- As classes CSS por faixa de IMC são retornadas pelo método `getCssClass` do model `Imc` e aplicadas na view para estilização condicional.

## Licença
Este projeto é para fins acadêmicos no contexto da disciplina de Gerência de Configuração. A licença pode ser ajustada conforme necessidade futura.
