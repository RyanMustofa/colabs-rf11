# Endpoint Portfolio

---

__NOTE :__ __Status 0 = sold || 1 = not sold__

<a name="section-1"></a>
## Show All Portfolio

URL Params
```bash
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio           | POST   | used for show all Portfolio        |  -                                |                                               

Example :
```bash
www.example.dev/api/v1/portfolio
```


Data Response

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Portfolio Berhasil diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "portfolio_name": "Ronde khas karanganyar",
                "user_id": 3,
                "portfolio_category_id": 1,
                "price": 20000,
                "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "status": "0",
                "slug": "onde-onde-khas-karanganyar",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "portfolio_category": {
                    "id": 1,
                    "category_name": "Makanan & Minuman",
                    "created_at": "2020-10-06T14:43:11.000000Z",
                    "updated_at": "2020-10-06T14:43:11.000000Z"
                },
                "user": {
                    "id": 3,
                    "name": "user",
                    "email": "user@user.com",
                    "email_verified_at": null,
                    "photo_user": "images/user/photo/default.jpg",
                    "cover_user": "images/user/cover/default.jpg",
                    "address": "Matesih",
                    "gender": "Laki-laki",
                    "role": "user",
                    "created_at": "2020-10-06T14:43:09.000000Z",
                    "updated_at": "2020-10-06T14:43:09.000000Z"
                },
                "galleries": [
                    {
                        "id": 3,
                        "portfolio_id": 1,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:14.000000Z",
                        "updated_at": "2020-10-06T14:43:14.000000Z"
                    },
                    {
                        "id": 4,
                        "portfolio_id": 1,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:14.000000Z",
                        "updated_at": "2020-10-06T14:43:14.000000Z"
                    }
                ]
            },
            {
                "id": 2,
                "portfolio_name": "Gantungan Kunci",
                "user_id": 3,
                "portfolio_category_id": 3,
                "price": 500,
                "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "status": "0",
                "slug": "gantungan-kunci",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "portfolio_category": {
                    "id": 3,
                    "category_name": "Aksesoris",
                    "created_at": "2020-10-06T14:43:12.000000Z",
                    "updated_at": "2020-10-06T14:43:12.000000Z"
                },
                "user": {
                    "id": 3,
                    "name": "user",
                    "email": "user@user.com",
                    "email_verified_at": null,
                    "photo_user": "images/user/photo/default.jpg",
                    "cover_user": "images/user/cover/default.jpg",
                    "address": "Matesih",
                    "gender": "Laki-laki",
                    "role": "user",
                    "created_at": "2020-10-06T14:43:09.000000Z",
                    "updated_at": "2020-10-06T14:43:09.000000Z"
                },
                "galleries": [
                    {
                        "id": 1,
                        "portfolio_id": 2,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:13.000000Z",
                        "updated_at": "2020-10-06T14:43:13.000000Z"
                    },
                    {
                        "id": 2,
                        "portfolio_id": 2,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:13.000000Z",
                        "updated_at": "2020-10-06T14:43:13.000000Z"
                    }
                ]
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/portfolio?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://localhost:8000/api/v1/portfolio",
        "per_page": 10,
        "prev_page_url": null,
        "to": 3,
        "total": 3
    }
}
```


## Add New Portfolio

URL Params
```json
None
```
| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio           | POST   | use for add new portfolio        | __Body Request__ :<br>portfolio_name: String,user_id: integer, portfolio_category_id:integer, price:integer,description:string,status:integer' <br>  __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/portfolio
```


Data Response 
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Portfolio Berhasil Ditambahkan"
    },
    "data": {
        "portfolio_name": "test",
        "user_id": "1",
        "portfolio_category_id": "1",
        "price": "120000",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam",
        "status": "0",
        "slug": "test",
        "updated_at": "2020-10-06T06:52:16.000000Z",
        "created_at": "2020-10-06T06:52:16.000000Z",
        "id": 4
    }
}
```


## Update Portfolio

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio/update/__:id__           | PUT   | used for update data portfolio       | __Body Request__ :<br>portfolio_name: String,user_id: integer, portfolio_category_id:integer, price:integer,description:string,status:integer' <br>  __Header Request__ :<br>Authorization: string                                                        |                                               |

