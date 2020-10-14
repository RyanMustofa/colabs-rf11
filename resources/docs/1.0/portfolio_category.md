# Endpoint Portfolio Category

---

<a name="section-1"></a>
## Show All Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio-category           | POST   | used for show all Portfolio Category        | __Header Request__ :<br>Authorization: string                                  |                                               |


Example :
```bash
www.example.dev/api/v1/portfolio-category
```
Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Kategori Portfolio Berhasil Diambil"
    },
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "category_name": "Makanan & Minuman",
                "created_at": "2020-10-05T13:50:39.000000Z",
                "updated_at": "2020-10-05T13:50:39.000000Z"
            },
            {
                "id": 2,
                "category_name": "Kecantikan",
                "created_at": "2020-10-05T13:50:40.000000Z",
                "updated_at": "2020-10-05T13:50:40.000000Z"
            },
            {
                "id": 3,
                "category_name": "Aksesoris",
                "created_at": "2020-10-05T13:50:40.000000Z",
                "updated_at": "2020-10-05T13:50:40.000000Z"
            },
            {
                "id": 4,
                "category_name": "Elekronik",
                "created_at": "2020-10-05T13:50:40.000000Z",
                "updated_at": "2020-10-05T13:50:40.000000Z"
            },
            {
                "id": 5,
                "category_name": "Kesehatan",
                "created_at": "2020-10-05T13:50:40.000000Z",
                "updated_at": "2020-10-05T13:50:40.000000Z"
            },
            {
                "id": 6,
                "category_name": "Dapur ",
                "created_at": "2020-10-05T13:50:40.000000Z",
                "updated_at": "2020-10-05T13:50:40.000000Z"
            },
            {
                "id": 7,
                "category_name": "Otomotif",
                "created_at": "2020-10-05T13:50:40.000000Z",
                "updated_at": "2020-10-05T13:50:40.000000Z"
            },
            {
                "id": 8,
                "category_name": "Rumah tangga ",
                "created_at": "2020-10-05T13:50:40.000000Z",
                "updated_at": "2020-10-05T13:50:40.000000Z"
            },
            {
                "id": 9,
                "category_name": "Fashion Pria ",
                "created_at": "2020-10-05T13:50:40.000000Z",
                "updated_at": "2020-10-05T13:50:40.000000Z"
            },
            {
                "id": 10,
                "category_name": "Fashion Wanita ",
                "created_at": "2020-10-05T13:50:40.000000Z",
                "updated_at": "2020-10-05T13:50:40.000000Z"
            }
        ],
        "first_page_url": "http://localhost:8000/api/v1/portfolio-category?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http://localhost:8000/api/v1/portfolio-category?page=2",
        "links": [
            {
                "url": null,
                "label": "Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/portfolio-category?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": "http://localhost:8000/api/v1/portfolio-category?page=2",
                "label": 2,
                "active": false
            },
            {
                "url": "http://localhost:8000/api/v1/portfolio-category?page=2",
                "label": "Next",
                "active": false
            }
        ],
        "next_page_url": "http://localhost:8000/api/v1/portfolio-category?page=2",
        "path": "http://localhost:8000/api/v1/portfolio-category",
        "per_page": 10,
        "prev_page_url": null,
        "to": 10,
        "total": 11
    }
}
```


## Add New Portfolio Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio-category           | POST   | used for add new  portfolio Category        |  __Header Request__ :<br>Authorization: string <br> __Body Request__ : category_name:String                                |                                               |

Example :
```bash
www.example.dev/api/v1/portfolio-category
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Kategori Portfolio Berhasil Ditambahkan"
    },
    "data": {
        "category_name": "Update Terbaru",
        "updated_at": "2020-10-05T14:09:00.000000Z",
        "created_at": "2020-10-05T14:09:00.000000Z",
        "id": 12
    }
}
```
## Update Portfolio Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio-category/update/__:id__           | PUT   | used for update Portfolio Category        | __Body Request__ :<br>category_name: String <br> __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/portfolio-category/update/1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Kategori Portfolio Berhasil Diperbarui"
    },
    "data": {
        "category_name": "Update Terbaru",
        "updated_at": "2020-10-05T14:01:15.000000Z",
        "created_at": "2020-10-05T14:01:15.000000Z",
        "id": 4
    }
}
```


## Show Detail Portfolio Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio-category/__:id__           | GET   | used for show detail portfolio Category        | __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/portfolio-category/1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Detail Kategori Portfolio Berhasil Diambil"
    },
    "data": {
    "id": 1,
        "category_name": "Makanan & Minuman",
        "created_at": "2020-10-05T13:50:39.000000Z",
        "updated_at": "2020-10-05T13:50:39.000000Z"
    }
```


## Delete Blog Category

URL Params
```json
None
```

| ENDPOINT                      | Method | Description                                  | Data                                                                                             |
| ------------------------- | ------ | -------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| /api/v1/portfolio-category/delete/__:id__           | GET   | used for show delete portfolio Category        | __Header Request__ :<br>Authorization: string                                  |                                               |

Example :
```bash
www.example.dev/api/v1/portfolio-category/delete/1
```

Data Response 

```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Data Kategori Portfolio Berhasil Dihapus"
    },
    "data": null
}
```