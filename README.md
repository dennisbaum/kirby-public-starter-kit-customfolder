# Kirby Public Starter Kit

A copy of the Kirby Starterkit, but with **public folder structure** and finally the right composer config for a **custom folder structure**. That should be a good starting point, to create all kind of kirby projects and be able to build to '/dist' or setup a backend/frontend-structure...however (build not included yet)

- Secure Public Folder Setup '/src/public'
- Composer installs Kirby to '/src/vendor'
- Composer installs Plugins to '/src/site/plugins'
- Composer starts local PHP Server in '/src/public'

## How to
Install composer: https://getcomposer.org/

```
git clone ...
cd yourfolder
composer install
composer start
```
open http://localhost:8000

## Change Custom Folder
rename '/src', change 'vendor-dir', 'kirby-plugin-path' and also change the folder where php starts server in composer.json

## Licence
Keep in mind that Kirby is not freeware. You need a licence: https://getkirby.com/ but it's worth it!
