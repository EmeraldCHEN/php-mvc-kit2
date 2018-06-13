This repository should be loaded in the www folder if you are using the [https://github.com/to-jk11/php-container-kit/](https://github.com/to-jk11/php-container-kit/) repository

Download the following files into the www container

`curl -LOk https://github.com/to-jk11/php-mvc-kit/archive/master.zip && unzip master.zip && rm -f master.zip`

Now you will need to go into the php-mvc-kit folder:

`cd php-mvc-kit-master`

Move all of the files into the parent folder:

`find . -maxdepth 1 -exec mv {} .. \;`

Ignore the message that says:

> mv: cannot move `.' to `../.': Device or resource busy

Go back to the parent folder and remove the 6210... folder

`cd .. && rm -rf php-mvc-kit-master`

Create your git repository:

`git init`

Add your assignment repo link

`git remote add origin https://url-to-your-repo` (where "https://url-to-your-repo" is the link to your github or bitbucket repository)

Now you can go to localhost:8000 (mac and linux) or 192.168.99.100:8000 (windows when using docker toolbox) and you will see the following message:

**Note you will now need to load your sql files to see the website working properly**