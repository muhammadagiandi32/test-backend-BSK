Lampiran test BackEnd, Muhammad Agiandi

-   Route

Route resource Restfull API

Methode GET all data user

-   http://127.0.0.1:8000/api/user/

Methode POST untuk Insert data

-   http://127.0.0.1:8000/api/user/

    Formant data:
    'name' => 'required',
    'birth_date' => 'required|date_format:Y-m-d',
    'birth_place' => 'required',
    'gender' => 'required',

Methode GET untuk show 1 data user

-   http://127.0.0.1:8000/api/user/{id}

Methode PUT|PATCH untuk update 1 data user

-   http://127.0.0.1:8000/api/user/{id}

    Formant data:
    'name' => 'required',
    'birth_date' => 'required|date_format:Y-m-d',
    'birth_place' => 'required',
    'gender' => 'required',

Methode DELETE untuk menghapus 1 data user

-   http://127.0.0.1:8000/api/user/{id}

Route Respons API data user

-   http://127.0.0.1:8000/api/data-user/
