# Processmaker Pps Foxley Inventory
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/pps-foxley-inventory.git
cd pps-foxley-inventory
php rename-project.php pps-foxley-inventory
composer install
npm install
npm run dev
```

## Installation
* Use `composer require processmaker/pps-foxley-inventory` to install the package.
* Use `php artisan pps-foxley-inventory:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select `Skeleton Package` from the administrative sidebar

## Uninstall
* Use `php artisan pps-foxley-inventory:uninstall` to uninstall the package
* Use `composer remove processmaker/pps-foxley-inventory` to remove the package completely
