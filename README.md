# Invertor - E-Commerce & Delivery Management System

A comprehensive Laravel-based e-commerce platform with integrated delivery management, driver allocation, and real-time order tracking capabilities.

## Project Overview

Invertor is a full-featured e-commerce and delivery management system designed to handle product catalog management, order processing, driver allocation based on geolocation, and real-time notifications. The system supports multiple user roles including administrators, sellers, drivers, and operational managers, with a sophisticated order status workflow and commission management system.

## Tech Stack

### Backend
- **Framework**: Laravel 11.9
- **PHP**: ^8.2
- **Database**: SQLite (default), MySQL/MariaDB/PostgreSQL supported
- **Queue System**: Database queue driver
- **Real-time**: Laravel Broadcasting (WebSocket events)

### Frontend
- **Templating**: Blade templates
- **CSS Framework**: Tailwind CSS 3.4
- **Build Tool**: Vite 5.0
- **JavaScript**: Vanilla JS with Axios

### Development Tools
- **Testing**: Pest PHP 3.4
- **Code Style**: Laravel Pint
- **Package Manager**: Composer, npm

## Folder Structure

```
invertor-master/
├── app/
│   ├── Events/              # Event classes (OrderStatusEvent)
│   ├── Helpers/             # Utility classes (Helper, Distance)
│   ├── Http/
│   │   └── Controllers/     # Application controllers
│   ├── Models/              # Eloquent models (53 models)
│   └── Providers/           # Service providers
├── config/                  # Configuration files
├── database/
│   ├── factories/          # Model factories
│   └── seeders/            # Database seeders
├── public/                  # Public assets (CSS, JS, images)
├── resources/
│   ├── css/                # Stylesheets
│   ├── js/                 # JavaScript files
│   └── views/              # Blade templates
├── routes/
│   ├── web.php             # Web routes
│   └── console.php         # Console commands
└── storage/                 # Logs, cache, sessions
```

## Feature List

### E-Commerce Features
- **Product Catalog**
  - Product listing with pagination
  - Product detail pages
  - Product images support
  - Price filtering (min/max)
  - Multiple sorting options (title, price, date)
  - Category-based organization

- **Shopping Cart**
  - Session-based cart management
  - Add/remove/update cart items
  - Cart synchronization
  - Real-time cart count updates

- **Checkout & Orders**
  - Customer information collection
  - Address validation via geolocation
  - Order placement with order number generation
  - Order success confirmation page
  - Order history tracking

### Delivery Management
- **Driver Allocation**
  - Automatic driver matching based on delivery location
  - Distance calculation using Haversine formula
  - Driver availability checking
  - Delivery zone validation
  - Payment-for-delivery distance-based pricing

- **Geolocation Integration**
  - Google Maps Geocoding API integration
  - Address to coordinates conversion
  - Driver location tracking (lat/long)
  - Delivery location validation

### Order Management
- **Order Status Workflow**
  - Configurable order statuses
  - Status change triggers
  - Trigger logs for audit trail
  - Order status history tracking

- **Real-time Notifications**
  - Laravel Broadcasting for real-time updates
  - Twilio WhatsApp integration
  - In-app notifications
  - Notification history logging

### User Management
- **Role-Based Access Control (RBAC)**
  - Multiple roles: Admin, Seller, Driver, Seller Manager, Operative Manager
  - Permission-based access control
  - User-role and role-permission relationships
  - User approval workflow

- **User Features**
  - User profiles with country/state/city
  - User document uploads
  - User wallet system
  - Commission tracking

### Inventory & Stock Management
- **Stock Tracking**
  - Stock in/out management
  - Storage and driver stock separation
  - Available stock calculation
  - Stock movement tracking

- **Purchase Orders**
  - Purchase order creation
  - Purchase order items management
  - Procurement cost tracking

- **Distribution**
  - Distribution order management
  - Distribution items and attachments
  - Distribution number generation

### Financial Management
- **Wallets & Transactions**
  - Admin wallet
  - Driver wallet
  - Transaction ledger
  - Commission withdrawal history
  - Bank details management

- **Pricing**
  - Web sales price
  - Commission pricing
  - Minimum sales price (MSP) per role
  - Procurement cost tracking

### Additional Features
- **CMS Pages**
  - About Us
  - Testimonials
  - Contact Us
  - Privacy Policy
  - Terms & Conditions

