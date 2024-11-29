
# Laravel API Buenas practicas Laravel

Esta Api tiene las buenas practicas y codigo limpio con laravel como practica personal incluido los test y versionado.


## Installation

Installation

```bash
  git clone git@github.com:JesusChamiso/laravel-api2.git
  cd laravel-api2
  cp .env.example .env
  composer install
  php artisan key:generate
  php artisan migrate --seed
```
Run API

```bash
  php artisan serve
```

## API Reference

#### Get all Categories

```http
  GET /api/v1/categories
```

| Parameter      | Type     | Description                 |
| :--------------| :------- | :---------------------------|
| `email`        | `email`  | **Required**. user email    |
| `password`     | `string` | **Required**. user password |

#### Get all Categories

```http
  GET /api/v1/categories
```

| Parameter      | Type     | Description                |
| :--------      | :------- | :------------------------- |
| `bearer token` | `string` | **Required**. Your API key |

#### Get category by id

```http
  GET /api/v1/categories/{id}
```

| Parameter      | Type     | Description                       |
| :--------      | :------- | :-------------------------------- |
| `bearer token` | `string` | **Required**. Your API key        |
| `id`           | `string` | **Required**. Id of item to fetch |

#### Get all recipes

```http
  GET /api/v1/recipes
```

| Parameter      | Type     | Description                |
| :--------      | :------- | :------------------------- |
| `bearer token` | `string` | **Required**. Your API key |

#### Get recipe by id

```http
  GET /api/v1/recipe/{id}
```

| Parameter      | Type     | Description                       |
| :--------      | :------- | :-------------------------------- |
| `bearer token` | `string` | **Required**. Your API key        |
| `id`           | `string` | **Required**. Id of item to fetch |


### Create Recipe
```http
  POST /api/v1/recipes
```
| Parameter      | Type     | Description                |
| :--------      | :------- | :------------------------- |
| `bearer token` | `string` | **Required**. Your API key |
 
Creation form data:

| Key           | Type     | Description                              |
| :--------     | :------- | :----------------------------------------|
| `category_id` | `integer`| **Required**. id of an existing category |
| `title`       | `string` | **Required**. recipe title               |
| `ingredients` | `string` | **Required**. recipe description         |
| `instructions`| `string` | **Required**. recipe instructions        |
| `image`       | `file`   | **Required**. recipe image               |
| `tags`        | `array`  | **Required**. recipe tags [1,2,3,...]    |

### Update Recipe
```http
  PUT /api/v1/recipes/{id}
```
| Parameter      | Type     | Description                |
| :--------      | :------- | :------------------------- |
| `bearer token` | `string` | **Required**. Your API key |
 
Update Params data:

| Key           | Type     | Description                |
| :--------     | :------- | :--------------------------|
| `category_id` | `integer`| id of an existing category |
| `title`       | `string` | recipe title               |
| `ingredients` | `string` | recipe description         |
| `instructions`| `string` | recipe instructions        |
| `image`       | `file`   | recipe image               |
| `tags`        | `array`  | recipe tags [1,2,3,...]    |

#### Delete recipe by id

```http
  DELETE /api/v1/recipes/{id}
```

| Parameter      | Type     | Description                        |
| :--------      | :------- | :----------------------------------|
| `bearer token` | `string` | **Required**. Your API key         |
| `id`           | `string` | **Required**. Id of item to delete |

#### Get all Tags

```http
  GET /api/v1/tags
```

| Parameter      | Type     | Description                |
| :--------      | :------- | :------------------------- |
| `bearer token` | `string` | **Required**. Your API key |

#### Get Tag by id

```http
  GET /api/v1/tags/{id}
```

| Parameter      | Type     | Description                       |
| :--------      | :------- | :-------------------------------- |
| `bearer token` | `string` | **Required**. Your API key        |
| `id`           | `string` | **Required**. Id of item to fetch |