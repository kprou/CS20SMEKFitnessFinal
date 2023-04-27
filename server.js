const express = require('express');
const bodyParser = require('body-parser');
const MongoClient = require('mongodb').MongoClient;
const path = require('path');
const app = express();
const port = process.env.PORT || 3000; // Modify this line
const uri = 'mongodb+srv://ezhao05:Limfs_0603@cs20freecluster.ud5in3u.mongodb.net/?retryWrites=true&w=majority';

app.use(express.static(__dirname));
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.get('/signup', (req, res) => {
  res.sendFile(path.join(__dirname, 'FitnessProg.html'));
});

app.post('/register', async (req, res) => {
  const { username, password } = req.body;

  const client = new MongoClient(uri, { useNewUrlParser: true, useUnifiedTopology: true });
  try {
    await client.connect();
    console.log("Connected to DB.");
    const collection = client.db('CS20_final').collection('users');
    await collection.insertOne({ username, password });
    res.status(200).send('Registration successful');
  } catch (err) {
    console.error(err);
    res.status(500).send('Registration failed');
  } finally {
    await client.close();
  }
});

app.post('/login', async (req, res) => {
  const { username, password } = req.body;

  const client = new MongoClient(uri, { useNewUrlParser: true, useUnifiedTopology: true });
  try {
    await client.connect();
    console.log("Connected to DB.");
    const collection = client.db('CS20_final').collection('users');
    const user = await collection.findOne({ username, password });
    if (user) {
      res.status(200).send('Login successful');
    } else {
      res.status(401).send('Invalid credentials');
    }
  } catch (err) {
    console.error(err);
    res.status(500).send('Login failed');
  } finally {
    await client.close();
  }
});

app.listen(port, () => {
  console.log(`Server started on port ${port}`);
});
