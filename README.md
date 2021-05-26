Initial Setup

php artisan migrate:fresh --seed
php artisan storage:link


Factory Test Data
php artisan tinker
NewsletterSubscription::factory()->count(20)->create()
