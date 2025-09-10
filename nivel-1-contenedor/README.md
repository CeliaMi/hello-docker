<kbd><img src="./assests/hello-docker.png" ></kbd>

# 🪐 API de Eventos Astronómicos
 

Este repositorio contiene la **API de Eventos Astronómicos** desarrollada en Python + FastAPI, lista para ser consumida por desarrolladores frontend **sin instalar nada adicional**.


Imaginemos la situación...👨‍🚀💬: 
>La Agencia Planetaria Internacional quiere una página web para mostrar al público sus próximos eventos astronómicos.
Nuestra misión es desarrollar la parte frontend.

>Por ahora, la agencia solo tiene listo el backend y nos ha enviado una API estable para comenzar a trabajar.
Esa API está hecha en Python (un lenguaje que no usamos en este curso), pero no pasa nada: la agencia nos entregó el proyecto dockerizado, así que únicamente necesitamos levantarlo con Docker para poder consumirla desde el frontend.

---

## 🛠 Cómo empezar

**Paso 1: Clonar el repositorio**
Atención clonar solo la rama level-1 👇
```bash
git clone --branch level-1 --single-branch https://github.com/CeliaMi/hello-docker.git
cd hello-docker
```

**Paso 2: generar la imagen de docker**
```bash
docker build -t astro-events-api .
```

**Paso 3: Levantar la imagen: generar el contenedor de Docker**
```bash
docker run -d -p 8085:8000 astro-events-api

```
¡Qué velocidad😎!

Ya tienes todo listo para consumir en http://localhost:8085/events 🌠🌠
