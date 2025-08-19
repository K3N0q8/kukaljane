# eSelo Kukaljane - Village Management System

A comprehensive village management system with modern design, advanced financial management, and detailed reporting capabilities.

## 🚀 Features

### Modern Dashboard
- Beautiful, responsive design with statistics cards
- Real-time financial overview
- Professional styling with CSS Grid layouts
- Mobile-friendly interface

### Financial Management
- **Multi-Account System**: Donations, Membership Fees, General Expenses, Projects, Reserves
- **Transaction Tracking**: Complete transaction history with categorization
- **Project Fund Management**: Allocate funds to specific projects and track expenses
- **Real-time Balances**: Automatic balance calculations across all accounts
- **Currency Support**: EUR currency with proper formatting

### Comprehensive Reporting
- **Financial Overview Reports**: Complete financial summaries with breakdowns
- **Membership Fee Reports**: Track membership fee collections
- **Donation Reports**: Monitor donation income
- **Project Expense Reports**: Detailed project spending analysis
- **Account Balance Reports**: Current status of all financial accounts
- **Print-Ready Formats**: Professional report layouts for printing

### Family Management
- **Enhanced Family Profiles**: Complete contact information and member tracking
- **Payment Integration**: Direct link between families and their financial contributions
- **Statistics Dashboard**: Family and payment analytics
- **Quick Actions**: Easy editing and management tools

## 🛠️ Installation

### Requirements
- PHP 8.1 or higher
- SQLite support
- Web server (Apache/Nginx) or PHP built-in server

### Setup Instructions

1. **Extract Files**
   ```bash
   # Extract the system files to your web directory
   unzip kuk.zip -d /var/www/html/
   cd /var/www/html/kuk/
   ```

2. **Set Permissions**
   ```bash
   # Make data directory writable
   chmod 755 data/
   chmod 666 data/kukaljane.sqlite (if exists)
   ```

3. **Start the Application**
   
   **Option A: Using PHP Built-in Server (for testing)**
   ```bash
   php -S localhost:8080
   ```
   
   **Option B: Using Apache/Nginx**
   - Configure your web server to point to the application directory
   - Ensure PHP is properly configured

4. **Access the System**
   - Open your browser and navigate to the application URL
   - Default login: `admin` / `change_me`
   - **Important**: Change the default password immediately after first login

## 📖 Usage Guide

### Getting Started

1. **Login**
   - Use the default credentials: `admin` / `change_me`
   - Change password in Settings after first login

2. **Access Modern Interface**
   - Use `index.php` for the enhanced interface
   - The old interface (`old_index.php`) is still available for compatibility

### Financial Management

#### Setting Up Accounts
- Navigate to **Finansije** (Finance)
- The system comes with pre-configured account types:
  - **Donacije** (Donations) - for tracking donations
  - **Članarine** (Membership Fees) - for membership fee collections
  - **Opšti troškovi** (General Expenses) - for general village expenses
  - **Projekti** (Projects) - for project-specific funding
  - **Rezerve** (Reserves) - for emergency funds

#### Recording Transactions
1. Go to **Finansije** → **Nova transakcija**
2. Fill in transaction details:
   - Date
   - Description
   - Amount (in EUR)
   - Transaction type (Income/Expense/Transfer)
   - Account
   - Project (if applicable)
3. Click **Kreiraj transakciju**

#### Managing Project Funds
1. **Allocate Funds**: Use "Alociraj sredstva projektu" to assign money to projects
2. **Record Expenses**: Use "Zabeležiti trošak projekta" to track project spending
3. **Monitor Budgets**: View project financial status in real-time

### Family Management

#### Adding Families
1. Navigate to **Porodice** (Families)
2. Fill in the family form:
   - Family name
   - Number of members
   - Contact person
   - Phone, email, address
   - Notes
3. Click **Dodaj porodicu**

#### Recording Payments
1. Go to **Uplate** (Payments)
2. Select family and enter payment details
3. Choose payment type (membership fee or donation)
4. The system automatically updates financial accounts

### Generating Reports

