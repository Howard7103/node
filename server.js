const express = require("express");
const app = express();
const db = require("./models");
const port = process.env.port || 3000;


app.use(express.urlencoded({ extended: true}));
app.use(express.json());

db.sequelize.sync().then(() => {
    app.listen(port,()=>{
        console.log('listening on: http://localhost:$(port)');
    });
});