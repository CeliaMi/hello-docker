<kbd><img src="./assests/hello-docker.png" ></kbd>

# 🪐 API de Eventos Astronómicos
 

Este repositorio contiene la **API de Eventos Astronómicos** desarrollada en Python + FastAPI, lista para ser consumida por desarrolladores frontend **sin instalar nada adicional**.


Imaginemos la situación...acabas de recibir un email👨‍🚀💬: 

>Asunto: 📩 Proyecto frontend: colaboración con el Observatorio Internacional
>
> Hola equipo,
>
>Mi nombre es Pepa y formo parte del Observatorio Internacional. Me pongo en contacto con vosotras para que realicéis el desarrollo frontend de nuestra nueva página web para dar aviso de los próximos eventos de nuestro observatorio.
>
>Actualmente, solo tenemos listo el backend. Os hemos enviado una versión estable de la API para que podáis comenzar a trabajar en el desarrollo frontend. Esta API está desarrollada en Python, os la enviamos dockerizada, así no teneís problemas de compatibilidad.
>
>Estamos muy entusiasmadas de contar con vosotras para este proyecto y ver cómo nuestra nueva web cobra vida. 🚀
>
>Un saludo,
>
>Pepa – Directora del Observatorio Internacional
>

---

## 🛠 Cómo empezar

**Paso 1: Clonar el repositorio**
Atención clonar solo la rama level-1 👇
```bash
git clone --branch level-1 --single-branch https://github.com/CeliaMi/hello-docker.git
cd hello-docker
```
**Paso 1.1: Abrir Docker Desktop**

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
