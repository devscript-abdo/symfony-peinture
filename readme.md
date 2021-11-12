# Pinture website

Pinture is a website by [Abdelghafour](https://elmarzougui.net/) using Symfony 5.3.10

## Dev ENV
### Technical Requirements

* PHP 7.4
* Composer
* nodjs npm

The symfony binary also provides a tool to check if your computer meets all requirements. Open your console terminal and run this command:

```bash
symfony check:requirements
```

### Run dev ENV

```bash
composer install
npm install
symfony serve -d
```
* generate css and js file  inside  public/build folder

```bash
npm run build
```