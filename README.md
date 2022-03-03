# Kirby 3.6 Plainkit with Public Folder, Custom Path and DotEnv

A copy of the Kirby Plainkit, but with a more secure **public folder setup** and a composer config for a **custom path structure**. That should be a good **starting point**, to create all kind of kirby projects and be able to do build to '/dist' or setup a backend-frontend-headless-structure ... whatever (build not included yet)

+ Secure Public Folder Setup '/src/public'
+ Composer installs Kirby to '/src/vendor'
+ Composer installs Plugins to '/src/site/plugins'
+ Composer starts local PHP Server in '/src/public'
+ DotEnv by Beebmx\KirbyEnv

<br> 
<img width="441" alt="grafik" src="https://user-images.githubusercontent.com/562826/156607298-5a0cb8a4-4b92-425f-9b1b-0b41615cbf08.png">
<br>

## Read more
Kirby CMS https://getkirby.com  
Kirby Plainkit https://github.com/getkirby/plainkit  
Custom Folder Setup https://getkirby.com/docs/guide/configuration#custom-folder-setup  
Custom Path https://getkirby.com/docs/cookbook/setup/composer#installing-kirby-to-a-custom-directory  
DotEnv https://github.com/beebmx/kirby-env, https://github.com/johannschopplich/kirby-extended

## Install
Install composer: https://getcomposer.org/ or use homebrew
```
brew install composer
```

Clone Repository, create .env, open VSCode, install Kirby, start Server
```
git clone git@github.com:dennisbaum/kirby3-plainkit-publicfolder-custompath.git
cd kirby3-plainkit-publicfolder-custompath
cp src/.env.example src/.env
code .
composer install
composer start

```
open http://localhost:8000

## Install/Uninstall Plugins
```
composer remove beebmx/kirby-env
composer require johannschopplich/kirby-extended
```
add plugins installed by composer to .gitignore

## Change Custom Path
rename '/src', change 'vendor-dir', 'kirby-plugin-path' and also change the folder where php starts the server in **composer.json**

## Licence
Keep in mind that **Kirby** is not freeware. You can buy a licence: https://getkirby.com/buy -> It's worth it!
