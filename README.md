# EN: Mariusz Kowal Portfolio Plugin

A WordPress plugin created as part of the **MARIUSZKOWAL - WordPress** project. This repository is intended to present the code and organization of a custom plugin, not to provide a ready-made package for download and installation.

## Project Purpose

The purpose of the plugin is to separate portfolio functionality from the WordPress theme. This allows the logic responsible for projects to be developed independently from the visual layer of the website.

## Functionality

The plugin adds a custom post type to WordPress:

- `project` - posts representing portfolio projects.

In the WordPress admin panel, projects are available under the **Portfolio** menu item. The plugin also adds a hierarchical taxonomy:

- `project-category` - project categories.

This allows projects to be stored in the WordPress database, edited in the admin panel, and assigned to categories.

## Code Scope

The repository demonstrates, among other things:

- the structure of a simple WordPress plugin,
- registration of a custom post type,
- registration of a custom taxonomy,
- handling plugin activation and deactivation,
- a basic `uninstall.php` file that cleans up data after uninstallation.

## Status

The project is demonstrational and is being developed as part of a programming portfolio. It is not intended for distribution as a public WordPress plugin.

## Technologies

- WordPress
- PHP
- Custom Post Types
- Custom Taxonomies

## Author

Mariusz Kowal

<<<<<<< HEAD
=======

>>>>>>> 742feb5700169e0d60159a7e9bbb5fa838e4dabb
# PL: Mariusz Kowal Portfolio Plugin

Wtyczka WordPress stworzona jako czesc projektu **MARIUSZKOWAL - WordPress**. Repozytorium sluzy do prezentacji kodu i sposobu organizacji wlasnej wtyczki, a nie jako gotowa paczka do pobrania i instalacji.

## Cel projektu

Celem wtyczki jest oddzielenie funkcjonalnosci portfolio od motywu WordPress. Dzieki temu logika odpowiedzialna za projekty moze byc rozwijana niezaleznie od warstwy wizualnej strony.

## Funkcjonalnosc

Wtyczka dodaje do WordPressa niestandardowy typ wpisu:

- `project` - wpisy reprezentujace projekty portfolio.

W panelu administracyjnym WordPressa projekty sa widoczne pod pozycja **Portfolio**. Wtyczka dodaje rowniez hierarchiczna taksonomie:

- `project-category` - kategorie projektow.

Dzieki temu projekty moga byc zapisywane w bazie danych WordPressa, edytowane w panelu administracyjnym i przypisywane do kategorii.

## Zakres kodu

Repozytorium pokazuje miedzy innymi:

- strukture prostej wtyczki WordPress,
- rejestracje niestandardowego typu wpisu,
- rejestracje wlasnej taksonomii,
- obsluge aktywacji i dezaktywacji wtyczki,
- podstawowy plik `uninstall.php` czyszczacy dane po odinstalowaniu.

## Status

Projekt ma charakter demonstracyjny i jest rozwijany jako element portfolio programistycznego. Nie jest przeznaczony do dystrybucji jako publiczna wtyczka WordPress.

## Technologie

- WordPress
- PHP
- Custom Post Types
- Custom Taxonomies

## Autor

Mariusz Kowal
