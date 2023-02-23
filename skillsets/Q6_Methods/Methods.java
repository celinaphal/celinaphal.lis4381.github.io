import java.util.Scanner;

public class Methods
{

    public static void getRequirements()
    {
        System.out.println("Developer: Celina Phal");
        System.out.println("Program prompts user for the first name and age, then prints results.");
        System.out.println("Create four methods from the following requirements.");
    }

    public static void getUserInput()
    {
    String firstName="";
    int userAge = 0;
    String myStr="";
    Scanner sc = new Scanner(System.in);

    System.out.println("Enter first name: ");
    firstName=sc.next();

    System.out.println("Enter age: ");
    userAge = sc.nextInt();

    System.out.println();

    System.out.print("void method call: "); 
    myVoidMethod(firstName, userAge);

    System.out.print("value-returning method call: ");
    myStr = myValueReturningMethod(firstName, userAge);

    System.out.println(myStr);
    }

public static void myVoidMethod(String first, int age)
{
System.out.println(first + " is " +age);
return;
}

public static String myValueReturningMethod(String first, int age)
{
return first + " is " + age;
}
}