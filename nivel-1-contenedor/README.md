<kbd><img src="./assests/hello-docker.png" ></kbd>

# 🪐 API de Eventos Astronómicos
 

Este repositorio contiene la **API de Eventos Astronómicos** desarrollada en Python + FastAPI, lista para ser consumida por desarrolladores frontend **sin instalar nada adicional**.

---

## 🛠 Cómo empezar

**Paso 1: Clonar el repositorio**  

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
