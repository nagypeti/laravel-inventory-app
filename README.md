# laravel-inventory-app

### DB schema

https://dbdiagram.io/d/5fa0567e3a78976d7b7a3049

### Run dev env with docker-compose

1. Run composer install to install dependencies
    - this step is required because of the volume used in docker-compose.yml will delete the vendor folder on copy inside the container
2. Run docker-compose up -d
3. Got to your terminal run: `docker exec -it laravel-inventory-app /bin/bash` and inside the container run `php artisan migrate`
3. Go to localhost:8080

### Deployment plan

1. I would use a continuous integration tool that is connected to my repository, like Travis or Jenkins
    - this can be used to differentiate test/prod environments by the branches
    - I would go with the most common practice, using the main branch as test and release to prod based on a version tagged commits
2. Here I can run linters and tests to check if everything is ok.
3. I would create a script that utilizes that the docker build flow:
    - We can pass the required envs to docker here as build args coming from the CI tools environment or use a third party solution like Vault which has a cli tool that can be integrated
    - `docker build . -t company/inventory-app:latest -t compnay/inventory-app:v1.0.0 .`
    - `docker login` with the right credentials
    - `docker push`
4. Then use a webhook to notify the servers to get the newest image
    - it could be a cloud based solution in this case I would use their cli tool to do this, or a simple server that can host docker containers using a webhook


