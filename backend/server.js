const express = require('express')
const app = express()
const port = 3000

// landing Page
app.get('/', (req, res) => {
  // load landing
  res.sendFile(__dirname + '/index.html')
})

// Retrieve CONTACTS
app.get('/contacts', (req, res) => {
    const contact = req.body;
    function reqListener () {
          console.log(this.responseText);
        }

        var oReq = new XMLHttpRequest(); // New request object
        oReq.onload = function() {
            // This is where you handle what to do with the response.
            // The actual data is found on this.responseText
            alert(this.responseText); // Will alert: 42
        };
        oReq.open("get", "getData.php", true);
        //                               ^ Don't block the rest of the execution.
        //                                 Don't wait until the request finishes to
        //                                 continue.
        oReq.send();
    });

// Add Contact
app.push('/contacts'), (req, res)=> {

}


app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})