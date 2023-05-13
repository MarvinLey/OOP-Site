
Dieses Projekt enthält eine Webanwendung, die mithilfe von Docker bereitgestellt wird.

## Voraussetzungen

- Docker muss auf deinem System installiert sein.

## Anleitung

1. Klone das Repository auf deinen lokalen Computer.
	**git clone <URL des Repositories>**

2. Navigiere in das Verzeichnis der Webanwendung.
	**cd webanwendung**

3. Starte die Docker Container im Hintergrund.
	**docker-compose up -d**

4. Öffne deinen Webbrowser und gehe zur Adresse **http://localhost:3000** um auf die Anwendung zuzugreifen.
	
	
## Funktionen

Die Webanwendung enthält folgende Funktionen:

- Benutzerregistrierung und Anmeldung: Benutzer können sich registrieren und mit ihren Anmeldedaten in die Anwendung einloggen.

- Benutzerprofil: Jeder Benutzer hat ein individuelles Benutzerprofil, in dem sie ihre Informationen anzeigen und bearbeiten können.

- Benutzerposts (CRUD): Benutzer können Beiträge erstellen, anzeigen, bearbeiten und löschen.

- Produktseite mit Untermenüs: Die Anwendung enthält eine Produktseite, auf der Produkte angezeigt werden. Die Produkte sind in verschiedene Untermenüs kategorisiert, um eine einfache Navigation zu ermöglichen.

	
## Zukünftige Implementierungen

Folgende Funktionen sollen zukünftig in die Webanwendung integriert werden:

- Persönlicher Warenkorb: Benutzer können Produkte zu ihrem persönlichen Warenkorb hinzufügen, um ihre Einkäufe zu verwalten.

- Kassenvorgang: Es wird ein Kassenvorgang implementiert, der es Benutzern ermöglicht, ihre ausgewählten Produkte zu bezahlen und den Bestellvorgang abzuschließen.
	
	
## Styling und Responsive Design

Das Styling der Webanwendung wurde mit Bootstrap umgesetzt.

Die Anwendung enthält einen responsive Design-Ansatz, der sicherstellt, dass die Website auf verschiedenen Bildschirmgrößen und Geräten optimal angezeigt wird. Bei kleineren Bildschirmen wird ein Hamburger-Icon-Menü angezeigt, um die Navigation zu optimieren. Der Inhalt der Website passt sich dynamisch an die verfügbare Bildschirmgröße an und bietet eine benutzerfreundliche Erfahrung.
