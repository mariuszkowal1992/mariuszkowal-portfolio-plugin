# EN: Mariusz Kowal Portfolio Plugin

A WordPress plugin created as part of the **MARIUSZKOWAL - WordPress** project. This repository serves to showcase the code structure and organization of a custom plugin, rather than acting as a ready-to-use package for download and installation.

## Project Goal

The purpose of this plugin is to separate the portfolio functionality from the WordPress theme. This ensures that the logic responsible for managing projects can be developed independently of the website's visual layer.

## Features

The plugin introduces a custom post type to WordPress:

- `project` - posts representing portfolio projects.

In the WordPress admin dashboard, projects are visible under the **Portfolio** menu item. The plugin also registers a hierarchical taxonomy:

- `project-category` - project categories.

This allows projects to be saved in the WordPress database, edited via the admin panel, and assigned to specific categories.

## Code Scope

The repository demonstrates, among other things:

- the structure of a simple WordPress plugin,
- custom post type registration,
- custom taxonomy registration,
- plugin activation and deactivation handling,
- a basic `uninstall.php` file for cleaning up data upon uninstallation.

## Status

This is a demonstration project developed as a component of a programming portfolio. It is not intended for distribution as a public WordPress plugin.

## Technologies

- WordPress
- PHP
- Custom Post Types
- Custom Taxonomies

## Author

Mariusz Kowal


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
