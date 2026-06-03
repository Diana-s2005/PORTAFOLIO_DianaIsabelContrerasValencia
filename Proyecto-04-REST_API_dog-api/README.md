#Corte - 04 - Proyecto 04 – Consumo de API REST con The Dog API

## Objetivo del Proyecto

Desarrollar una aplicación en PHP capaz de consumir una API REST externa para obtener información sobre distintas razas de perros e imágenes asociadas, utilizando solicitudes HTTP mediante la librería cURL y procesando respuestas en formato JSON.

## Problema que Resuelve

El proyecto permite acceder a información actualizada proporcionada por un servicio web externo sin necesidad de almacenar grandes cantidades de datos localmente. A través de The Dog API, los usuarios pueden consultar información de razas caninas y visualizar imágenes de forma dinámica y en tiempo real.

## Tecnologías Utilizadas

* PHP
* cURL
* API REST
* JSON
* HTML5
* The Dog API
* XAMPP
* Navegador Web

## Conceptos Aplicados

* Consumo de APIs REST
* Solicitudes HTTP GET
* Uso de API Keys
* Autenticación mediante encabezados HTTP
* Procesamiento de datos JSON
* Integración de servicios externos
* Manejo de errores en peticiones web
* Programación en PHP
* Uso de la librería cURL
* Obtención dinámica de contenido

## Descripción del Funcionamiento

La práctica se desarrolló utilizando The Dog API como fuente de información sobre diferentes razas de perros.

Inicialmente se obtuvo una API Key mediante el registro en la plataforma. Posteriormente, mediante PHP y la librería cURL, se realizaron solicitudes HTTP para consumir los servicios proporcionados por la API.

La aplicación implementa dos funcionalidades principales:

1. Obtener el listado completo de razas de perros disponibles.
2. Mostrar imágenes de una raza específica (Husky) utilizando su identificador correspondiente.

Las respuestas recibidas por la API se procesan en formato JSON y posteriormente se convierten en arreglos de PHP para facilitar su manipulación y visualización dentro de una página web.

## Instrucciones de Ejecución

1. Instalar XAMPP o un servidor compatible con PHP.
2. Habilitar la extensión cURL en la configuración de PHP.
3. Obtener una API Key en The Dog API.
4. Crear un archivo PHP con el código correspondiente.
5. Configurar la API Key dentro de los encabezados de la solicitud.
6. Iniciar Apache desde XAMPP.
7. Ejecutar el archivo PHP desde el navegador.
8. Verificar la obtención de datos e imágenes proporcionadas por la API.

## Reflexión Personal

### ¿Qué aprendí?

Aprendí a consumir servicios web externos mediante APIs REST utilizando PHP y cURL. También comprendí cómo funcionan las solicitudes HTTP, la autenticación mediante API Keys y el procesamiento de respuestas en formato JSON. Esta práctica me permitió conocer una de las formas más comunes de integración entre aplicaciones modernas.

### ¿Qué fue difícil?

Uno de los principales retos fue comprender la estructura de las respuestas JSON y configurar correctamente las solicitudes HTTP para que la API respondiera de manera adecuada. Asimismo, fue necesario entender el uso de encabezados HTTP y la importancia de manejar posibles errores durante las peticiones.

### ¿Qué mejoraría?

Me gustaría ampliar la aplicación permitiendo que el usuario seleccione cualquier raza desde una lista desplegable y visualice automáticamente sus imágenes e información. También agregaría una interfaz más atractiva y funcionalidades adicionales como búsqueda, filtrado y presentación detallada de cada raza.
