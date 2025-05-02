# WP Development Theme

Ein einfaches klassisches PHP Theme für WordPress, als Schulungs- und Übungsbeispiel zum Erlernen der Grundlagen des WordPress PHP-Theming.

## Struktur des Themes

Das Theme besteht aus den folgenden Hauptdateien und Verzeichnissen:

- **index.php**: Die Hauptdatei des Themes, die als Fallback für alle Seiten dient, wenn keine spezifischere Template-Datei vorhanden ist.
- **header.php** und **footer.php**: Enthalten den Kopf- und Fußbereich der Website, die in anderen Templates eingebunden werden.
- **functions.php**: Hier können Theme-spezifische Funktionen definiert werden, wie z. B. das Registrieren von Menüs oder das Hinzufügen von Theme-Support für bestimmte WordPress-Funktionen.
- **style.css**: Die Haupt-CSS-Datei des Themes, die auch die Theme-Metadaten enthält.
- **theme.json**: Eine Datei zur Konfiguration von Theme-Einstellungen, wie z. B. Farbpaletten oder Typografie, für den Block-Editor.
- **assets/fonts/**: Enthält Schriftarten und zugehörige CSS-Dateien.
- **sandbox.html**: Eine statische HTML-Datei, die dazu dient, CSS unabhängig von WordPress zu entwickeln und zu testen.

## Grundlagen des PHP Theme Development

Ein WordPress-Theme besteht aus einer Sammlung von PHP-Dateien, die zusammenarbeiten, um das Design und die Funktionalität einer Website zu definieren. Die wichtigsten Konzepte sind:

- **Template-Hierarchie**: WordPress verwendet eine hierarchische Struktur, um zu bestimmen, welche Template-Datei für eine bestimmte Seite geladen wird (z. B. `single.php` für einzelne Beiträge, `page.php` für Seiten).
- **Template-Tags**: PHP-Funktionen wie `get_header()` oder `the_content()`, die dynamische Inhalte aus der WordPress-Datenbank abrufen und anzeigen.
- **Enqueueing von Assets**: CSS- und JavaScript-Dateien sollten mit der Funktion `wp_enqueue_style()` bzw. `wp_enqueue_script()` eingebunden werden, um Konflikte zu vermeiden.

## Anmerkung zur Datei sandbox.html

Die Datei `sandbox.html` ist eine statische HTML-Datei, die speziell für die Entwicklung und das Testen von CSS erstellt wurde. Sie ermöglicht es, das Styling unabhängig von WordPress zu entwickeln, was folgende Vorteile bietet:

- **Schnellere Iteration**: Änderungen am CSS können direkt in einem statischen HTML-Dokument getestet werden, ohne dass die WordPress-Umgebung geladen werden muss.
- **Live View**: Viele Code-Editoren bieten eine Live-Vorschau für statische HTML-Dateien, was die Entwicklung beschleunigt.
- **Isoliertes Testen**: Das CSS kann in einer kontrollierten Umgebung getestet werden, ohne dass andere WordPress-Elemente oder Plugins Einfluss darauf haben.

Autor: Enno Hyttrek
https://ennohyttrek.de


