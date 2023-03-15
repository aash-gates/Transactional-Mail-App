# Transactional-Mail-App
Mail App built using PHP to work with Sendgrid API Built as part of the Training at Albertsons International Private Limited 

# Send Email Web Application

This is a web application that allows users to send emails using SendGrid API.

## Features

- Simple user interface with a single button to send an email.
- Ability to send emails with attachments.
- Success and error messages displayed to the user.
- Modern UI/UX design with Bootstrap components and custom CSS.

## Getting Started

To use this application, you need to have a SendGrid account and API key. If you don't have one already, you can [sign up for a free account](https://sendgrid.com/free/?source=send-email-app) on the SendGrid website.

To configure the application, you need to set the following environment variables:

- `SENDGRID_API_KEY`: Your SendGrid API key.
- `TO_EMAIL`: The email address of the recipient.
- `FROM_EMAIL`: The email address of the sender.

You can set these environment variables using a `.env` file in the root directory of the project:

SENDGRID_API_KEY=your_sendgrid_api_key
TO_EMAIL=recipient@example.com
FROM_EMAIL=sender@example.com

To start the application, run the following command in your terminal:

php -S localhost:8000

Then, open your web browser and navigate to `http://localhost:8000` to access the application.

## Contributing

If you find any issues with the application, feel free to open an issue on the GitHub repository. Pull requests are also welcome!

## License

## License

This project is licensed under the Apache License 2.0. See the [LICENSE](LICENSE) file for details.

