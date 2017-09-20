---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#general
<!-- START_2d11217d735cdcd99c83dd8ff2c663b0 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/allUsers" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/allUsers",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": false,
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "name": "kumar",
                "email": "kumar@gmail.com",
                "created_at": "2017-09-19 06:15:30",
                "updated_at": "2017-09-19 07:04:58",
                "image": ""
            },
            {
                "id": 3,
                "name": "sourabh",
                "email": "sourabhcybo@gmail.com",
                "created_at": "2017-09-19 06:29:52",
                "updated_at": "2017-09-19 12:15:20",
                "image": ""
            },
            {
                "id": 4,
                "name": "testupdate",
                "email": "updatetest@gmail.com",
                "created_at": "2017-09-19 07:11:07",
                "updated_at": "2017-09-19 10:35:24",
                "image": "123"
            },
            {
                "id": 5,
                "name": "test",
                "email": "test@gmail.com",
                "created_at": "2017-09-19 08:56:28",
                "updated_at": "2017-09-19 08:56:28",
                "image": ""
            },
            {
                "id": 6,
                "name": "test",
                "email": "test2@gmail.com",
                "created_at": "2017-09-19 08:57:57",
                "updated_at": "2017-09-19 08:57:57",
                "image": ""
            },
            {
                "id": 7,
                "name": "test",
                "email": "test3@gmail.com",
                "created_at": "2017-09-19 09:00:01",
                "updated_at": "2017-09-19 09:00:01",
                "image": ""
            },
            {
                "id": 8,
                "name": "test",
                "email": "test4@gmail.com",
                "created_at": "2017-09-19 09:01:46",
                "updated_at": "2017-09-19 09:01:46",
                "image": ""
            },
            {
                "id": 9,
                "name": "testupdate",
                "email": "updatetest1@gmail.com",
                "created_at": "2017-09-19 10:43:02",
                "updated_at": "2017-09-19 10:45:00",
                "image": "123.jpg"
            },
            {
                "id": 10,
                "name": "test",
                "email": "biharexam@gmail.com",
                "created_at": "2017-09-19 12:28:21",
                "updated_at": "2017-09-19 12:28:21",
                "image": null
            },
            {
                "id": 11,
                "name": "test",
                "email": "biharexam1@gmail.com",
                "created_at": "2017-09-19 12:48:55",
                "updated_at": "2017-09-19 12:48:55",
                "image": null
            }
        ],
        "first_page_url": "http:\/\/localhostapi\/allUsers?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http:\/\/localhostapi\/allUsers?page=2",
        "next_page_url": "http:\/\/localhostapi\/allUsers?page=2",
        "path": "http:\/\/localhostapi\/allUsers",
        "per_page": 10,
        "prev_page_url": null,
        "to": 10,
        "total": 12
    }
}
```

### HTTP Request
`GET api/allUsers`

`HEAD api/allUsers`


<!-- END_2d11217d735cdcd99c83dd8ff2c663b0 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## api/register

> Example request:

```bash
curl -X POST "http://localhost/api/register" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/register",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login

> Example request:

```bash
curl -X POST "http://localhost/api/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_584f2c59c20ce2add6074ff524600f71 -->
## api/forgot

> Example request:

```bash
curl -X POST "http://localhost/api/forgot" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/forgot",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/forgot`


<!-- END_584f2c59c20ce2add6074ff524600f71 -->

<!-- START_e1a99444c6d02f7d3fc5b451bb44be1d -->
## api/reset

> Example request:

```bash
curl -X POST "http://localhost/api/reset" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/reset",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/reset`


<!-- END_e1a99444c6d02f7d3fc5b451bb44be1d -->

<!-- START_92ebb0ae5447ba2d36c45b1c62f3bff7 -->
## api/profile

> Example request:

```bash
curl -X GET "http://localhost/api/profile" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/profile",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/profile`

`HEAD api/profile`


<!-- END_92ebb0ae5447ba2d36c45b1c62f3bff7 -->

<!-- START_45b1d8a6c31a6b5fe9eaa3ae44bb584a -->
## api/updateProfile

> Example request:

```bash
curl -X PUT "http://localhost/api/updateProfile" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/updateProfile",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/updateProfile`


<!-- END_45b1d8a6c31a6b5fe9eaa3ae44bb584a -->

<!-- START_bf49bdb7504c0381707cc0e07751a6b9 -->
## api/deleteUser

> Example request:

```bash
curl -X DELETE "http://localhost/api/deleteUser" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/deleteUser",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/deleteUser`


<!-- END_bf49bdb7504c0381707cc0e07751a6b9 -->

