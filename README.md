# Cinéma SAAS

---

# Installation

---

### Optionnel

Créer le dossier du projet

```markdown
mkdir "nom du projet"
cd "nom du projet"
```

---

### Quelques prérequis

1. **PHP 8.1** → `php -v`
2. [MAMP](https://www.mamp.info/en/downloads/) ou [Laragon](https://laragon.org/download/index.html)
3. **Composer 2.4.4 →** `composer -v`
4. **Node.js ≥= 18.12.1** → `node -v`
5. **NPM ≥= 8.19.2** → `npm -v`

---

### Étape #1 : Cloner le projet

Dans votre explorateur de fichiers placer vous à l’endroit où vous souhaiter cloner le projet et exécuter ces commandes

```markdown
git clone https://github.com/ThomasDLG/cinema_saas.git
cd cinema_saas
```

### Étape #2 : Installer les dépendances

Assurer d’avoir les version de composer et npm à jours avant d’éxécuter ces commandes

```markdown
composer install
sudo npm install
```

### Étape #3 : Générer la clé

```markdown
php artisan key:generate
```

### Étape #4 : Créer la base de données

Rendez-vous sur Laragon ou MAMP et démarrer votre serveur locale puis accéder à l’interface de votre base de données (phpMyAdmin, Adminer, HeidiSQL).

Créer une nouvelle base de données nommé la en minuscule et sans tirets.

### Étape #5 : Éditer le fichier .env

```markdown
APP_NAME=[NAME_APP]
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=[YOUR DATABASE PORT]
DB_DATABASE=[YOUR DATABASE NAME]
DB_USERNAME=[YOUR DATABASE LOGIN]
DB_PASSWORD=[YOUR DATABASE PASSWORD]
```

### Étape #6 : Faire la migration des tables

```markdown
php artisan migrate
```

### Étape #7 : Peupler la base données

```markdown
php artisan db:seed
```

### Étape #8 : Démarrer votre projet

```markdown
php artisan serve
npm run dev
```