Example :
```bash
www.example.dev/api/v1/portfolio/update/1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Portfolio Berhasil Diperbarui"
    },
    "data": {
        "portfolio_name": "test",
        "user_id": "1",
        "portfolio_category_id": "1",
        "price": "120000",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam",
        "status": "0",
        "slug": "test",
        "updated_at": "2020-10-06T06:52:16.000000Z",
        "created_at": "2020-10-06T06:52:16.000000Z",
        "id": 4
    }
}
```
## Show Detail Portfolio
URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio/detail/__:slug__           | GET   | used for show detail portfolio        | __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/portfolio/detail/Ronde-khas-karanganyar
```

Data Response 

```json
{
  "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Portfolio Berhasil Ditambahkan"
    },
    "data":{
                "id": 1,
                "portfolio_name": "Ronde khas karanganyar",
                "user_id": 3,
                "portfolio_category_id": 1,
                "price": 20000,
                "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "status": "0",
                "slug": "Ronde-khas-karanganyar",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "portfolio_category": {
                    "id": 1,
                    "category_name": "Makanan & Minuman",
                    "created_at": "2020-10-06T14:43:11.000000Z",
                    "updated_at": "2020-10-06T14:43:11.000000Z"
                },
                "user": {
                    "id": 3,
                    "name": "user",
                    "email": "user@user.com",
                    "email_verified_at": null,
                    "photo_user": "images/user/photo/default.jpg",
                    "cover_user": "images/user/cover/default.jpg",
                    "address": "Matesih",
                    "gender": "Laki-laki",
                    "role": "user",
                    "created_at": "2020-10-06T14:43:09.000000Z",
                    "updated_at": "2020-10-06T14:43:09.000000Z"
                },
                "galleries": [
                    {
                        "id": 3,
                        "portfolio_id": 1,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:14.000000Z",
                        "updated_at": "2020-10-06T14:43:14.000000Z"
                    },
                    {
                        "id": 4,
                        "portfolio_id": 1,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:14.000000Z",
                        "updated_at": "2020-10-06T14:43:14.000000Z"
                    }
                ]
            }
}
```

## Delete Portfolio Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio/delete/__:id__           | DELETE   | used for show delete portolio        | __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/portfolio/delete/1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Portfolio Berhasil Dihapus"
    },
    "data": 1
}
```


## Search Portfolio by name

URL Params
```json
name
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio/           | GET   | used for search portfolio by name        | __Header Request__ :<br>Authorization: string                                  |                                               |

```bash
http://example.dev/api/v1/portfolio?name=Gantungan Kunci
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Portfolio Berhasil diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "portfolio_name": "Gantungan Kunci",
                "user_id": 3,
                "portfolio_category_id": 3,
                "price": 500,
                "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "status": "0",
                "slug": "gantungan-kunci",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "portfolio_category": {
                    "id": 3,
                    "category_name": "Aksesoris",
                    "created_at": "2020-10-06T14:43:12.000000Z",
                    "updated_at": "2020-10-06T14:43:12.000000Z"
                },
                "user": {
                    "id": 3,
                    "name": "user",
                    "email": "user@user.com",
                    "email_verified_at": null,
                    "photo_user": "images/user/photo/default.jpg",
                    "cover_user": "images/user/cover/default.jpg",
                    "address": "Matesih",
                    "gender": "Laki-laki",
                    "role": "user",
                    "created_at": "2020-10-06T14:43:09.000000Z",
                    "updated_at": "2020-10-06T14:43:09.000000Z"
                },
                "galleries": [
                    {
                        "id": 1,
                        "portfolio_id": 2,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:13.000000Z",
                        "updated_at": "2020-10-06T14:43:13.000000Z"
                    },
                    {
                        "id": 2,
                        "portfolio_id": 2,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:13.000000Z",
                        "updated_at": "2020-10-06T14:43:13.000000Z"
                    }
                ]
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/portfolio?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://localhost:8000/api/v1/portfolio",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```

## Search Portfolio by price from (harga lebih dari sama dengan)

