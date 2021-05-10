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