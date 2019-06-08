function sendQuery(f) {
    debugger;
    Email.send({
        Host : "smtp.yourisp.com",
        Username : "username",
        Password : "password",
        To : 'adolfochercoles',
        From : '',
        Subject : "This is the subject",
        Body : f.elements["name"].value
    }).then(
      message => alert(message)
    );
}