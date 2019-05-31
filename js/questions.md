# JavaScript Questions
- 1: What’s the difference between the following three “car” approaches?
```
function Car(){}
var car = Car();
var car = new Car();
```
  - `function Car() {}` is a function based class.
  - `var car = Car();` stores the properties of the Car class in a variable called `car`
  - `var car = new Car();` instantiates the Car class using a construction function and allows you to set properties and methods. It's like taking a generic car and sending it to get painted and customized.

- 2: Explain what AJAX is and it’s advantages/disadvantages.
  - AJAX (Asynchronous JavaScript and XML) is a tool used to help create fast and dynamic web applications through HTTP requests.
  - Some advantages are not having to do a full refresh every time new information is sent back from the server which cuts down response time making pages faster. You can use JSON dat which is easier to parse than XML. There's also a fair amount of open source libraries available that make working with AJAX a breeze.
  - Some disadvantages are AJAX can increase development time as it can be more complex to implement than when building a classic static web app. Web crawlers have difficulty indexing AJAX pages is the content dynamically loaded. Browsers with JavaScript disabled can't use the app, and it can over load your web server if you have something that auto-updates every few seconds

- 3: Describe how event bubbling works in the context of clicking on the “Hello World” text:
  ```
  <body>
    <div id=”container”>
      <span id=”textContainer”>Hello World</span>
    </div>
  </body>
  ```
  - Once you click on `Hello World`, which is the event target, the event bubbles up to the div with the id of `container` and then to the `body` until it reaches the `window` object.

- 4: Create a loop that iterates up to 100 while outputting "fizz" at multiples of 3, "buzz" at multiples of 5 and "fizzbuzz" at multiples of 3 and 5.
  ```
  for (let i = 1; i <= 100; i++) {
    if (i % 3 === 0 && i % 5 === 0) {
      console.log('fizzbuzz');
    } else if (i % 3 === 0) {
      console.log('fizz');
    } else if (i % 5 === 0) {
      console.log('buzz');
    } else {
      console.log(i);
    }
  }
  ```

- 5: Please fix the following erroneous JavaScript code:
```
  function getHeaderElement() {
    // Get header element by its id.
    header = $(“myHeader”);
    if (header === null
    && TypeOf header === undefined
    ) {
    console.log(‘header element exists!”);
    }
    console.log(“
    header element does not exist!
    “))
    return header
  }

```

## My Solution

```
  function getHeaderElement() {
    const header = $('#myHeader');

    if (header !== null && typeof header !== 'undefined') {
      console.log('header element exists!');
      return header;
    } else {
      console.log('header element does not exist!');
      return null;
    }
  }

```