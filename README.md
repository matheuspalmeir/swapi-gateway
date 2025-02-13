# swapi-gateway

Is a Laravel application that consumes the [Star Wars API](https://swapi.dev/documentation) and returns the data in a JSON format.

## Installation

Ensure you have Docker installed on your machine.

Running with Docker require you to clone the https://github.com/matheuspalmeir/sw-app repository, which contain the docker compose file to orquestrate the containers. After you clone the sw-app repo and also this repo, run the following command to start the application in the /sw-app folder:

```bash
docker-compose up -build
```

This will start the application and make it accessible at http://localhost:8000.

## Usage

Endpoints:

-   GET /api/people
-   GET /api/people/?search={name}
-   GET /api/films
-   GET /api/films/?search={name}
-   GET /api/metrics
-   POST /api/metrics/reset
