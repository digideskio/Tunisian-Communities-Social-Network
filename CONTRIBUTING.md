# Contributing to the Tunisian Communities Social Network

Looking to contribute something to Tunisian Communities Social Network? Here's how you can help.

Please take a moment to review this document in order to make the contribution process easy and effective for everyone involved.

## Using the issue tracker

The [issue tracker](https://github.com/RaedsLab/Tunisian-Communities-Social-Network/issues) is the preferred channel for bug reports, features requests and submitting pull requests.


##Starting with Symfony2

If you're new to Symfony2, you can start contributing just after a few clicks:

* Download the latest (.zip) version of Symfony from [here](http://symfony.com/download) 
* I recommend using [Netbeans IDE](https://netbeans.org/downloads/index.html) (PHP). It has one of the best Symfony plugins.

####Step1: 
Create a new PHP project and select Symfony2 as a framework.
####Step2:
Remove the `ACME` bundle.
####Step3:
Download this project under `/src`  
####Step4:
Create and update your database using `Doctrine`  

(This is a basic starter guide that needs details and improvements, feel free to contribute)


## Installing development environment under Ubuntu 14.04

Start by installing those dependancies:
```bash
sudo apt-get install apache2 mysql-server php5-mysql \
php5 libapache2-mod-php5 php5-mcrypt php5-intl curl git
```

Next you need to install [Composer](https://getcomposer.org) (the dependency manager for PHP):
```bash
curl -sS https://getcomposer.org/installer | php
```

For commodity move composer to `/usr/local/bin/`:
```bash
sudo mv composer.phar /usr/local/bin/composer
```

You need to install nodejs:
```bash
curl -sL https://deb.nodesource.com/setup | sudo bash - && sudo apt-get install -y nodejs
```

We're using bower as dependency manager for front-end developement and grunt to automate the build process:
```bash
sudo -H npm install -g grunt-cli bower
```

## Pull requests

Fork [RaedsLab/Tunisian-Communities-Social-Network](https://github.com/RaedsLab/Tunisian-Communities-Social-Network/fork) (clicking this link) and clone your fork of the repo:
```bash
git clone https://github.com/your-user-name/Tunisian-Communities-Social-Network.git
```

Enter the directory:
```bash
cd Tunisian-Communities-Social-Network
```

Assign the original repo to a remote called "upstream"
```bash
git remote add upstream https://github.com/RaedsLab/Tunisian-Communities-Social-Network.git
```

If you cloned a while ago, get the latest changes from upstream:
```bash
git checkout master
git pull upstream master
```

Create a new topic branch to contain your change:
```bash
git checkout -b <topic-branch-name>
```

Make your changes then push your topic branch up to your fork:
```bash
git push origin <topic-branch-name>
```

[Open a Pull Request](https://help.github.com/articles/using-pull-requests/) with a clear title and description against the master branch.

After that your topic branch has been pulled successfully you may delete it locally:
```bash
git branch -d <topic-branch-name>
```

And from your remote fork:
```bash
git push origin --delete <topic-branch-name>
```

Update your local clone:
```bash
git pull upstream master
```

Then push to your fork:
```bash
git push origin
```

## Optional: Using ungit to enhance the workflow with git

To install [ungit](https://github.com/FredrikNoren/ungit) globally using npm:
```bash
sudo -H npm install -g ungit
```

Some good ungit video tutorials:
* English: https://youtu.be/hkBVAi3oKvo
* French: https://youtu.be/hKXxfHkOfnA

## License

By contributing your code, you agree to license your contribution under the [GNU GPL version 3](https://github.com/RaedsLab/Tunisian-Communities-Social-Network/blob/master/LICENSE).