#### Financial Reports
1. Navigate to **Izveštaji** (Reports)
2. Select report type:
   - **Finansijski pregled** - Complete financial overview
   - **Članarine** - Membership fee collections
   - **Donacije** - Donation tracking
   - **Troškovi projekata** - Project expenses
   - **Stanje računa** - Account balances
3. Set date range and filters
4. Click **Generiši izveštaj**
5. Use **Štampaj** button for printing

#### Report Types Explained

- **Financial Overview**: Shows income/expense breakdown, account summaries, and detailed transactions
- **Membership Fees**: Lists all membership fee payments with family details
- **Donations**: Tracks donation income with donor information
- **Project Expenses**: Analyzes project spending and budget utilization
- **Account Balances**: Current status of all financial accounts

## 🔧 Configuration

### Database
- The system uses SQLite database stored in `data/kukaljane.sqlite`
- Database schema is automatically created on first run
- Enhanced schema includes financial tables for comprehensive tracking

### Security
- Change default admin password immediately
- CSRF protection is enabled
- SQL injection prevention with prepared statements
- Session-based authentication

### Customization
- Modify `assets/css/modern.css` for styling changes
- Update `config/enhanced_db.php` for database schema modifications
- Customize report templates in `modules/izvestaji.php`

## 📁 File Structure

```
kuk/
├── index.php                 # Enhanced main application
├── old_index.php             # Original application (legacy)
├── login.php                 # Authentication
├── config/
│   ├── enhanced_db.php       # Enhanced database configuration
│   └── database.php          # Original database config
├── modules/
│   ├── modern_dashboard.php  # Modern dashboard
│   ├── finansije.php         # Financial management
│   ├── izvestaji.php         # Reporting system
│   ├── enhanced_*.php        # Enhanced modules
│   └── *.php                 # Original modules
├── assets/css/
│   ├── modern.css            # Modern styling
│   └── architect.css         # Original styling
├── inc/
│   ├── financial_functions.php # Financial business logic
│   ├── functions.php         # Core functions
│   └── modern_header.php     # Enhanced header
├── data/                     # Database directory
└── README.md                 # This file
```

## 🆘 Troubleshooting

### Common Issues

1. **Database Permission Errors**
   ```bash
   chmod 755 data/
   chmod 666 data/kukaljane.sqlite
   ```

2. **PHP Errors**
   - Ensure PHP 8.1+ is installed
   - Check that SQLite extension is enabled
   - Verify file permissions

3. **Login Issues**
   - Default credentials: `admin` / `change_me`
   - Check database connectivity
   - Clear browser cache and cookies

4. **Financial Data Not Showing**
   - Ensure you're using `modern_index.php`
   - Check that enhanced database schema is loaded
   - Verify transaction data exists

### Support
- Check `SYSTEM_TESTING_REPORT.md` for detailed testing results
- Review server logs for PHP errors
- Ensure all file permissions are correct

## 🔄 Migration from Old System

If upgrading from the original system:

1. **Backup Data**: Always backup your existing database
2. **Use Enhanced Interface**: Access via `index.php`
3. **Data Migration**: Financial data will be automatically integrated
4. **Test Thoroughly**: Verify all data appears correctly

## 📊 System Requirements

- **PHP**: 8.1 or higher
- **Database**: SQLite (included)
- **Web Server**: Apache, Nginx, or PHP built-in server
- **Browser**: Modern browsers (Chrome, Firefox, Safari, Edge)
- **Storage**: Minimum 50MB free space

## 🎯 Key Improvements

### From Original System
- ✅ Modern, responsive design
- ✅ Comprehensive financial management
- ✅ Advanced reporting with printing
- ✅ Enhanced family management
- ✅ Fixed CSS issues
- ✅ Mobile-friendly interface
- ✅ Real-time financial tracking
- ✅ Project fund management
- ✅ Professional styling

### New Features
- Multi-account financial system
- Project-specific fund allocation
- Comprehensive reporting suite
- Print-ready report formats
- Enhanced statistics dashboard
- Real-time balance calculations
- Transaction categorization
- Professional UI/UX design

---

**Version**: 2.0 Enhanced
**Last Updated**: August 2025
**Status**: Production Ready ✅