URL Params
```json
price_from
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio/           | GET   | used for search price from        | __Header Request__ :<br>Authorization: string                                  |                                               |

```bash
http://example.dev/api/v1/portfolio?=price_from=5000
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Portfolio Berhasil diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "portfolio_name": "Ronde khas karanganyar",
                "user_id": 3,
                "portfolio_category_id": 1,
                "price": 20000,
                "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "status": "0",
                "slug": "Ronde-khas-karanganyar",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "portfolio_category": {
                    "id": 1,
                    "category_name": "Makanan & Minuman",
                    "created_at": "2020-10-06T14:43:11.000000Z",
                    "updated_at": "2020-10-06T14:43:11.000000Z"
                },
                "user": {
                    "id": 3,
                    "name": "user",
                    "email": "user@user.com",
                    "email_verified_at": null,
                    "photo_user": "images/user/photo/default.jpg",
                    "cover_user": "images/user/cover/default.jpg",
                    "address": "Matesih",
                    "gender": "Laki-laki",
                    "role": "user",
                    "created_at": "2020-10-06T14:43:09.000000Z",
                    "updated_at": "2020-10-06T14:43:09.000000Z"
                },
                "galleries": [
                    {
                        "id": 3,
                        "portfolio_id": 1,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:14.000000Z",
                        "updated_at": "2020-10-06T14:43:14.000000Z"
                    },
                    {
                        "id": 4,
                        "portfolio_id": 1,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:14.000000Z",
                        "updated_at": "2020-10-06T14:43:14.000000Z"
                    }
                ]
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/portfolio?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://localhost:8000/api/v1/portfolio",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
## Search Portfolio by Price to (Harga Kurang dari sama dengan)
URL Params
```json
price_to
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio/           | GET   | used for search price from        | __Header Request__ :<br>Authorization: string                                  |                                               |

```bash
http://example.dev/api/v1/portfolio?=price_to=5000
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Portfolio Berhasil diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "portfolio_name": "Gantungan Kunci",
                "user_id": 3,
                "portfolio_category_id": 3,
                "price": 500,
                "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "status": "0",
                "slug": "gantungan-kunci",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "portfolio_category": {
                    "id": 3,
                    "category_name": "Aksesoris",
                    "created_at": "2020-10-06T14:43:12.000000Z",
                    "updated_at": "2020-10-06T14:43:12.000000Z"
                },
                "user": {
                    "id": 3,
                    "name": "user",
                    "email": "user@user.com",
                    "email_verified_at": null,
                    "photo_user": "images/user/photo/default.jpg",
                    "cover_user": "images/user/cover/default.jpg",
                    "address": "Matesih",
                    "gender": "Laki-laki",
                    "role": "user",
                    "created_at": "2020-10-06T14:43:09.000000Z",
                    "updated_at": "2020-10-06T14:43:09.000000Z"
                },
                "galleries": [
                    {
                        "id": 1,
                        "portfolio_id": 2,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:13.000000Z",
                        "updated_at": "2020-10-06T14:43:13.000000Z"
                    },
                    {
                        "id": 2,
                        "portfolio_id": 2,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:13.000000Z",
                        "updated_at": "2020-10-06T14:43:13.000000Z"
                    }
                ]
            },
            {
                "id": 3,
                "portfolio_name": "Sabun Kecantikan",
                "user_id": 3,
                "portfolio_category_id": 2,
                "price": 2000,
                "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "status": "0",
                "slug": "sabun-kecantikan",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "portfolio_category": {
                    "id": 2,
                    "category_name": "Kecantikan",
                    "created_at": "2020-10-06T14:43:11.000000Z",
                    "updated_at": "2020-10-06T14:43:11.000000Z"
                },
                "user": {
                    "id": 3,
                    "name": "user",
                    "email": "user@user.com",
                    "email_verified_at": null,
                    "photo_user": "images/user/photo/default.jpg",
                    "cover_user": "images/user/cover/default.jpg",
                    "address": "Matesih",
                    "gender": "Laki-laki",
                    "role": "user",
                    "created_at": "2020-10-06T14:43:09.000000Z",
                    "updated_at": "2020-10-06T14:43:09.000000Z"
                },
                "galleries": []
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/portfolio?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://localhost:8000/api/v1/portfolio",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
```
## Search Portfolio by Category (ID)

URL Params
```json
category
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio/           | GET   | used for search portfolio by category       | __Header Request__ :<br>Authorization: string                                  |                                               |

```bash
http://example.dev/api/v1/portfolio?category=1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Portfolio Berhasil diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "portfolio_name": "Ronde khas karanganyar",
                "user_id": 3,
                "portfolio_category_id": 1,
                "price": 20000,
                "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "status": "0",
                "slug": "Ronde-khas-karanganyar",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "portfolio_category": {
                    "id": 1,
                    "category_name": "Makanan & Minuman",
                    "created_at": "2020-10-06T14:43:11.000000Z",
                    "updated_at": "2020-10-06T14:43:11.000000Z"
                },
                "user": {
                    "id": 3,
                    "name": "user",
                    "email": "user@user.com",
                    "email_verified_at": null,
                    "photo_user": "images/user/photo/default.jpg",
                    "cover_user": "images/user/cover/default.jpg",
                    "address": "Matesih",
                    "gender": "Laki-laki",
                    "role": "user",
                    "created_at": "2020-10-06T14:43:09.000000Z",
                    "updated_at": "2020-10-06T14:43:09.000000Z"
                },
                "galleries": [
                    {
                        "id": 3,
                        "portfolio_id": 1,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:14.000000Z",
                        "updated_at": "2020-10-06T14:43:14.000000Z"
                    },
                    {
                        "id": 4,
                        "portfolio_id": 1,
                        "photo": "image/portfolio/default.jpg",
                        "created_at": "2020-10-06T14:43:14.000000Z",
                        "updated_at": "2020-10-06T14:43:14.000000Z"
                    }
                ]
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/portfolio?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/portfolio?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://localhost:8000/api/v1/portfolio",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```