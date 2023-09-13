if you use static this keyword and arrow notation go away 
instead you do: and

public, protected private:
return $this->$total_students;

static (can be public, protected private)
return self::$total_students;

static basically can only call from class and its contents can't make new instances

basically a class that is just methods, could use it inherated in a new class or 
for something like db_connect or whatever to just run something. 


use self:: when calling og class methods
use static:: when calling inherated sublcasses, otherwise self will just call the methods out of the original class due to it being pre-procsessed. 

