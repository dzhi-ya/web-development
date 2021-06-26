# Рубежный контроль
## _Веденин Иван Сергеевич 191-322_


Рубежный контроль по дисциплине "Веб-разработка"


## Вопросы:

- Аутентификация, Идентификация, Авторизация: дать определения.
- На примере разработанного апи пояснить в какой момент происходит какждый из видов данных терминов.
- Привести примеры кодов ответов API и в каких случаях они могут проявиться.

### Вопрос 1:

#### Аутентификация:

> Процедура проверки подлинности, 
> например проверка подлинности пользователя 
> путем сравнения введенного им пароля с паролем, 
> сохраненным в базе данных.

#### Идентификация:

> Процедура, в результате выполнения которой 
> для субъекта идентификации выявляется его идентификатор, 
> однозначно определяющий этого субъекта в информационной системе

#### Авторизация:

> Предоставление определенному лицу или группе лиц прав
> на выполнение определенных действий.

### Вопрос 2:

1) Аутентификация происходит на этапе, когда в API передается<br> 
   **{"username", "password"}**, после чего идёт проверка исходных данных в СУБД,<br>
   в нашем же случае данные хранятся в security.yaml, если данные являются валиднымы,<br>
   то (см. пункт **№2**), если нет, то процедуры идентификации не будет.<br>
   **Пример:**
   ```yaml
   security.yaml
   
     providers:
      backend_users:
        memory:
          users:
            ivan: { password: '$argon2id$v=19$m=65536,t=4,p=1$9z2Ntw5BC9XYwUpQy1Sw1Q$cfrfEQHPiYi4OOhKOHPJM/JvqQ3R+/qKJ7VHHyCvo5U', roles: [ 'IS_AUTHENTICATED_ANONYMOUSLY' ] }
   ```
2) Идентификация происходит после этапа (см. пункт **№1**), в ответе мы получаем JWT токен,<br>
   в котором содержится вся необходимая информация для последующей авторизации, <br>
   валидация происходит на этапе (см. пункт **№1**).<br>
   **Пример:**
   ```JWT
   {"token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c"}
   ```
3)  Авторизация происходит после этапа (см. пункт **№2**), когда пользователь<br>
    отправляет запросы на url, принадлежащие данному API, если же его роли дозволено,<br>
    это делать.

### Вопрос 3:

1) Отправка **POST** запроса в **API** _(АУТЕНТИФИКАЦИЯ И ИДЕНТИФИКАЦИЯ)_:<br>
  _**URL**: http://project-symfony.local:8081/api/v1/test/login_check_ <br>
   ```json
   {
    "username": "ivan",
    "password": "qwerty"
   }
   ```
   Если данные **верны**, то получаем **токен**: <br>
   ```json
   {
     "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2MjQ3MDQzNzYsImV4cCI6MTYyNDcwNzk3Niwicm9sZXMiOlsiSVNfQVVUSEVOVElDQVRFRF9BTk9OWU1PVVNMWSJdLCJ1c2VybmFtZSI6Iml2YW4ifQ.XOV558URYM6hp98QY3TkgQ890cryNIyBJGQrlXwLfh5eTeljXVqrXVno7J20agVnHIoKaOzAD6FsfK2PgO3dHpjJzybKeAilgagqhQ54NSTJnLID9BWUSDWPtBCJ68rG0awdjDNcCHS9xqWqHzvuUaMUjj_5TarAohJXPpKyoMlSXkuW-LMZ7hqksWRZLB2aNHHNsab9CjT3zknYFVwMslzVlUfhH0951NCVQBy1r0BuJIaenE78TGk-Cd_CZQi811NLERG-2J_cqC0EP4q7OaDHvzqSxH_pgbXA9w3S5EZdnUBMRASbdrn_FQlwSiYKDHQsZrc9GXgFcqpTmBUX-A"
   }
   status: 200 OK
   ```
   Если данные **не верны**, то получаем **ошибку**: <br>
   ```json
   {
     "code": 401,
     "message": "Invalid credentials."
   }
   status: 401 UNAUTHORIZED
   ```
2) Используя полученный токен, авторизируемся, передав его в HEADER:<br>
   _**URL**: http://project-symfony.local:8081/api/v1/test/users_ <br>
   ```text
   Authorization: BERAER eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2MjQ3MDUwMjcsImV4cCI6MTYyNDcwODYyNywicm9sZXMiOlsiSVNfQVVUSEVOVElDQVRFRF9BTk9OWU1PVVNMWSJdLCJ1c2VybmFtZSI6Iml2YW4ifQ.bTz9MFqvhf1Opp_pDW4ONDef4OggFrAWssqeYjei4sXZ5R6a9HEXWY8SnBKWV9a2ik4ohLBzdxDQJnhwhkNlRxi6MGXI4aYYQcwpZ3R1dhYH2fiZky8-5AWV-ZrA-P6J7L_u4lW3kgqhxETNGuOOzr-GgSRiRvxrlAW4GFbGyJroI6e2FCD8kSXoy6OEmsfeAZ1rerNaiecbJZdHbsrbOQX8AmYWbBmbNOImJePJ3l339-5uviGqN4ChDQs7R6TWPee7Ppp0UPsOaMeKtvLtT38iOTAHLfdQhxiNjDtoCHlueaROeYKw1xKvFDgNf5NiDbsjE2Tk0IoHswywKeZX7Q
   ```
   Если токен **валидный**, то получим:<br>
   ```json
   {
     "username": "ivan",
     "iat": 1624705027,
     "exp": 1624708627,
     "roles": [
         "IS_AUTHENTICATED_ANONYMOUSLY"
     ]
   }
   ```
   Если же, токен введен неверно, или его срок действия истек, то: <br>
   ```json
   {
     "code": 401,
     "message": "Invalid JWT Token"
   }
   ```
