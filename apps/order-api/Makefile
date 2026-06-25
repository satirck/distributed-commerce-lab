COMPOSE_FILE ?= docker/compose.dev.yml
DC = docker compose -f $(COMPOSE_FILE)

up:
	$(DC) up -d

down:
	$(DC) down

clean:
	$(DC) down -v --remove-orphans

logs:
	$(DC) logs -f

build:
	$(DC) build

shell:
	$(DC) exec php sh