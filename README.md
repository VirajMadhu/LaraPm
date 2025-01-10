# LaraPm Development Setup

> If you want to configure the **LaraPm** platform in your development environment, follow the instructions below to get started!

## 🛠️ Prerequisites

Before setting up the LaraPm platform, make sure you have the following tools installed in your development environment:

- **[Composer](https://getcomposer.org/)**: Dependency management for PHP.
- **[PNPM](https://pnpm.io/)**: Fast, disk space efficient package manager for JavaScript.

## 📥 Installing the Project

Start by cloning the project repository using Git:

```bash
git clone https://github.com/VirajMadhu/LaraPm.git
```

## 📦 Installing Dependencies

Once the project is cloned, you'll need to install both **back-end** and **front-end** dependencies.

1. Install **back-end** dependencies using Composer:

```bash
composer install
```

2. Install **front-end** dependencies using PNPM:

```bash
pnpm install
```

## ⚙️ Configuration

Next, you'll need to configure the platform's **environment variables**.

### Step 1: Copy the `.env.example` File

Copy the `.env.example` file to a new `.env` file in the root directory:

```bash
cp .env.example .env
```

### Step 2: Update Configuration Keys

Edit the `.env` file to set the appropriate values for the following keys:

| Key | Description |
| --- | --- |
| **APP_URL** | URL to access the platform. |
| **DB_HOST** | Host IP address or hostname for your MySQL database. |
| **DB_PORT** | Port used for MySQL database connection. |
| **DB_DATABASE** | Name of your MySQL database. |
| **DB_USERNAME** | Username for MySQL authentication. |
| **DB_PASSWORD** | Password for MySQL authentication. |
| **MAIL_HOST** | SMTP server hostname for email sending. |
| **MAIL_PORT** | SMTP server port. |
| **MAIL_USERNAME** | SMTP server username. |
| **MAIL_PASSWORD** | SMTP server password. |
| **MAIL_ENCRYPTION** | Encryption method for SMTP. |
| **MAIL_FROM_ADDRESS** | Email address from which platform emails will be sent. |
| **PUSHER_APP_ID** | Pusher application ID. |
| **PUSHER_APP_KEY** | Pusher application key. |
| **PUSHER_APP_SECRET** | Pusher application secret. |
| **PUSHER_HOST** | Pusher host used. |
| **PUSHER_APP_CLUSTER** | Pusher cluster (default: `mt1`). |
| **GITHUB_ID** | GitHub app ID for GitHub login integration. |
| **GITHUB_SECRET** | GitHub app secret for GitHub login integration. |
| **GOOGLE_CLIENT_ID** | Google client ID for Google login integration. |
| **GOOGLE_CLIENT_SECRET** | Google client secret for Google login integration. |
| **FACEBOOK_CLIENT_ID** | Facebook client ID for Facebook login integration. |
| **FACEBOOK_CLIENT_SECRET** | Facebook client secret for Facebook login integration. |
| **TWITTER_CLIENT_ID** | Twitter client ID for Twitter login integration. |
| **TWITTER_CLIENT_SECRET** | Twitter client secret for Twitter login integration. |

### Step 3: Generate the Application Key

After configuring the environment variables, generate the application key by running:

```bash
php artisan key:generate
```

## 🧑‍💻 Queue Setup

LaraPm uses a queue system for notifications and emails. To run the queue worker, execute the following command in the project root:

```bash
php artisan queue:work
```

## 🗄️ Database Setup

Before running the platform, you'll need to set up the database.

### Step 1: Create the Database

Create a new MySQL database with the settings specified in the `.env` file.

### Step 2: Run Database Migrations

Run the database migrations to set up the necessary tables:

```bash
php artisan migrate
```

### Step 3: Seed the Database

Insert default values (e.g., users, referentials, and permissions) into the database:

```bash
php artisan db:seed
```

### Default User Credentials

The default user created during the seeding process will have the following credentials:

- **Email**: `john.doe@larapm.app`
- **Password**: `Passw@rd`

This user has **all permissions** associated with their account.

## 🚀 Build & Run

Now you're ready to build the assets and run the platform.

### Step 1: Build Assets

- For **production**:  
  ```bash
  pnpm run build
  ```

- For **development**:  
  ```bash
  pnpm run dev
  ```

### Step 2: Serve the Application

You can now serve the LaraPm platform as a **Laravel** application:

- Run Laravel's built-in server:
  ```bash
  php artisan serve
  ```

Or, use your preferred **web server** (e.g., Nginx or Apache).

### Step 3: Clear Caches

Finally, clear all application caches:

```bash
php artisan optimize:clear
```

## 🎉 You're All Set!

Enjoy coding and building with the **LaraPm** platform! 😎

