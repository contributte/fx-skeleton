# FX Skeleton

Nette API skeleton demonstrating the FrameX integration and a layered application structure.

## Requirements

- PHP 8.4+
- [Composer](https://getcomposer.org/)

## API quick start

```bash
composer create-project -s dev contributte/fx-skeleton acme
cd acme
make init
make setup
```

Composer installs the dependencies. `make init` creates the ignored `config/local.neon`, and `make setup` prepares writable runtime directories.

```bash
make dev
```

The development server listens on <http://localhost:8000>.

In another terminal, request the bundled ping route:

```bash
curl http://localhost:8000/v1/ping
```

The controller currently returns `pong` as the response payload.

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
