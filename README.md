# Wordpress running locally on Docker
Docker setup for Wordpress on your local machine. In themes folder you can find themes fully developed by me. Check it out.

## Prerequisites
Docker installed on your computer. After that just pull the code for the repository and build the project.

## Set up of the docker-compose.yml and wordpress
In the docker-compose.yml file are just credentials that needs to be filled out for connecting to the database. They can remain the same or if you already have set up of docker container for db - just change the values accordingly.

## Build the project
Run docker from your project directory with:
`docker compose up -d`
If you are running the project for the first time - you will get the welcome note from Wordpress and will ask for details for installing the wordpress locally. Pick the language, set up the username and password, set the name of your website and voila - you are ready to check out bunch of cool stuff there.

## Adding new themes
If you want to add more themes, just add them unzipped in the folder themes of this project.

## Checking existing themes
Run wordpress locally and pick theme from the CMS and check it out on FE

## Project screenshot
![ScreenShot](https://raw.github.com/ivevil/docker-wordpress/main/screenshot.png)