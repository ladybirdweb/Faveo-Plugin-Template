# Faveo-Plugin-Template

#### **Overview**
- Faveo plugins are structured as modular mini Laravel projects, enhancing:
    - Development efficiency
    - Maintenance simplicity
    - System modularity

#### **Creating the Plugin Structure**
- **Command:** `php artisan make:plugin {plugin-name}`
- **Generated Structure:** A comprehensive directory and file system tailored for plugin development.

#### **Directory Structure**
- **Core Directories:**
    - **Console:** Artisan commands
    - **Controllers:** For admin, user, and agent functionalities
    - **Cron:** Scheduled tasks
    - **Middleware:** Middleware classes
    - **Model:** Eloquent models
    - **Public:** Scripts and assets
    - **Requests:** Form validation classes
    - **Database:** Factories, migrations, and seeders
    - **Tests:** Backend and frontend test cases
    - **Views:** Blade templates
    - **Lang:** Multi-language support

#### **File Structure**
- **Key Files:**
    - `ServiceProvider.php`: Plugin registration and initialization
    - `config.php`: Plugin configuration settings
    - `breadcrumbs.php`: Breadcrumb navigation definitions
    - `routes.php`: Routing logic

#### **Example Directory Structure**
```plaintext
app
└── Plugins
    └── {plugin-name}
        ├── Console
        ├── Controllers
        │   ├── Admin
        │   ├── User
        │   └── Agent
        ├── Cron
        ├── Middleware
        ├── Model
        ├── Public
        │   └── Script
        ├── Requests
        ├── Database
        │   ├── Factories
        │   ├── Migrations
        │   └── Seeds
        ├── Tests
        │   ├── Backend
        │   └── Frontend
        ├── Views
        │   ├── Admin
        │   └── User
        ├── Lang
        │   └── {language-directories}
        ├── ServiceProvider.php
        ├── config.php
        ├── breadcrumbs.php
        └── routes.php
```

#### **Benefits**
- Facilitates modular development.
- Enhances maintainability.
- Ensures consistency across plugins.