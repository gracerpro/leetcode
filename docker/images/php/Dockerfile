FROM php:8.2-cli-alpine

# Install system dependencies required for PHP extensions (often none for bcmath itself, 
# but good practice for other potential extensions)
RUN apk update --no-cache && apk add --no-cache \
    # Add any other required system libraries here
    bash

# Install the bcmath PHP extension using the official script
RUN docker-php-ext-install bcmath

WORKDIR /app
