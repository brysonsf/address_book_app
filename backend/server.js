const express = require('express')
const app = express()
const port = 3000

let contacts = ['jim', 'hewie'];

// landing Page
app.get('/', (req, res) => {
  // load landing
  res.sendFile(__dirname + '/index.html')
})

// Find CONTACTS
app.get('/?contacts=', (req, res) => {
    const contact = req.body;

    // Output the book to the console for debugging
    console.log(contact);
    // push to db?
    contacts.push(contact);
    res.send(contacts);
});
app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})