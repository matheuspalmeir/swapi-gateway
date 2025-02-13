# swapi-gateway

Is a Laravel application that consumes the [Star Wars API](https://swapi.dev/documentation) and returns the data in a JSON format.

## Installation

Ensure you have Docker installed on your machine.

After unzipping the project, navigate to the project directory and run the following command to start the application:

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