- **Settings Management**
  - Application settings
  - Twilio configuration
  - Geocoding API key management
  - Application logo and favicon

- **Notifications & Messaging**
  - Twilio WhatsApp message templates
  - Message notification history
  - Template-based messaging
  - Content variables support

## Application Flow

### Order Placement Flow
1. Customer browses products on homepage
2. Customer adds products to cart
3. Customer proceeds to checkout
4. System validates delivery address via Google Geocoding API
5. System finds available drivers within delivery range
6. Customer confirms order
7. Order is created with status "NEW"
8. Trigger log is created for initial status
9. Available drivers are stored in `DeliverTemp` table
10. Notifications sent to Operative Managers via:
    - In-app notifications
    - Real-time WebSocket events
    - Twilio WhatsApp messages
11. Cart is cleared
12. Customer redirected to order success page

### Driver Allocation Flow
1. Customer enters postal code and house number
2. System geocodes address to lat/long coordinates
3. System retrieves all active drivers with location data
4. System calculates distance from each driver to delivery location
5. System checks `PaymentForDelivery` table for:
   - Driver-specific delivery pricing
   - Default delivery pricing
6. System filters drivers within acceptable delivery range
7. Returns available drivers with distances
8. If no drivers available, returns error message

## API & Third-Party Integrations

### Google Maps Geocoding API
- **Purpose**: Convert addresses to coordinates
- **Configuration**: `GEOLOCATION_API` env variable, `geocode_key` in settings
- **Usage**: Address validation and driver distance calculation
- **Endpoint**: `https://maps.googleapis.com/maps/api/geocode/json`

### Twilio WhatsApp API
- **Purpose**: Send order notifications via WhatsApp
- **Configuration**: Stored in `settings` table (twilioAccountSid, twilioAuthToken, twilioFromNumber, twilioUrl)
- **Features**:
  - Template-based messaging
  - Content variables support
  - Message history tracking
  - Error logging

### Laravel Broadcasting
- **Purpose**: Real-time order status updates
- **Channel**: `card-trigger`
- **Events**: `OrderStatusEvent`
- **Usage**: Real-time notifications to managers and drivers

## Setup & Installation

### Prerequisites
- PHP ^8.2
- Composer
- Node.js and npm
- SQLite (default) or MySQL/MariaDB/PostgreSQL
- Web server (Apache/Nginx) or PHP built-in server

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd invertor-master
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure Database**
   - Update `.env` with your database credentials
   - Or use SQLite (default): `touch database/database.sqlite`

6. **Run Migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed Database (Optional)**
   ```bash
   php artisan db:seed
   ```

8. **Build Frontend Assets**
   ```bash
   npm run build
   ```

9. **Set Storage Permissions**
   ```bash
   php artisan storage:link
   ```

## Environment Variables

Create a `.env` file in the root directory with the following variables:

```env
APP_NAME=Invertor
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

# Database Configuration
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
# OR for MySQL:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=invertor
# DB_USERNAME=root
# DB_PASSWORD=

# Queue Configuration
QUEUE_CONNECTION=database

# Mail Configuration
MAIL_MAILER=log
MAIL_FROM_ADDRESS=hello@example.com
MAIL_FROM_NAME="${APP_NAME}"

# Geolocation API
GEOLOCATION_API=true

# Image URL (for product images)
APP_Image_URL=http://localhost/
```

**Note**: Twilio and Google Maps API credentials are stored in the `settings` table in the database, not in `.env` file.

## Running the Project

### Local Development

**Option 1: Using Laravel's built-in development server**
```bash
php artisan serve
```

**Option 2: Using the dev script (includes queue worker, logs, and Vite)**
```bash
composer run dev
```

This will start:
- Laravel development server
- Queue worker
- Laravel Pail (log viewer)
- Vite dev server

Access the application at: `http://localhost:8000`

### Production

1. **Set environment to production**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   ```

2. **Optimize application**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   php artisan optimize
   ```

3. **Build assets**
   ```bash
   npm run build
   ```

4. **Run queue worker**
   ```bash
   php artisan queue:work
   ```

5. **Configure web server** (Apache/Nginx) to point to `public/` directory

## Cron Jobs / Background Tasks

### Queue Worker
The application uses Laravel's queue system for background job processing. Run the queue worker:

```bash
php artisan queue:work
```

Or use a process manager like Supervisor for production.

