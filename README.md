# API JS PHP

A project template for building and consuming APIs using JavaScript and PHP.

## Features

- Example API endpoints in PHP
- JavaScript client for API consumption
- Easy setup and configuration

## Getting Started

### Prerequisites

- Docker (for containerized development)
- Node.js and npm (for JS client)
- PHP 8.x

### Setup

1. Clone the repository:
    ```sh
    git clone <repo-url>
    cd api-js-php
    ```

2. Start the development environment:
    ```sh
    docker-compose up
    ```

3. Access the API and client as described in project documentation.

## Project Structure

```
/api-js-php
  ├── api/         # PHP API source code
  ├── client/      # JavaScript client code
  ├── docker/      # Docker configuration
  └── README.md
```

## Usage

- Modify the PHP files in `api/` to add or update endpoints.
- Use the JS client in `client/` to interact with the API.

## Contributing

Pull requests are welcome. For major changes, please open an issue first.

## License

[MIT](LICENSE)