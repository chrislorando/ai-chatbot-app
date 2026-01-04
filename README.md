
## Persyaratan Sistem

- PHP >= 8.2
- Composer
- Node.js & NPM (untuk assets frontend)

## Instalasi

1. **Clone repository**
   ```bash
   git clone <repository-url>
   cd ai-chatbot-app
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Edit file .env**
   ```env
   OPENAI_API_KEY=your_openai_api_key
   OPENAI_BASE_URL=https://ai.sumopod.com
   ```

5. **Jalankan server development**
   ```bash
   php artisan serve
   ```