### Scheduled Tasks
Currently, the application has minimal scheduled tasks. Check `routes/console.php` for any scheduled commands. To run scheduled tasks, add to crontab:

```bash
* * * * * cd /path-to-project && php artisan schedule:run >> /dev/null 2>&1
```

## Common Use Cases

### 1. Customer Places an Order
- Browse products → Add to cart → Checkout → Enter delivery address → System finds drivers → Place order → Receive confirmation

### 2. Driver Allocation
- System calculates distance from drivers to delivery location → Checks delivery pricing → Returns available drivers → Stores in `DeliverTemp` for manager assignment

### 3. Order Status Updates
- Manager changes order status → Trigger fires → Notification sent → Real-time update broadcast → WhatsApp message sent (if configured)

### 4. Stock Management
- Products received → Stock in recorded → Products sold → Stock out recorded → Available stock calculated automatically

### 5. Commission Calculation
- Order completed → Commission calculated based on role → Transaction recorded → Wallet updated → Withdrawal available

## Database Models

### Core Models
- **Product**: Product catalog with images, categories, pricing
- **SalesOrder**: Customer orders with items and status
- **SalesOrderItem**: Individual items in an order
- **User**: Users with roles and permissions
- **Deliver**: Driver assignments to orders
- **DeliverTemp**: Temporary driver allocations

### Inventory Models
- **Stock**: Stock in/out transactions
- **PurchaseOrder**: Purchase orders from suppliers
- **Distribution**: Distribution orders to drivers/storage

### Financial Models
- **Transaction**: Financial transactions ledger
- **Wallet**: User wallets
- **DriverWallet**: Driver-specific wallet
- **AdminWallet**: Admin wallet
- **CommissionPrice**: Commission pricing rules
- **PaymentForDelivery**: Delivery pricing based on distance

### System Models
- **Setting**: Application settings
- **Notification**: In-app notifications
- **Trigger**: Order status change triggers
- **TriggerLog**: Audit log for triggers
- **Role**: User roles
- **Permission**: System permissions
- **SalesOrderStatus**: Order status definitions

## Known Limitations

1. **Geolocation Dependency**: Driver allocation requires Google Maps API key. Falls back to random coordinates if API is disabled (development mode).

2. **Session-Based Cart**: Shopping cart is stored in session, so cart is lost on session expiration or server restart.

3. **Queue Processing**: Queue jobs require a running queue worker. Jobs won't process automatically without `queue:work` running.

4. **Real-time Broadcasting**: Requires WebSocket server configuration (Laravel Echo, Pusher, or similar) for full real-time functionality.

5. **File Storage**: Product images and user documents stored in `storage/app/public/`. Requires `storage:link` to be accessible.

6. **Single Currency**: System hardcoded for GBP (£) currency.

## Future Improvements

Based on code analysis, potential improvements:

1. **API Development**: Create RESTful API endpoints for mobile app integration
2. **Payment Gateway Integration**: Add payment processing (Stripe, PayPal, etc.)
3. **Email Notifications**: Implement email notifications alongside WhatsApp
4. **Order Tracking**: Customer-facing order tracking page
5. **Driver Mobile App**: Dedicated mobile app for drivers
6. **Analytics Dashboard**: Sales and delivery analytics
7. **Multi-currency Support**: Support for multiple currencies
8. **Inventory Alerts**: Low stock alerts and automatic reordering
9. **Customer Accounts**: User registration and login for customers
10. **Review System**: Product and driver reviews/ratings
11. **Search Functionality**: Full-text search for products
12. **Wishlist Feature**: Save products for later
13. **Coupon/Discount System**: Promotional codes and discounts
14. **Export Functionality**: Export orders, reports to CSV/Excel
15. **Advanced Reporting**: Comprehensive business intelligence reports

## Contribution Guidelines

1. **Fork the repository** and create a feature branch
2. **Follow Laravel coding standards** (use Laravel Pint)
3. **Write tests** for new features using Pest PHP
4. **Update documentation** for any new features
5. **Submit a pull request** with a clear description of changes

### Code Style
- Follow PSR-12 coding standards
- Use Laravel Pint for code formatting: `./vendor/bin/pint`
- Write meaningful commit messages
- Add comments for complex logic

## License

MIT License - See LICENSE file for details

---

**Note**: This is a Laravel-based application. For Laravel-specific documentation, visit [laravel.com/docs](https://laravel.com/docs).
