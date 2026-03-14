# Docker: Utilização Prática no Cenário de Microsserviços

## Descrição
Projeto desenvolvido como desafio prático da DIO (Digital Innovation One),
demonstrando o uso do Docker em um cenário real de microsserviços com
balanceamento de carga.

## Tecnologias utilizadas
- Docker e Docker Compose
- PHP 7 (Apache)
- MySQL 5.7
- Nginx (balanceador de carga)

## Arquitetura
- **3 containers web** rodando PHP+Apache
- **1 container MySQL** como banco de dados
- **1 container Nginx** como proxy reverso e balanceador de carga

##  Como executar

### Pré-requisitos
- Docker instalado
- Docker Compose instalado
## 📚 Aprendizados
- Orquestração de múltiplos containers com Docker Compose
- Balanceamento de carga com Nginx (upstream)
- Comunicação entre containers via rede interna do Docker
- Persistência de dados com volumes
- Microsserviços na prática
