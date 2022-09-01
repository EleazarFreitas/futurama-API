<img src="https://raw.githubusercontent.com/EleazarFreitas/futurama-API/main/assets/img/Futurama.png">
<div>
<h1 align="right">
Good News, Everyone!
</h1>
<img src="https://raw.githubusercontent.com/EleazarFreitas/futurama-API/main/assets/img/good-news-everyone.png" align="right" height="150px">
</div>

What about an API based on the television show Futurama?

Hope you have fun! 😊

ENDPOINTS:

### Get all characters

You can access the list of characters by using the **/characters** endpoint.

GET https://api-futurama.herokuapp.com/characters

```js
fetch('https://api-futurama.herokuapp.com/characters')
    .then(response => response.json())
    .then(json => {
        const ALL_CHARACTERS = json.results;
        console.log(ALL_CHARACTERS);
    });
```

### Get a single character

You can get a single character by adding the **id** as a parameter: **/character/2**

GET https://api-futurama.herokuapp.com/character/1

```js
fetch('https://api-futurama.herokuapp.com/character/4')
    .then(response => response.json())
    .then(json => {
        const SINGLE_CHARACTER = json;
        console.log(SINGLE_CHARACTER);
    });
```
Expected json:

```
{
    id: 4,
    name: "Amy Wong",
    nickname: "Amy",
    species: "Human",
    gender: "Female",
    occupation: "Long-term Intern at Planet Express & Physicist intern to Professor Hubert J. Farnsworth",
    origin: "Mars",
    image: "https://api-futurama.herokuapp.com/assets/img/4.png",
}
```
<hr>

Note: More characters and info will be added to the API in my free time!
