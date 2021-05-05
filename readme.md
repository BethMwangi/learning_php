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
