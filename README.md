# PHP_Security

## Web Application Vulnerabilities in PHP

This project demonstrates various web application vulnerabilities commonly found in PHP applications. Each vulnerability is accompanied by both a vulnerable and a secure version of the code. The code samples are organized in a single folder for easy reference.

### Vulnerabilities Covered

1. **Cross Origin Resource Sharing (CORS)**
   - Vulnerable Code: `vuln_cors.php`
   - Exploit Code: `exploit_cors.html`
   - Secure Code: `secure_cors.php`

3. **Cross-Site Request Forgery (CSRF)**
   - Vulnerable Code: `vuln_csrf.php`
   - Exploit Code: `exploit_csrf.html`
   - Secure Code: `secure_csrf.php`

3. **File Upload**
   - Vulnerable Code: `vuln_file_upload.php`
   - Secure Code: `secure_file_upload.php`
     
1. **HTML Injection (HTMLi)**
   - Vulnerable Code: `vuln1_htmli.php`
   - Vulnerable Code: `vuln2_htmli.php`
   - Secure Code: `secure_htmli.php`

1. **SQL Injection (SQLi)**
   - Vulnerable Code: `vuln_sqli.php`
   - Secure Code: `secure_sqli.php`

1. **Server Side Template Injection (SSTI)**
   - Vulnerable Code: `vuln_ssti.php`
   - Secure Code: `secure_ssti.php`

2. **Cross-Site Scripting (XSS)**

4. **Clickjacking**
   - Vulnerable Code: `vuln_clickjacking.php`
   - Secure Code: `secure_clickjacking.php`

4. **Open Redirect**
   - Vulnerable Code: `vuln_redirect.php`
   - Secure Code: `secure_redirect.php`

5. **PHP Serialization**
   - Vulnerable Code: `vuln_serialize.php`
   - Secure Code: `secure_serialize.php`

1. **Server Side Request Forgery (SSRF)**
   - Vulnerable Code: `vuln_ssrf.php`
   - Secure Code: `secure_ssrf.php`

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
