# Initial Setup

php artisan migrate:fresh --seed

php artisan storage:link


# Run Server

php artisan serve 


# Factory Test Data

php artisan tinker

NewsletterSubscription::factory()->count(20)->create()

Resource::factory()->count(20)->create()
