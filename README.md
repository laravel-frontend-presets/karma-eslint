# Laravel 5.5.x|5.6.x Frontend Preset for Karma, ESLint

Laravel Preset for using Karma, ESLint (Airbnb), along with your built in laravel-mix & Vue.js setup, to get a working unit testing & code coverage for your JS assets.

The setup in this preset was extracted/modified from Vue.js [webpack template](https://github.com/vuejs-templates/webpack). Configured to use [Karma](https://github.com/karma-runner/karma) as the test runner, [Istanbul](https://github.com/gotwarlost/istanbul) as the code coverage tool, [ESLint](https://github.com/eslint/eslint) for javascript linting using [Airbnb JavaScript Style Guide](https://github.com/airbnb/javascript), all of that while keeping your laravel-mix setup and frontend development experience untouched.

``` bash
laravel new my-app && cd my-app
composer require mohannadnaj/laravel-karma-eslint-preset
php artisan preset karma-eslint
npm install
npm test
```
![screenshot](https://i.imgur.com/uNl8dMp.png)

## Usage
1. Fresh install Laravel (5.5.x or 5.6.x) and `cd` to your app.
2. Install this preset via composer:

        composer require mohannadnaj/laravel-karma-eslint-preset

3. Use `php artisan preset karma-eslint` for scaffolding this preset. You will be prompted for confirmation of copying the files and overriding the existing ones. **It's highly recommended to use this preset at the initial instantiation of your laravel project, otherwise, commit your changes before using it**.

4. `npm install` (or `yarn install`  if you are using [yarn](https://yarnpkg.com/en/), and you should 😬).

5. discover the npm scripts:
- `npm run [dev|watch|hot|prod]` is the standard commands shipped with the fresh laravel, check out the relevant [laravel documentation](https://laravel.com/docs/5.6/frontend)
-  `npm run test` or `npm test` run the unit tests and check out the coverage report generated on `/coverage`.
-  `npm run test:watch` run and watch the unit tests/code coverage. watch according to your configured webpack configurations (in `webpack.mix.js`).
-  `npm run lint` run ESLint and show up the linting errors.
-  `npm run lint:fix` run ESLint and fix the fixable linting errors.

6. The preset will create a directory at the root of your project called `specs`, this is your entry point for writing JS unit tests.

> Note: it's named `specs` for differentiation from your backend php `tests` directory. it's up to you if you want to change this you will have to modify the path at the `test` npm script and the path at the tests entry point `specs/setup/index.js` which is called from the karma config file at `specs/setup/karma.conf.js`.

## Credits

- [@m1guelpf](https://github.com/m1guelpf) for the [skeleton preset](https://github.com/laravel-frontend-presets/skeleton)
- [vuejs webpack template](https://github.com/vuejs-templates/webpack) contributors.

## License

The MIT License (MIT).

## Development TODOs

- Prompt the user for options other than ESLint Airbnb style guide.
