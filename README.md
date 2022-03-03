# Kirby 3.6 Plainkit with Public Folder and Custom Path Structure

A copy of the Kirby Plainkit, but with a more secure **public folder setup** and a composer config for a **custom path structure**. That should be a good **starting point**, to create all kind of kirby projects and be able to build to '/dist' or setup a backend-frontend-headless-structure ... whatever (build not included yet)

+ Secure Public Folder Setup '/src/public'
+ Composer installs Kirby to '/src/vendor'
+ Composer installs Plugins to '/src/site/plugins'
+ Composer starts local PHP Server in '/src/public'

<br>

## Read more
Custom Folder Setup https://getkirby.com/docs/guide/configuration#custom-folder-setup  
Custom Path https://getkirby.com/docs/cookbook/setup/composer#installing-kirby-to-a-custom-directory

## How to
Install composer: https://getcomposer.org/
```
brew install composer
```

Clone Repository, install Kirby and start Server
```
git clone git@github.com:dennisbaum/kirby-public-starter-kit-customfolder.git
cd kirby-public-starter-kit-customfolder
code .
composer install
composer start
```
open http://localhost:8000

## Change Custom Path
rename '/src', change 'vendor-dir', 'kirby-plugin-path' and also change the folder where php starts the server in **composer.json**

## Licence
Keep in mind that **Kirby** is not freeware. You need a licence: https://getkirby.com/ but it's worth it!
