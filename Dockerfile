FROM python:3.11-slim

WORKDIR /app
COPY main.py /app

# Instalar dependencias directamente en el build
RUN pip install fastapi uvicorn

CMD ["uvicorn", "main:app", "--host", "0.0.0.0", "--port", "8000"]
EXPOSE 8000