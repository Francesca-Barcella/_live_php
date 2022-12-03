# library tb

Tables:
- books
- copies
- conditions
- genres
- autors
- rents
- users
- details

Relationships:
- oneToMany > books & copies | copies & conditions | books & autors | copies & rents | rents & users 
- manyToMany > books & genres | (!!! pivot table!!!)
- oneToOne > users & details


## TABLE BOOKS:
- id            | BIGINT PK AI NOTNULL UNIQUE
- autor_id      | FK BIGIN <!--  FK = FOREING KWEY - CHIAVE ESTERNA -->
- title         | VARCHAR(255) | NOTNULL
- price         | DECIMAL(5,2) | NULL
- cover         | VARCHAR(255) | NULL
- language      | VARCHAR(5) | NULL
- year          | YEAR | NULL
- plot          | TEXT | NULL
- vote          | FLOAT(2, 1) | DEFAULT(0)
- note          | TEXT | NULL

## TABLE COPIES:
- id             | BIGINT PK AI NOTNULL UNIQUE
- book_id        | FK BIGINT <!--  FK = FOREING KWEY - CHIAVE ESTERNA -->
- condition_id   | FK BIGINT <!--  FK = FOREING KWEY - CHIAVE ESTERNA -->
- isbn           | CHAR(13) | NOTNULL
- pages          | SMALLINT | NULL
- ?: publisher   | VARCHAR(30) | NULL

## TABLE CONDITIONS:
- id        | BIGINT PK AI NOTNULL UNIQUE
- name      | VARCHAR(30) | NOTNULL UNIQUE 

## TABLE BOOK_GENRE (tabello pivot):
- book_id        | FK BIGINT <!--  FK = FOREING KWEY - CHIAVE ESTERNA -->
- genre_id       | FK BIGINT <!--  FK = FOREING KWEY - CHIAVE ESTERNA -->

## TABLE GENRES:
- id        | BIGINT PK AI NOTNULL UNIQUE
- slug      | VARCHAR(30) | NOTNULL 
<!-- 
nome di genre che comprende due generi - esempio:
amore e polizia
amore_e_polizia  
-->
- name      | VARCHAR(30) | NOTNULL

## TABLE AUTOR:
- id        | BIGINT PK AI NOTNULL UNIQUE
- fullname  | VARCHAR(255) | NOTNULL


## TABLE RENTS:
- id           | BIGINT PK AI NOTNULL UNIQUE
- copy_id      | FK BIGINT <!--  FK = FOREING KWEY - CHIAVE ESTERNA -->
- user_id       | FK BIGINT <!--  FK = FOREING KWEY - CHIAVE ESTERNA -->
- start_date   | DATETIME | NOTNULL
- end_date     | DATETIME | NOTNULL

## TABLE USERS:
- id          | BIGINT PK AI NOTNULL UNIQUE
- name        | VARCHAR(255) | NOTNULL
- lastname    | VARCHAR(255) | NOTNULL

## TABLE USERS_DETAILS:
- id          | BIGINT PK AI NOTNULL UNIQUE
- user_id     | VARCHAR(255) | NOTNULL
- email       | VARCHAR(255) | NOTNULL
- adress | VARCHAR(255) | NOTNULL
- phone | VARCHAR(255) | NOTNULL


