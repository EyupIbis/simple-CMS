# Create your own CMS

## Inhoudsopgaven
 - [Introduction](#Introduction)
 - [Setting up](#Setting-up)
 - [Output pages](#Output-pages)
 - [Showing a page](#Showing-a-page)
 - [Admin panel](#Admin-panel)
 - [Adding pages](#Adding-pages)
 - [Editing pages](#Editing-pages)
 - [Deleting pages](#Deleting-pages)

## Introduction

We are going to build a basic CMS (content management system).
We are going to build a system to show our pages,
But also construct a admin panel, so we could add/modify/delete a page

Since we are using a database, we also need to take a look into creating a Database connection,
designing our database table, structuring a basic application.
We will take a look at Queries so we can add new pages to our application and we will dive into security in term on how
to set your application input to prevent XSS.

We will also take a look at separating the views from the logic.

**Quick look around application**


## Setting up

- Create a folder called ``CMS``.
- Enter the ``CMS`` folder and create a ``CSS`` folder.
- Create a ``app`` folder and a ``index.php`` file.
- Create inside the ``app`` folder a new folder called ``views``.
- Create a database called ``CMS`` with a table called ``Pages``.
- Use the following data structure:

  | column    | Datatype      | Unsigned  | Allow Null    | Pri Key   | Default   |
  |---        |---            |---        |---            |---        |---        | 
  | page_id   | int(11)       |           |               | x         |           |
  | label     | varchar(20)   |           |               |           |           |
  | title     | varchar(50)   |           |               |           |           |
  | body      | text          |           |               |           |           |
  | slug      | varchar(50    |           |               |           |           |
  | created   | timestamp     |           |               |           | On_update |
  | updated   | timestamp     |           | x             |           | Null      |

- Within the ``app`` folder, create the Start.php \
- Start defining Constants... \
- Open ``index.php`` to launch ``start.php``.
- inside ``start.php`` create the DB connection.
- Secure admin folder with ``.htaccess`` and a ``htpasswd``.
  - [htpasswd generator](http://www.htaccesstools.com/htpasswd-generator/)

## Output pages

- add a second page to your Database.
- create ``$pages`` variable
- ```var_dump($pages);```
- create the next views: Home, Template> header, footer
- fill home.php
- Create design



## Showing a page

## Admin panel

## Adding pages

## Editing pages

## Deleting pages