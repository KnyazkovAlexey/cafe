<p align="center">
    <h1 align="center">Тестовое задание</h1>
    <br>
</p>

<pre>
Бизнес модель - кафе 
 
Особенности: 
 
повара готовят конкретные блюда 
меню формируется на основе готовых блюд 
посетитель заказывает блюда из меню 
Сделать: 
Разработать на php : 
Физическая модель данных (в таблицах использовать минимум аттрибутов) 
Метод REST API открытия чека 
Метод REST API добавление позиции из меню в чек 
Метод REST API получения списка популярных поваров за период ( критерий популярности - количество заказанных блюд )

Использовать yii2

<h2>Методы</h2>
<pre>
1). Добавление повара:
POST http://localhost/api/v1/cooks
Content-Type: application/json

{"name" : "Аристарх Пышкин"}

2). Добавление позиции меню:
POST http://localhost/api/v1/menu-positions
Content-Type: application/json

{"cook_id": 1, "name": "Карбонара",  "price": 100}

3). Открытие чека:
POST http://localhost/api/v1/checks
Content-Type: application/json

{}

4). Добавление позиции в чек:
POST http://localhost/api/v1/check-positions
Content-Type: application/json

{"check_id": 1, "menu_position_id": 1}

5). Получение списка популярных поваров за период:
GET http://localhost/api/v1/cooks/popular?from=2023-01-01&to=2023-12-01

</pre>