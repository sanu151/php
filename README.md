![image](https://github.com/user-attachments/assets/41830a64-8ecb-40fb-add0-66bec79441e7)

# PHP

### PHP Codes and notes

## **Introduction to PHP**

PHP, an acronym for Hypertext Pre-processor, is a widely-used, general-purpose scripting language that is particularly suited for web development. It's embedded directly into HTML code, making it easy to create dynamic web pages.

**Key Features of PHP:**

- **Server-Side Scripting:** PHP scripts execute on the server, generating dynamic content that is sent to the user's web browser as plain HTML.
- **Open-Source:** PHP is freely available and open-source, meaning you can use, modify, and distribute it without any cost.
- **Platform Independence:** It runs on various operating systems, including Windows, Linux, and macOS.
- **Database Integration:** PHP seamlessly integrates with popular databases like MySQL, PostgreSQL, and Oracle.
- **Large Community and Support:** A vast community of developers actively contributes to PHP's development and provides extensive support.
- **Security:** PHP offers robust security features to protect web applications from vulnerabilities.
- **Versatility:** Besides web development, PHP can be used for various tasks, including command-line scripting and building web services.

**Basic PHP Syntax:**

```php
<?php
// This is a comment
echo "Hello, world!";
?>
```

**How PHP Works:**

1. **Request:** A user sends a request to a web server.
2. **Processing:** The server receives the request and passes it to the PHP interpreter.
3. **Execution:** The PHP interpreter executes the script, generating dynamic content.
4. **Response:** The server sends the generated HTML to the user's browser.

**Common Use Cases of PHP:**

- **Dynamic Web Pages:** Creating web pages that change content based on user input or database information.
- **Web Applications:** Developing complex web applications like content management systems (CMS), e-commerce platforms, and social networking sites.
- **Web Services:** Building APIs to interact with other applications and services.
- **Data-Driven Websites:** Creating websites that display data from databases.
- **Form Handling:** Processing form data submitted by users.
- **Session Management:** Tracking user sessions and maintaining state across multiple page requests.

**Why Choose PHP?**

- **Ease of Learning:** PHP has a relatively simple syntax and is easy to learn for beginners.
- **Rapid Development:** It allows for quick development of web applications.
- **Large Ecosystem:** A vast library of frameworks and tools is available to accelerate development.
- **Cost-Effective:** As an open-source language, PHP is free to use.

**Variables in PHP**

Variables in PHP are used to store data that can be accessed and manipulated within your code. They are declared by prefixing a variable name with a dollar sign (`$`).

**Declaring a Variable:**

```php
$variable_name = value;
```

**Variable Naming Conventions:**

- **Case-Sensitive:** `$name` and `$Name` are different variables.
- **Start with a Letter or Underscore:** `$_name` or `$name1` are valid.
- **Consist of Letters, Numbers, and Underscores:** `$name_123` is valid.
- **No Special Characters:** Avoid using special characters like `$`, `%`, or `@` in variable names.

**Data Types in PHP**

PHP is dynamically typed, meaning you don't need to explicitly declare the data type of a variable. However, PHP supports several data types:

1. **String:** A sequence of characters enclosed in single quotes (`'`) or double quotes (`"`).
   ```php
   $name = "Alice";
   $greeting = 'Hello, world!';
   ```
2. **Integer:** A whole number without a decimal point.
   ```php
   $age = 30;
   $year = 2023;
   ```
3. **Float (Double):** A number with a decimal point.
   ```php
   $pi = 3.14159;
   $price = 9.99;
   ```
4. **Boolean:** A logical value that can be either `true` or `false`.
   ```php
   $is_active = true;
   $is_logged_in = false;
   ```
5. **Array:** A collection of values, each identified by a key.
   ```php
   $colors = array("red", "green", "blue");
   $person = array("name" => "Bob", "age" => 25);
   ```
6. **Object:** An instance of a class, representing a real-world entity.

   ```php
   class Person {
       public $name;
       public $age;
   }

   $person1 = new Person();
   $person1->name = "Charlie";
   $person1->age = 35;
   ```

7. **NULL:** Represents a variable with no value.
   ```php
   $empty_variable = null;
   ```

**Using Variables in PHP:**

Once a variable is declared, you can use it in various ways:

- **Assigning Values:**
  ```php
  $x = 10;
  $y = $x + 5;
  ```
- **Performing Operations:**
  ```php
  $sum = $x + $y;
  $difference = $x - $y;
  $product = $x * $y;
  $quotient = $x / $y;
  ```
- **Concatenating Strings:**
  ```php
  $greeting = "Hello, " . $name . "!";
  ```
- **Printing Values:**
  ```php
  echo $name;
  echo "<p>$greeting</p>";
  ```

### **Comments in PHP**

Comments are used to explain code, make it more readable, and help with debugging. PHP supports two types of comments:

**1. Single-line comments:**

- These comments start with `//` and continue until the end of the line.
- They are often used to explain specific lines of code or to temporarily disable a section of code.

```php
// This is a single-line comment
$x = 5; // This line assigns 5 to the variable $x
```

**2. Multi-line comments:**

- These comments start with `/*` and end with `*/`.
- They can span multiple lines and are often used to provide more detailed explanations or to block out larger sections of code.

```php
/*
This is a multi-line comment.
It can span multiple lines.
*/
```

**Best Practices for Using Comments:**

- **Explain the "why," not just the "what":** Explain the reason behind a particular piece of code, not just what it does.
- **Use clear and concise language:** Avoid jargon and write comments in plain English.
- **Avoid excessive commenting:** Too many comments can clutter your code. Comment only when necessary.
- **Keep comments up-to-date:** If you change your code, make sure to update the comments as well.
- **Use consistent formatting:** Consistent formatting makes your code more readable.

### PHP Operators: A Comprehensive Table

| Operator Type            | Operator | Definition                  | Category   | Example                           |
| ------------------------ | -------- | --------------------------- | ---------- | --------------------------------- |
| **Arithmetic Operators** | +        | Addition                    | Arithmetic | `$x + $y`                         |
|                          | -        | Subtraction                 | Arithmetic | `$x - $y`                         |
|                          | \*       | Multiplication              | Arithmetic | `$x * $y`                         |
|                          | /        | Division                    | Arithmetic | `$x / $y`                         |
|                          | %        | Modulus (Remainder)         | Arithmetic | `$x % $y`                         |
|                          | **++**   | Increment                   | Arithmetic | `$x++`                            |
|                          | --       | Decrement                   | Arithmetic | `$x--`                            |
| **Assignment Operators** | =        | Assign                      | Assignment | `$x = 10`                         |
|                          | +=       | Add and Assign              | Assignment | `$x += 5`                         |
|                          | -=       | Subtract and Assign         | Assignment | `$x -= 3`                         |
|                          | \*=      | Multiply and Assign         | Assignment | `$x *= 2`                         |
|                          | /=       | Divide and Assign           | Assignment | `$x /= 4`                         |
|                          | %=       | Modulus and Assign          | Assignment | `$x %= 2`                         |
| **Comparison Operators** | ==       | Equal to                    | Comparison | `$x == $y`                        |
|                          | !=       | Not equal to                | Comparison | `$x != $y`                        |
|                          | >        | Greater than                | Comparison | `$x > $y`                         |
|                          | <        | Less than                   | Comparison | `$x < $y`                         |
|                          | >=       | Greater than or equal to    | Comparison | `$x >= $y`                        |
|                          | <=       | Less than or equal to       | Comparison | `$x <= $y`                        |
|                          | <=>      | Spaceship operator (PHP 7+) | Comparison | `$x <=> $y` (returns -1, 0, or 1) |
| **Logical Operators**    | &&       | And                         | Logical    | `$x && $y`                        |
|                          | \|\|     | Or                          | Logical    | `$x \|\| $y`                      |
|                          | !        | Not                         | Logical    | `!$x`                             |
| **Bitwise Operators**    | &        | And                         | Bitwise    | `$x & $y`                         |
|                          | \|       | Or                          | Bitwise    | `$x \| $y`                        |
|                          | ^        | Xor                         | Bitwise    | `$x ^ $y`                         |
|                          | ~        | Not                         | Bitwise    | `~$x`                             |
|                          | <<       | Shift Left                  | Bitwise    | `$x << $y`                        |
|                          | >>       | Shift Right                 | Bitwise    | `$x >> $y`                        |

**Note:**

- **Spaceship operator (`<=>`)** introduced in PHP 7 provides a concise way to compare values, returning -1, 0, or 1 based on whether the first operand is less than, equal to, or greater than the second operand.
- **Bitwise operators** are used to manipulate individual bits of numbers.

### PHP Escape Sequences

Escape sequences are special character sequences used to represent specific characters or control codes within strings. They are preceded by a backslash (`\`). Here's a table of common PHP escape sequences:

| Escape Sequence | Description     |
| --------------- | --------------- |
| `\n`            | Newline         |
| `\r`            | Carriage Return |
| `\t`            | Horizontal Tab  |
| `\v`            | Vertical Tab    |
| `\f`            | Form Feed       |
| `\\`            | Backslash       |
| `\'`            | Single Quote    |
| `\"`            | Double Quote    |
| `\$`            | Dollar Sign     |

**Example:**

```php
echo "This is a new line.\nThis is the second line.";
echo "This is a tab\tcharacter.";
```

**Note:**

- In single-quoted strings, only `\'` and `\\` are interpreted as escape sequences. Other escape sequences are treated as literal characters.
- In double-quoted strings, all escape sequences are interpreted.

### **Ternary Operator in PHP**

The ternary operator in PHP is a concise way to assign a value to a variable based on a condition. It's a shorthand for a simple `if-else` statement.

**Syntax:**

```php
condition ? expression1 : expression2
```

**Breakdown:**

1. **Condition:** This is the expression that is evaluated to either `true` or `false`.
2. **Expression1:** If the condition is `true`, this expression is evaluated and its result is returned.
3. **Expression2:** If the condition is `false`, this expression is evaluated and its result is returned.

**Example:**

```php
$age = 25;
$isAdult = ($age >= 18) ? "Adult" : "Minor";

echo $isAdult; // Output: Adult
```

**Explanation:**

1. The condition `($age >= 18)` is evaluated.
2. Since 25 is greater than or equal to 18, the condition is `true`.
3. The expression `Adult` is evaluated and assigned to the `$isAdult` variable.

**Another Example:**

```php
$number = 5;
$result = ($number % 2 == 0) ? "Even" : "Odd";

echo $result; // Output: Odd
```

**When to Use the Ternary Operator:**

- **Simple Conditional Assignments:** For straightforward conditions and assignments.
- **Concise Code:** It can make your code more compact and readable in certain cases.
- **Inline Conditional Expressions:** You can use it within larger expressions to create dynamic values.

**However, be cautious:**

- **Readability:** For complex conditions or multiple nested ternary operators, it might become less readable.
- **Performance:** While the performance difference is often negligible, complex ternary expressions might be slightly less efficient than equivalent `if-else` statements.

**In general, use the ternary operator judiciously. It's a powerful tool, but it's important to balance conciseness with readability.**

### **Conditional Statements in PHP**

Conditional statements allow you to control the flow of your PHP program based on specific conditions. PHP supports several conditional statements:

**1. `if` Statement:**

- Executes a block of code if a given condition is true.

```php
if (condition) {
    // Code to be executed if the condition is true
}
```

**2. `if-else` Statement:**

- Executes one block of code if a condition is true, and another block if it's false.

```php
if (condition) {
    // Code to be executed if the condition is true
} else {
    // Code to be executed if the condition is false
}
```

**3. `if-elseif-else` Statement:**

- Allows you to check multiple conditions and execute different blocks of code based on the first true condition.

```php
if (condition1) {
    // Code to be executed if condition1 is true
} elseif (condition2) {
    // Code to be executed if condition1 is false and condition2 is true
} else {
    // Code to be executed if both conditions are false
}
```

**Example:**

```php
$age = 25;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
```

**Additional Considerations:**

- **Comparison Operators:** You can use comparison operators like `==`, `!=`, `<`, `>`, `<=`, and `>=` to compare values.
- **Logical Operators:** You can combine multiple conditions using logical operators `&&` (AND), `||` (OR), and `!` (NOT).
- **Ternary Operator:** A concise way to write a simple `if-else` statement.
- **Switch Statement:** Useful for checking multiple possible values of a single expression.

**Example with Switch Statement:**

```php
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    default:
        echo "Today is some other day.";
}
```

### **Nested Conditional Statements in PHP**

Nested conditional statements occur when you place one or more `if`, `elseif`, or `else` blocks within another `if`, `elseif`, or `else` block. This allows you to create complex decision-making structures in your PHP code.

**Example:**

```php
$age = 20;
$gender = "Male";

if ($age >= 18) { // Outer if condition
    if ($gender == "Male") { // Inner if condition
        echo "You are an adult male.";
    } else {
        echo "You are an adult female.";
    }
} else {
    echo "You are a minor.";
}
```

**Explanation:**

1. **Outer Condition:** The first `if` statement checks if `$age` is greater than or equal to 18.
2. **Inner Condition:** If the outer condition is true, the inner `if` statement checks if `$gender` is "Male".
3. **Output:**
   - If both conditions are true, it prints "You are an adult male."
   - If the outer condition is true but the inner condition is false, it prints "You are an adult female."
   - If the outer condition is false, it prints "You are a minor."

**Key Points:**

- **Indentation:** Proper indentation is crucial for readability in nested conditionals.
- **Complexity:** While nested conditionals can be powerful, avoid excessive nesting as it can make your code difficult to understand and maintain.
- **Alternatives:** In some cases, using a `switch` statement or a combination of logical operators (`&&`, `||`, `!`) might provide a more elegant solution.

**Example with `elseif` and `else`:**

```php
$grade = 85;

if ($grade >= 90) {
    echo "Excellent";
} elseif ($grade >= 80) {
    echo "Good";
} elseif ($grade >= 70) {
    echo "Average";
} else {
    echo "Needs Improvement";
}
```

This example demonstrates a more complex scenario with multiple conditions.

### **Arrays in PHP**

In PHP, an array is a special type of variable that can hold multiple values under a single name. These values can be of different data types (integers, strings, floats, booleans, even other arrays).

**Types of Arrays in PHP:**

1. **Indexed Arrays:**

   - Ordered collection of values.
   - Each value is assigned a numerical index (starting from 0).

   ```php
   $colors = array("red", "green", "blue");
   // or
   $colors = ["red", "green", "blue"];
   ```

2. **Associative Arrays:**

   - Key-value pairs.
   - Each value is associated with a unique key (which can be a string or an integer).

   ```php
   $ages = array("John" => 30, "Jane" => 25, "Peter" => 35);
   // or
   $ages = ["John" => 30, "Jane" => 25, "Peter" => 35];
   ```

3. **Multidimensional Arrays:**

   - Arrays that contain other arrays as elements.

   ```php
   $students = array(
       array("name" => "Alice", "age" => 20),
       array("name" => "Bob", "age" => 22),
       array("name" => "Charlie", "age" => 19)
   );
   ```

![image](https://github.com/user-attachments/assets/65e68e6c-07a4-479c-9926-bc078e6a502f)

**Accessing Array Elements:**

- **Indexed Arrays:**

  - Use the index number within square brackets: `$colors[0]` (returns "red")

- **Associative Arrays:**

  - Use the key within square brackets: `$ages["John"]` (returns 30)

- **Multidimensional Arrays:**
  - Use multiple sets of square brackets: `$students[1]["name"]` (returns "Bob")

**Array Functions:**

PHP provides many built-in functions for working with arrays:

- `count()` - Returns the number of elements in an array.
- `array_push()` - Adds one or more elements to the end of an array.
- `array_pop()` - Removes and returns the last element of an array.
- `array_shift()` - Removes and returns the first element of an array.
- `array_unshift()` - Adds one or more elements to the beginning of an array.
- `sort()` - Sorts an array in ascending order.
- `rsort()` - Sorts an array in descending order.
- `in_array()` - Checks if a value exists in an array.
- `array_merge()` - Merges two or more arrays.

**Example:**

```php
$fruits = array("apple", "banana", "orange");
echo $fruits[0]; // Output: apple

$person = array("name" => "John", "age" => 30);
echo $person["name"]; // Output: John

if (in_array("banana", $fruits)) {
    echo "Banana is found in the fruits array.";
}
```

**Print Array in PHP**

```php
<?php

// Sample array
$fruits = array("apple", "banana", "orange");

// Using print_r()
echo "<h3>Using print_r():</h3>";
print_r($fruits);

// Using var_dump()
echo "<h3>Using var_dump():</h3>";
var_dump($fruits);

// Using a loop (for better formatting)
echo "<h3>Using a loop:</h3>";
echo "<ul>";
foreach ($fruits as $fruit) {
  echo "<li>$fruit</li>";
}
echo "</ul>";

?>
```

**Explanation:**

1. **`print_r()`:**

   - This function displays human-readable information about a variable.
   - It's a good general-purpose function for printing arrays.

2. **`var_dump()`:**

   - Provides more detailed information about a variable, including its type and size.
   - Can be useful for debugging.

3. **Using a Loop:**
   - This method allows you to control the output format more precisely.
   - The `foreach` loop iterates over each element in the array and prints it within an HTML list (`<ul>`).

**Output:**

- **`print_r()`:**

  ```
  Array ( [0] => apple [1] => banana [2] => orange )
  ```

- **`var_dump()`:**

  ```
  array(3) { [0]=> string(5) "apple" [1]=> string(6) "banana" [2]=> string(6) "orange" }
  ```

- **Using a loop:**
  ```html
  <ul>
    <li>apple</li>
    <li>banana</li>
    <li>orange</li>
  </ul>
  ```

**Key Points:**

- Choose the method that best suits your needs based on the level of detail and the desired output format.
- For more complex arrays, consider using a loop to iterate over the elements and customize the output.
- If you want to display the array in a more visually appealing way, you can use HTML tags like `<ul>`, `<ol>`, or tables within the loop.

**Array without array() function**

```php
<?php

// Create an empty array
$arr = [];

// Add elements to the array
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;

// Print the array
print_r($arr);

?>
```

**Explanation:**

1. **`$arr = [];`:** This creates an empty array. The `[]` syntax is a shorthand for `array()`.

2. **`$arr[] = 1;`**: This adds the value `1` to the end of the array. Since no explicit key is provided, PHP automatically assigns a numerical index (0 in this case).

3. **`$arr[] = 2;` and `$arr[] = 3;`**: These lines similarly add the values `2` and `3` to the end of the array, with automatic numerical indices 1 and 2 respectively.

4. **`print_r($arr);`:** This displays the contents of the array in a human-readable format.

This demonstrates how to create an array with numerical keys and values without explicitly using the `array()` function.

**Note:** While this approach is valid, using `array()` is generally considered more concise and readable.

Arrays are fundamental data structures in PHP and are essential for many web development tasks, such as storing and manipulating data from databases, handling form submissions, and creating dynamic content.

## **Functions in PHP**

**What is a Function?**

- A function is a block of code that performs a specific task.
- It's reusable, meaning you can call it multiple times throughout your script without having to rewrite the same code.
- Functions improve code organization, readability, and maintainability.

**Types of Functions in PHP**

1. **Built-in Functions:**

   - Provided by PHP itself.
   - Examples: `strlen()`, `strtoupper()`, `array_push()`, `date()`, `mysql_connect()` (Note: Some older functions like `mysql_*` are deprecated).

2. **User-Defined Functions:**
   - Created by the programmer to perform specific tasks within their application.

**Syntax of User-Defined Functions**

```php
<?php
function function_name(argument1, argument2, ...) {
    // Code to be executed within the function
    // ...
    return value; // Optional: Return a value
}
?>
```

- **`function_name`:** The name of the function.
- **`argument1`, `argument2`, ...:** Parameters (optional) that are passed to the function.
- **`return value;`:** (Optional) Specifies the value to be returned by the function. If no value is returned, the function returns `null` by default.

**Examples**

**1. Simple Function:**

```php
<?php
function greet($name) {
    echo "Hello, " . $name . "!";
}

greet("John"); // Output: Hello, John!
?>
```

**2. Function with Return Value:**

```php
<?php
function add($x, $y) {
    return $x + $y;
}

$sum = add(5, 3);
echo $sum; // Output: 8
?>
```

**3. Function with Default Argument Value:**

```php
<?php
function greet($name = "Guest") {
    echo "Hello, " . $name . "!";
}

greet(); // Output: Hello, Guest!
greet("Alice"); // Output: Hello, Alice!
?>
```

**Uses of the `return` Keyword**

- **Sending a Value Back:** The `return` keyword is used to send a value back to the part of the code that called the function.
- **Terminating Execution:** Once a `return` statement is encountered within a function, the function's execution immediately stops, and the specified value is returned.

**Key Concepts**

- **Function Calling:** To execute a function, you "call" it by using its name followed by parentheses, and optionally passing any required arguments.
- **Function Arguments:** Arguments are values passed to a function when it is called.
- **Function Parameters:** Variables that receive the values passed as arguments within the function's definition.

### **PHP Array Functions**

PHP provides a rich set of functions for working with arrays. Here are some of the most commonly used ones:

![image](https://github.com/user-attachments/assets/a4f0a83f-edd9-40e9-901f-526f8a789539)


**1. Creating Arrays**

- **`array()`:**
  - The primary function to create an array.
  - `$colors = array("red", "green", "blue");`
  - `$ages = array("John" => 30, "Jane" => 25);`

**2. Accessing Elements**

- **`[]`:** Access elements by index (for indexed arrays) or key (for associative arrays).
  - `$colors[0]` // Accesses the first element ("red")
  - `$ages["John"]` // Accesses the value associated with the key "John"

**3. Adding/Removing Elements**

- **`array_push()`:** Adds one or more elements to the end of an array.
- **`array_pop()`:** Removes and returns the last element of an array.
- **`array_unshift()`:** Adds one or more elements to the beginning of an array.
- **`array_shift()`:** Removes and returns the first element of an array.

**4. Checking Array Existence**

- **`in_array()`:** Checks if a value exists within an array.
- **`array_key_exists()`:** Checks if a specific key exists in an array.

**5. Sorting Arrays**

- **`sort()`:** Sorts an array in ascending order.
- **`rsort()`:** Sorts an array in descending order.
- **`ksort()`:** Sorts an array by keys in ascending order.
- **`krsort()`:** Sorts an array by keys in descending order.

**6. Merging Arrays**

- **`array_merge()`:** Merges two or more arrays into a single array.

**7. Array Manipulation**

- **`array_slice()`:** Extracts a portion of an array.
- **`array_splice()`:** Removes or replaces a portion of an array.
- **`array_unique()`:** Removes duplicate values from an array.
- **`array_flip()`:** Exchanges keys with their associated values.

**8. Other Useful Functions**

- **`count()`:** Returns the number of elements in an array.
- **`implode()`:** Joins array elements into a string.
- **`explode()`:** Splits a string into an array.

**Example:**

```php
<?php

// Sample array
$fruits = array("apple", "banana", "orange", "apple");

// 1. Count elements in the array
$num_fruits = count($fruits);
echo "Number of fruits: " . $num_fruits . "<br>";

// 2. Check if "banana" exists in the array
if (in_array("banana", $fruits)) {
    echo "Banana is found in the array.<br>";
}

// 3. Add a new fruit to the end of the array
array_push($fruits, "mango");

// 4. Remove and return the last fruit
$last_fruit = array_pop($fruits);
echo "Removed fruit: " . $last_fruit . "<br>";

// 5. Sort the array in ascending order
sort($fruits);

// 6. Remove duplicate values
$unique_fruits = array_unique($fruits);

// 7. Print the sorted and unique fruits
echo "Sorted and unique fruits: ";
print_r($unique_fruits);

?>
```

**Output:**

```
Number of fruits: 4
Banana is found in the array.
Removed fruit: mango
Sorted and unique fruits: Array ( [0] => apple [1] => banana [2] => orange )
```

**Explanation:**

1. **`count($fruits)`:** Counts the number of elements in the `$fruits` array.
2. **`in_array("banana", $fruits)`:** Checks if "banana" exists within the `$fruits` array.
3. **`array_push($fruits, "mango")`:** Adds "mango" to the end of the `$fruits` array.
4. **`array_pop($fruits)`:** Removes and returns the last element ("mango") from the `$fruits` array.
5. **`sort($fruits)`:** Sorts the `$fruits` array in ascending order (alphabetically).
6. **`array_unique($fruits)`:** Removes duplicate values ("apple") from the array.

### PHP array functions, their descriptions, syntax, and examples:

| Function Name | Description | Syntax | Example |
|---|---|---|---|
| `array()` | Creates an array. | `$colors = array("red", "green", "blue");` <br> `$ages = array("John" => 30, "Jane" => 25);` | `$fruits = array("apple", "banana", "orange");` |
| `range()` | Creates an array containing a range of elements. | `$numbers = range(1, 10);` | `$numbers = range(1, 10);` |
| `count()` | Returns the number of elements in an array. | `$count = count($array);` | `$count = count($fruits);` |
| `in_array()` | Checks if a value exists in an array. | `in_array($value, $array)` | `if (in_array("banana", $fruits)) { ... }` |
| `array_search()` | Searches for a given value and returns its key. | `$key = array_search($value, $array);` | `$key = array_search("banana", $fruits);` |
| `array_key_exists()` | Checks if a specified key exists in an array. | `array_key_exists($key, $array)` | `if (array_key_exists("name", $person)) { ... }` |
| `array_push()` | Adds one or more elements to the end of an array. | `array_push($array, $value1, $value2, ...);` | `array_push($fruits, "mango");` |
| `array_pop()` | Removes and returns the last element of an array. | `$last_element = array_pop($array);` | `$last_fruit = array_pop($fruits);` |
| `array_unshift()` | Adds one or more elements to the beginning of an array. | `array_unshift($array, $value1, $value2, ...);` | `array_unshift($fruits, "grape");` |
| `array_shift()` | Removes and returns the first element of an array. | `$first_element = array_shift($array);` | `$first_fruit = array_shift($fruits);` |
| `array_splice()` | Removes or replaces a portion of an array. | `array_splice($array, $offset, $length, $replacement);` | `array_splice($fruits, 1, 1, "kiwi");` |
| `array_slice()` | Extracts a portion of an array. | `$sliced_array = array_slice($array, $offset, $length);` | `$sliced_fruits = array_slice($fruits, 1, 2);` |
| `array_chunk()` | Splits an array into chunks. | `$chunked_array = array_chunk($array, $size);` | `$chunks = array_chunk($fruits, 2);` |
| `sort()` | Sorts an array in ascending order. | `sort($array);` | `sort($fruits);` |
| `rsort()` | Sorts an array in descending order. | `rsort($array);` | `rsort($fruits);` |
| `asort()` | Sorts an array and maintains index association. | `asort($array);` | `asort($fruits);` |
| `arsort()` | Sorts an array in reverse order and maintains index association. | `arsort($array);` | `arsort($fruits);` |
| `ksort()` | Sorts an array by keys in ascending order. | `ksort($array);` | `ksort($ages);` (where $ages is an associative array) |
| `krsort()` | Sorts an array by keys in descending order. | `krsort($array);` | `krsort($ages);` |
| `natsort()` | Sorts an array using a "natural order" algorithm. | `natsort($array);` | `natsort($versions);` |
| `natcasesort()` | Sorts an array using a case-insensitive "natural order" algorithm. | `natcasesort($array);` | `natcasesort($versions);` |
| `usort()` | Sorts an array using a user-defined comparison function. | `usort($array, 'my_compare_function');` | `usort($numbers, "compare_numbers");` |
| `uasort()` | Sorts an array with a user-defined comparison function and maintains index association. | `uasort($array, 'my_compare_function');` | `uasort($ages, "compare_ages");` |
| `uksort()` | Sorts an array by keys using a user-defined comparison function. | `uksort($array, 'my_compare_keys');` | `uksort($ages, "compare_keys");` |
| `array_merge()` | Merges one or more arrays into a single array. | `$merged_array = array_merge($array1, $array2, ...);` | `$all_fruits = array_merge($fruits, $more_fruits);` |
| `array_merge_recursive()` | Merges one or more arrays into a single array recursively. | `$merged_array = array_merge_recursive($array1, $array2, ...);` | `$merged_arrays = array_merge_recursive($array1, $array2);` |
| `array_combine()` | Creates an array by using one array for keys and another for its values. | `$combined_array = array_combine($keys, $values);` | `$combined = array_combine($names, $ages);` |
| `array_intersect()` | Returns an array with the values that are present in all the given arrays. | `$intersection = array_intersect($array1, $array2, ...);` | `$common_fruits = array_intersect($fruits, $other_fruits);` |
| `array_intersect_assoc()` | Returns an array with the values that are present in all the arrays with identical keys. | `$intersection_assoc = array_intersect_assoc($array1, $array2, ...);` | `$common_data = array_intersect_assoc($data1, $data2);` |
| `array_diff()` | Returns an array with the values that are not present in the second array. | `$diff = array_diff($array1, $array2, ...);` | `$unique_to_fruits1 = array_diff($fruits1, $fruits2);` |
| `array_diff_assoc()` | Returns an array with the values that are not present in the second array, using both value and key comparisons. | `$diff_assoc = array_diff_assoc($array1, $array2, ...);` | `$unique_data = array_diff_assoc($data1, $data2);` |
| `array_unique()` | Removes duplicate values from an array. | `$unique_array = array_unique($array);` | `$unique_fruits = array_unique($fruits);` |
| `array_flip()` | Exchanges all keys with their associated values in an array. | `$flipped_array = array_flip($array);` | `$flipped_ages = array_flip($ages);` |
| `array_pad()` | Pads an array to a specified length with a value. | `$padded_array = array_pad($array, $size, $value);` | `$padded_array = array_pad($numbers, 10, 0);` |
| `array_fill()` | Fills an array with values. | `$filled_array = array_fill(0, $size, $value);` | `$filled_array = array_fill(0, 5, "hello");` |
| `array_rand()` | Returns one or more random keys from an array. | `$random_key = array_rand($array);` | `$random_fruit = $fruits[array_rand($fruits)];` |
| `array_walk()` | Applies a user-defined function to each element of an array. | `array_walk($array, 'my_callback_function');` | `array_walk($numbers, 'square');` |
| `array_map()` | Applies a callback to the elements of the given arrays. | `$new_array = array_map('my_callback_function', $array1, $array2, ...);` | `$squared_numbers = array_map('square', $numbers);` |
| `array_filter()` | Filters elements of an array using a callback function. | `$filtered_array = array_filter($array, 'my_filter_function');` | `$even_numbers = array_filter($numbers, 'is_even');` |
| `array_reduce()` | Reduces an array to a single value using a callback function. | `$sum = array_reduce


### **User-Defined Functions in PHP**

**What are User-Defined Functions?**

* **Reusable Code Blocks:** User-defined functions are blocks of code that you create to perform specific tasks within your PHP scripts. 
* **Modularity:** They help break down large programs into smaller, more manageable units.
* **Reusability:** Once defined, a function can be called multiple times throughout your script or even in other scripts, avoiding code duplication.
* **Improved Readability:** Functions make your code more organized and easier to understand.

**Syntax**

```php
function function_name(argument1, argument2, ...) {
  // Code to be executed within the function
  // ...
  return value; // Optional: Return a value
}
```

* **`function_name`:** The unique name you give to your function.
* **`argument1`, `argument2`, ...:** Parameters (optional) that the function accepts as input.
* **`return value;`:** (Optional) Specifies the value that the function should return to the calling part of the code. If no `return` statement is used, the function implicitly returns `null`.

**Example**

```php
<?php
function greet($name) {
  echo "Hello, " . $name . "!";
}

greet("John"); // Output: Hello, John!
?>
```

**Key Concepts**

* **Function Calling:** To execute a function, you "call" it by using its name followed by parentheses and any necessary arguments: `greet("John");`
* **Parameters and Arguments:** 
    - **Parameters:** Variables defined within the function's parentheses (e.g., `$name` in the `greet()` function).
    - **Arguments:** The actual values passed to the function when it's called (e.g., "John" in `greet("John");`).

**Example with Return Value**

```php
<?php
function add($x, $y) {
  return $x + $y; 
}

$sum = add(5, 3); 
echo $sum; // Output: 8
?>
```

**Benefits of Using User-Defined Functions**

* **Code Reusability:** Avoid writing the same code repeatedly.
* **Improved Readability:** Makes code easier to understand and maintain.
* **Modularity:** Breaks down complex problems into smaller, more manageable units.
* **Better Organization:** Enhances code structure and organization.
* **Code Maintainability:** Easier to find and fix errors or make modifications.


## **Loops in PHP**

Loops are a fundamental control flow structure in PHP that allow you to repeatedly execute a block of code. Here are the main types of loops in PHP:

**1. `for` Loop**

* **Syntax:**

```php
for (initialization; condition; increment/decrement) {
    // Code to be executed repeatedly
}
```

* **Explanation:**
    - **Initialization:** Executed once before the loop begins (e.g., `$i = 0;`).
    - **Condition:** Checked before each iteration. If true, the loop continues; otherwise, it terminates.
    - **Increment/Decrement:** Executed after each iteration (e.g., `$i++`).

* **Example:**

```php
for ($i = 0; $i < 5; $i++) {
    echo "Iteration: " . $i . "<br>";
}
```

**2. `while` Loop**

* **Syntax:**

```php
while (condition) {
    // Code to be executed repeatedly
}
```

* **Explanation:**
    - The condition is checked before each iteration. If true, the loop continues; otherwise, it terminates.

![image](https://github.com/user-attachments/assets/7bee37fe-2bdd-494a-8c37-41ad75f96139)


* **Example:**

```php
$count = 0;
while ($count < 5) {
    echo "Count: " . $count . "<br>";
    $count++;
}
```

**3. `do-while` Loop**

* **Syntax:**

```php
do {
    // Code to be executed repeatedly
} while (condition);
```

* **Explanation:**
    - The code within the loop is executed at least once, and then the condition is checked. If true, the loop continues; otherwise, it terminates.

* **Example:**

```php
$count = 0;
do {
    echo "Count: " . $count . "<br>";
    $count++;
} while ($count < 5);
```

**4. `foreach` Loop (for arrays)**

* **Syntax:**

```php
foreach ($array as $value) {
    // Code to be executed for each element in the array
}

// For associative arrays:
foreach ($array as $key => $value) {
    // Code to be executed for each key-value pair
}
```

* **Explanation:**
    - Iterates over each element (or key-value pair) in an array.

* **Example:**

```php
$fruits = array("apple", "banana", "orange");

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
```

**Choosing the Right Loop**

* Use a `for` loop when you know the number of iterations in advance.
* Use a `while` loop when you don't know the exact number of iterations beforehand.
* Use a `do-while` loop when you need to execute the code at least once.
* Use a `foreach` loop specifically for iterating over arrays.

