# Payment Gateway (PHP)

Minimal payment flow: create payment → redirect → PSP callback → OK/NOK handlers → capture/refund/status.

## Setup
1) Copy `.env.example` → `.env` and fill values.
2) Place public endpoints under a web root or use `php -S localhost:8000 -t public`.

## Security
- Validate PSP signatures on all callbacks.
- Use parameterized SQL only. Never trust `$_GET`/`$_POST` blindly.
- Keep `examples/` disabled in production (dev only).
