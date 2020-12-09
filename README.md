![Docker](https://img.shields.io/badge/-Docker-319ded?style=for-the-badge&logo=docker&logoColor=white)
[![Hits](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2Frobsonpiere%2FTDI-sesc-docker&count_bg=%2379C83D&title_bg=%23555555&icon=&icon_color=%23E7E7E7&title=Acessos&edge_flat=false)](https://hits.seeyoufarm.com)

# TDI-sesc-docker 🐳🐳🐳

Exemplos do mini treinamento ministrado para equipe do Sesc em Minas por Robson Piere e Daniel Lima no dia 09/12/2020.


## Exemplo 01 ## 
O primeiro exemplo consiste em rodar o apache para servir um site básico, mapeando uma pasta local diretamente par ao container


```powershell
docker run -dit --name exemplo_01 -p 80:80 -v ${PWD}/site:/usr/local/apache2/htdocs/ httpd:2.4
```


- **--detach ou   -d**  : executa o container segundo plano

- **--interactive , -i** : modo iterativo

- **-p** : mapeamento das portas

- **-v** Mapeamento dos volumes


## Exemplo 02 ## 

O segundo exemplo consiste em utilizar uma imagem e adicionar a nossa aplicação python gerando uma nova imagem

Gerando a imagem

```powershell
docker build -t imagem_exemplo_02 .
```

utilizando a imagem

```powershell
docker run -d --name exemplo_02 -p 80:80 imagem_exemplo_02
```

## Exemplo 03 ## 

Docker Compose, contendo uma aplicação php, redis e ngix pra balançeamento de carga.

```powershell
docker-compose build
```

```powershell
docker-compose up
```

## links ## 

- [Documentação](https://docs.docker.com)

- [Docker Hub](https://hub.docker.com)

- [Livro em PT-br](https://leanpub.com/dockerparadesenvolvedores)

- [Play with docker](https://labs.play-with-docker.com)


- [Play with Docker Classroom](https://training.play-with-docker.com)


- [Okteto](https://okteto.com) - Kubernetes como serviço com camada gratuita.



