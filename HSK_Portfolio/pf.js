function doPost(e) {
  var name = e.parameter.name;
  var email = e.parameter.email;
  var subject = e.parameter.subject;
  var message = e.parameter.message;

  var recipient = "harishsankar133@gmail.com";
  var subject = "New Contact Form Submission: " + subject;
  var body = "You have received a new message from the contact form on your website.\n\n" +
             "Name: " + name + "\n" +
             "Email: " + email + "\n" +
             "Subject: " + subject + "\n" +
             "Message: " + message;

  MailApp.sendEmail(recipient, subject, body);
  return ContentService.createTextOutput("Message Sent Successfully!");
}
