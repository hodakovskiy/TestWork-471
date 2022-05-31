# TestWork-471
TestWork 471
- git clone git@github.com:hodakovskiy/TestWork-471.git
- cd TestWork-471 
- cp .env.example .env
	- in .env we set up a connection to the database

- php artisan key:generate
- php artisan migrate
- php artisan db:seed --force

- php artisan make:token

- php artisan serve
- 
[postman.com](https://www.postman.com/interstellar-meadow-35870/workspace/testwork-471/collection/1297764-2e7fec97-0d88-4426-84bd-39a8522c04d2)
```
curl --location --request GET 'http://localhost:8000/api/auth/?api_token=IYC9BPsfyaaIuEL0bdAIKzF5juyMAYjtf7ny2l9oC5xxhCh6lvJwyABrZIPQ'
curl --location --request GET 'http://localhost:8000/api/records/?api_token=X006xJADGkKYyEetWJZY8Tryug76A2m7K0zpsG85GjKs5a9bPmGt3WCDAoKd'
curl --location --request GET 'http://localhost:8000/api/order/?api_token=X006xJADGkKYyEetWJZY8Tryug76A2m7K0zpsG85GjKs5a9bPmGt3WCDAoKd'
curl --location --request GET 'http://localhost:8000/api/record/?title=Dr&teg=veritatis&api_token=X006xJADGkKYyEetWJZY8Tryug76A2m7K0zpsG85GjKs5a9bPmGt3WCDAoKd'
