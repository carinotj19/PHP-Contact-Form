# PHP Contact Form

A straightforward PHP-based contact form that allows users to submit their name, email, and message. The form includes basic validation and sends the input to a specified email address.

## 📂 Files Included

- `index.php` – Main page containing the HTML form.
- `process_form.php` – Handles form submission and sends the email.
- `styles.css` – Basic styling for the form.
- `readme.md` – Project documentation.

## 🚀 Getting Started

### Prerequisites

- A web server with PHP support (e.g., Apache, Nginx).
- Access to modify PHP files and configure email settings.

### Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/carinotj19/PHP-Contact-Form.git
   ```

2. **Navigate to the project directory:**

   ```bash
   cd PHP-Contact-Form
   ```

3. **Configure email settings:**

   In `process_form.php`, locate the section where the recipient email address is set and replace it with your desired email address.

   ```bash
   $to = 'your-email@example.com';
   ```

4. **Deploy to your web server:**

   Upload the project files to your web server's root directory or a subdirectory.

5. **Access the form:**

   Open a web browser and navigate to the URL where you deployed the form (e.g., `http://yourdomain.com/index.php`).

## 🛠️ Usage

1. Fill out the form fields: Name, Email, and Message.
2. Click the "Submit" button.
3. Upon successful submission, the form data will be sent to the configured email address.

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).
