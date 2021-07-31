# VLIRT-Starter (vite, react, tailwindcss)

The most lightweight, vanilla template for Laravel, Inertia, React, Vite, & Tailwind CSS (JIT)

It's designed to save you 30 mins of setup time for a new fullstack project, and give you peace of mind that nothing is:

-   included unnecessarily
-   behaving like dead weight
-   setup to be a pain
-   configured in a way that you can't easily change

I dislike templates that 'add too much', or use poorly documented non-standard setup, so I'm trying to keep it as simple as possible.

Got contribution ideas? Found something that's a pain point? I'd love to hear them in the issues tab :)

## Really Quick Start

[![Open in Gitpod](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/mitchazj/vlirt-starter)

## Quick Start

This is if you are running locally. You could also clone this repo, and then open it in GitPod to work in the cloud with auto setup.

```bash
# or use the template button on this repo
git clone

# setup laravel installation (I recommend Valet on macOS)
composer install
cp .env.example .env
php artisan key:generate

# ensure that your database is setup before running this
php artisan migrate

# keep this running in the background while developing,
# but access the site via your usual link (not localhost:3000 which this will generate)
npm install
npm run dev
```

## Steps Used to Create This Template

Ie, what would you need to do if you _didn't_ want to use this template?

1. Create a new Laravel Project (I used [this](https://gitpod.io/#https://github.com/gitpod-io/template-php-laravel-mysql) as a vanilla starting point)
2. Install Laravel Breeze using the React preset
3. Boot Laravel Mix and replace it with Vite
4. Setup Tailwind CSS in JIT mode
5. Setup hot-reloading for all routes

## Documentation for Included Libraries

-   [Vite](https://vitejs.dev/guide/)
-   [Laravel](https://laravel.com/)
-   [InertiaJS](https://inertiajs.com/)
-   [React](https://reactjs.org/)
-   [Tailwind CSS](https://tailwindcss.com/)

## Notes & caveats

-   The original GitPod template was generated using `curl -s "https://laravel.build/example-app" | bash` then moving the contents down to the root directory.
-   [./gitpod.yml](./.gitpod.yml) updates `APP_URL` in the `.env` with the workspace address.
-   [./gitpod.yml](./.gitpod.yml) launches the Laravel server bound to `0.0.0.0` so that the server is accessible in Gitpod.

# Todo

-   [ ] Add proper documentation for the template and changes made
-   [ ] Document points-of-note regarding @-alias, blade-template hot-reloading
-   [ ] Document how to create a production build
-   [ ] Document how to deploy to production
-   [ ] Attend to TODO items in the code
-   [ ] Improve auto-setup for GitPod

# Goals

-   Keep the setup as simple and vanilla as possible
-   Stay up-to-date with the latest version of Laravel (last checked 31/07/2021)
-   Stay up-to-date with the latest version of Tailwind CSS (last checked 31/07/2021)
-   Stay up-to-date with the latest versions of Vite, React, & Inertia (last checked 31/07/2021)

# Credits

-   @mitchazj
