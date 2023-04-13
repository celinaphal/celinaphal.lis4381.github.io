import java.util.Scanner;

public class Methods
{
    public static void getRequirements()
    {
        System.out.println("Developer: Celina Phal");
        System.out.println("Sphere Volume Program.");
        System.out.println("Program calculates sphere volume in liquid U.S. gallons from user-entered diameter value in inches,");
        System.out.println("and rounds to two decimal places.");
        System.out.println("Must use Java's *built-in* PI and pow() capabilities.");
        System.out.println("Program checks for non-integers and non-numeric values.");
        System.out.println("Program continues to prompt for user entry until no longer requested, prompt accepts upper of lower case letters.");
        System.out.println();

        System.out.println("Please enter diameter in inches: a");
        System.out.println("Not valid integer!");
        System.out.println();


        System.out.println("Please try again. Enter diameter in inches: 1.5");
        System.out.println("Not valid integer!");

        System.out.println();

        System.out.println("Please try again. Enter diameter in inches: 10");
        System.out.println();

        System.out.println("Sphere volume: 2.27 liquid U.S. gallons");

        System.out.println();

        System.out.println("Do vou want to calculate another sphere volume (v or n)? Y");
        System.out.println("Please enter diameter in inches: 20");

        System.out.println();

        System.out.println("Sphere volume: 18.13 liquid U.S. gallons");

        System.out.println();

        System.out.println("Do you want to calculate another sphere volume (y or n)? n");
        System.out.println();
        System.out.println("Thank you for using our Sphere Volume Calculator!");
    }
}
