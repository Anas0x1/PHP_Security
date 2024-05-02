# PHP_Security

## Web Application Vulnerabilities in PHP

This project demonstrates various web application vulnerabilities commonly found in PHP applications. Each vulnerability is accompanied by both a vulnerable and a secure version of the code. The code samples are organized in a single folder for easy reference.

### Vulnerabilities Covered

1. **SQL Injection (SQLi)**
   - Vulnerable Code: `sql_injection_vulnerable.php`
   - Secure Code: `sql_injection_secure.php`

2. **Cross-Site Scripting (XSS)**
   - Vulnerable Code: `xss_vulnerable.php`
   - Secure Code: `xss_secure.php`

3. **Cross-Site Request Forgery (CSRF)**
   - Vulnerable Code: `csrf_vulnerable.php`
   - Secure Code: `csrf_secure.php`

4. **Session Fixation**
   - Vulnerable Code: `session_fixation_vulnerable.php`
   - Secure Code: `session_fixation_secure.php`

5. **File Upload Vulnerability**
   - Vulnerable Code: `file_upload_vulnerable.php`
   - Secure Code: `file_upload_secure.php`

### Running the Code

1. Clone the repository to your local machine:
   ```
   git clone https://github.com/your-username/web-vulnerabilities-php.git
   ```

2. Navigate to the project directory:
   ```
   cd web-vulnerabilities-php
   ```

3. Choose the vulnerability you want to explore and navigate to its directory.

4. Run the PHP code using a local development server or any PHP server environment.

### Usage

1. Study the vulnerable code to understand the vulnerability and how it can be exploited.

2. Review the secure code to learn about best practices for mitigating the vulnerability.

3. Experiment with different inputs to observe how the vulnerable code behaves and how the secure code prevents exploitation.

### Contribution

Contributions are welcome! If you discover additional vulnerabilities or have suggestions for improving the existing code, feel free to submit a pull request or open an issue.

### Disclaimer

This project is for educational purposes only. Do not use the vulnerable code in a production environment. Always follow best practices for securing web applications to prevent exploitation of vulnerabilities.
