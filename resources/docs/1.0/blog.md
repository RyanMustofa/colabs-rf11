# Endpoint Blog

---

__NOTE :__ __Status__: __publish__, __draft__, __archive__  

<a name="section-1"></a>
## Show All Blog Where Status is Publish

URL Params

```bash
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/blog           | GET   | used for show all Blog where status is publish       |  -                                | 

Example :
```bash
www.example.dev/api/v1/blog
```


Data Response

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Blog Berhasil Diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "title": "Postingan 1",
                "user_id": 3,
                "blog_category_id": 2,
                "content": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "cover": "images/blog/default.jpg",
                "status": "publish",
                "slug": "postingan-1",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "blog__category": {
                    "id": 2,
                    "category_name": "Postingan",
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
                }
            },
            {
                "id": 2,
                "title": "Postingan 2",
                "user_id": 3,
                "blog_category_id": 2,
                "content": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "cover": "images/blog/default.jpg",
                "status": "publish",
                "slug": "postingan-2",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z",
                "blog__category": {
                    "id": 2,
                    "category_name": "Postingan",
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
                }
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/blog/all?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/blog/all?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/blog/all?page=1",
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
        "path": "http://localhost:8000/api/v1/blog/all",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2,
        "total": 2
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
| /api/v1/blog           | POST   | use for add new blog        | __Body Request__ :<br>title: String, user_id: integer, <br> blog_category_id: integer, <br> price:integer,cover: file|string, status: string <br>  __Header Request__ :<br>Authorization: string                                  |

Example :
```bash
www.example.dev/api/v1/blog
```
Data Response 
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Postingan Berhasil Ditambahkan"
    },
    "data": {
        "title": "tedst",
        "user_id": 1,
        "blog_category_id": "2",
        "content": "lorem",
        "cover": {},
        "status": "publish",
        "slug": "tedst",
        "updated_at": "2020-10-07T02:57:13.000000Z",
        "created_at": "2020-10-07T02:57:13.000000Z",
        "id": 4
    }
}
```


## Update Portfolio

URL Params
```json
_method_
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/blog/update-post/__:id__           | POST   | used for update data portfolio       | __Body Request__ :<br>title: String, user_id: integer, blog_category_id: integer, price: integer,cover: file|string, status: string <br>  __Header Request__ :<br>Authorization: string                                                                                 |

Example :
```bash
www.example.dev/api/v1/blog/update-post/1?_method=put
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Postingan Berhasil Diperbarui"
    },
    "data": true
}
```
## Show Detail Blog
URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
|/api/v1/blog/detail-post/__:slug__           | GET   | used for show detail portfolio        | -                                 |                                               

Example :
```bash
www.example.dev/api/v1/blog/detail-post/postingan-1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Detail Postingan Berhasil Diambil"
    },
    "data": {
        "id": 1,
        "title": "Postingan 1",
        "user_id": 3,
        "blog_category_id": 2,
        "content": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
        "cover": "images/blog/default.jpg",
        "status": "publish",
        "slug": "postingan-1",
        "created_at": "2020-10-06T14:43:13.000000Z",
        "updated_at": "2020-10-06T14:43:13.000000Z",
        "blog__category": {
            "id": 2,
            "category_name": "Postingan",
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
        }
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
| /api/v1/blog/delete-post/__:id__           | DELETE   | used for show delete portolio        | -                                  |                


Example :
```bash
www.example.dev/api/v1/blog/delete-post/1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Blog Berhasil Dihapus"
    },
    "data": 1
}
```


## Search Blog by name

URL Params
```json
name
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/blog          | GET   | used for search blog by name        | -                               |                                               

Example :
```bash
http://example.dev/api/v1/blog?name=postingan 1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Blog Berhasil diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "title": "Postingan 1",
                "user_id": 3,
                "blog_category_id": 2,
                "content": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "cover": "images/blog/default.jpg",
                "status": "publish",
                "slug": "postingan-1",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z"
            },
            {
                "id": 2,
                "title": "tedst",
                "user_id": 1,
                "blog_category_id": 2,
                "content": "lorem",
                "cover": "images/blog/1602039513-tedst-1602039513.png",
                "status": "publish",
                "slug": "tedst",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-07T02:58:33.000000Z"
            },
            {
                "id": 4,
                "title": "tedst",
                "user_id": 1,
                "blog_category_id": 2,
                "content": "lorem",
                "cover": "images/blog/1602039433-tedst-1602039433.png",
                "status": "publish",
                "slug": "tedst",
                "created_at": "2020-10-07T02:57:13.000000Z",
                "updated_at": "2020-10-07T02:57:13.000000Z"
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/blog?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/blog?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/blog?page=1",
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
        "path": "http://localhost:8000/api/v1/blog",
        "per_page": 10,
        "prev_page_url": null,
        "to": 3,
        "total": 3
    }
}
```

## Search Blog by Content


URL Params
```json
content
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/blog           | GET   | used for search blog by content        | -                                  |                                               

Example :
```bash
http://example.dev/api/v1/blog?content=lorem
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Blog Berhasil diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "title": "Postingan 1",
                "user_id": 3,
                "blog_category_id": 2,
                "content": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "cover": "images/blog/default.jpg",
                "status": "publish",
                "slug": "postingan-1",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z"
            },
            {
                "id": 2,
                "title": "tedst",
                "user_id": 1,
                "blog_category_id": 2,
                "content": "lorem",
                "cover": "images/blog/1602039513-tedst-1602039513.png",
                "status": "publish",
                "slug": "tedst",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-07T02:58:33.000000Z"
            },
            {
                "id": 4,
                "title": "tedst",
                "user_id": 1,
                "blog_category_id": 2,
                "content": "lorem",
                "cover": "images/blog/1602039433-tedst-1602039433.png",
                "status": "publish",
                "slug": "tedst",
                "created_at": "2020-10-07T02:57:13.000000Z",
                "updated_at": "2020-10-07T02:57:13.000000Z"
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/blog?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/blog?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/blog?page=1",
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
        "path": "http://localhost:8000/api/v1/blog",
        "per_page": 10,
        "prev_page_url": null,
        "to": 3,
        "total": 3
    }
}
```
## Search Blog by Category (ID)
URL Params
```json
category
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/blog           | GET   | used for search blog by category id        | -                                 |

Example :
```bash
http://example.dev/api/v1/blog?category=2
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Blog Berhasil diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "title": "Postingan 1",
                "user_id": 3,
                "blog_category_id": 2,
                "content": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.",
                "cover": "images/blog/default.jpg",
                "status": "publish",
                "slug": "postingan-1",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-06T14:43:13.000000Z"
            },
            {
                "id": 2,
                "title": "tedst",
                "user_id": 1,
                "blog_category_id": 2,
                "content": "lorem",
                "cover": "images/blog/1602039513-tedst-1602039513.png",
                "status": "publish",
                "slug": "tedst",
                "created_at": "2020-10-06T14:43:13.000000Z",
                "updated_at": "2020-10-07T02:58:33.000000Z"
            },
            {
                "id": 4,
                "title": "tedst",
                "user_id": 1,
                "blog_category_id": 2,
                "content": "lorem",
                "cover": "images/blog/1602039433-tedst-1602039433.png",
                "status": "publish",
                "slug": "tedst",
                "created_at": "2020-10-07T02:57:13.000000Z",
                "updated_at": "2020-10-07T02:57:13.000000Z"
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/blog?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/blog?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/blog?page=1",
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
        "path": "http://localhost:8000/api/v1/blog",
        "per_page": 10,
        "prev_page_url": null,
        "to": 3,
        "total": 3
    }
}
```
