# Endpoint Profile User

---

<a name="section-1"></a>
## Show User Profile

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/user/profile           | GET   | used for show user login        | __Header Request__ :<br>Authorization: string                                  |                                               |


Example :
```bash
www.example.dev/api/v1/user/profile
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Profile User Berhasil Diambil"
    },
    "data": {
        "id": 1,
        "name": "zainal",
        "email": "za@aadmin.com",
        "email_verified_at": null,
        "photo_user": "images/user/photo/default.jpg",
        "cover_user": "images/user/cover/default.jpg",
        "address": "mojogedang",
        "gender": "Laki-laki",
        "role": "admin",
        "created_at": "2020-10-06T14:43:09.000000Z",
        "updated_at": "2020-10-06T14:59:06.000000Z",
        "contact_user": {
            "id": 1,
            "user_id": 1,
            "whatsapp_number": "000987676543",
            "link_telegram": "t.me00000",
            "link_instagram": "test",
            "link_facebook": "test",
            "created_at": "2020-10-06T14:43:10.000000Z",
            "updated_at": "2020-10-06T14:59:06.000000Z"
        }
    }
}
```


## Update Data Profile

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/user/profile         | PUT   | used for update profile        |  __Header Request__ :<br>Authorization: string <br> __Body Request__ : category_name: String, email: String, name: String, <br> address: String,password: String,<br> password_confirmation: String,gender: String                              |                                             


Example :
```bash
www.example.dev/api/v1/user/profile
```



Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Profile User Berhasil Diperbarui"
    },
    "data": 1
}
```
## Update Cover User

URL Params
```json
_method
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/user/update/profile-cover-user           | POST   | used for update cover profile user       | __FormDataRequest__ :<br>cover_user: file (String) <br> __Header Request__ :<br>Authorization: string                                  |                                               |

Example
```bash
http://example.test/api/v1/user/update/profile-cover-user?_method=put
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Photo Cover User Berhasil Diperbarui"
    },
    "data": 1
}
```


## Update Photo User

URL Params
```json
_method
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/user/update/profile-photo-user          | POST   | used for update photo profile user       | __FormDataRequest__ :<br>photo_user: file (String) <br> __Header Request__ :<br>Authorization: string                                  |                                               |

Example
```bash
http://example.test/api/v1/user/update/profile-photo-user?_method=put
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Photo Cover User Berhasil Diperbarui"
    },
    "data": 1
}
```



