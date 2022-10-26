![Procureability-white-logo-300x83](https://user-images.githubusercontent.com/8992422/197682949-ada3ee4e-f4c8-4f3b-a2ec-9b0f3efe4d63.png)

# ProcureAbility.com Local Development Environment Set-up

Following is the local environment setup to prepare for using Continuous Delivery/Continuous Integration Using Buddy Works

## Appendix

[1. Prepare Backup](#1-prep-backup)

[2. Prepare Database](#2-prep-database)

[3. Edit Local Files](#3-edit-local-files)

[4. Install Plugins Composer](#4-install-plugins)

[5. Git Set-up](#5-git-setup)

[6. NPM](#6-npm-install)

[7. More Info](#7-more-info)

- - - -

## 1 Prep Backup ##

#### Prepare, Download & Extract WP Engine Backup ####

1. Login to WP Engine [Admin](https://identity.wpengine.com/)

2. Navigate to `sites -> procureabi2dev -> backup points`

3. Create new `backup point`

> ![image](https://user-images.githubusercontent.com/8992422/197681086-a2dcb8c0-19df-4454-bf62-089e8acf46c6.png)

4. When the backup point is completled, next `Prepare ZIP` for download using the following settings:

> ![image](https://user-images.githubusercontent.com/8992422/197683496-b194428a-3b71-42b5-b4cc-5628b2247d06.png)
 
5. When ZIP file is created and ready, download and uncompress to your local environment root folder (in this example using Laragon on Windows 11, the folder name is devprocureability)

> ![image](https://user-images.githubusercontent.com/8992422/197684149-4c1f8ce4-df21-4e96-bf8d-07e54cf11e55.png)

4. Delete ZIP file from root directory

- - - -

## 2 Prep Database ##

#### Create & Import MYSQL Database ####

1. Open PHPMyAdmin on your local machine, create new blank MySQL database and import `devprocureability/wp-content/mysql.sql` file.

> ![image](https://user-images.githubusercontent.com/8992422/197685034-5ba872df-ec04-4484-a669-37d0ac636f82.png)

2. In `wp-options` table, change `siteurl` and `home` to local domain `https://development.procureability.localdev` or the local development domain you are using.

> ![5-wp-options-rename-domain](https://user-images.githubusercontent.com/8992422/197685711-9bcd8ee6-c35c-432b-a2ea-7e76d8bd3222.png)

- - - -

## 3 Edit Local Files ##

#### Edit Local Config Files ####

1. Open `devprocureability/wp-config/wp-config.local.php` and set new local MySQL database credentials

> ![6-edit-wp-config-local](https://user-images.githubusercontent.com/8992422/197686031-d1913490-9e86-408f-8af0-314035386ea3.png)

2. Enable or disable debugging and add any WordPress defines, that you would like for the LOCAL DEVELOPMENT ENVIRONMENT in `devprocureability/wp-config/wp-config.local.php`

3. Next, open `devprocureability/wp-config/wp-config.env.php` and change the local domain (in this example change to devprocureability.localdev).

> ![image](https://user-images.githubusercontent.com/8992422/197695109-056524e8-1777-4dac-9163-6dc918317b75.png)

- - - -

## 4 Install Plugins ##

#### Install Plugins using Composer ####

Composer minimum version 2.0 is to be installed on your computer, if not please see this [article:](https://www.geeksforgeeks.org/how-to-install-php-composer-on-windows/)

1. Open terminal, change directory to your local environment root folder `devprocureability` and run `composer install` to install both public and private plugins.

    (Private plugins used on the ProcureAbility.com website all have their own respective GitHub repositories)

> ![8-composer-install](https://user-images.githubusercontent.com/8992422/197696959-1beb3f19-c690-44ca-b3c8-2b8332e919f9.png)

- - - -

## 5 Git Setup ##

#### Git & GitHub Setup ####

1. After `composer install` from above step has compelted, next run `git init .` also from the root of the project. 

2. Next, add the GitHub repository as a remote `git remote add github git@github.com:ProcureAbility-com/development.procureability.com.git`

> ![10-git-setup](https://user-images.githubusercontent.com/8992422/197702297-1c6bab62-67b0-4ddd-bf3a-3d58460d9240.png)

- - - -

## 6 NPM Install ##

#### NPM Install ####

Needed: nodeJS 16.13.0 and npm 8.1.0

1. In environment root folder `devprocureability` using Terminal, run `npm install`

> ![9-npm-install](https://user-images.githubusercontent.com/8992422/197702798-6307e0f0-9746-4e78-a9a0-ca2d19b34e56.png)

2. NPM Scripts for development:

    a. `dev`
    b. `development`
    c. `production`
    d. `prod`
    e. `watch`
    f. `start`
    g. `start-dev`
    h. `start-staging`

- - - -

## 7 More Info ##

#### And What NOT To Do... #### 

* Every 'git push' to the main branch will automatically be deployed to the development server at https://development.procureability.com

* If you are working on a feature with a set relase date, do NOT use the `main` branch... instead, create and use a feature branch.

* Do NOT use SFTP/FTP to Change Server Files or Directory Structure

* Do NOT Edit Files Directroy on GitHub

* Changes to `webpack.mix.js` and `package.json` should be picked up by Buddy Works but if the actions fails, check the logs to troubleshoot. 

Reach out to me anytime on Slack or [email](mailto:billie@billiemead.com)


## Authors

- [@billiemead](https://www.github.com/billiemead)


## 🔗 Links

[![githib](https://img.shields.io/badge/github-000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ProcureAbility-com/development.procureability.com/)

[![wpengine](https://img.shields.io/badge/wpengine-0ECAD4?style=for-the-badge&logo=wpengine&logoColor=white)](https://wpengine.com/)
