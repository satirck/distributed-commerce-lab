COMPOSE_FILE ?= docker/compose.dev.yml
DC = docker compose --env-file .env -f $(COMPOSE_FILE)

.PHONY: ensure-env up down logs shell status clean

ensure-env:
	@if [ ! -f .env ]; then \
		echo ".env not found, creating from .env.example"; \
		cp .env.example .env; \
	fi

up: ensure-env
	@echo "Starting MariaDB..."
	$(DC) up -d
	@echo ""
	@echo "MariaDB is running"
	@echo "Host: localhost"
	@echo "Port: $$(grep '^DB_PORT=' .env | cut -d '=' -f2)"
	@echo ""

down:
	$(DC) down

logs:
	$(DC) logs -f

shell:
	$(DC) exec mariadb mariadb -u root -p

status:
	$(DC) ps

clean:
	$(DC) down -v
