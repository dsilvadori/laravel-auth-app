# Laravel Auth App

Projeto de autenticação com Laravel 10, PHP 8.2 e Laravel Breeze.


# Laravel Auth App

Aplicação simples de autenticação de usuários desenvolvida com **Laravel 10** e **PHP 8.2** como parte de um teste técnico.

## 🔧 Tecnologias Utilizadas

- Laravel 10
- PHP 8.2
- Laravel Breeze (Blade + Bootstrap + Alpine.js)
- SQLite (via `.env`)
- Vite (compilação de assets)
- Tailwind CSS
- ui-avatars.com (fallback de avatar)

---

## ✅ Funcionalidades

- [x] Registro de usuário (nome, e-mail, senha)
- [x] Autenticação (login/logout)
- [x] Dashboard protegido com middleware `auth`
- [x] Edição de perfil:
  - Atualização de nome, e-mail
  - Alteração opcional de senha
- [x] Upload de imagem de perfil com validação
- [x] Fallback para avatar padrão (gerado com `ui-avatars.com`)
- [x] Estilo consistente com Tailwind (avatar 96x96, borda, sombra)

---

## 📁 Como rodar o projeto localmente

### Pré-requisitos:

- PHP 8.2
- Composer
- Node.js + npm
- XAMPP (ou servidor local com suporte a PHP)
- SQLite (já configurado)

### Passos:

```bash
# 1. Clone o projeto
git clone https://github.com/seu-usuario/laravel-auth-app.git
cd laravel-auth-app

# 2. Instale as dependências PHP
composer install

# 3. Instale as dependências do front
npm install
npm run dev

# 4. Copie e configure o arquivo .env
cp .env.example .env

# 5. Configure o uso do SQLite no .env:
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

# 6. Crie o arquivo do banco:
mkdir -p database
touch database/database.sqlite

# 7. Gere a key da aplicação
php artisan key:generate

# 8. Rode as migrations
php artisan migrate

# 9. Crie o link simbólico do storage
php artisan storage:link

# 10. Inicie o servidor
php artisan serve

Acesse o projeto em:
👉 http://localhost:8000
ou, se estiver usando XAMPP:
👉 http://localhost/laravel-auth-app/public