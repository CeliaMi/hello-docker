<kbd><img src="./assests/hi-docker-compose.png" ></kbd>
# 🪐 ESP – Repositorio Oficial de APIs Astronómicas 

Bienvenidos al repositorio  de la **Agencia Espacial Planetaria (ESP)👨‍🚀**.

Imaginemos la situación... Acabas de recibir un email 👩‍🚀💬
>Asunto: 📩 Proyecto frontend: colaboración con la Agencia Espacial Planetaria
>
>Hola equipo,
>
>Mi nombre es Fede y formo parte de la Agencia Espacial Planetaria. Me gustaría ponerme en contacto con vosotras para que colaboréis en el desarrollo frontend de nuestra nueva página web.
>En ella publicaremos los próximos eventos astronómicos acompañados de frases inspiradoras. Para que podáis empezar a trabajar, os enviamos dos APIs desarrolladas por nuestros equipos internacionales:
>
>El equipo noruego, que trabaja en Python, desarrolló la API de eventos astronómicos.
>
>El equipo neozelandés, que trabaja en PHP, desarrolló la API de frases célebres.
>
>No necesitáis modificar ninguna de ellas, ya que vienen dockerizados. 
>
>Estamos entusiasmadas de contar con vosotras para este proyecto y ver cómo cobran vida nuestra nueva web.
>
>Un saludo,
>Fede – Agencia Espacial Planetaria

Este repositorio ha sido preparado para que desarrolladores frontend puedan **empezar a trabajar inmediatamente**.

Las APIs incluidas son:

1. **Eventos Astronómicos** (Python + FastAPI)  
   - Listado de eventos próximos: eclipses, lluvias de meteoros, conjunciones, etc.  
2. **Frases Célebres de Astronomía** (PHP – vanilla)  
  - Listado de frases inspiradoras de Astronomía

---

## 🚀 Cómo empezar

**Paso 1: Clonar el repositorio**
Atención clonar solo la rama level-2👇
>[!WARNING]
>Si vienes de realizar el nivel 1, recuerda eliminar el repositorio anterior hello-docker
```bash
git clone --branch level-2 --single-branch https://github.com/CeliaMi/hello-docker.git
cd hello-docker
```

**Paso 2: Levantar los Contenedores**  

```bash
docker-compose up --build
```
>[!WARNING]
> Puede ser que tu sistema operativo no soporte este comando, prueba con este:
> ```bash
> docker compose up --build
>```
>

¡Listo! Ya puedes consumir nuestras APIS en:
 - http://localhost:8086/events
- http://localhost:8087/quotes

> ¡A volaaaaaaaaar!

🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀🚀
