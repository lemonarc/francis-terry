# Francis Terry Website

## Requirements

- Ruby 2.7.8 (the version pinned in `.ruby-version`; install via `rbenv`/`asdf`)
- Bundler 2.1.4 (`gem install bundler -v 2.1.4` once Ruby 2.7.8 is active)
- Homebrew `libffi` on Apple Silicon (`brew install libffi`) so the `ffi` gem can compile

## Initial setup

```bash
# from repo root, with Ruby 2.7.8 active
bundle _2.1.4_ install
```

This installs all Jekyll dependencies into `vendor/bundle` (ignored by git).

## Local development

```bash
bundle exec jekyll serve --livereload
```

The site becomes available at http://127.0.0.1:4000 and auto-rebuilds as you edit content.

## PHP booking tools (legacy)

The legacy booking/payment feature under `api/` is no longer used in production, but the code remains for reference. To experiment with it locally:

1. Install PHP 8.x and Composer.
2. Run `composer install` once from the repo root.
3. Create a `.env` file with the Stripe and SendGrid keys the scripts expect.
4. After running `bundle exec jekyll build --watch`, serve the generated site with PHP enabled:
   ```bash
   cd _site
   php -S 0.0.0.0:8000
   ```

Again, this PHP flow is considered defunct—only set it up if you explicitly need to poke at the old booking endpoints.
