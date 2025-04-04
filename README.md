# Laravel Auth App

Aplicação simples de autenticação de usuários desenvolvida com **Laravel 10** e **PHP 8.2**, como parte de um teste técnico. Permite registro, login, edição de perfil, upload de imagem de perfil e exclusão de conta.

---

## 🔧 Tecnologias Utilizadas

- Laravel 10
- PHP 8.2
- Laravel Breeze (Blade + Bootstrap + Alpine.js)
- SQLite (configurado via `.env`)
- Vite (compilação de assets)
- Tailwind CSS
- ui-avatars.com (fallback de avatar)

---

## ✅ Funcionalidades

- Registro de usuário (nome, e-mail, senha)
- Login e logout com redirecionamento seguro
- Dashboard com dados do usuário logado
- Edição de perfil:
  - Nome
  - E-mail
  - Senha (opcional)
- Upload de imagem de perfil com armazenamento local
- Fallback para avatar padrão com base no nome (via ui-avatars)
- Exclusão de conta com confirmação de senha
- Testes automatizados cobrindo:
  - Cadastro
  - Login
  - Atualização de perfil
  - Exclusão com/sem senha válida

---

## 📁 Como rodar o projeto localmente

### Pré-requisitos

- PHP 8.2
- Composer
- Node.js + npm
- SQLite ou MySQL
- (Opcional) XAMPP para ambiente local

---

### Passo a passo (usando SQLite):

```bash
# 1. Clone o repositório
git clone https://github.com/dsilvadori/laravel-auth-app.git
cd laravel-auth-app

# 2. Instale dependências PHP
composer install

# 3. Instale dependências JS
npm install
npm run dev

# 4. Copie o arquivo de ambiente
cp .env.example .env

# 5. Configure o SQLite no .env:
DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite

# 6. Crie o banco de dados SQLite
mkdir -p database
touch database/database.sqlite

# 7. Gere a chave da aplicação
php artisan key:generate

# 8. Rode as migrations
php artisan migrate

# 9. Crie o link simbólico para imagens de perfil
php artisan storage:link

# 10. Inicie o servidor
php artisan serve
