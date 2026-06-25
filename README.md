# Distributed Commerce Lab

Distributed Commerce Lab is a distributed commerce platform composed of independent services and shared infrastructure components.

## Repository Structure

```text
apps/     Application services
infra/    Infrastructure services and dependencies
build/    Reusable container images
deploy/   Deployment manifests and environments
scripts/  Utility scripts
```

## Services

| Service | Description |
|----------|-------------|
| [order-api](./apps/order-api/README.md) | Core service responsible for order management |

## Infrastructure

| Component | Description |
|------------|-------------|
| [mariadb](./infra/mariadb/README.md) | Shared relational database infrastructure |