# Endpoint Blog Category

---

<a name="section-1"></a>
## Show All Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/Blog-category           | POST   | used for show all Blog Category        | __Header Request__ :<br>Authorization: string                                  |                                               |

Example :

```bash
www.example.dev/api/v1/Blog-category 

```


Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Kategori Blog Berhasil Diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "category_name": "Berita",
                "created_at": "2020-10-05T13:50:38.000000Z",
                "updated_at": "2020-10-05T13:50:38.000000Z"
            },
            {
                "id": 2,
                "category_name": "Postingan",
                "created_at": "2020-10-05T13:50:39.000000Z",
                "updated_at": "2020-10-05T13:50:39.000000Z"
            },
            {
                "id": 3,
                "category_name": "Pengumuman",
                "created_at": "2020-10-05T13:50:39.000000Z",
                "updated_at": "2020-10-05T13:50:39.000000Z"
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/Blog-category?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/v1/Blog-category?page=1",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/Blog-category?page=1",
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
        "path": "http://localhost:8000/api/v1/Blog-category",
        "per_page": 10,
        "prev_page_url": null,
        "to": 3,
        "total": 3
    }
}
```


## Add New Blog Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/Blog-category           | POST   | used for show all Blog Category        | __Body Request__ :<br>category_name: String  __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/Blog-category 
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Kategori Blog Berhasil Ditambahkan"
    },
    "data": {
        "category_name": "Update Terbaru",
        "updated_at": "2020-10-05T14:01:15.000000Z",
        "created_at": "2020-10-05T14:01:15.000000Z",
        "id": 4
    }
}
```
## Update Blog Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/Blog-category/update/__:id__           | PUT   | used for update Blog Category        | __Body Request__ :<br>category_name: String  __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/Blog-category/update/1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Kategori Blog Berhasil Diperbarui"
    },
    "data": {
        "category_name": "Update Terbaru",
        "updated_at": "2020-10-05T14:01:15.000000Z",
        "created_at": "2020-10-05T14:01:15.000000Z",
        "id": 4
    }
}
```


## Show Detail Blog Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/Blog-category/__:id__           | GET   | used for show detail Blog Category        | __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/Blog-category/1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Detail Kategori Blog Berhasil Diambil"
    },
    "data": {
        "id": 1,
        "category_name": "Berita",
        "created_at": "2020-10-05T13:50:38.000000Z",
        "updated_at": "2020-10-05T13:50:38.000000Z"
    }
```


## Delete Blog Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/Blog-category/delete/__:id__           | GET   | used for show delete Blog Category        | __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/Blog-category/delete/1
```


Data Response 

```json

{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Kategori Blog Berhasil Dihapus"
    },
    "data": null
}
```