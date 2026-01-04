
## Persyaratan Sistem

- PHP >= 8.2
- Composer
- Node.js & NPM (untuk assets frontend)

## Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/chrislorando/ai-chatbot-app.git
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

## Links

- [Livewire WireStream Documentation](https://livewire.laravel.com/docs/3.x/wire-stream)
- [OpenAI PHP Laravel](https://github.com/openai-php/laravel)
- [SumoPod](https://sumopod.com/register?ref=b9120f87-b648-40ef-b5b4-ec62bcfe72e0)
- [GitHub Repository](https://github.com/chrislorando/ai-chatbot-app)
- [Demo](http://chatbot.demolink.my.id/)