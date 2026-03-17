# Real-Time Debate Platform

A dynamic web-based platform for hosting and participating in real-time debates with user authentication and interactive features.

## Features

- **User Authentication**: Secure login and signup functionality
- **Real-Time Debates**: Participate in live debate sessions
- **User Management**: User profiles and account management
- **Responsive Design**: Mobile-friendly interface using Bootstrap
- **Rich UI Components**: Animated elements and smooth transitions

## Project Structure

```
├── index.html              # Main landing page
├── debate.html            # Debate interface
├── login1.html            # Login page
├── signup.php             # User registration
├── loginpage.php          # Login handler
├── logout.php             # Logout functionality
├── config.php             # Database configuration
├── tb_user.sql            # Database schema
├── css/                   # Stylesheets
├── js/                    # JavaScript files
├── bootstrap/             # Bootstrap framework
├── fonts/                 # Font assets
├── images/                # Image assets
└── plugins/               # jQuery and other plugins
```

## Prerequisites

- PHP 5.6+
- MySQL/MariaDB
- Apache web server (XAMPP recommended)
- Bootstrap 3.x
- jQuery

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/kunal-2066/Real-Time-Debate-Platform.git
   cd Real-Time-Debate-Platform
   ```

2. **Setup Database**
   - Import `tb_user.sql` into your MySQL database
   - Update database credentials in `config.php`

3. **Configure Web Server**
   - Place the project in your web server root (e.g., `htdocs` for XAMPP)
   - Access the application via `http://localhost/debate/`

4. **Database Configuration**
   - Edit `config.php` with your database connection details
   - Uncomment and configure the necessary database parameters

## Usage

1. Navigate to the application homepage
2. Sign up for a new account
3. Log in with your credentials
4. Access the debate platform
5. Participate in real-time debates

## File Descriptions

- `index.php` - Main application entry point
- `loginpage.php` - User login processing
- `signup.php` - User registration processing
- `logout.php` - User session termination
- `config.php` - Database and application configuration
- `welcome.html` - Welcome page for authenticated users
- `debate.html` - Debate room interface

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Backend**: PHP 5.6+
- **Database**: MySQL/MariaDB
- **Libraries**: jQuery, Font Awesome, Modernizr

## Security Considerations

- Use HTTPS in production
- Implement proper input validation
- Use prepared statements for database queries
- Secure session management
- Implement CSRF protection
- Use password hashing (bcrypt recommended)

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open source and available under the MIT License.

## Author

Kunal (kunal-2066)

## Support

For issues and questions, please create an issue in the GitHub repository.

---

**Last Updated**: March 17, 2026
