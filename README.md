# base-app

## A base project with a docker-compose to PHP7 with NGINX

This is a docker-compose project, have PHP-FPM and NGINX with a basic installation, and have the following settings:
- the base of project configured in NGINX is the public path;
- all requests, taking off files like js, css, jpg, etc, all others requests will be resolved in public/index.php of the project; 
- this index find files in src, if file exists is requered

This is a example to don't request a PHP files directly.
    
