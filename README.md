# FX Skeleton

Nette API skeleton demonstrating the FrameX integration and a layered application structure.

## Requirements

- PHP 8.4+
- [Composer](https://getcomposer.org/)

## Create a project

```bash
composer create-project -s dev contributte/fx-skeleton acme
cd acme
make project
make init
```

`make project` installs dependencies and prepares writable runtime directories. `make init` copies `config/local.neon.example` to `config/local.neon` for local parameter and service overrides.

## Run the API

```bash
make dev
```

The development server listens on <http://localhost:8000>.

In another terminal, verify the API:

```bash
curl http://localhost:8000/v1/ping
# pong
```

## Next steps

After the ping check, explore the job routes configured in [`config/config.neon`](config/config.neon).

## Quality checks

Run coding-standard and static-analysis checks:

```bash
make qa
```

Run tests:

```bash
make tests
```
