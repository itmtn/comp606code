
## encapsulation
- prevent spaghetti code
- encapsulation
- data + actions = object
- group variables (properties) and related functions (methods) into objects.  protect properties from change.
- methods have fewer parameters because object has properties    
- class is a template used to create an object
- a class has a constructor for creating an object instance

## abstraction
- analogy: dvd player - electronic complexity hidden from user internally, simply use the interface (e.g. remote) to operate
- simpler interface, reduce impact of change

## inheritance
- helps eliminate redundant code.  
- html control example - common properties and functions for html controls are groups into an ancestor object

## polymorphism
- refers to the ability of a variable, function or object to take many forms.
- consider render method for html controls example.  All controls have a render method, but what that method does in rendering the control
- is different for each control

## $this is a way to reference an instance(object) of a class from within itself, and allows to reference the instances methods of properties accessors
- private - property or method can only be accessed internally within an objects methods and constructor
- public - property or method can be accessed outside of the object using the -> operator
- protected - property or method can be accessed within the class itself and by and inheriting class or parent class

## getters and setters
- these are object methods through which a private property may be changed.  they ensure that only valid changes are allowed
- consider changing a private password property, using a setter you can check that the new password meets the required strength



