function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    
    tabcontent = document.getElementsByClassName("Jobs");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("Jobs");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  
    // Example API Call based on tabName
    var apiUrl = 'https://applicanttrackingsystem2.onrender.com/#smart-ats'; // Default API URL
    
  
    fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
      document.getElementById(tabName.toLowerCase() + 'Content').innerHTML = JSON.stringify(data);
    })
    .catch(error => console.error('Error fetching data:', error));
  }
  



const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');

const app = express();
const port = 3308;

// Middleware to parse JSON bodies
app.use(bodyParser.json());

// Create a MySQL connection
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'now'
});

// Connect to MySQL
connection.connect(error => {
  if (error) throw error;
  console.log("Successfully connected to the database.");
});

// API route to receive data and save it to the database
app.post('https://applicanttrackingsystem2.onrender.com/', (req, res) => {
  const data = req.body; // Assuming the data is sent in the body of the request
  des="";
  res="";
  
  const query = 'INSERT INTO job_listing_valid (description,resume) VALUES ( des,res )';
  
  connection.query(query, [job_listing_valid.des, job_listing_valid.res], (error) => {
    if (error) {
      console.error('An error occurred:', error);
      res.status(500).send('Server error');
      return;
    }
    res.status(200).send('Data saved successfully');
  });
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});




