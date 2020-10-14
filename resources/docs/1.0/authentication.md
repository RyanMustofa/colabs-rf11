# Endpoint Authentication

---

<a name="section-1"></a>
## Register

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/register           | POST   | used for user login / authentication.        | __Body Request__ :<br>name: string, email: string, password: string,     password_confirmation:string                                       |


Example :
```bash
www.example.dev/api/v1/register 
```


Data Response 

```json
{
    "success": "Registrasi berhasil",
    "code": 200,
    "user": {
        "name": "zainal",
        "email": "zsaa@aasaddmin.com",
        "photo_user": "default.jpg",
        "cover_user": "default.jpg",
        "updated_at": "2020-10-07T03:26:39.000000Z",
        "created_at": "2020-10-07T03:26:39.000000Z",
        "id": 4
    },
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvcmVnaXN0ZXIiLCJpYXQiOjE2MDIwNDEyMDEsImV4cCI6MTYwMjA0NDgwMSwibmJmIjoxNjAyMDQxMjAxLCJqdGkiOiJ2S2ZTaEJ3RFBLWExnVjJJIiwic3ViIjo0LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.uiddnKFdL0xDK61BNlmi14okbj4nwCldwsznLQyxpEM"
}
```


## Login

URL Params
```json
None
```
| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/login           | POST   |  used for register        |__Body Request__ :<br>email: string, password: string,                                             |

Example :
```bash
www.example.dev/api/v1/login 
```

Data Response 

```json
{
    "success": "Login Berhasil",
    "code": 200,
    "token": "eassdasdaAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvbG9naW4iLCJpYXQiOjE2MDE2OTQ5ODcsImV4cCI6MTYwMTY5ODU4NywibmJmIjoxNjAxNjk0OTg3LCJqdGkiOiJnb0NsZGdWQVUwZW44V3IxIiwic3ViIjo0LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.4nKpsXTYD0SAa8qjAgKXQIjJO1vhmjuFy9_er9b89Vg"
}
```

Failed Credential Response 

```json
{
    "code": 400,
    "error": "invalid_credentials"
}
```

## Logout

URL Params
```json
None
```
| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/logout           | POST   |  used for logout         | __Header Request__ :<br>Authorization: string                                               |


Authorization Token

```json
Authorization: Bearer eyJhbGciOiJIUzI1NiI...
```

Example :
```bash
www.example.dev/api/v1/logout 
```

Data Response 

```json
{
    "success": "Logout Berhasil",
    "code": 200
}
```

Failed Authorization Token Response 

```json
{
    "status": "Authorization Token not found"
}
```


## Refresh Token

URL Params
```json
token 
```
| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/refresh          | POST   |  used for refresh token       | __HeaderRequest__ :<br>Authorization: string                                               |


Example

```bash
http://example.test/refresh?token=eyJhbGciOiJIUzI1NiI....
```

Data Response 

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvcmVmcmVzaCIsImlhdCI6MTYwMTcxOTYzNiwiZXhwIjoxNjAxNzIzMjk1LCJuYmYiOjE2MDE3MTk2OTUsImp0aSI6IldQb0J0bWFFNHdFY2dsMWsiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.HniFsS_F5KcP7TD7wqXLDmGAlaGwwSGwuR0eq_k2eXs",
    "token_type": "bearer",
    "expires_in": 3600
}
```

