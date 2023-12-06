FROM wordpress:latest
WORKDIR /var/www/html
EXPOSE 80

#variables for local setup
# ENV YOUR_VARIABLE=your_value

# start the WordPress server
CMD ["apache2-foreground"]
