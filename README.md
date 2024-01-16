# login-with-id

It creates automatic login link with user id for laravel.

## Installation

### Laravel

Require this package in your composer.json and update composer.

```
composer require bymega/login-with-id
```

## Configuration

The defaults are set in `config/loginwithid.php`. Publish the config to copy the file to your own config:

```
php artisan vendor:publish --provider="Bymega\LoginWithId\LoginWithIdServiceProvider"
```

### Options

| Option         | Description                          | Default value             |
| ---------------- | -------------------------------------- | --------------------------- |
| user_model     | Model Class to be used for Auth.     | `\App\Models\User::class` |
| hash           | Password to be used for encrypt.     | `test123pass`             |
| redirect_route | The URL to be redirected after login | `/home`                   |

## Using

```
http://localhost/with-login/{userId}/{hash}
```

Values:

* **{userId}** : ID of the user you want to log in
* **{hash}** : paswword in the config file where you wrote the hash (Default test123pass)

Example:

```
http://localhost/with-login/1/test123pass
```

