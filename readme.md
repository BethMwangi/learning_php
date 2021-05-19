### Composer basics
- Init composer `composer init`.
- Update composer `composer update`, this will create the vendor composer autoload.
- Dump autolooad `composer dump-autoload -o`.
- Namespacing using PSR-4

### Class inheritance
- child Class inherits from Parent Class `Class ChildController extends ParentController `.
- There are 3 properties methods in classes, i.e public, protected, private
  - `public` property can be accessed anywhere
  - `protected` property can be accessed with the class and classes(child) extending from that particular class
  - `private` property can only be accessed within the class

### Constructors
- A constructor allows one to initialize an object's properties when creating it `__construct()`.
- A constructor will start with two underscores (__)

### Invokers
- The invoker calls a class as function. 
`$sum = (new SumAction($this->num1, $this->num2))();` in this example, The sumAction class is invoked as a function

### static methods 
- A method that is acccessible for you without creation of an object. The static method is already intiated in memory.
- The keyword static is used when adding a static method to a class.
- Example of a static method of a class;
  
```php
public static function test()
{
  // Method implementation
}
```
 - The static method can be accessed using the (::) scope operator, i.e
   ```php
   MyClass::test();
   ```

### magic methods 
- Magic methods are special methods used to perform specific  tasks
- The magic methods start with double underscore (__) as prefix
- Examples of magic methods in PHP include;
  - ` __toString() ` method describes string representation of an object 
  - `__invoke() ` method is defined in a class that will be called while trying to call an object in a way of calling function

  #### magic methods __set(), __get(), __isset()
  __set() is called when writing data to inaccessible private , protected or non-existence property
  __get() is called when reading from inaccessible private , protected or non-existence property
  __isset() is used by calling the __isset() method on inaccessible private , protected or non-existence properties

### Facades - Design Patterns
- A Facade is one the PHP design patterns used to simplify the structure from complex class system.
- Facade classes extend the base class. 

### Callbacks
- A callback is a function which is passed as an argument into another function
- To use a function as a callback funtion, pass a string containing name of the function as a n argument of another function
- Example you can pass a callback to array_map() function to calculate a length of a string in an array

 ```php
   function myCallback($item) {
        return strlen($item);
   }
$str = ["Nairobi", "Cairo", "Helsinki"];
$lens = array_map("myCallback", $str);
echo ($len);
   ```


### PHP Traits
- Traits define a way to resue code and they reduce code duplication
- A trait reduces the limitation of single inheritace hence anabling one to reuse it freely in different classes from different folders
- Traits are defined as classes only that they declare with the keyword trait 
 ```php
   trait Hello
   {
       public function sayHello() {
       echo 'Hello';
   }
}
    class myClass {
        use hello;
        public function func() {
            echo "there";
        }
        
    }
   ```

### PHP Factory pattern
- Factory design patterns are used when dealing with multiple resources and want to implement high level abstraction.
- The main part of the code handles the business logic to address only the management of objects rather than their making. 
- Example, A car buying agency should simply track orders and not have to also deal with the details of how the cars are made.

### PHP Reflection class
- Reflection classes  make it possible to examine the properties of other classes by retrieving metadata  and reports information about classes. 
- It can also reveal all the methods and data members of a class and all the modifiers applied to them.
- Reflection is also useful for debugging code
- Example functions include the `get_class()` and `get_class_methods()`
- Example of the API has a number of different clases and one interce as shown below;



```php
    class Reflection
    interface Reflector
    class ReflectionException extends Exception;
```
  #### methods 
  - some of the methods include 
    ```php
    public getMethod ( string $name ) : ReflectionMethod
    public hasMethod ( string $name ) : bool
    public hasProperty ( string $name ) : bool
    ```

## Builder
Introduction
- In a scenario where a person needs a complete car, the user does not need to know the internal components used to build it. A car has moving parts like wheels, the body and one only needs a complete car to use it. In this case, that is how a  director gives the rules to the builder.  A constructor is needed to help assemble these components.
- A director , construct the object that is used by the Builder interface.
- You need an interface to do the build which has the knowledge on how to build. It will assemble the various components of the product.
- The builder class defines the procedures of the build, ie. set colours

#### Difference between the Interfaces and Abstract classes

- The interface uses the keyword interface to define it
- The Interfaces cannot have properties whereas abstract classes can have properties/attributes.
- Use an abstract class when you want to force developers working in your system (yourself included) to implement a set numbers of methods and you want to provide some base methods that will help them develop their child classes.
- Use an interface when you want to force developers working in your system (yourself included) to implement a set number of methods on the classes they'll be building.
- Interfaces class supports multiple Inheritance
- Abstract classes do not support multiple inheritances


