# CSS Questions

- 1: How can you switch a css style when the screen size is below a certain size?
  - Media queries are good for changing styles based on screen size. EX:
   ```
   @media screen and (max-width: 600px) {
     .header {
       background-color: #f00;
       width: 100$;
      }
    }

   ```
- 2: What is the benefit of using stylesheets instead of inline styles?
  - External stylesheets allow you to declare styles for multiple elements and pages without having to repeat code. It also separates structure (HTML) from the styles. Inline styles can get messy, repetitive and largely difficult to maintain over time.

- 3: Is there a way to manage CSS with variables and functions?
  - For a while, I largely relied on a CSS preprocessor (Sass, to be exact) to allow myself to has variables and functions for my CSS to make creating styles a breeze. Now with native CSS variables, I can create a variable    `--font-size: 1em;` and then use it throughout my styles with the `var()` function. EX:
  ```
  :root {
    --primary-background: #ccc;
    --color: #333;
  }

  .header {
    background: var(--primary-background);
    color: var(--color);
  }
  ```

- 4: Review and update the following erroneous CSS:
  ```
  .button, input[type="submit"], button {
    position: relative
    display: inline-block;
    padding-front: 0;
    margin: 0;
    border: none;
    text-decoration: none;
    text-align: center;
    white-space: nowrap;
    overflow: visible;
    bgcolor: red;
    text-transform: uppercase
    font-color: #fZb034;
    font-size: 18px;
    font-family: 'FuturaBT-Book';
    line-height. 20px;
    height: 20px;
    -webkit-transition: color 0.2s ease-in-out;
    transition: color 0.2s ease-in-out
  }
  ```
  ## My Solution:
  ```
  .button, input[type="submit"], button {
    position: relative;
    display: inline-block;
    padding: 0;
    margin: 0;
    border: none;
    text-decoration: none;
    text-align: center;
    white-space: nowrap;
    overflow: visible;
    background-color: red;
    text-transform: uppercase;
    color: #fab034;
    font-size: 18px;
    font-family: 'FuturaBT-Book';
    line-height: 20px;
    height: 20px;
    -webkit-transition: color 0.2s ease-in-out;
    transition: color 0.2s ease-in-out
  }
  ```